<?php

namespace App\Http\Controllers;

use App\Models\Tourism;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TourismPackageController extends Controller
{
    // view package
    public function view($id)
    {
        $model = Tourism::with(['package' => function ($query) {
            $query->orderBy('id', 'desc');
        }])->find($id);

        if(!$model)
        {
            return response()->json([
                'status' => false,
                'message' => 'not found',
            ], 404);
        }

        $packages = $model->package;

        return view('admin.tourism-package', [
            'model' => $model,
            'packages' => $packages
        ]);
    }

    // add package
    public function createPackage(Request $request, $id)
    {
        $tourism = Tourism::findOrFail($id);

        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string',
                'duration' => 'required|string',
                'thumbnail' => 'required|image|mimes:jpg,png,jpeg,gif',
                'image' => 'nullable|image|mimes:jpg,png,jpeg,gif',
                'tour_description' => 'nullable|string',
                'price' => 'nullable|string',
                // 'guest_count' => 'nullable|string',
                // 'departure_from' => 'nullable|string',
                // 'departure_time' => 'nullable|string',
                // 'arrival_to' => 'nullable|string',
                // 'arrival_time' => 'nullable|string',
                'places_covered' => 'nullable',
                'tour_highlights' => 'nullable',
                'package_includes' => 'nullable',
                'package_excludes' => 'nullable',
                'cancellation_policy' => 'nullable|string'
            ]);

            if($validator->failed())
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Inspect data for errors.',
                    'error' => 'Error: ' . $validator->errors()
                ], 422);
            }

            $thumbnailDimensions = getimagesize($request->file('thumbnail'));
            if ($thumbnailDimensions[0] !== 770 || $thumbnailDimensions[1] !== 308) {
                return response()->json([
                    'status' => false,
                    'message' => 'Review image size before upload.',
                    'error' => 'dimensionError'
                ], 422);
            }

            $originalFileName = $request->file('thumbnail')->getClientOriginalName();
            $originalFileNameWithoutExtension = pathinfo($originalFileName, PATHINFO_FILENAME);
            $filename = str_replace(' ', '-', $originalFileNameWithoutExtension) . '--' . time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $thumbnailPath = 'uploads/tourism/packages/' . $filename;
            $request->file('thumbnail')->storeAs('public/' . $thumbnailPath);

            $imagePath = null;

            if($request->hasFile('image'))
            {
                $originalFileName = $request->file('image')->getClientOriginalName();
                $originalFileNameWithoutExtension = pathinfo($originalFileName, PATHINFO_FILENAME);
                $filename = str_replace(' ', '-', $originalFileNameWithoutExtension) . '--' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $imagePath = 'uploads/tourism/packages/' . $filename;
                $request->file('image')->storeAs('public/' . $imagePath);
            }

            $packageDetails = $request->only([
                'title',
                'duration',
                'tour_description',
                'price',
                // 'guest_count',
                // 'departure_from',
                // 'departure_time',
                // 'arrival_to',
                // 'arrival_time',
                'places_covered',
                'tour_highlights',
                'package_includes',
                'package_excludes',
                'cancellation_policy'
            ]);
            $packageDetails['thumbnail'] = $thumbnailPath;
            $packageDetails['image'] = $imagePath;

            foreach (['places_covered', 'tour_highlights', 'package_includes', 'package_excludes'] as $field)
            {
                $packageDetails[$field] = json_encode(preg_split('/[,\\n]+/', $packageDetails[$field]));
            }

            $tourism->package()->create($packageDetails);

            return response()->json([
                'status' => true,
                'message' => 'Package added successfully.'
            ], 200);

        }
        catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Destination not found.',
                'error' => 'Error: ' . $e->getMessage()
            ], 404);
        }
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Internal Server Error.',
                'error' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }


    // edit package
    public function editPackage(Request $request, $tourismId, $packageId)
    {
        try {
            $tourism = Tourism::findOrFail($tourismId);

            $package = $tourism->package()->findOrFail($packageId);

            $validator = Validator::make($request->all(), [
                'title' => 'nullable|string',
                'duration' => 'nullable|string',
                'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg,gif',
                'image' => 'nullable|image|mimes:jpg,png,jpeg,gif',
                'tour_description' => 'nullable|string',
                'price' => 'nullable|string',
                // 'guest_count' => 'nullable|string',
                // 'departure_from' => 'nullable|string',
                // 'departure_time' => 'nullable|string',
                // 'arrival_to' => 'nullable|string',
                // 'arrival_time' => 'nullable|string',
                'places_covered' => 'nullable',
                'tour_highlights' => 'nullable',
                'package_includes' => 'nullable',
                'package_excludes' => 'nullable',
                'cancellation_policy' => 'nullable|string'
            ]);

            if($validator->fails())
            {
                return response()->json([
                    'status' => false,
                    'message' => 'Inspect data for errors.',
                    'error' => 'Error: ' . $validator->errors()
                ], 422);
            }

            $packageDetails = [];

            $updatableFields = [
                'title',
                'duration',
                'tour_description',
                'price',
                // 'guest_count',
                // 'departure_from',
                // 'departure_time',
                // 'arrival_to',
                // 'arrival_time',
                'places_covered',
                'tour_highlights',
                'package_includes',
                'package_excludes',
                'cancellation_policy'
            ];

            foreach ($updatableFields as $field)
            {
                if($request->filled($field))
                {
                    $packageDetails[$field] = $request->input($field);
                }
            }

            if($request->hasFile('thumbnail'))
            {
                $thumbnailDimensions = getimagesize($request->file('thumbnail'));
                if ($thumbnailDimensions[0] !== 770 || $thumbnailDimensions[1] !== 308) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Review image size before upload.',
                        'error' => 'dimensionError'
                    ], 422);
                }
                
                $originalFileName = $request->file('thumbnail')->getClientOriginalName();
                $originalFileNameWithoutExtension = pathinfo($originalFileName, PATHINFO_FILENAME);
                $filename = str_replace(' ', '-', $originalFileNameWithoutExtension) . '--' . time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
                $thumbnailPath = 'uploads/tourism/packages/' . $filename;
                $request->file('thumbnail')->storeAs('public/' . $thumbnailPath);
                $packageDetails['thumbnail'] = $thumbnailPath;
            }

            if($request->hasFile('image'))
            {
                $originalFileName = $request->file('image')->getClientOriginalName();
                $originalFileNameWithoutExtension = pathinfo($originalFileName, PATHINFO_FILENAME);
                $filename = str_replace(' ', '-', $originalFileNameWithoutExtension) . '--' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $imagePath = 'uploads/tourism/packages/' . $filename;
                $request->file('image')->storeAs('public/' . $imagePath);
                $packageDetails['image'] = $imagePath;
            }

            foreach (['places_covered', 'tour_highlights', 'package_includes', 'package_excludes'] as $field)
            {
                if(isset($packageDetails[$field]))
                {
                    $packageDetails[$field] = json_encode(preg_split('/[,\\n]+/', $packageDetails[$field]));
                }
            }

            $package->update($packageDetails);

            return response()->json([
                'status' => true,
                'message' => 'Package updated successfully.'
            ], 200);
        }
        catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Destination or Package not found.',
                'error' => 'Error: ' . $e->getMessage()
            ], 404);
        }
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Internal Server Error.',
                'error' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    // delete package
    public function deletePackage($tourismId, $packageId)
    {
        try {
            $tourism = Tourism::findOrFail($tourismId);

            $package = $tourism->package()->findOrFail($packageId);

            $package->delete();

            return response()->json([
                'status' => true,
                'message' => 'Package deleted.'
            ], 200);
        }
        catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Package does not exist',
                'error' => 'Error: ' . $e->getMessage()
            ], 404);
        }
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Internal Server Error',
                'error' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function PHPSTORM_META\map;

class ServiceController extends Controller
{
    // view services
    public function view()
    {
        $services = Service::orderBy('id', 'desc')->get();

        return view('admin.service', compact('services'));
    }

    // add service
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service' => 'required|string',
            'description' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpg,png,jpeg,gif|dimensions:width=370,height=370'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => false,
                'message' => 'Inspect data for errors.',
                'error' => 'Error: ' . $validator->errors()->toJson()
            ], 422);
        }

        try
        {
            $thumbnailDimensions = getimagesize($request->file('thumbnail'));
            if ($thumbnailDimensions[0] !== 370 || $thumbnailDimensions[1] !== 370) {
                return response()->json([
                    'status' => false,
                    'message' => 'Review image size before upload.',
                    'error' => 'dimensionError'
                ], 422);
            }

            $originalFileName = $request->file('thumbnail')->getClientOriginalName();
            $originalFileNameWithoutExtension = pathinfo($originalFileName, PATHINFO_FILENAME);
            $filename = str_replace(' ', '-', $originalFileNameWithoutExtension) . '--' . time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $imagePath = 'uploads/services/' . $filename;
            $request->file('thumbnail')->storeAs('public/' . $imagePath);

            $service = new Service();

            $service->service = $request->input('service');
            $service->description = $request->input('description');
            $service->thumbnail = $imagePath;

            $service->save();

            return response()->json([
                'status' => true,
                'message' => 'Service added.'
            ], 200);
        }
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Internal Server Error',
                'error' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    public function edit(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'service' => 'nullable|string',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,gif|dimensions:width=370,height=370'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => false,
                'message' => 'Inspect data for errors.',
                'error' => 'Error: ' . $validator->errors()->toJson()
            ], 422);
        }

        try {
            
            $updatedData = [];

            $updatableField = [
                'service',
                'description'
            ];

            foreach  ($updatableField as $data)
            {
                if($request->filled($data))
                {
                    $updatedData[$data] = $request->input($data);
                }
            }

            if($request->hasFile('thumbnail'))
            {
                $originalFileName = $request->file('thumbnail')->getClientOriginalName();
                $originalFileNameWithoutExtension = pathinfo($originalFileName, PATHINFO_FILENAME);
                $filename = str_replace(' ', '-', $originalFileNameWithoutExtension) . '--' . time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
                $imagePath = 'uploads/services/' . $filename;
                $request->file('thumbnail')->storeAs('public/' . $imagePath);
                $updatedData['thumbnail'] = $imagePath;
            }

            
            $service->update($updatedData);

            return response()->json([
                'status' => true,
                'message' => 'Service Updated.'
            ]);
        }
        catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Service not found.',
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

    // delete service
    public function delete($id)
    {
        try
        {
            $service = Service::findOrFail($id);

            $service->delete();

            return response()->json([
                'status' => true,
                'message' => 'Service deleted.'
            ], 200);
        }
        catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Service not found.',
                'error' => 'Error: ' , $e->getMessage()
            ], 404);
        }
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Internal Server Error.',
                'error' => 'Error: ' , $e->getMessage()
            ], 500);
        }
    }
    
}

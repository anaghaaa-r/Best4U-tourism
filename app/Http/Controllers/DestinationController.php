<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DestinationController extends Controller
{

    // view destination
    public function view()
    {
        $destinations = Destination::orderBy('id', 'desc')->get();
        return view('admin.destination', compact('destinations'));
    }

    // add destination
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|dimensions:width=370,height=360'
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

            $originalFileName = $request->file('image')->getClientOriginalName();
            $originalFileNameWithoutExtension = pathinfo($originalFileName, PATHINFO_FILENAME);
            $filename = str_replace(' ', '-', $originalFileNameWithoutExtension) . '--' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = 'uploads/destinations/' . $filename;
            $request->file('image')->storeAs('public/' . $imagePath);

            $destination = new Destination();
            $destination->title = $request->input('title');
            $destination->image = $imagePath;
            $destination->save();

            return response()->json([
                'status' => true,
                'message' => 'Destination added.'
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

    // update destination
    public function edit(Request $request, $id)
    {

        $destination = Destination::find($id);

        if(!$destination)
        {
            return response()->json([
                'status' => false,
                'message' => 'Destination not found, try again',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|dimensions:width=370,height=360'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => false,
                'message' => 'Inspect data for errors..',
                'error' => 'Error: ' . $validator->errors()->toJson()
            ], 422);
        }

        try {
            $updatedData = [];
            
            if($request->filled('title'))
            {
                $updatedData['title'] = $request->input('title');
            }

            if($request->hasFile('image'))
            {
                $originalFileName = $request->file('image')->getClientOriginalName();
                $originalFileNameWithoutExtension = pathinfo($originalFileName, PATHINFO_FILENAME);
                $filename = str_replace(' ', '-', $originalFileNameWithoutExtension) . '--' . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $imagePath = 'uploads/destinations/' . $filename;
                $request->file('image')->storeAs('public/' . $imagePath);
                $updatedData['image'] = $imagePath;
            }

            $destination->update($updatedData);

            return response()->json([
                'status' => true,
                'message' => 'Successfully updated.',
            ], 200);
        }
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Internal Server Error.',
                'error' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    // delete destination
    public function delete($id)
    {
        try {
            $destination = Destination::findOrFail($id);

            $destination->package()->where('destination_id', $id)->delete();

            $destination->delete();

            return response()->json([
                'status' => true,
                'message' => 'Destination deleted successfully.'
            ], 200);
        }
        catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Destination not found.',
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

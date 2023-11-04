<?php

namespace App\Http\Controllers;

use App\Models\Tourism;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TourismController extends Controller
{


    // add tourism
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string'
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
            $tourism = new Tourism();
            $tourism->title = $request->input('title');
            $tourism->save();

            return response()->json([
                'status' => true,
                'message' => 'Tourism Type added.'
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

    // update tourism
    public function edit(Request $request, $id)
    {

        $tourism = Tourism::find($id);

        if(!$tourism)
        {
            return response()->json([
                'status' => false,
                'message' => 'Tourism type not found, try again',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'nullable|string'
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

            $tourism->update($updatedData);

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

    // delete tourism
    public function delete($id)
    {
        try {
            $tourism = Tourism::findOrFail($id);

            $tourism->package()->where('tourism_id', $id)->delete();

            $tourism->delete();

            return response()->json([
                'status' => true,
                'message' => 'Tourism type deleted successfully.'
            ], 200);
        }
        catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Tourism type not found.',
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

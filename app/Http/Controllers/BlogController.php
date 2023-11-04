<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function PHPSTORM_META\map;

class BlogController extends Controller
{
    public function view()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('admin.blogs', [
            'blogs' => $blogs
        ]);
    }

    public function viewBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog-details', [
            'blog' => $blog
        ]);
    }


    // create
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png,gif|dimensions:width=440,height=300',
            'title' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'preview_text' => 'nullable|string',
            'content' => 'required|string',
            'gallery_image' => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'gallery_image_subtitle' => 'nullable|string',
            'video_url' => 'nullable|string',
            'video_subtitle' => 'nullable|string',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => false,
                'message' => 'Inspect data for errors.',
                'error' => 'Error: ' . $validator->errors()
            ], 422);
        }

        try {
            $blog = new Blog();
            
            $thumbnailName = $request->file('thumbnail')->hashName();
            $thumbnailPath = 'uploads/blogs/thumbnail/' . $thumbnailName;
            $request->file('thumbnail')->storeAs('public/' . $thumbnailPath);

            $blog->thumbnail = $thumbnailPath;

            $blog->title = $request->title;

            if($request->filled('preview_text'))
            {
                $blog->preview_text = $request->preview_text;
            }

            if($request->hasFile('image'))
            {
                $imageName = $request->file('image')->hashName();
                $imagePath = 'uploads/blogs/image/' . $imageName;
                $request->file('image')->storeAs('public/' . $imagePath);

                $blog->image = $imagePath;
            }

            $blog->content = $request->content;

            if($request->hasFile('gallery_image'))
            {
                $galleryName = $request->file('gallery_image')->hashName();
                $galleryPath = 'uploads/blogs/gallery/' . $galleryName;
                $request->file('gallery_image')->storeAs('public/' . $galleryPath);

                $blog->gallery_image = $galleryPath;
            }

            $sometimes = [
                'gallery_image_subtitle',
                'video_url',
                'video_subtitle'
            ];

            foreach ($sometimes as $field)
            {
                if($request->filled($field))
                {
                    $blog->$field = $request->input($field);
                }
            }

            $blog->save();

            return response()->json([
                'status' => true,
                'message' => 'Blog Added.'
            ], 200);

        }
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid Server Error.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // update preview

    public function updatePreview(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'nullable|string',
            'preview_text' => 'nullable|string',
            'thumbnail' => 'nullable|mimes:jpg,jpeg,png,gif|dimensions:width=440,height=300'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => false,
                'message' => 'Check uploaded image and submit again.',
                'error' => 'Error: ' . $validator->errors()
            ], 422);
        }

        try {
            $blog = Blog::findOrFail($id);

            $updatedData = [];

            $updatables = [
                'title',
                'preview_text'
            ];

            foreach ($updatables as $data)
            {
                if($request->filled($data))
                {
                    $updatedData[$data] = $request->$data;
                }
            }

            if ($request->hasFile('thumbnail'))
            {
                $thumbnailName = $request->file('thumbnail')->hashName();
                $thumbnailPath = 'uploads/blogs/thumbnail/' . $thumbnailName;
                $request->file('thumbnail')->storeAs('public/' . $thumbnailPath);
                $updatedData['thumbnail'] = $thumbnailPath;
            }

            $blog->update($updatedData);

            return response()->json([
                'status' => true,
                'message' => 'Blog details updated'
            ], 200);
        }
        catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Blog not found.',
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

    // update
    public function updateDetails(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'nullable|string',
            'image' => 'nullable|mimes:jpg,jpeg,png,gif',
            'content' => 'nullable|string',
            'gallery_image' => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'gallery_image_subtitle' => 'nullable|string',
            'video_url' => 'nullable|string',
            'video_subtitle' => 'nullable|string',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => false,
                'message' => 'Check data and submit again.',
                'error' => 'Error: ' . $validator->errors()
            ], 422);
        }

        try {
            $blog = Blog::findOrFail($id);

            $updatedData = [];

            $updatables = [
                'title',
                'content',
                'gallery_image_subtitle',
                'video_url',
                'video_subtitle'
            ];

            foreach ($updatables as $data)
            {
                if($request->filled($data))
                {
                    $updatedData[$data] = $request->$data;
                }
            }

            if ($request->hasFile('image'))
            {
                $imageName = $request->file('image')->hashName();
                $imagePath = 'uploads/blogs/image/' . $imageName;
                $request->file('image')->storeAs('public/' . $imagePath);
                $updatedData['image'] = $imagePath;
            }

            if($request->hasFile('gallery_image'))
            {
                $galleryName = $request->file('gallery_image')->hashName();
                $galleryPath = 'uploads/blogs/gallery/' . $galleryName;
                $request->file('gallery_image')->storeAs('public/' . $galleryPath);
                
                $updatedData['gallery_image'] = $galleryPath;
            }

            $blog->update($updatedData);

            return response()->json([
                'status' => true,
                'message' => 'Blog updated'
            ], 200);
        }
        catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Blog not found.',
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

    // delete

    public function delete($id){
        try{
        $table = Blog::findorfail($id);
        $table->delete();
        return response()->json([
            'status'=>true,
            'message'=>'blog deleted successfully'
            
        ],200);
    }
    catch(ModelNotFoundException $e){
        return response()->json([
            'status'=>false,
            'message'=>'Blog not found',
            'error'=> $e->getMessage()
        ],404);
    }
    catch(\Exception $e){
        return response()->json([
            'status'=>false,
            'message'=>'Internal Server Error',
            'error'=> $e->getMessage()
        ],400);
    }
    }
}

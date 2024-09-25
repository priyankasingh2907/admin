<?php

namespace App\Http\Controllers;

use App\Models\Admin\gallery;
use App\Http\Requests\StoregalleryRequest;
use App\Http\Requests\UpdategalleryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $galleries= gallery::latest();

        if(!empty($request->get('keyword'))){
            $galleries = gallery::where('title', 'LIKE', '%'.$request->get('keyword').'%');

        }
        $galleries= $galleries->paginate(8);
        // dd($galleries);
        
        return view('admin.gallery.list',['galleries'=>$galleries]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            
        ]);
        if ($validator->passes()) {

            $img = $request->image;
            $ext = $img->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;
            $img->move(public_path() . '/uploads/galleries', $imageName);


            $gallery = new gallery();
            $gallery->title = $request->title;
            $gallery->image = $imageName;
            $gallery->status = $request->status;
            $gallery->save();

            Session()->flash('success','Gallery added successfully..');
            return response()->json([
                'status' => true,
                'message' => 'Data saved successfully',
                'data' => $request->all(),

            ]);
        } else {
            // Return with error message
            return response()->json([
                'status' => false,
                'message' => $validator->errors(),

            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id,Request $request)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id,Request $request)
    {
        $galleries = gallery::find($id);
        return view('admin.gallery.edit', compact('galleries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $gallery = gallery::find($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
        ]);
        if ($validator->passes()) {
            $img = $request->image;
            $ext = $img->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;
            $img->move(public_path() . '/uploads/galleries', $imageName);

         
            $gallery->title = $request->title;
            $gallery->image = $imageName;
            $gallery->status = $request->status;
            $gallery->save();

            Session()->flash('success','galleries updated successfully..');
            return response()->json([
                'status' => true,
                'message' => 'Data updated successfully',
                'data' => $request->all(),

            ]);
        } else {
            // Return with error message
            return response()->json([
                'status' => false,
                'message' => $validator->errors(),

            ]);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destory( $id)
    {
        $galleries = gallery::find($id);
        $galleries->delete();
      return back()->with('success','Gallery deleted successfully..');
    }

}

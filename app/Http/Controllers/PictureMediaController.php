<?php

namespace App\Http\Controllers;

use App\Models\Admin\pictureMedia;
use App\Http\Requests\StorepictureMediaRequest;
use App\Http\Requests\UpdatepictureMediaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PictureMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pictureMedia= pictureMedia::latest();

        if(!empty($request->get('keyword'))){
            $pictureMedia = pictureMedia::where('title', 'LIKE', '%'.$request->get('keyword').'%');

        }
        $pictureMedia= $pictureMedia->paginate(8);
        
        return view('admin.print.list',['pictureMedias'=>$pictureMedia]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.print.create');
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
            $img->move(public_path() . '/uploads/pictureMedia', $imageName);


            $pictureMedia = new pictureMedia();
            $pictureMedia->title = $request->title;
            $pictureMedia->image = $imageName;
            $pictureMedia->status = $request->status;
            $pictureMedia->save();

            Session()->flash('success','pictureMedia added successfully..');
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
        $pictureMedias = pictureMedia::find($id);
        return view('admin.print.edit', compact('pictureMedias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $pictureMedias = pictureMedia::find($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            
        ]);
        if ($validator->passes()) {
            $img = $request->image;
            $ext = $img->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;
            $img->move(public_path() . '/uploads/pictureMedia', $imageName);

         
            $pictureMedias->title = $request->title;
            $pictureMedias->image = $imageName;
            $pictureMedias->status = $request->status;
            $pictureMedias->save();

            Session()->flash('success','pictureMedias updated successfully..');
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
        $pictureMedias = pictureMedia::find($id);
        $pictureMedias->delete();
      return back()->with('success','pictureMedias deleted successfully..');
    }

}
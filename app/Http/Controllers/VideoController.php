<?php

namespace App\Http\Controllers;

use App\Models\Admin\Video;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $Video= Video::latest();

        if(!empty($request->get('keyword'))){
            $Video = Video::where('title', 'LIKE', '%'.$request->get('keyword').'%');

        }
        $Video= $Video->paginate(8);
        
        return view('admin.Video.list',['Video'=>$Video]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Video.create');
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
            $img->move(public_path() . '/uploads/Videos', $imageName);


            $Videos = new Video();
            $Videos->title = $request->title;
            $Videos->image = $imageName;
            $Videos->status = $request->status;
            $Videos->save();

            Session()->flash('success','Video added successfully..');
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
        $Videos = Video::find($id);
        return view('admin.video.edit', compact('Videos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $Videos = Video::find($id);
        $validator = Validator::make($request->all(), [
          'title' => 'required|max:255',
            
        ]);
        if ($validator->passes()) {
            $img = $request->image;
            $ext = $img->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;
            $img->move(public_path() . '/uploads/Videos', $imageName);

         
            $Videos->title = $request->title;
            $Videos->image = $imageName;
            $Videos->status = $request->status;
            $Videos->save();

            Session()->flash('success','Videos updated successfully..');
            return response()->json([
                'status' => true,
                'message' => 'Videos updated successfully',
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
        $brands = Video::find($id);
        $brands->delete();
      return back()->with('success','brands deleted successfully..');
    }

}

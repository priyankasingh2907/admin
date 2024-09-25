<?php

namespace App\Http\Controllers;

use App\Models\Admin\slider;
use App\Http\Requests\StoresliderRequest;
use App\Http\Requests\UpdatesliderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $slider= slider::latest();

        if(!empty($request->get('keyword'))){
            $slider = slider::where('title', 'LIKE', '%'.$request->get('keyword').'%');

        }
        $slider= $slider->paginate(8);
        
        return view('admin.slider.list',['slider'=>$slider]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
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
            $img->move(public_path() . '/uploads/slider', $imageName);


            $slider = new slider();
            $slider->title = $request->title;
            $slider->image = $imageName;
            $slider->status = $request->status;
            $slider->save();

            Session()->flash('success','slider added successfully..');
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
        $slider = slider::find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $slider = slider::find($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            
        ]);
        if ($validator->passes()) {
            $img = $request->image;
            $ext = $img->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;
            $img->move(public_path() . '/uploads/slider', $imageName);

         
            $slider->name = $request->name;
            $slider->image = $imageName;
            $slider->status = $request->status;
            $slider->save();

            Session()->flash('success','slider updated successfully..');
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
        $slider = slider::find($id);
        $slider->delete();
      return back()->with('success','slider deleted successfully..');
    }

}

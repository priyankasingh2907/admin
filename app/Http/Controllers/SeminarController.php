<?php

namespace App\Http\Controllers;

use App\Models\Admin\seminar;
use App\Http\Requests\StoreseminarRequest;
use App\Http\Requests\UpdateseminarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $seminar= seminar::latest();

        if(!empty($request->get('keyword'))){
            $seminar = seminar::where('title ', 'LIKE', '%'.$request->get('keyword').'%');

        }
        $seminar= $seminar->paginate(8);
        
        // dd($seminar);
        view('admin.seminar.list',['seminars'=>$seminar]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.seminar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            
        ]);
        if ($validator->passes()) {

            $img = $request->image;
            $ext = $img->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;
            $img->move(public_path() . '/uploads/seminars', $imageName);


            $seminar = new seminar();
            $seminar->title = $request->title;
            $seminar->image = $imageName;
            $seminar->status = $request->status;
            $seminar->save();

            Session()->flash('success','Seminar added successfully..');
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
        $seminars = seminar::find($id);
        return view('admin.seminar.edit', compact('seminars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $seminar = seminar::find($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            
        ]);
        if ($validator->passes()) {
            $img = $request->image;
            $ext = $img->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;
            $img->move(public_path() . '/uploads/brands', $imageName);

         
            $seminar->title = $request->title;
            $seminar->image = $imageName;
            $seminar->status = $request->status;
            $seminar->save();
            Session()->flash('success','Seminar updated successfully..');
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
        $seminar = seminar::find($id);
        $seminar->delete();
      return back()->with('success','seminar deleted successfully..');
    }

}

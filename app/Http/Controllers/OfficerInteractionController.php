<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\officerInteraction;
use App\Http\Requests\StoreofficerInteractionRequest;
use App\Http\Requests\UpdateofficerInteractionRequest;

class OfficerInteractionController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index(Request $request)
    {
        $officerInteraction= officerInteraction::latest();

        if(!empty($request->get('keyword'))){
            $officerInteraction = officerInteraction::where('title', 'LIKE', '%'.$request->get('keyword').'%');

        }
        $officerInteraction= $officerInteraction->paginate(8);
        
        return view('admin.officerInteraction.list',['officerInteraction'=>$officerInteraction]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.officerInteraction.create');
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
            $img->move(public_path() . '/uploads/officerInteraction', $imageName);


            $officerInteraction = new officerInteraction();
            $officerInteraction->title = $request->title;
            $officerInteraction->image = $imageName;
            $officerInteraction->status = $request->status;
            $officerInteraction->Feature = $request->Feature;

            $officerInteraction->date = $request->date;

            $officerInteraction->save();

            Session()->flash('success','officerInteraction added successfully..');
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
        $officerInteraction = officerInteraction::find($id);
        return view('admin.officerInteraction.edit', compact('officerInteraction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $officerInteraction = officerInteraction::find($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            
        ]);
        if ($validator->passes()) {
            $img = $request->image;
            $ext = $img->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;
            $img->move(public_path() . '/uploads/officerInteraction', $imageName);

            $officerInteraction->title = $request->title;
            $officerInteraction->image = $imageName;
            $officerInteraction->status = $request->status;
            $officerInteraction->Feature = $request->Feature;

            $officerInteraction->date = $request->date;

            $officerInteraction->save();

            Session()->flash('success','officerInteraction updated successfully..');
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
        $brands = officerInteraction::find($id);
        $brands->delete();
      return back()->with('success','officerInteraction deleted successfully..');
    }

}

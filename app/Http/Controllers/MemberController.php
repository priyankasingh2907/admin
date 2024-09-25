<?php

namespace App\Http\Controllers;

use App\Models\Admin\member;
use App\Http\Requests\StorememberRequest;
use App\Http\Requests\UpdatememberRequest;
use App\Models\Admin\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $member= member::latest();

        if(!empty($request->get('keyword'))){
            $member = member::where('name', 'LIKE', '%'.$request->get('keyword').'%');

        }
        $member= $member->paginate(8);

        
        return view('admin.member.list',['members'=>$member]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = categories::latest();
        return view('admin.member.create',['categories'=>$category]);
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
            $img->move(public_path() . '/uploads/members', $imageName);


            $member = new member();
            $member->name = $request->name;
            $member->Feature = $request->Feature;
            $member->category = $request->category;
            $member->subCategory = $request->subCategory;

            $member->image = $imageName;
            $member->status = $request->status;
            $member->save();

            Session()->flash('success','Member added successfully..');
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
        $members = member::find($id);
        return view('admin.member.edit', compact('members'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $member = member::find($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            
        ]);
        if ($validator->passes()) {
            $img = $request->image;
            $ext = $img->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;
            $img->move(public_path() . '/uploads/members', $imageName);

            $member->name = $request->name;
            $member->Feature = $request->Feature;
            $member->category = $request->category;
            $member->subCategory = $request->subCategory;

            $member->image = $imageName;
            $member->status = $request->status;
            $member->save();

            Session()->flash('success','member updated successfully..');
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
        $member = member::find($id);
        $member->delete();
      return back()->with('success','member deleted successfully..');
    }

}

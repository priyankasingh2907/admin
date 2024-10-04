<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



use App\Models\admin\contact;
use App\Http\Requests\StorecontactRequest;
use App\Http\Requests\UpdatecontactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $contact= contact::latest();

        if(!empty($request->get('keyword'))){
            $contact = contact::where('title', 'LIKE', '%'.$request->get('keyword').'%');

        }
        $contact= $contact->paginate(8);

        
        return view('admin.contact.list',['contacts'=>$contact]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contact = contact::latest();
        return view('admin.contact.create',['contact'=>$contact]);
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

          

            $contact = new contact();
            $contact->title = $request->title;
            $contact->Feature = $request->Feature;
            $contact->address = $request->address;
            $contact->phone = $request->phone;
            $contact->email = $request->email;
            $contact->status = $request->status;
            $contact->save();

            Session()->flash('success','contact added successfully..');
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
        $contacts = contact::find($id);
        return view('admin.contact.edit', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $contact = contact::find($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            
        ]);
        if ($validator->passes()) {

            $contact->title = $request->title;
            $contact->Feature = $request->Feature;
            $contact->address = $request->address;
            $contact->phone = $request->phone;
            $contact->email = $request->email;
            $contact->status = $request->status;
            $contact->save();

            
            Session()->flash('success','contact updated successfully..');
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
        $contact = contact::find($id);
        $contact->delete();
      return back()->with('success','contact deleted successfully..');
    }

}

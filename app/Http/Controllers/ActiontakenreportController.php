<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\actiontakenreport;
use App\Http\Requests\StoreactiontakenreportRequest;
use App\Http\Requests\UpdateactiontakenreportRequest;

class ActiontakenreportController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index(Request $request)
    {
        $actiontakenreport= actiontakenreport::latest();

        if(!empty($request->get('keyword'))){
            $actiontakenreport = actiontakenreport::where('title', 'LIKE', '%'.$request->get('keyword').'%');

        }
        $actiontakenreport= $actiontakenreport->paginate(8);
        
        return view('admin.actiontakenreport.list',['actiontakenreport'=>$actiontakenreport]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.actiontakenreport.create');
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
            $img->move(public_path() . '/uploads/actiontakenreport', $imageName);


            $actiontakenreport = new actiontakenreport();
            $actiontakenreport->title = $request->title;
            $actiontakenreport->image = $imageName;
            $actiontakenreport->status = $request->status;
            $actiontakenreport->Feature = $request->Feature;


            $actiontakenreport->save();

            Session()->flash('success','actiontakenreport added successfully..');
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
        $actiontakenreport = actiontakenreport::find($id);
        return view('admin.actiontakenreport.edit', compact('actiontakenreport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $actiontakenreport = actiontakenreport::find($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            
        ]);
        if ($validator->passes()) {
            $img = $request->image;
            $ext = $img->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;
            $img->move(public_path() . '/uploads/actiontakenreport', $imageName);

            $actiontakenreport->title = $request->title;
            $actiontakenreport->image = $imageName;
            $actiontakenreport->status = $request->status;
            $actiontakenreport->Feature = $request->Feature;


            $actiontakenreport->save();

            Session()->flash('success','actiontakenreport updated successfully..');
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
        $brands = actiontakenreport::find($id);
        $brands->delete();
      return back()->with('success','actiontakenreport deleted successfully..');
    }

}

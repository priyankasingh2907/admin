<?php

namespace App\Http\Controllers;

use App\Models\Admin\news;
use App\Http\Requests\StorenewsRequest;
use App\Http\Requests\UpdatenewsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $news= news::latest();

        if(!empty($request->get('keyword'))){
            $news = news::where('title', 'LIKE', '%'.$request->get('keyword').'%');

        }
        $news= $news->paginate(8);
        
        return view('admin.news.list',['newss'=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
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
            $img->move(public_path() . '/uploads/news', $imageName);


            $news = new news();
            $news->title = $request->title;
            $news->image = $imageName;
            $news->status = $request->status;
            $news->Feature = $request->Feature;

            $news->date = $request->date;

            $news->save();

            Session()->flash('success','news added successfully..');
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
        $news = news::find($id);
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $news = news::find($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            
        ]);
        if ($validator->passes()) {
            $img = $request->image;
            $ext = $img->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;
            $img->move(public_path() . '/uploads/news', $imageName);

            $news->title = $request->title;
            $news->image = $imageName;
            $news->status = $request->status;
            $news->Feature = $request->Feature;

            $news->date = $request->date;

            $news->save();

            Session()->flash('success','news updated successfully..');
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
        $brands = news::find($id);
        $brands->delete();
      return back()->with('success','news deleted successfully..');
    }

}

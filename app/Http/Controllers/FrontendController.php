<?php

namespace App\Http\Controllers;

use App\Models\Admin\slider as AdminSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\slider;


class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $slider= AdminSlider::latest();

        if(!empty($request->get('keyword'))){
            $slider = AdminSlider::where('title', 'LIKE', '%'.$request->get('keyword').'%');

        }
        $slider= $slider->paginate(8);
        
        return view('frontend.layout.app',['slider'=>$slider]);
    }

   

}

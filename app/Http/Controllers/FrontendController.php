<?php

namespace App\Http\Controllers;

use App\Models\admin\actiontakenreport;
use App\Models\admin\awards;
use App\Models\admin\contact;
use App\Models\admin\electronicmedia;
use App\Models\Admin\gallery;
use App\Models\Admin\member;
use App\Models\Admin\news;
use App\Models\admin\officerInteraction;
use App\Models\Admin\pictureMedia;
use App\Models\admin\policeletter;
use App\Models\Admin\seminar;
use App\Models\Admin\slider as AdminSlider;
use App\Models\Admin\Video;
use App\Models\admin\webmedia;
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
        $sliders= AdminSlider::latest()->get();

        if(!empty($request->get('keyword'))){
            $slider = AdminSlider::where('title', 'LIKE', '%'.$request->get('keyword').'%');

        }
        // $sliders= $slider->paginate(8);/


        $members = member::skip(0)->take(4)->get();
        $Galleries = gallery::skip(0)->take(6)->get();
        $news = news::skip(0)->take(6)->get();
        $prints = pictureMedia::skip(0)->take(6)->get();
        $seminars = seminar::all();
        $videos = Video::skip(0)->take(6)->get();

        
        return view('frontend.home.home',['sliders'=>$sliders ,'members'=>$members, 'Galleries'=>$Galleries , 'news'=>$news, 'prints'=>$prints, 'videos'=>$videos , 'seminars'=>$seminars]);
    }

   public function contacts(){
    $contacts = contact::all();

// dd($contacts);
        
    return view('frontend.home.contact.contact',['contacts'=>$contacts]);

   }

   public function media(){
    $medias = pictureMedia::all();

    return view('frontend.home.gallery.printmedia',['medias'=>$medias]);

   }

   

   public function galleryimage(){
    $galleries = gallery::all();

    return view('frontend.home.gallery.galleryimage',['galleries'=>$galleries]);

   }
      
   public function officerinteraction(){
    $officerinteraction = officerInteraction::all();

    return view('frontend.home.gallery.officerinteraction',['officerinteraction'=>$officerinteraction]);

   }
   
   public function actiontakenreport(){
    $actiontakenreport = actiontakenreport::all();

    return view('frontend.home.gallery.actiontakenreport',['actiontakenreport'=>$actiontakenreport]);

   }
   

   public function electronicmedia(){
    $electronicmedia = electronicmedia::all();

    return view('frontend.home.gallery.electronicmedia',['electronicmedia'=>$electronicmedia]);

   }
   

   public function webmedia(){
    $webmedia = webmedia::all();

    return view('frontend.home.gallery.webmedia',['webmedia'=>$webmedia]);

   }

   public function policeletter(){
    $policeletter = policeletter::all();

    return view('frontend.home.gallery.policeletter',['policeletter'=>$policeletter]);

   }
   public function galleryvideo(){
    $galleryvideo = Video::all();

    return view('frontend.home.gallery.galleryvideo',['galleryvideo'=>$galleryvideo]);

   }

   public function awards(){
    $awards = awards::all();

    return view('frontend.home.awards.awards',['awards'=>$awards]);

   }
   public function seminar(){
    $seminar = seminar::all();

    return view('frontend.home.awards.seminar',['seminar'=>$seminar]);

   }

}

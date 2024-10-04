<?php

use App\Http\Controllers\AboutDownloadController;
use App\Http\Controllers\ActiontakenreportController;
use App\Http\Controllers\admin\authController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OfficerInteractionController;
use App\Http\Controllers\PictureMediaController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'admin'],function(){
    Route::group(['middleware'=>'admin.guest'],function(){
//login Route
Route::get('/login',[authController::class,'login'])->name('admin.login');
Route::post('/authenticate',[authController::class,'authenticate'])->name('admin.authenticate');

 });
    Route::group(['middleware'=>'admin.auth'],function(){
//dashboard Route
Route::get('/dashboard',[authController::class,'dashboard'])->name('admin.dashboard');
Route::get('/logout',[authController::class,'logout'])->name('dashboard.logout');


//user Route 
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/create', [AdminController::class, "create"])->name('admin.create');
Route::post('/admin/store', [AdminController::class, "store"])->name('admin.store');
Route::get('/admin/edit/{id}', [AdminController::class, "edit"])->name('admin.edit');
Route::post('/admin/update/{id}', [AdminController::class, "update"])->name('admin.update');
Route::get('/admin/delete/{id}', [AdminController::class, "destory"])->name('admin.delete');


//slider Route 
Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
Route::get('/slider/create', [SliderController::class, "create"])->name('slider.create');
Route::post('/slider/store', [SliderController::class, "store"])->name('slider.store');
Route::get('/slider/edit/{id}', [SliderController::class, "edit"])->name('slider.edit');
Route::post('/slider/update/{id}', [SliderController::class, "update"])->name('slider.update');
Route::get('/slider/delete/{id}', [SliderController::class, "destory"])->name('slider.delete');

//member Route 
Route::get('/member', [MemberController::class, 'index'])->name('member.index');
Route::get('/member/create', [MemberController::class, "create"])->name('member.create');
Route::post('/member/store', [MemberController::class, "store"])->name('member.store');
Route::get('/member/edit/{id}', [MemberController::class, "edit"])->name('member.edit');
Route::post('/member/update/{id}', [MemberController::class, "update"])->name('member.update');
Route::get('/member/delete/{id}', [MemberController::class, "destory"])->name('member.delete');

//news Route 
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/create', [NewsController::class, "create"])->name('news.create');
Route::post('/news/store', [NewsController::class, "store"])->name('news.store');
Route::get('/news/edit/{id}', [NewsController::class, "edit"])->name('news.edit');
Route::post('/news/update/{id}', [NewsController::class, "update"])->name('news.update');
Route::get('/news/delete/{id}', [NewsController::class, "destory"])->name('news.delete');

//Route officerInteraction
Route::get('/officerInteraction', [OfficerInteractionController::class, 'index'])->name('officerInteraction.index');
Route::get('/officerInteraction/create', [OfficerInteractionController::class, "create"])->name('officerInteraction.create');
Route::post('/officerInteraction/store', [OfficerInteractionController::class, "store"])->name('officerInteraction.store');
Route::get('/officerInteraction/edit/{id}', [OfficerInteractionController::class, "edit"])->name('officerInteraction.edit');
Route::post('/officerInteraction/update/{id}', [OfficerInteractionController::class, "update"])->name('officerInteraction.update');
Route::get('/officerInteraction/delete/{id}', [OfficerInteractionController::class, "destory"])->name('officerInteraction.delete');

//Route actiontakenreport
Route::get('/actiontakenreport', [ActiontakenreportController::class, 'index'])->name('actiontakenreport.index');
Route::get('/actiontakenreport/create', [ActiontakenreportController::class, "create"])->name('actiontakenreport.create');
Route::post('/actiontakenreport/store', [ActiontakenreportController::class, "store"])->name('actiontakenreport.store');
Route::get('/actiontakenreport/edit/{id}', [ActiontakenreportController::class, "edit"])->name('actiontakenreport.edit');
Route::post('/actiontakenreport/update/{id}', [ActiontakenreportController::class, "update"])->name('actiontakenreport.update');
Route::get('/actiontakenreport/delete/{id}', [ActiontakenreportController::class, "destory"])->name('actiontakenreport.delete');



//seminar Route 
Route::get('/seminar', [SeminarController::class, 'index'])->name('seminar.index');
Route::get('/seminar/create', [SeminarController::class, "create"])->name('seminar.create');
Route::post('/seminar/store', [SeminarController::class, "store"])->name('seminar.store');
Route::get('/seminar/edit/{id}', [SeminarController::class, "edit"])->name('seminar.edit');
Route::post('/seminar/update/{id}', [SeminarController::class, "update"])->name('seminar.update');
Route::get('/seminar/delete/{id}', [SeminarController::class, "destory"])->name('seminar.delete');

//print Route 
Route::get('/print', [PictureMediaController::class, 'index'])->name('print.index');
Route::get('/print/create', [PictureMediaController::class, "create"])->name('print.create');
Route::post('/print/store', [PictureMediaController::class, "store"])->name('print.store');
Route::get('/print/edit/{id}', [PictureMediaController::class, "edit"])->name('print.edit');
Route::post('/print/update/{id}', [PictureMediaController::class, "update"])->name('print.update');
Route::get('/print/delete/{id}', [PictureMediaController::class, "destory"])->name('print.delete');

//gallery Route 
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/gallery/create', [GalleryController::class, "create"])->name('gallery.create');
Route::post('/gallery/store', [GalleryController::class, "store"])->name('gallery.store');
Route::get('/gallery/edit/{id}', [GalleryController::class, "edit"])->name('gallery.edit');
Route::post('/gallery/update/{id}', [GalleryController::class, "update"])->name('gallery.update');
Route::get('/gallery/delete/{id}', [GalleryController::class, "destory"])->name('gallery.delete');

//video Route 
Route::get('/video', [VideoController::class, 'index'])->name('video.index');
Route::get('/video/create', [VideoController::class, "create"])->name('video.create');
Route::post('/video/store', [VideoController::class, "store"])->name('video.store');
Route::get('/video/edit/{id}', [VideoController::class, "edit"])->name('video.edit');
Route::post('/video/update/{id}', [VideoController::class, "update"])->name('video.update');
Route::get('/video/delete/{id}', [VideoController::class, "destory"])->name('video.delete');
  

//contact Route 
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/create', [ContactController::class, "create"])->name('contact.create');
Route::post('/contact/store', [ContactController::class, "store"])->name('contact.store');
Route::get('/contact/edit/{id}', [ContactController::class, "edit"])->name('contact.edit');
Route::post('/contact/update/{id}', [ContactController::class, "update"])->name('contact.update');
Route::get('/contact/delete/{id}', [ContactController::class, "destory"])->name('contact.delete');
  
}); 

    

});
//frontend
Route::get('/frontend',[FrontendController::class,'index']);

Route::get('one', function () {
    return view('frontend.home.joinUs.joinUS');
});

Route::get('two', function () {
    return view('frontend.home.login.login');
});

Route::get('three', function () {
    return view('frontend.home.about.whoWeAre');
});

Route::get('whatWeDo', function () {
    return view('frontend.home.about.whatWeDo');
});
Route::get('howWeWork', function () {
    return view('frontend.home.about.howWeWork');
});

Route::get('rulesAndRegulation', function () {
    return view('frontend.home.about.rulesAndRegul');
});


Route::get('govtRecorg', function () {
    return view('frontend.home.about.govtRecorg');
});

Route::get('function', function () {
    return view('frontend.home.about.function');
});

Route::get('aboutNotice', function () {
    return view('frontend.home.about.notices');
});


Route::get('funding', function () {
    return view('frontend.home.about.funding');
});


Route::get('publication', function () {
    return view('frontend.home.about.publication');
});

Route::get('presidentmessage', function () {
    return view('frontend.home.administration.president_mesage');
});

Route::get('nationalPatron', function () {
    return view('frontend.home.administration.nationalPatron');
});
Route::get('nationalAdvisor', function () {
    return view('frontend.home.administration.nationalAdvisor');
});

Route::get('officeStaff', function () {
    return view('frontend.home.administration.officeStaff');
});



Route::get('/contact', [FrontendController::class, 'contacts'])->name('frontend.contacts');

Route::get('donate', function () {
    return view('frontend.home.donate.donate');
});



Route::get('newComplain', function () {
    return view('frontend.home.Complain.newComplain');
});


Route::get('complainStatus', function () {
    return view('frontend.home.Complain.complainStatus');
});

Route::get('complaintdashboard', function () {
    return view('frontend.home.Complain.complaintdashboard');
});


Route::get('Verification', function () {
    return view('frontend.home.Verification.Verification');
});

Route::get('legal', function () {
    return view('frontend.home.unit.cell.legal.legal');
});

Route::get('educational', function () {
    return view('frontend.home.unit.cell.legal.educational');
});


Route::get('doctor', function () {
    return view('frontend.home.unit.cell.legal.doctor');
});



Route::get('childrights', function () {
    return view('frontend.home.unit.cell.legal.childrights');
});



Route::get('rti', function () {
    return view('frontend.home.unit.cell.legal.rti');
});


Route::get('media', function () {
    return view('frontend.home.unit.cell.legal.media');
});



Route::get('tribalrights', function () {
    return view('frontend.home.unit.cell.legal.tribalrights');
});


Route::get('crimecontrol', function () {
    return view('frontend.home.unit.cell.legal.crimecontrol');
});



Route::get('anti-corruption-unit', function () {
    return view('frontend.home.unit.cell.legal.anti-corruption-unit');
});



Route::get('anti-human-trafficking-cell', function () {
    return view('frontend.home.unit.cell.legal.anti-human-trafficking-cell');
});



Route::get('awardteam', function () {
    return view('frontend.home.awardteam.awardteam');
});



Route::get('/header', function () {
    return view('frontend.header2');
});



Route::get('/gallery', function () {
    return view('frontend.home.gallery.gallery');
});

Route::get('/printmedia', [FrontendController::class,'media']);



Route::get('/galleryimage', [FrontendController::class,'galleryimage']);
Route::get('/officerinteraction', [FrontendController::class,'officerinteraction']);
Route::get('/actiontakenreport', [FrontendController::class,'actiontakenreport']);
Route::get('/electronicmedia', [FrontendController::class,'electronicmedia']);
Route::get('/webmedia', [FrontendController::class,'webmedia']);
Route::get('/policeletter', [FrontendController::class,'policeletter']);
Route::get('/galleryvideo', [FrontendController::class,'galleryvideo']);
Route::get('/awards', [FrontendController::class,'awards']);
Route::get('/seminar', [FrontendController::class,'seminar']);


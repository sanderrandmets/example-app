<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContentController;
use App\Models\Blog;
use App\Models\Content;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['posts' => Blog::all()]);
});

Route::get('/free-cymnatics', function () {
    return view('free-cymnatics');
});

Route::get('/questions', function () {
    return view('questions', ['posts' => Blog::all()]);
});

Route::get('/remakes', function () {
    return view('remakes');
});

Route::get('/best-remake-channels', function () {
    return view('best-remake-channels');
});

Route::get('/fl-studio-remake-channels', function () {
    return view('fl-studio-remake-channels');
});

Route::get('/studio-one-remake-channels', function () {
    return view('studio-one-remake-channels');
});

Route::get('/lmms-remake-channels', function () {
    return view('lmms-remake-channels');
});

Route::get('/logic-pro-x-remake-channels', function () {
    return view('logic-pro-x-remake-channels');
});

Route::get('/fl-studio-remakes', function () {
    return view('fl-studio-remakes');
});

Route::get('/studio-one-remakes', function () {
    return view('studio-one-remakes');
});

Route::get('/logic-pro-x-remakes', function () {
    return view('logic-pro-x-remakes');
});

Route::get('/logic-pro-x-remakes-alan-walker', function () {
    return view('logic-pro-x-remakes-alan-walker');
});

Route::get('/logic-pro-x-remakes-alan-walker-faded', function () {
    return view('logic-pro-x-remakes-alan-walker-faded');
});

Route::get('/logic-pro-x-remakes-billie-eilish', function () {
    return view('logic-pro-x-remakes-billie eilish');
});

Route::get('/logic-pro-x-remakes-the-weeknd', function () {
    return view('logic-pro-x-remakes-the-weeknd');
});

Route::get('/logic-pro-x-remakes-dua-lipa', function () {
    return view('logic-pro-x-remakes-dua-lipa');
});

Route::get('/lmms-remakes', function () {
    return view('lmms-remakes');
});

Route::get('/lmms-remakes-alan-walker', function () {
    return view('lmms-remakes-alan-walker');
});

Route::get('/lmms-remakes-alan-walker-faded', function () {
    return view('lmms-remakes-alan-walker-faded');
});

Route::get('/lmms-remakes-the-weeknd', function () {
    return view('lmms-remakes-the-weeknd');
});

Route::get('/lmms-remakes-dua-lipa', function () {
    return view('lmms-remakes-dua-lipa');
});

Route::get('/lmms-remakes-billie-eilish', function () {
    return view('lmms-remakes-billie-eilish');
});

Route::get('/ableton-live-remakes', function () {
    return view('ableton-live-remakes');
});

Route::get('/ableton-live-remakes-alan-walker', function () {
    return view('ableton-live-remakes-alan-walker');
});

Route::get('/ableton-live-remakes-alan-walker-faded', function () {
    return view('ableton-live-remakes-alan-walker-faded');
});

Route::get('/fl-studio-remakes-alan-walker', function () {
    return view('fl-studio-remakes-alan-walker');
});

Route::get('/fl-studio-remakes-alan-walker-faded', function () {
    return view('fl-studio-remakes-alan-walker-faded');
});

Route::get('/fl-studio-remakes-alan-walker-spectre', function () {
    return view('fl-studio-remakes-alan-walker-spectre');
});

Route::get('/fl-studio-remakes-the-weeknd', function () {
    return view('fl-studio-remakes-the-weeknd');
});

Route::get('/fl-studio-remakes-the-weeknd-blinding-lights', function () {
    return view('fl-studio-remakes-the-weeknd-blinding-lights');
});

Route::get('/fl-studio-remakes-the-weeknd-in-your-eyes', function () {
    return view('fl-studio-remakes-the-weeknd-in-your-eyes');
});

Route::get('/fl-studio-remakes-the-weeknd-save-your-tears', function () {
    return view('fl-studio-remakes-the-weeknd-save-your-tears');
});

Route::get('/fl-studio-remakes-the-weeknd-starboy', function () {
    return view('fl-studio-remakes-the-weeknd-starboy');
});

Route::get('/fl-studio-remakes-billie-eilish', function () {
    return view('fl-studio-remakes-billie-eilish');
});

Route::get('/fl-studio-remakes-billie-eilish-bad-guy', function () {
    return view('fl-studio-remakes-billie-eilish-bad-guy');
});

Route::get('/fl-studio-remakes-billie-eilish-everything-i-wanted', function () {
    return view('fl-studio-remakes-billie-eilish-everything-i-wanted');
});

Route::get('/fl-studio-remakes-billie-eilish-therefore-i-am', function () {
    return view('fl-studio-remakes-billie-eilish-therefore-i-am');
});

Route::get('/the-weeknd', function () {
    return view('the-weeknd');
});

Route::get('/billie-eilish', function () {
    return view('billie-eilish');
});

Route::get('/dua-lipa', function () {
    return view('dua-lipa');
});

Route::get('/free-musicgateway', function () {
    return view('free-musicgateway');
});

Route::get('/free-bvker', function () {
    return view('free-bvker');
});

Route::get('/channels', function () {
    return view('channels');
});

Route::get('/drum-kits', function () {
    return view('drum-kits');
});

Route::get('/free-drum-kits', function () {
    return view('free-drum-kits');
});

Route::get('/popular-drum-kits', function () {
    return view('popular-drum-kits');
});

Route::get('/one-shots', function () {
    return view('one-shots');
});

Route::get('/free-one-shots', function () {
    return view('free-one-shots');
});

Route::get('/popular-one-shots', function () {
    return view('popular-one-shots');
});

Route::get('/midi', function () {
    return view('midi');
});

Route::get('/free-midi', function () {
    return view('free-midi');
});

Route::get('/popular-midi', function () {
    return view('popular-midi');
});

Route::get('/loops-samples', function () {
    return view('loops-samples');
});

Route::get('/free-loops-samples', function () {
    return view('free-loops-samples');
});

Route::get('/popular-loops-samples', function () {
    return view('popular-loops-samples');
});

Route::post('/upload', [ContentController::class, 'save'])->name('upload');

//Route::post('/upload.delete', [ContentController::class, 'delete'])->name('upload');

Route::view('upload','upload');


Route::get('/future-house-channels', function () {
    return view('future-house-channels');
});

Route::get('/rap-music-channels', function () {
    return view('rap-music-channels');
});

Route::get('/videos', function () {
    return view('videos');
});

Route::get('/softwares', function () {
    return view('softwares');
});

Route::get('/sound-design-tutorials', function () {
    return view('sound-design-tutorials');
});

Route::get('/serum-sound-design-tutorials', function () {
    return view('serum-sound-design-tutorials');
});

Route::get('/plugins', function () {
    return view('plugins');
});

Route::get('/instrumental-plugins', function () {
    return view('instrumental-plugins');
});

Route::get('/instrumental-plugin-sounds', function () {
    return view('instrumental-plugin-sounds');
});

Route::get('/free-instrumental-plugins', function () {
    return view('free-instrumental-plugins');
});

Route::get('/best-plugin-websites', function () {
    return view('best-plugin-websites');
});

Route::get('/popular-instrumental-plugins', function () {
    return view('popular-instrumental-plugins');
});

Route::get('/mixing-plugins', function () {
    return view('mixing-plugins');
});

Route::get('/free-mixing-plugins', function () {
    return view('free-mixing-plugins');
});

Route::get('/popular-mixing-plugins', function () {
    return view('popular-mixing-plugins');
});

Route::get('/free-instrumental-plugins', function () {
    return view('free-instrumental-plugins');
});

Route::get('/free-mixing-plugins', function () {
    return view('free-mixing-plugins');
});

Route::get('/popular-plugins', function () {
    return view('popular-plugins');
});

Route::get('/ableton-live-plugins', function () {
    return view('ableton-live-plugins');
});

Route::get('/ableton-live-plugins', function () {
    return view('ableton-live-plugins');
});

Route::get('/logic-pro-x-plugins', function () {
    return view('logic-pro-x-plugins');
});

Route::get('/lmms-plugins', function () {
    return view('lmms-plugins');
});

Route::get('/fl-studio-plugins', function () {
    return view('fl-studio-plugins');
});

Route::get('/fl-studio-instrumental-plugins', function () {
    return view('fl-studio-instrumental-plugins');
});

Route::get('/fl-studio-mixing-plugins', function () {
    return view('fl-studio-mixing-plugins');
});

Route::get('/presets', function () {
    return view('presets');
});

Route::get('/free-presets', function () {
    return view('free-presets');
});

Route::get('/free-omnisphere-presets', function () {
    return view('free-omnisphere-presets');
});

Route::get('/omnisphere-presets-shop', function () {
    return view('omnisphere-presets-shop');
});

Route::get('/omnisphere-sounds', function () {
    return view('omnisphere-sounds');
});

Route::get('/free-serum-presets', function () {
    return view('free-serum-presets');
});

Route::get('/free-gravitascreate-serum-presets', function () {
    return view('free-gravitascreate-serum-presets');
});

Route::get('/free-electrax-presets', function () {
    return view('free-electrax-presets');
});

Route::get('/popular-presets', function () {
    return view('popular-presets');
});

Route::get('/omnisphere-presets', function () {
    return view('omnisphere-presets');
});

Route::get('/electrax-presets', function () {
    return view('electrax-presets');
});

Route::get('/serum-presets', function () {
    return view('serum-presets');
});

Route::get('/our-presets', function () {
    return view('our-presets');
});

Route::get('/our-omnisphere-presets', function () {
    return view('our-omnisphere-presets');
});

Route::get("/post/{post}", [BlogController::class, "view"])->name("blog.view");

Route::post("/comment/add", [CommentController::class, "store"])->name("comment.add");

Route::middleware(["auth"])->group(function (){

    Route::get('/dashboard', function () {
        return view('dashboard', ['content' => Content::all()]);
    })->name('dashboard');

    Route::get("/blog", [BlogController::class, "list"])->middleware(['auth'])->name('blog');
    Route::name("blog.")->group(function (){
        Route::get("/create", [BlogController::class, "create"])->middleware(['auth'])->name('create');
        Route::post("/create", [BlogController::class, "store"]);
            
        Route::get("/delete/{post}", [BlogController::class, "delete"])->middleware(['auth'])->name("delete");
        Route::get("/delete/{content}", [ContentController::class, "delete"])->middleware(['auth'])->name("delete");
        Route::get("/edit/{post}", [BlogController::class, "edit"])->middleware(['auth'])->name("edit");

        Route::post("/update", [BlogController::class, "update"])->middleware(['auth'])->name("update");
    });
        
    Route::get("/comment/list/{post}", [CommentController::class, "list"])->middleware(['auth'])->name("comment.list");
    Route::get("/comment/delete/{comment}", [CommentController::class, "delete"])->middleware(['auth'])->name("comment.delete");
        
});


require __DIR__.'/auth.php';
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

Route::get('/free-musicgateway', function () {
    return view('free-musicgateway');
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

Route::get('/free-plugins', function () {
    return view('free-plugins');
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
        Route::get("/edit/{post}", [BlogController::class, "edit"])->middleware(['auth'])->name("edit");

        Route::post("/update", [BlogController::class, "update"])->middleware(['auth'])->name("update");
    });
        
    Route::get("/comment/list/{post}", [CommentController::class, "list"])->middleware(['auth'])->name("comment.list");
    Route::get("/comment/delete/{comment}", [CommentController::class, "delete"])->middleware(['auth'])->name("comment.delete");
        
});


require __DIR__.'/auth.php';
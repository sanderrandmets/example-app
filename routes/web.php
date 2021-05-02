<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Models\Blog;
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

Route::get("/post/{post}", [BlogController::class, "view"])->name("blog.view");

Route::post("/comment/add", [CommentController::class, "store"])->name("comment.add");

Route::middleware(["auth"])->group(function (){
    Route::get('/dashboard', function () {
        return view('dashboard');
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
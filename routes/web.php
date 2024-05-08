<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductPageController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', PostController::class);
Route::resource('offers', OfferController::class);


Route::get('/dashboard', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
//this routes only work if user logged in.
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // -------
    // return post need view.
    Route::get('/need', function () {
        return view('post-need');
    });
    // return give offer view.
    Route::get('/offer/{post_id}', function ($post_id) {
        return view('give-offer', ['post_id' => $post_id]);
    })->name('offer.create');
    //arg1 = route name - arg2 = contoller - arg3 = function name from the controller.
    Route::post('/need', [PostController::class, 'store'])->name('post.store');
    Route::post('/offer', [PostController::class, 'store'])->name('offer.store');
    Route::get('/product_page/{id}', [ProductPageController::class, 'show'])->name('product_page.show');
    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::delete('/posts/{post_id}', [PostController::class, 'destroy'])->name('posts.destroy');

});

require __DIR__.'/auth.php';
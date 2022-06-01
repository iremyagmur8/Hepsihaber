<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;




Route::get('/',[HomepageController::class,'index'])->name('index');
Route::get('neue-modelle-autos-nachrichten',[HomepageController::class,'category'])->defaults('category_id', 39);
Route::get('neue-modelle-elektroautos',[HomepageController::class,'category'])->defaults('category_id', 40);
Route::get('elektro-scooter',[HomepageController::class,'category'])->defaults('category_id', 41);
Route::get('auto-angebote',[HomepageController::class,'category'])->defaults('category_id', 42);
Route::get('auto-marken',[HomepageController::class,'marken']);
Route::get('auto/{title}/{id}',[HomepageController::class,'markenpage']);


Route::get('{title}/{id}.html',[HomepageController::class,'post'])->name('post');
Route::get('{title}/{id}/amp',[HomepageController::class,'postamp'])->name('post');
Route::get('sitemap.xml',[HomepageController::class,'sitemap'])->name('sitemap');


require __DIR__.'/auth.php';
require __DIR__.'/solaris.php';

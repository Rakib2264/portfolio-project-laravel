<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\AdminController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Frontend
Route::get('/',[FrontendController::class,'index'])->name('home');
// Contact
Route::post('/admin/dashboard/contact/store', [FrontendController::class, 'contactstore'])->name('contactstore');

Route::middleware(['auth'])->group(function () {
// Backend
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/dashboard/banner', [AdminController::class, 'banner'])->name('banner');
Route::post('/admin/dashboard/bannerstore', [AdminController::class, 'bannerStore'])->name('bannerstore');
Route::get('/admin/dashboard/bannermanage', [AdminController::class, 'bannermanage'])->name('bannermanage');
Route::get('/admin/dashboard/edit/{id}', [AdminController::class, 'edit'])->name('banneredit'); // Added {id} parameter
Route::post('/admin/dashboard/update/{id}', [AdminController::class, 'update'])->name('bannereditstore'); // Changed the route name to 'bannerupdate'
Route::get('/admin/dashboard/delete/{id}', [AdminController::class, 'delete'])->name('bannerdelete'); // Changed the route name to 'bannerupdate'

// Service Curd
Route::get('/admin/dashboard/service', [AdminController::class, 'service'])->name('service');
Route::post('/admin/dashboard/servive', [AdminController::class, 'servive']);
Route::get('/admin/dashboard/show', [AdminController::class, 'show']);
Route::get('/admin/dashboard/servive/edit/{id}', [AdminController::class, 'editservice']);
Route::post('/admin/dashboard/servive/update/{id}', [AdminController::class, 'updateservice']);
Route::get('/admin/dashboard/servive/delete/{id}', [AdminController::class, 'deleteservice']);


// About Curd
Route::get('/admin/dashboard/about/add', [AdminController::class, 'add'])->name('aboutadd');
Route::get('/admin/dashboard/about', [AdminController::class, 'about'])->name('aboutmanage');
Route::post('/admin/dashboard/about/store', [AdminController::class, 'aboutstore'])->name('aboutstore');
Route::get('/admin/dashboard/about/edit/{id}', [AdminController::class, 'editabout'])->name('editabout');
Route::post('/admin/dashboard/about/update/{id}', [AdminController::class, 'updateabout'])->name('updateabout');
Route::get('/admin/dashboard/about/delete/{id}', [AdminController::class, 'deleteabout'])->name('deleteabout');

//Skill  Curd using Ajax
Route::get('/admin/dashboard/skill/add', [AdminController::class, 'addskill'])->name('skilladd');
Route::get('/admin/dashboard/skill/manage', [AdminController::class, 'skillmanage'])->name('skillmanage');
Route::post('/admin/dashboard/skill', [AdminController::class, 'skills']);
Route::get('/admin/dashboard/skill/show', [AdminController::class, 'showSkills']);
Route::get('/admin/dashboard/skill/delete/{id}', [AdminController::class, 'deleteSkills']);
Route::get('/admin/dashboard/skill/edit/{id}', [AdminController::class, 'editSkills']);
Route::post('/admin/dashboard/skill/update/{id}', [AdminController::class, 'updateSkills']);



// Project


Route::get('/admin/dashboard/project/add', [AdminController::class, 'projectadd'])->name('projectadd');
Route::get('/admin/dashboard/project/manage', [AdminController::class, 'projectmanage'])->name('projectmanage');
Route::get('/admin/dashboard/project/edit/{id}', [AdminController::class, 'projectedit'])->name('projectedit');
Route::get('/admin/dashboard/project/delete/{id}', [AdminController::class, 'projectdelete'])->name('projectdelete');
Route::post('/admin/dashboard/project/store', [AdminController::class, 'projectstore'])->name('projectstore');
Route::post('/admin/dashboard/project/update/{id}', [AdminController::class, 'projectstoreupdate'])->name('projectstoreupdate');

// Team

Route::get('/admin/dashboard/team/add', [AdminController::class, 'teamadd'])->name('teamadd');
Route::get('/admin/dashboard/team/manage', [AdminController::class, 'teammanage'])->name('teammanage');
Route::post('/admin/dashboard/team/store', [AdminController::class, 'teamstore'])->name('teamstore');
Route::get('/admin/dashboard/team/edit/{id}', [AdminController::class, 'teamedit'])->name('teamedit');
Route::post('/admin/dashboard/team/update/{id}', [AdminController::class, 'teamupdate'])->name('teamupdate');
Route::get('/admin/dashboard/team/delete/{id}', [AdminController::class, 'teamdelete'])->name('teamdelete');

// Contact
Route::get('/admin/dashboard/contact/manage', [FrontendController::class, 'contactmanage'])->name('contactmanage');
Route::get('/admin/dashboard/contact/delete/{id}', [FrontendController::class, 'contactdelete'])->name('contactdelete');
});









require __DIR__.'/auth.php';

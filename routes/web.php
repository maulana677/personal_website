<?php

use App\Http\Controllers\Admin\AdminEducationController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminHomePageController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminSkillController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\HomeController;
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

//Frontend
Route::get('/', [HomeController::class, 'index'])->name('home');
//About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Admin
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home')->middleware('admin:admin');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
Route::post('/admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
Route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
Route::post('/admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');

// Profile
Route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin_profile')->middleware('admin:admin');
Route::post('/admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');

//Banner Backend
Route::get('/admin/home-banner', [AdminHomePageController::class, 'banner'])->name('admin_home_banner')->middleware('admin:admin');
Route::post('/admin/home-banner-update', [AdminHomePageController::class, 'banner_update'])->name('admin_home_banner_update')->middleware('admin:admin');

//About Backend
Route::get('/admin/home-about', [AdminHomePageController::class, 'about'])->name('admin_home_about')->middleware('admin:admin');
Route::post('/admin/home-about-update', [AdminHomePageController::class, 'about_update'])->name('admin_home_about_update')->middleware('admin:admin');

//Skill Backend
Route::get('/admin/home-skill', [AdminHomePageController::class, 'skill'])->name('admin_home_skill')->middleware('admin:admin');
Route::post('/admin/home-skill-update', [AdminHomePageController::class, 'skill_update'])->name('admin_home_skill_update')->middleware('admin:admin');

Route::get('/admin/skill/show', [AdminSkillController::class, 'index'])->name('admin_skill_show')->middleware('admin:admin');
Route::get('/admin/skill/add', [AdminSkillController::class, 'add'])->name('admin_skill_add')->middleware('admin:admin');
Route::post('/admin/skill/submit', [AdminSkillController::class, 'store'])->name('admin_skill_submit')->middleware('admin:admin');
Route::get('/admin/skill/edit/{id}', [AdminSkillController::class, 'edit'])->name('admin_skill_edit')->middleware('admin:admin');
Route::post('/admin/skill/update/{id}', [AdminSkillController::class, 'update'])->name('admin_skill_update')->middleware('admin:admin');
Route::get('/admin/skill/delete/{id}', [AdminSkillController::class, 'delete'])->name('admin_skill_delete')->middleware('admin:admin');

//Education and Experience Backend
Route::get('/admin/home-qualification', [AdminHomePageController::class, 'qualification'])->name('admin_home_qualification')->middleware('admin:admin');
Route::post('/admin/home-qualification-update', [AdminHomePageController::class, 'qualification_update'])->name('admin_home_qualification_update')->middleware('admin:admin');

//Education
Route::get('/admin/education/show', [AdminEducationController::class, 'index'])->name('admin_skill_show')->middleware('admin:admin');
Route::get('/admin/education/add', [AdminEducationController::class, 'add'])->name('admin_skill_add')->middleware('admin:admin');
Route::post('/admin/education/submit', [AdminEducationController::class, 'store'])->name('admin_skill_submit')->middleware('admin:admin');
Route::get('/admin/education/edit/{id}', [AdminEducationController::class, 'edit'])->name('admin_skill_edit')->middleware('admin:admin');
Route::post('/admin/education/update/{id}', [AdminEducationController::class, 'update'])->name('admin_skill_update')->middleware('admin:admin');
Route::get('/admin/education/delete/{id}', [AdminEducationController::class, 'delete'])->name('admin_skill_delete')->middleware('admin:admin');
<?php

use App\Http\Controllers\Admin\AdminClientController;
use App\Http\Controllers\Admin\AdminEducationController;
use App\Http\Controllers\Admin\AdminExperienceController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminHomePageController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminPortfolioCategoryController;
use App\Http\Controllers\Admin\AdminPortfolioController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminSkillController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ServiceController;
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
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/service/{slug}', [ServiceController::class, 'detail'])->name('service_detail');

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
Route::get('/admin/education/show', [AdminEducationController::class, 'index'])->name('admin_education_show')->middleware('admin:admin');
Route::get('/admin/education/add', [AdminEducationController::class, 'add'])->name('admin_education_add')->middleware('admin:admin');
Route::post('/admin/education/submit', [AdminEducationController::class, 'store'])->name('admin_education_submit')->middleware('admin:admin');
Route::get('/admin/education/edit/{id}', [AdminEducationController::class, 'edit'])->name('admin_education_edit')->middleware('admin:admin');
Route::post('/admin/education/update/{id}', [AdminEducationController::class, 'update'])->name('admin_education_update')->middleware('admin:admin');
Route::get('/admin/education/delete/{id}', [AdminEducationController::class, 'delete'])->name('admin_education_delete')->middleware('admin:admin');

//Experience
Route::get('/admin/experience/show', [AdminExperienceController::class, 'index'])->name('admin_experience_show')->middleware('admin:admin');
Route::get('/admin/experience/add', [AdminExperienceController::class, 'add'])->name('admin_experience_add')->middleware('admin:admin');
Route::post('/admin/experience/submit', [AdminExperienceController::class, 'store'])->name('admin_experience_submit')->middleware('admin:admin');
Route::get('/admin/experience/edit/{id}', [AdminExperienceController::class, 'edit'])->name('admin_experience_edit')->middleware('admin:admin');
Route::post('/admin/experience/update/{id}', [AdminExperienceController::class, 'update'])->name('admin_experience_update')->middleware('admin:admin');
Route::get('/admin/experience/delete/{id}', [AdminExperienceController::class, 'delete'])->name('admin_experience_delete')->middleware('admin:admin');

//Counter
Route::get('/admin/home-counter', [AdminHomePageController::class, 'counter'])->name('admin_home_counter')->middleware('admin:admin');
Route::post('/admin/home-counter-update', [AdminHomePageController::class, 'counter_update'])->name('admin_home_counter_update')->middleware('admin:admin');

//Testimonial
Route::get('/admin/home-testimonial', [AdminHomePageController::class, 'testimonial'])->name('admin_home_testimonial')->middleware('admin:admin');
Route::post('/admin/home-testimonial-update', [AdminHomePageController::class, 'testimonial_update'])->name('admin_home_testimonial_update')->middleware('admin:admin');

Route::get('/admin/testimonial/show', [AdminTestimonialController::class, 'index'])->name('admin_testimonial_show')->middleware('admin:admin');
Route::get('/admin/testimonial/add', [AdminTestimonialController::class, 'add'])->name('admin_testimonial_add')->middleware('admin:admin');
Route::post('/admin/testimonial/submit', [AdminTestimonialController::class, 'store'])->name('admin_testimonial_submit')->middleware('admin:admin');
Route::get('/admin/testimonial/edit/{id}', [AdminTestimonialController::class, 'edit'])->name('admin_testimonial_edit')->middleware('admin:admin');
Route::post('/admin/testimonial/update/{id}', [AdminTestimonialController::class, 'update'])->name('admin_testimonial_update')->middleware('admin:admin');
Route::get('/admin/testimonial/delete/{id}', [AdminTestimonialController::class, 'delete'])->name('admin_testimonial_delete')->middleware('admin:admin');

//Client
Route::get('/admin/home-client', [AdminHomePageController::class, 'client'])->name('admin_home_client')->middleware('admin:admin');
Route::post('/admin/home-client-update', [AdminHomePageController::class, 'client_update'])->name('admin_home_client_update')->middleware('admin:admin');

Route::get('/admin/client/show', [AdminClientController::class, 'index'])->name('admin_client_show')->middleware('admin:admin');
Route::get('/admin/client/add', [AdminClientController::class, 'add'])->name('admin_client_add')->middleware('admin:admin');
Route::post('/admin/client/submit', [AdminClientController::class, 'store'])->name('admin_client_submit')->middleware('admin:admin');
Route::get('/admin/client/edit/{id}', [AdminClientController::class, 'edit'])->name('admin_client_edit')->middleware('admin:admin');
Route::post('/admin/client/update/{id}', [AdminClientController::class, 'update'])->name('admin_client_update')->middleware('admin:admin');
Route::get('/admin/client/delete/{id}', [AdminClientController::class, 'delete'])->name('admin_client_delete')->middleware('admin:admin');

//Service
Route::get('/admin/home-service', [AdminHomePageController::class, 'service'])->name('admin_home_service')->middleware('admin:admin');
Route::post('/admin/home-service-update', [AdminHomePageController::class, 'service_update'])->name('admin_home_service_update')->middleware('admin:admin');

Route::get('/admin/service/show', [AdminServiceController::class, 'index'])->name('admin_service_show')->middleware('admin:admin');
Route::get('/admin/service/add', [AdminServiceController::class, 'add'])->name('admin_service_add')->middleware('admin:admin');
Route::post('/admin/service/submit', [AdminServiceController::class, 'store'])->name('admin_service_submit')->middleware('admin:admin');
Route::get('/admin/service/edit/{id}', [AdminServiceController::class, 'edit'])->name('admin_service_edit')->middleware('admin:admin');
Route::post('/admin/service/update/{id}', [AdminServiceController::class, 'update'])->name('admin_service_update')->middleware('admin:admin');
Route::get('/admin/service/delete/{id}', [AdminServiceController::class, 'delete'])->name('admin_service_delete')->middleware('admin:admin');

// Service page
Route::get('/admin/page/services', [AdminPageController::class, 'services'])->name('admin_page_services')->middleware('admin:admin');
Route::post('/admin/page/services/update', [AdminPageController::class, 'services_update'])->name('admin_page_services_update')->middleware('admin:admin');

//Portfolio
Route::get('/admin/home-portfolio', [AdminHomePageController::class, 'portfolio'])->name('admin_home_portfolio')->middleware('admin:admin');
Route::post('/admin/home-portfolio-update', [AdminHomePageController::class, 'portfolio_update'])->name('admin_home_portfolio_update')->middleware('admin:admin');

Route::get('/admin/portfolio-category/show', [AdminPortfolioCategoryController::class, 'index'])->name('admin_portfolio_category_show')->middleware('admin:admin');
Route::get('/admin/portfolio-category/add', [AdminPortfolioCategoryController::class, 'add'])->name('admin_portfolio_category_add')->middleware('admin:admin');
Route::post('/admin/portfolio-category/submit', [AdminPortfolioCategoryController::class, 'store'])->name('admin_portfolio_category_submit')->middleware('admin:admin');
Route::get('/admin/portfolio-category/edit/{id}', [AdminPortfolioCategoryController::class, 'edit'])->name('admin_portfolio_category_edit')->middleware('admin:admin');
Route::post('/admin/portfolio-category/update/{id}', [AdminPortfolioCategoryController::class, 'update'])->name('admin_portfolio_category_update')->middleware('admin:admin');
Route::get('/admin/portfolio-category/delete/{id}', [AdminPortfolioCategoryController::class, 'delete'])->name('admin_portfolio_category_delete')->middleware('admin:admin');

Route::get('/admin/portfolio/show', [AdminPortfolioController::class, 'index'])->name('admin_portfolio_show')->middleware('admin:admin');
Route::get('/admin/portfolio/add', [AdminPortfolioController::class, 'add'])->name('admin_portfolio_add')->middleware('admin:admin');
Route::post('/admin/portfolio/submit', [AdminPortfolioController::class, 'store'])->name('admin_portfolio_submit')->middleware('admin:admin');
Route::get('/admin/portfolio/edit/{id}', [AdminPortfolioController::class, 'edit'])->name('admin_portfolio_edit')->middleware('admin:admin');
Route::post('/admin/portfolio/update/{id}', [AdminPortfolioController::class, 'update'])->name('admin_portfolio_update')->middleware('admin:admin');
Route::get('/admin/portfolio/delete/{id}', [AdminPortfolioController::class, 'delete'])->name('admin_portfolio_delete')->middleware('admin:admin');
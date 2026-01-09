<?php

use App\Http\Middleware\HandleAuth;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Faqs\FaqsController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\Sliders\SliderController;
use App\Http\Controllers\Careers\CareersController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Partners\PartnersController;
use App\Http\Controllers\Products\CategoryController;

use App\Http\Controllers\Services\ServicesController;
use App\Http\Controllers\Settings\SettingsController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\FrontPages\FrontPagesController;
use App\Http\Controllers\Testimony\TestimoniesController;
use App\Http\Controllers\Careers\AvailablecareersController;
use App\Http\Controllers\CooperateGov\CooperateGovController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(HandleAuth::class)->name('dashboard');

Route::middleware(HandleAuth::class)->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //frequentlt asked question
    Route::get('/create_faqs_page', [FaqsController::class, 'create'])->name('create_faqs_page');
    Route::get('/view_fags', [FaqsController::class, 'index'])->name('view_fags');
    Route::post('/store_faqs', [FaqsController::class, 'storeFaqs'])->name('store_faqs');
    Route::get('/edit_faqs/{faqsId}', [FaqsController::class, 'edit'])->name('edit_faqs');
    Route::post('/confirm_faq_delete', [FaqsController::class, 'destroy'])->name('confirm_faq_delete');
    Route::post('/update_faqs/{faqsId}', [FaqsController::class, 'update'])->name('update_faqs');
});


Route::get('/', [FrontPagesController::class, 'index'])->name('go_home');
//product details page
Route::get('/product_details/{uniqueId}', [FrontPagesController::class, 'productDetails'])->name('product_details');
//about us page
Route::get('/about-us', [FrontPagesController::class, 'about'])->name('about-us');
//blog
Route::get('/blog', [FrontPagesController::class, 'blog'])->name('blog');
//contact page
Route::get('/contact', [FrontPagesController::class, 'contact'])->name('contact');
//products
Route::get('/products', [FrontPagesController::class, 'products'])->name('products');
//route for user to view all news
Route::get('/view_news', [FrontPagesController::class, 'viewNews'])->name('view_news');
//this is the route for single news page
Route::get('view_single_news/{uniqueId}', [HomeController::class, 'viewSingleNews'])->name('view_single_news');
//term and conditions
Route::get('/term-and-conditions', [HomeController::class, 'termAndConditions'])->name('term_and_conditions');
//term and conditions
Route::get('/refund-policy', [HomeController::class, 'refundPolicyBlade'])->name('refund_policy');

Route::get('/privacy-policy', [HomeController::class, 'privacyPolicyBlade'])->name('privacy-policy');

Route::get('/news-blog', [HomeController::class, 'blog_'])->name('news-blog');


//send message to adminstrator
Route::post('/send-message', [HomeController::class, 'sendMessage'])->name('send-message');


//password reset link page
Route::get('/forgot-password', function () {
    return view('auth.passwords.enter_email');
})->middleware('guest')->name('password.request');

Route::get('/normal', function () {
    return view('auth.reset_password');
})->name('normal');

//send email fpr password reset
Route::post('/forgot-password', [ResetPasswordController::class, 'sendPasswordResetLink'])->middleware(['guest'])->name('password.email');
//verify reset password token
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'verifyPasswordResetToken'])->middleware(['guest'])->name('password.reset');
//RESET THE PASSWORD
Route::post('/reset-password', [ResetPasswordController::class, 'resetThePassword'])->middleware(['guest'])->name('password.update');


//about us page
Route::get('/about', [AboutUsController::class, 'index'])->name('about');


// //products category
Route::get('/category', [CategoryController::class, 'index'])->name('category');
// page for creating categories for products
Route::get('/create_category', [CategoryController::class, 'create'])->name('product_category');
//inserting new category into the database
Route::post('/insert_category', [CategoryController::class, 'store'])->name('new_category');
//editing of category
Route::get('/edit_category/{uniqueId}', [CategoryController::class, 'edit'])->name('edit_category');
//updating a category field
Route::post('/update_category/{uniqueId}', [CategoryController::class, 'update'])->name('update_category');

//Route::post('/all_category', [CategoryController::class, 'index'])->name('all_category');
//deleting a category
Route::get('/delete_category/{uniqueId}', [CategoryController::class, 'destroy'])->name('delete_category');

//this route is for displaying the settings form
Route::get('/settings', [SettingsController::class, 'create'])->name('settings');
//this route is for updating the settings
Route::post('/update_settings', [SettingsController::class, 'store'])->name('update_settings');


//routes for products
Route::middleware(HandleAuth::class)->group(function () {

    Route::get('/add_product', [ProductController::class, 'create'])->name('add_product');
    //insert the product to the b
    Route::post('/store_product', [ProductController::class, 'store'])->name('store_product');
    //view all the products
    Route::get('/view_product', [ProductController::class, 'index'])->name('view_product');
    //edit product
    Route::get('/edit_product/{uniqueId}', [ProductController::class, 'edit'])->name('edit_product');
    //update product details
    Route::post('/update_product/{uniqueId}', [ProductController::class, 'update'])->name('update_product');
    //delete product
    Route::get('/delete_product/{uniqueId}', [ProductController::class, 'destroy'])->name('delete_product');

    //this route is for services 
    //this route is for diplaying services
    Route::get('/create_services', [ServicesController::class, 'create'])->name('create_services');
    //store the values
    Route::post('/store_services', [ServicesController::class, 'store'])->name('store_services');
    //view all the services edit_services
    Route::get('/view_services', [ServicesController::class, 'index'])->name('view_services');
    //view all the services
    Route::get('/edit_services/{uniqueId}', [ServicesController::class, 'edit'])->name('edit_services');
    //update services
    Route::post('/update_services/{uniqueId}', [ServicesController::class, 'update'])->name('update_services');
    //delete services
    Route::get('/delete_services/{uniqueId}', [ServicesController::class, 'destroy'])->name('delete_services');


    //this routes are for the news
    //this is for creating a news
    Route::get('/create_news', [NewsController::class, 'create'])->name('create_news');
    //this route is for storing the new news created
    Route::post('/store_news', [NewsController::class, 'store'])->name('store_news');
    //this route is for showing all the news
    Route::get('/all_news', [NewsController::class, 'index'])->name('all_news');
    //this route is for editng news
    Route::get('/edit_news/{uniqueId}', [NewsController::class, 'edit'])->name('edit_news');
    //this eoute is for updating the news
    Route::post('/update_news/{uniqueId}', [NewsController::class, 'update'])->name('update_news');
    //this route is for deleting a news
    Route::get('/delete_news/{uniqueId}', [NewsController::class, 'destroy'])->name('delete_news');

    //route for Sliders
    Route::get('/view_sliders', [SliderController::class, 'index'])->name('view_sliders');

    Route::get('/edit_slider/{sliderUniqueId}', [SliderController::class, 'edit'])->name('edit_slider');

    Route::get('/add_slider', [SliderController::class, 'create'])->name('add_slider');

    Route::post('/store_slider', [SliderController::class, 'store'])->name('store_slider');

    Route::post('/update_slider/{sliderUniqueId}', [SliderController::class, 'update'])->name('update_slider');

    Route::get('/delete_slider/{sliderUniqueId}', [SliderController::class, 'destroy'])->name('delete_slider');



    //this contains routes for testimonies
    //this route is for all testimonies
    Route::get('/testimony', [TestimoniesController::class, 'index'])->name('testimonies');
    //this rout is for creating a testimony
    Route::get('/create_testimony', [TestimoniesController::class, 'create'])->name('create_testimony');
    //this route is for storing a new testimony
    Route::post('store_testimony', [TestimoniesController::class, 'store'])->name('store_testimony');
    //route for approving testimony
    ROute::get('/approve_testimony/{uniqueID}', [TestimoniesController::class, 'approveTestimony'])->name('approve_testimony');
    //Route to delete a testimony
    Route::get('/delete_testimony/{uniqueId}', [TestimoniesController::class, 'destroy'])->name('delete_testimony');

    // this rroute is for showing all the partners logos
    // Route::get('/partners', [PartnersController::class, 'index'])->name('partners_logo');
    // //this route is for creating a new partner
    // Route::get('/create_partner', [PartnersController::class, 'create'])->name('create_partner');
    // //this creates a new partner
    // Route::post('/create_new_partner', [PartnersController::class, 'store'])->name('create_new_partner');
    // //this route edits the partner
    // Route::get('/edit_partner/{uniqueID}',[PartnersController::class, 'edit'])->name('edit_partner');
    // //this route is for updating a partner
    // Route::post('/update_partner', [PartnersController::class, 'update'])->name('update_partner');
    // //this is for deleting a partner
    // Route::get('/delete_partner/{uniqueId}', [PartnersController:: class, 'destroy'])->name('delete_partner');

    //this rooute is for careers for admin
    // Route::get('career', [CareersController::class, 'index'])->name('careers');
    // Route::get('edit_career', [CareersController::class, 'create'])->name('edit_careers');
    // Route::post('/store_career', [CareersController::class, 'store'])->name('store_careers');


    //this routes are for the main career listing
    // Route::get('available_careers', [AvailablecareersController::class, 'index'])->name('availablecareers');
    // Route::get('create_available_careers', [AvailablecareersController::class, 'create'])->name('create_availablecareers');
    // Route::post('store_available_careers', [AvailablecareersController::class, 'store'])->name('store_availablecareers');
    // Route::get('edit_availablecarer/{uniqueId}', [AvailablecareersController::class, 'edit'])->name('edit_availablecarer');
    // Route::post('update_availablecarer/{uniqueId}', [AvailablecareersController::class, 'update'])->name('update_availablecareer');
    // Route::get('delete_availablecarer/{uniqueId}', [AvailablecareersController::class, 'destroy'])->name('delete_availablecareer');
    // Route::get('view_singleavailablecarer/{uniqueId}', [AvailablecareersController::class, 'singleavailablecarer'])->name('view_singleavailablecarer');


    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // create aboutus dashboard
    Route::get('/create_about_us', [AboutUsController::class, 'create'])->name('create_about');
    //storing the data
    Route::post('/store_about_us', [AboutUsController::class, 'store'])->name('store_about');

});

require __DIR__.'/auth.php';

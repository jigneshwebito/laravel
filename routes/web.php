<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\backend\TestimonialsController;
use App\Http\Controllers\backend\ClientsController;
use App\Http\Controllers\backend\WorkSliderController;
use App\Http\Controllers\backend\ArticleTagController;
use App\Http\Controllers\backend\OurEventController;
use App\Http\Controllers\backend\ArticleCategoryController;
use App\Http\Controllers\backend\articleController;
use App\Http\Controllers\backend\EmployeeController;
use App\Http\Controllers\form_dataController;


//Home page//
route::get('/', 'App\Http\Controllers\pagesController@index');
route::get('/home', 'App\Http\Controllers\pagesController@index');

//Career page//
route::get('/career', 'App\Http\Controllers\pagesController@career');

//Hiring page//
route::get('/hiring', 'App\Http\Controllers\pagesController@hiring');

//contact page//
route::get('/contact', 'App\Http\Controllers\pagesController@contactpage');

//Team page//
route::get('/team', 'App\Http\Controllers\pagesController@teampage');

//About page//
route::get('/about', 'App\Http\Controllers\pagesController@aboutpage');

//Portfolio page//
route::get('/portfolio', 'App\Http\Controllers\pagesController@portfoliopage');

//Portfolio_page//
route::get('/portfolio_page', 'App\Http\Controllers\pagesController@portfolio_page');

//Policy page//
route::get('/policy', 'App\Http\Controllers\pagesController@policypage');

//Term page//
route::get('/terms', 'App\Http\Controllers\pagesController@termspage');

//rules page//
route::get('/rules', 'App\Http\Controllers\pagesController@rulespage');


//Service pages//
route::get('/services', 'App\Http\Controllers\pagesController@services');
route::get('/services/mobile-app-development', 'App\Http\Controllers\pagesController@mobileapp_development');
route::get('/services/web-development', 'App\Http\Controllers\pagesController@web_development');
route::get('/services/design-development', 'App\Http\Controllers\pagesController@design_development');
route::get('/services/devops-development', 'App\Http\Controllers\pagesController@devops_development');

//Technology pages//
route::get('/technology', 'App\Http\Controllers\pagesController@technology');
route::get('/technology/mobile', 'App\Http\Controllers\pagesController@mobile');
route::get('/technology/backend-development', 'App\Http\Controllers\pagesController@backend');
route::get('/technology/frontend', 'App\Http\Controllers\pagesController@frontend');
route::get('/technology/database', 'App\Http\Controllers\pagesController@database');
route::get('/technology/cms', 'App\Http\Controllers\pagesController@cms');
route::get('/technology/devops', 'App\Http\Controllers\pagesController@devops');
route::get('/technology/master', 'App\Http\Controllers\pagesController@master');

//Mobile pages//
route::get('/technology/mobile/ios', 'App\Http\Controllers\pagesController@ios');
route::get('/technology/mobile/android', 'App\Http\Controllers\pagesController@android');
route::get('/technology/mobile/react-native', 'App\Http\Controllers\pagesController@react_native');
route::get('/technology/mobile/flutter', 'App\Http\Controllers\pagesController@flutter')->name('mobile.flutter');
route::get('/technology/mobile/ionic', 'App\Http\Controllers\pagesController@ionic');
route::get('/technology/mobile/xamarin', 'App\Http\Controllers\pagesController@xamarin');

//Database pages//
route::get('/technology/database/mysql', 'App\Http\Controllers\pagesController@mysql');
route::get('/technology/database/dynamodb', 'App\Http\Controllers\pagesController@dynamodb');
route::get('/technology/database/postgresql', 'App\Http\Controllers\pagesController@postgresql');
route::get('/technology/database/oracle', 'App\Http\Controllers\pagesController@oracle');
route::get('/technology/database/mongodb', 'App\Http\Controllers\pagesController@mongodb');
route::get('/technology/database/redis', 'App\Http\Controllers\pagesController@redis');

//Frontend pages//
route::get('/technology/frontend/angular', 'App\Http\Controllers\pagesController@angular');
route::get('/technology/frontend/reactjs', 'App\Http\Controllers\pagesController@reactjs')->name('frontend.reactjs');
route::get('/technology/frontend/vue', 'App\Http\Controllers\pagesController@vue');
route::get('/technology/frontend/typescript', 'App\Http\Controllers\pagesController@typescript');
route::get('/technology/frontend/wpf', 'App\Http\Controllers\pagesController@wpf');
route::get('/technology/frontend/html5', 'App\Http\Controllers\pagesController@html5');

//Backend pages//
route::get('/technology/backend/node', 'App\Http\Controllers\pagesController@node');
route::get('/technology/backend/php', 'App\Http\Controllers\pagesController@php');
route::get('/technology/backend/dotnet', 'App\Http\Controllers\pagesController@dotnet')->name('backend.dotnet');
route::get('/technology/backend/java', 'App\Http\Controllers\pagesController@java');
route::get('/technology/backend/python', 'App\Http\Controllers\pagesController@python');
route::get('/technology/backend/rails', 'App\Http\Controllers\pagesController@rails');
route::get('/technology/backend/codeigniter', 'App\Http\Controllers\pagesController@codeigniter');
route::get('/technology/backend/cakephp', 'App\Http\Controllers\pagesController@cakephp');
route::get('/technology/backend/zend', 'App\Http\Controllers\pagesController@zend');
route::get('/technology/backend/laravel', 'App\Http\Controllers\pagesController@laravel')->name('backend.laravel');

//Devops pages//
route::get('/technology/devops/aws', 'App\Http\Controllers\pagesController@aws');
route::get('/technology/devops/google_cloud', 'App\Http\Controllers\pagesController@google_cloud');
route::get('/technology/devops/azure', 'App\Http\Controllers\pagesController@azure');
route::get('/technology/devops/gradle', 'App\Http\Controllers\pagesController@gradle');
route::get('/technology/devops/jenkins', 'App\Http\Controllers\pagesController@jenkins');
route::get('/technology/devops/selenium', 'App\Http\Controllers\pagesController@selenium');

//Infra pages//
route::get('/technology/cms/magento', 'App\Http\Controllers\pagesController@magento');
route::get('/technology/cms/wordpress', 'App\Http\Controllers\pagesController@wordpress');
route::get('/technology/cms/shopify', 'App\Http\Controllers\pagesController@shopify');
route::get('/technology/cms/umbraco', 'App\Http\Controllers\pagesController@umbraco');
route::get('/technology/cms/drupal', 'App\Http\Controllers\pagesController@drupal');
route::get('/technology/cms/joomla', 'App\Http\Controllers\pagesController@joomla');



Route::post('/layouts/contact', 'App\Http\Controllers\EmailController@sendEmail')->name('sendEmailroute');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

route::get('/admin/logout', 'App\Http\Controllers\AdminController@Logout')->name('admin.logout');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/our-events','App\Http\Controllers\backend\OurEventController@index')->name('our-events.index');
    Route::get('/our-events/create','App\Http\Controllers\backend\OurEventController@create')->name('our-events.create');


    Route::resource('/testimonials', TestimonialsController::class);
    Route::post('/testimonials/delete/{id}', 'App\Http\Controllers\backend\TestimonialsController@tmDelete');
    Route::post('/testimonials/show/{id}', 'App\Http\Controllers\backend\TestimonialsController@tmShow');
    Route::post('/testimonials/hide/{id}', 'App\Http\Controllers\backend\TestimonialsController@tmHide');
    Route::post('/testimonials/active/{id}', 'App\Http\Controllers\backend\TestimonialsController@tmActive');


    // Clients 
    Route::resource('/clients', ClientsController::class);
    Route::post('/clients/delete/{id}', 'App\Http\Controllers\backend\ClientsController@tmDelete');
    Route::post('/clients/show/{id}', 'App\Http\Controllers\backend\ClientsController@tmShow');
    Route::post('/clients/hide/{id}', 'App\Http\Controllers\backend\ClientsController@tmHide');
    Route::post('/clients/update', 'App\Http\Controllers\backend\ClientsController@update')->name('client_update_data');
    Route::post('/clients/store/data', 'App\Http\Controllers\backend\ClientsController@ClientsStore')->name('client_store_data');

    //Employee
    Route::resource('/employee',EmployeeController::class);
    Route::post('/employee/store/data', 'App\Http\Controllers\backend\EmployeeController@EmployeeStore')->name('employee_store_data');
    Route::get('/employee/edit/{id}','App\Http\Controllers\backend\EmployeeController@EmployeeEdit')->name('employee.edit');
    Route::post('/employee/update','App\Http\Controllers\backend\EmployeeController@EmployeeUpdate')->name('employee.update');
    Route::post('/employee/delete/{id}','App\Http\Controllers\backend\EmployeeController@EmployeeDelete')->name('employee.delete');

    // Route::post

    // work slider 
    Route::resource('/work-slider', WorkSliderController::class);
    Route::post('/work-slider/delete/{id}', 'App\Http\Controllers\backend\WorkSliderController@tmDelete');
    Route::post('/work-slider/show/{id}', 'App\Http\Controllers\backend\WorkSliderController@tmShow');
    Route::post('/work-slider/hide/{id}', 'App\Http\Controllers\backend\WorkSliderController@tmHide');
    Route::post('/work-slider/update', 'App\Http\Controllers\backend\WorkSliderController@update')->name('work_slider_update_data');
    Route::post('/work-slider/store/data', 'App\Http\Controllers\backend\WorkSliderController@ClientsStore')->name('work_slider_store_data');


    Route::get('/setting', 'App\Http\Controllers\AdminController@setting_index')->name('site.setting');
    Route::post('/setting/create', 'App\Http\Controllers\AdminController@setting_store')->name('site.setting.store');
    // Route::group(['prefix' => 'WI'], function () {
    // });
});



//REDIRECT URLS
Route::get('/web-app-development', function () {
    return redirect('/services/web-development');
});
Route::get('/web_development', function () {
    return redirect('/services/web-development');
});
Route::get('/website-development', function () {
    return redirect('/services/web-development');
});


Route::get('/mobile-development', function () {
    return redirect('/services/mobile-app-development');
});
Route::get('/android-app-development', function () {
    return redirect('/services/mobile-app-development');
});
Route::get('/ios-app-development', function () {
    return redirect('/services/mobile-app-development');
});
Route::get('/mobileapp_development', function () {
    return redirect('/services/mobile-app-development');
});


Route::get('/design_development', function () {
    return redirect('/services/design-development');
});

Route::get('/devops_development', function () {
    return redirect('/services/devops-development');
});


Route::get('contact-form', [form_dataController::class, 'index']);
Route::post('captcha-validation', [form_dataController::class, 'capthcaFormValidate'])->name('captcha-validation');
Route::get('reload-captcha', [form_dataController::class, 'reloadCaptcha']);

Route::post('/store2', [form_dataController::class, 'storeInformation2'])->name('career.common.form.store2');

// Route::post('/layouts/contact', [form_dataController::class, 'sendEmail'])->name('sendEmailroute');


route::get('/blogs', 'App\Http\Controllers\pagesController@blogs');
route::get('/article/{id}', 'App\Http\Controllers\pagesController@blogSingle');
Route::get('/articles/category/{id}', 'App\Http\Controllers\pagesController@blogCategory');

Route::get('/articles/tag/{id}', 'App\Http\Controllers\pagesController@blogTag');

Route::resource('/articles_tag', ArticleTagController::class);
Route::post('/articles_tag/delete/{id}', 'App\Http\Controllers\backend\ArticleTagController@tagDelete');
Route::post('/articles_tag/show/{id}', 'App\Http\Controllers\backend\ArticleTagController@tagShow');
Route::post('/articles_tag/hide/{id}', 'App\Http\Controllers\backend\ArticleTagController@tagHide');
Route::post('/articles_tag/active/{id}', 'App\Http\Controllers\backend\ArticleTagController@tagActive');

Route::resource('/articles_category', ArticleCategoryController::class);
Route::post('/articles_category/delete/{id}', 'App\Http\Controllers\backend\ArticleCategoryController@articleDelete');
Route::post('/articles_category/show/{id}', 'App\Http\Controllers\backend\ArticleCategoryController@articleShow');
Route::post('/articles_category/hide/{id}', 'App\Http\Controllers\backend\ArticleCategoryController@articleHide');
Route::post('/articles_category/active/{id}', 'App\Http\Controllers\backend\ArticleCategoryController@articleActive');

Route::resource('/articles', articleController::class);
Route::post('/articles/delete/{id}', 'App\Http\Controllers\backend\articleController@articleDelete');
Route::post('/articles/show/{id}', 'App\Http\Controllers\backend\articleController@articleShow');
Route::post('/articles/hide/{id}', 'App\Http\Controllers\backend\articleController@articleHide');
Route::post('/articles/active/{id}', 'App\Http\Controllers\backend\articleController@articleActive');
Route::get('/changeStatus', 'App\Http\Controllers\backend\articleController@changeUserStatus');
Route::get('/changeCategoryStatus', 'App\Http\Controllers\backend\ArticleCategoryController@changeCategoryStatus');
Route::get('/changeCategoryTagStatus', 'App\Http\Controllers\backend\ArticleTagController@changeCategoryTagStatus');
Route::get('/changePublicationStatus', 'App\Http\Controllers\backend\articleController@changePublicationStatus');

Route::post('/meeting/book', 'App\Http\Controllers\pagesController@bookMeeting');
Route::post('/date/check', 'App\Http\Controllers\pagesController@dateCheck');
<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CaseStudiesController;
use App\Http\Controllers\Backend\ClientFeedbackController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\CopyRightController;
use App\Http\Controllers\Backend\CustomerMessageController;
use App\Http\Controllers\Backend\ExperienceController;
use App\Http\Controllers\Backend\ExportImportController;
use App\Http\Controllers\Backend\RecentWorkController;
use App\Http\Controllers\Backend\SearchController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SocialUrlController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\ThemeSettingController;
use App\Http\Controllers\Backend\TitleController;
use App\Http\Controllers\Backend\TrustUsController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\ProjectAreaController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\IframeController;
use App\Models\Contact;
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

//  Route::get('/dashboard',[AdminController::class,'index'])->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';


Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
Route::get('/ourservice/{slug}',[FrontendController::class,'service'])->name('our_service');

Route::get('/service',[FrontendController::class,'service2'])->name('service2');

Route::get('/cases',[FrontendController::class,'case'])->name('cases');
Route::get('/testimonials', [FrontendController::class, 'testimonials'])->name('testimonials');
Route::get('/about_us',[FrontendController::class,'about'])->name('about-us');

Route::get('/our_blog',[FrontendController::class,'blog'])->name('blog');
Route::get('/blogDetails/{id}',[FrontendController::class,'blogDetails'])->name('blog.details');


// Route::get('/service',[FrontendController::class,'service'])->name('our.service');

//Customer Message Save

Route::post('user/message',[CustomerMessageController::class,'store'])->name('store.customermessage');


//  All Route For Admin

Route::group(['prefix'=>'/admin','middleware'=>['auth']],function(){

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth'])->name('dashboard');

    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

        //Route for add Header text View
        Route::get('/headertextview',[HeaderController::class,'view'])->name('headertextview');

        //Route for updateheadertext

        Route::post('/update/header/text/{id}',[HeaderController::class,'update'])->name('updateheadertext');

    //Add Service View

    Route::get('/serviceview',[ServiceController::class,'index'])->name('admin.serviceview');

    // Route for Add Serviec
    Route::post('/addservice',[ServiceController::class,'store'])->name('admin.addservice');

      // Route for  Serviec Table View by
      Route::get('/servicetableview',[ServiceController::class,'servicetableview'])->name('admin.servicetableview');

      //Route for Service Details
      Route::get('/service/details/{id}',[ServiceController::class,'servicedetails'])->name('service.details');


       // Route for Our Service Update

       Route::post('/updateourservice/{id}',[ServiceController::class,'updateourservice'])->name('ourservice.update');


      //Route for service edit view

      Route::get('service/edit/view/{id}',[ServiceController::class,'editview'])->name('service.edit');

      Route::get('update/service/view',[ServiceController::class,'updateview'])->name('admin.updateserviceview');


     //Export Service
     Route::post('/export',[ExportImportController::class,'export'])->name('service-export');

     //Service Filter

     Route::get('/service-date-filter', [ServiceController::class, 'serviceDateFilter'])->name('service.date.filter');

     //Service table Search

     Route::get('/service-date-search', [ServiceController::class, 'serviceDataSearch'])->name('service.table.search');


     //Import Service
     Route::post('/import',[ExportImportController::class,'import'])->name('service-file-import');

    // Route::get('/servicetabledata',[ServiceController::class,'show']);


    Route::delete('/deleteservice/{id}',[ServiceController::class,'destroy'])->name('admin.deleteservice');

    // Route for  Show data in Modal

    // Route::get('/updateserviceview/{id}',[ServiceController::class,'servicelview'])->name('service.editview');

    //Route for update Service by modal with ajax
    Route::post('/updateservice/{id}',[ServiceController::class,'update'])->name('service.update');


    //Team Controller

    //Route FOr Team File Export
    Route::post('/teamexport',[ExportImportController::class,'teamexport'])->name('team-file-export');

    Route::post('/teamimport',[ExportImportController::class,'teamimport'])->name('team-file-import');

    //Route For Team Filter
    Route::get('/team-date-filter', [TeamController::class, 'teamDateFilter'])->name('team.date.filter');

    // Route for Team table Search
    Route::get('/team-data-search', [TeamController::class, 'teamDataSearch'])->name('team.table.search');


    // Route for form view for team

    Route::get('/teamview',[TeamController::class,'teamview'])->name('admin.teamview');
     // Route for Add team
    Route::post('/addteam',[TeamController::class,'create'])->name('admin.addteam');

     // Route for team data table

     Route::get('/teamtable',[TeamController::class,'teamtable'])->name('admin.teamtable');

     //Route for Team Delete

     Route::delete('/teamdelete/{id}',[TeamController::class,'destroy'])->name('admin.teamdata.destroy');

    //  Route for team data show for update
    Route::get('/teamdatashow/{id}',[TeamController::class,'showdata'])->name('admin.teamdatashow');

    //Route For TEam Update Admin
    Route::post('/update/{id}',[TeamController::class,'update'])->name('admin.team.update');

    //Recent Work
    // Route for Add Case Studies form View

    Route::get('recentwork',[RecentWorkController::class,'index'])->name('admin.addrecentwork');

    //  Route for recent work add
    Route::post('add/recentwork',[RecentWorkController::class,'store'])->name('admin.recentwork.store');

    Route::get('recent/work/table',[RecentWorkController::class,'show'])->name('admin.managerecentwork');

    //Route for recent work button update Show
    Route::get('recent/work/button',[RecentWorkController::class,'recent_work_button'])->name('recentwork.button.show');

    //Route for recent work button update
    Route::post('recent/work/button/update/{id}',[RecentWorkController::class,'recent_work_button_update'])->name('recentwork.button.update');

    // Recentwork Date Filter

    Route::get('/recentwork-date-filter', [RecentWorkController::class, 'recentworkDateFilter'])->name('recentwork.date.filter');

    //RecentWork Data Search
    Route::get('/recentwork-date-search', [RecentWorkController::class, 'recentworkDataSearch'])->name('recentwork.data.search');


    //Delete Recentwork

    Route::delete('delete/recentwork/{id}',[RecentWorkController::class,'destroy'])->name('admin.deleterecentwork');


    // Route for recent work update view form

    // Route::get('recentwork/update/view/{id}',RecentWorkController::class,'updateview')->name('admin.update.view');

    // Route for recent work Update

    Route::post('update/recentwork/{id}',[RecentWorkController::class,'update'])->name('admin.updaterecentwork');

    //Recent Work Import

    Route::post('recent/work/import',[RecentWorkController::class,'import'])->name('recentwork-file-import');

    //Recent Work Export

    Route::post('recent/work/Export',[RecentWorkController::class,'export'])->name('recentwork-file-export');

    // Client Feedback Section

    Route::get('view/clientfeedback',[ClientFeedbackController::class,'index'])->name('feedback.addview');

    //Route For add Feedback

    Route::post('add/clientfeedback',[ClientFeedbackController::class,'store'])->name('feedback.add');

    // Route For see Feedback Table

    Route::get('feedback/table',[ClientFeedbackController::class,'show'])->name('feedback.show');

    // Route for export feedback
    Route::post('/export/feedback',[ExportImportController::class,'exportFeedback'])->name('export-feedback');
    //Route for feedback file import
    Route::post('/import/feedback',[ExportImportController::class,'importFeedback'])->name('feedback-file-import');

    //Route For Filter Feedback Table
    Route::get('/feedback-date-filter', [ClientFeedbackController::class, 'feedbackkDateFilter'])->name('feedback.date.filter');

    //Routen for Search feedback Table

    Route::get('/feedback-data-search', [ClientFeedbackController::class, 'feedbackDataSearch'])->name('feedback.data.search');

    // Route for update form view Feedback

    Route::get('updateview/clientfeedback/{id}',[ClientFeedbackController::class,'updateview'])->name('feedback.updateview');

    // Route for update  Feedback

    Route::post('update/clientfeedback/{id}',[ClientFeedbackController::class,'update'])->name('feedback.update');


    // Route for Delete Feedback

    Route::delete('delete/clientfeedback/{id}',[ClientFeedbackController::class,'destroy'])->name('feedback.destroy');

    //User Message Show Admin
    Route::get('show/message',[CustomerMessageController::class,'show_message'])->name('customer.message.show');

    //User Message Date Filter  message.date.filter
    Route::get('message/date/filter',[CustomerMessageController::class,'messageDateFilter'])->name('message.date.filter');
    //User Message Table Search message.table.search

    Route::get('message/Search',[CustomerMessageController::class,'messageDataSearch'])->name('message.table.search');

    // Blog Section
    Route::resource('blog',BlogController::class);

    // Route for group Delete Message
    Route::get('user/message/delete',[CustomerMessageController::class,'mass_delete'])->name('message.delete');


    Route::delete('delete/message/{id}',[CustomerMessageController::class,'destroy'])->name('user.message.delete');

    // Project area Section

    Route::get('project/area/update',[ProjectAreaController::class,'updateview'])->name('project.area.updateview');

    //Project area update

    Route::post('project/area/update/{id}',[ProjectAreaController::class,'update'])->name('project.area.update');

    //Experience Are Update View

    Route::get('Experience/area/update',[ExperienceController::class,'updateview'])->name('experience.area.updateview');

    //Experience Are Update

    Route::post('experience/area/update/{id}',[ExperienceController::class,'update'])->name('experience.area.update');

    //Experience area Add Image view

    Route::get('Experience/area/addimage',[ExperienceController::class,'add_image_view'])->name('experience.area.addimage_view');

    // contact Area

    //Form view for contact address/phone add

    Route::get('/contact',[ContactController::class,'index'])->name('contact.updateview');

    Route::post('/contact/update/{id}',[ContactController::class,'update'])->name('contact.update');

    //Trust Us Section

    Route::get('trust/us',[TrustUsController::class,'index'])->name('trust.addview');

    // for Store Image
    Route::post('trust/us/store',[TrustUsController::class,'store'])->name('trust.store');
    // for Manage
    Route::get('trust/us/show',[TrustUsController::class,'show'])->name('trust.show');

    //Trust Destroy
    Route::delete('trust/destroy/{id}',[TrustUsController::class,'destroy'])->name('trust.destroy');

    //Trust Update
    Route::post('trust/update/{id}',[TrustUsController::class,'update'])->name('trust.update');

    //Title Setting

    Route::get('title/show',[TitleController::class,'show'])->name('title.show');

    Route::post('title/update/{id}',[TitleController::class,'update'])->name('title.update');

    //Social Area
    Route::get('social/url',[SocialUrlController::class,'index'])->name('social.url.update.view');
    //Social Area Update

    Route::post('social/url/update/{id}',[SocialUrlController::class,'update'])->name('social.url.update');

    //Copyright Area
    Route::get('copyright/update/view',[CopyRightController::class,'index'])->name('copyright.update.view');

    //CopyRight Update
    Route::post('copyright/update/{id}',[CopyRightController::class,'update'])->name('copyright.update');

    //ifrmae Area 
    Route::get('iframe/url', [IframeController::class, 'index'])->name('ifrmae.url.edit');
    //ifrmae Area Update
    Route::post('iframe/url/update/{id}', [IframeController::class, 'update'])->name('ifrmae.url.update');

    //Theme Color
    Route::get('theme-color', [ThemeSettingController::class, 'color'])->name('theme.color');

    Route::get('theme-toggle', [ThemeSettingController::class, 'toggle'])->name('theme.toggle');

    Route::post('admin/profile/update/{id}',[AdminController::class,'profile_update'])->name('admin.profile.update');

    Route::post('admin/update/{id}',[AdminController::class,'update'])->name('admin.update');

    Route::post('reset/password',[AdminController::class,'reset_password'])->name('reset-password');

    Route::get('/all/search/{search}',[SearchController::class,'allsearch'])->name('admin.allsearch');

    Route::get('general_setting',[GeneralSettingController::class,'index'])->name('generalsetting.update.view');
    Route::post('general_setting/update/{id}',[GeneralSettingController::class,'update'])->name('generalsetting.update');







});

    Route::get('my-profile', [AdminController::class, 'myProfile'])->name('my-profile');

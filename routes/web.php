<?php

use App\Http\Controllers\Backend\CaseStudiesController;
use App\Http\Controllers\Backend\ClientFeedbackController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\CustomerMessageController;
use App\Http\Controllers\Backend\ExperienceController;
use App\Http\Controllers\Backend\ExportImportController;
use App\Http\Controllers\Backend\RecentWorkController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\TitleController;
use App\Http\Controllers\Backend\TrustUsController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\ProjectAreaController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
Route::get('/ourservice/{id}',[FrontendController::class,'service'])->name('our_service');
Route::get('/cases',[FrontendController::class,'case'])->name('cases');
Route::get('/testimonials', [FrontendController::class, 'testimonials'])->name('testimonials');
Route::get('/about_us',[FrontendController::class,'about'])->name('about-us');





// Route::get('/service',[FrontendController::class,'service'])->name('our.service');


//  All Route For Admin
 
Route::group(['prefix'=>'/admin','middleware'=>['auth']],function(){

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

     //Export Service
     Route::post('/export',[ExportImportController::class,'export'])->name('service-export');

     //Import Service
     Route::post('/import',[ExportImportController::class,'import'])->name('service-file-import');
    // Route for  Serviec Table Data  View by Ajax

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

    // Route for update form view Feedback 

    Route::get('updateview/clientfeedback/{id}',[ClientFeedbackController::class,'updateview'])->name('feedback.updateview');

    // Route for update  Feedback 

    Route::post('update/clientfeedback/{id}',[ClientFeedbackController::class,'update'])->name('feedback.update');

    
    // Route for Delete Feedback 

    Route::delete('delete/clientfeedback/{id}',[ClientFeedbackController::class,'destroy'])->name('feedback.destroy');

    //Customer Message Save

    Route::post('user/message',[CustomerMessageController::class,'store'])->name('store.customermessage');

    //Customer Message Show Admin

    Route::get('show/message',[CustomerMessageController::class,'show_message'])->name('customer.message.show');

    // Route for group Delete Message 
    Route::delete('user/message/delete',[CustomerMessageController::class,'mass_delete'])->name('message.delete');
    
    
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
    












        
   




    



    

    

    


     








    

    



});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\{ManagePasswordController, DetailsController, UserController};
use App\Http\Controllers\Auth\{AuthenticatedSessionController};
use App\Http\Controllers\Admin\{
    SettingsController,
    RightsController,
    AdminController,
    AllProjectsController,
    BlogCategoriesController,
    BrandsController,
    CategoriesController,
    ContentManagementController,
    TagsController,
    TestimonialsController,
};
use App\Http\Controllers\Artist\{
    ArtworkController,
};
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\QuotationRequestsController;

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('home', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('admin.home');

    Route::post('toggle-status/{id}/{val}/{table}', function () {
        return "Code to toggle status";
        // DB::table()->where('id',$id);
    })->name('toggle_status');
    Route::get('logout', [AuthenticatedSessionController::class, 'destroy_get']);
    Route::get('/', function () {
        return redirect()->route('admin.home');
    });

    //--------- Right Management -----------------------------//
    Route::get('/roles-and-permission/roles', [RightsController::class, 'show_roles'])->name('roles.show');
    Route::get('/roles-and-permission/roles/add', [RightsController::class, 'add_role'])->name('role.add');
    Route::post('/roles-and-permission/roles/add', [RightsController::class, 'create_role'])->name('role.create');
    Route::get('/roles-and-permission/roles/edit/{role}', [RightsController::class, 'edit_role'])->name('roles.edit');
    Route::post('/roles-and-permission/roles/update/{role}', [RightsController::class, 'update_role'])->name('role.update');


    //  password management
    Route::get('manage-password', [ManagePasswordController::class, 'show_update'])->name('manage-password');
    Route::post('manage-password', [ManagePasswordController::class, 'update'])->name('manage-password');
    // user management
    Route::get('user/view', [DetailsController::class, 'show_all']);
    Route::get('user/edit', [DetailsController::class, 'edit_profile'])->name('updateProfile');
    Route::post('user/edit', [DetailsController::class, 'edit_profile'])->name('updateProfile');
    Route::get('user/{id}/profile', [DetailsController::class, 'show']);

    Route::get('users', [UserController::class, 'view'])->name('user_management-view');
    Route::get('user/fetch', [UserController::class, 'fetch'])->name('user_management-fetch');

    // settings managements
    Route::get('settings/list', [SettingsController::class, 'index'])->name('settings');
    Route::post('settings/list', [SettingsController::class, 'update'])->name('settings');


    // EMPLOYEE
    Route::get('admin-users', [AdminController::class, 'view'])->name('admin_users-view');
    Route::get('admin-user/fetch', [AdminController::class, 'fetch'])->name('admin_users-fetch');

    Route::get('admin-user/add', [AdminController::class, 'add'])->name('admin_users-add');
    Route::post('admin-user/add', [AdminController::class, 'add'])->name('admin_users-add');

    Route::get('admin-user/edit/{id}', [AdminController::class, 'edit'])->name('admin_users-edit');
    Route::post('admin-user/edit/{id}', [AdminController::class, 'edit'])->name('admin_users-edit');


    Route::prefix('newsletter')->controller(NewsletterController::class)->name('newsletter-')->group(function () {
        include('general_routes.php');
    });
    
    Route::prefix('inquiry')->controller(InquiryController::class)->name('inquiry-')->group(function () {
        include('general_routes.php');
    });
    
    Route::prefix('quotation')->controller(QuotationRequestsController::class)->name('quotation-')->group(function () {
        include('general_routes.php');
    });
    // TESTIMONIALS MANAGEMENT
    Route::prefix('testimonials')->controller(TestimonialsController::class)->name('testimonials-')->group(function () {
        include('general_routes.php');
    });

    // BRANDS MANAGEMENT
    Route::prefix('brands')->controller(BrandsController::class)->name('brands-')->group(function () {
        include('general_routes.php');
    });

    // PROJECTS MANAGEMENT
    Route::prefix('projects')->controller(AllProjectsController::class)->name('projects-')->group(function () {
        include('general_routes.php');
    });


    // CONTENT MANAGEMENT
    Route::prefix('content')->controller(ContentManagementController::class)->name('content-')->group(function () {
        Route::get('homepage', 'homepage')->name('homepage');
        Route::post('homepage', 'homepage')->name('homepage');

        Route::get('service-installation', 'serviceInstallation')->name('service-installation');
        Route::post('service-installation', 'serviceInstallation')->name('service-installation');

        Route::get('service-repair', 'serviceRepair')->name('service-repair');
        Route::post('service-repair', 'serviceRepair')->name('service-repair');

        Route::get('supply', 'supply')->name('supply');
        Route::post('supply', 'supply')->name('supply');
        
        Route::get('projects', 'projects')->name('projects');
        Route::post('projects', 'projects')->name('projects');
        
        Route::get('blogs', 'blogs')->name('blogs');
        Route::post('blogs', 'blogs')->name('blogs');
        
        Route::get('contact', 'contact')->name('contact');
        Route::post('contact', 'contact')->name('contact');
    });
});

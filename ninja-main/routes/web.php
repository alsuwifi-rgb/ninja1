<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\UserV2Controller;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Admin\TreasuryController;
use App\Http\Controllers\Admin\AppExpenseController;
use App\Http\Controllers\Admin\AppRevenueController;
use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\BankAccountController;
use App\Http\Controllers\Admin\RestaurantsController;
use App\Http\Controllers\Admin\RevenueSourceController;
use App\Http\Controllers\Admin\ContactCompanyController;
use App\Http\Controllers\Admin\finance\PocketController;
use App\Http\Controllers\Admin\TreasuryInvoiceController;
use App\Http\Controllers\Admin\AppExpenseSourceController;
use App\Http\Controllers\Admin\transaction\AgentController;
use App\Http\Controllers\Admin\BankAccountInvoiceController;
use App\Http\Controllers\Admin\Security\RoleSetupController;
use App\Http\Controllers\Admin\Security\UserSetupController;
use App\Http\Controllers\Admin\settings\RessourceController;
use App\Http\Controllers\Admin\transaction\DependController;
use App\Http\Controllers\Admin\finance\BankMouvementController;
use App\Http\Controllers\Admin\finance\CashMouvementController;
use App\Http\Controllers\Admin\finance\FinanceValidationController;

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('navigation/back', [App\Http\Controllers\Admin\NavigationController::class, 'back'])->name('navigation.back');
    Route::get('/getVacationBalance', [\App\Http\Controllers\Admin\UsersController::class, 'getBalances']);
    Route::get('security/setup', [UserSetupController::class, 'setup'])->name('user-setup.setup');
    Route::get('security/user-list', [UserSetupController::class, 'index'])->name('user-setup.index');
    Route::put('security/setup/{user}', [UserSetupController::class, 'update'])->name('user-setup.update');

    Route::delete('security/role-setup/{role}', [RoleSetupController::class, 'destroy'])->name('role-setup.destroy');
    Route::get('security/role-list', [RoleSetupController::class, 'index'])->name('role-setup.index');

    Route::get('security/role-setup/create', [RoleSetupController::class, 'create'])->name('role-setup.create');
    Route::post('security/role-setup', [RoleSetupController::class, 'store'])->name('role-setup.store');

    Route::get('security/role-setup/{role}/edit', [RoleSetupController::class, 'edit'])->name('role-setup.edit');
    Route::put('security/role-setup/{role}', [RoleSetupController::class, 'update'])->name('role-setup.update');

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('orders/export-monthly', [HomeController::class, 'exportMonthlyOrders'])->name('orders.exportMonthly');
    Route::get('/hr', 'HomeController@hrIndex')->name('hr-index')->middleware('can:hr_access');
    // Permissions
    //Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    //Route::resource('permissions', 'PermissionsController');

//     Roles
    //Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    //Route::resource('roles', 'RolesController');
    

    // Users
    // Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    // Route::post('users/media', 'UsersController@storeMedia')->name('users.storeMedia');
    // Route::post('users/ckmedia', 'UsersController@storeCKEditorImages')->name('users.storeCKEditorImages');
    // Route::resource('users', 'UsersController');

    // new Users

    Route::get('vehicles/get-media-by-number/{vehicleNumber}', [App\Http\Controllers\Admin\UserV2Controller::class, 'getVehicleMedia'])->name('vehicles.getMediaByNumber');
    Route::get('users/{user}/export', [UserV2Controller::class, 'exportSingle'])->name('users.export.single');
    Route::resource('users',App\Http\Controllers\Admin\UserV2Controller::class)->middleware('can:user_access');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController',
        ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Team
    Route::delete('teams/destroy', 'TeamController@massDestroy')->name('teams.massDestroy');
    Route::resource('teams', 'TeamController');

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::post('user-alerts/read', 'UserAlertsController@read')->name('user-alerts.read');
    Route::post('user-alerts/read-all', 'UserAlertsController@readAll')->name('user-alerts.readAll');
    Route::get('user-alerts/notifications', 'UserAlertsController@getNotifications')->name('user-alerts.getNotifications');
    Route::post('user-alerts/delete-for-user', 'UserAlertsController@destroyForUser')->name('user-alerts.destroyForUser');
     Route::get('user-alerts/{userAlert}/shownoti', 'UserAlertsController@shownoti')->name('user-alerts.shownoti');
    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);
   //vehcles
    Route::delete('vehicles/destroy', [VehicleController::class, 'massDestroy'])->name('vehicles.massDestroy');
    Route::get('vehicles/{vehicle}/export', [VehicleController::class, 'exportSingle'])->name('vehicles.export.single');
    Route::resource('vehicles', VehicleController::class);
//tracking
    Route::resource('tracking', 'TrackingController');

    // Route to display the schedule page and handle filtering
Route::get('attendance-schedule', [AttendanceController::class, 'scheduleIndex'])->name('attendance.schedule.index');

// Route to save the schedule data
Route::post('attendance-schedule', [AttendanceController::class, 'scheduleStore'])->name('attendance.schedule.store');
Route::post('attendance/schedule/bulk-store', 'AttendanceController@scheduleStoreBulk')->name('attendance.schedule.bulk.store');
Route::get('bank-accounts/{bankAccount}/invoice', [BankAccountInvoiceController::class, 'show'])->name('bank-accounts.invoice');
Route::resource('bank-accounts', BankAccountController::class);
Route::get('treasuries/{treasury}/invoice', [TreasuryInvoiceController::class, 'show'])->name('treasuries.invoice');

Route::resource('treasuries', TreasuryController::class);
    // Asset Category
    Route::delete('asset-categories/destroy',
        'AssetCategoryController@massDestroy')->name('asset-categories.massDestroy');
    Route::resource('asset-categories', 'AssetCategoryController');

    // Asset Location
    Route::delete('asset-locations/destroy',
        'AssetLocationController@massDestroy')->name('asset-locations.massDestroy');
    Route::resource('asset-locations', 'AssetLocationController');

    // Asset Status
    Route::delete('asset-statuses/destroy', 'AssetStatusController@massDestroy')->name('asset-statuses.massDestroy');
    Route::resource('asset-statuses', 'AssetStatusController');

    // Asset
    Route::delete('assets/destroy', 'AssetController@massDestroy')->name('assets.massDestroy');
    Route::post('assets/media', 'AssetController@storeMedia')->name('assets.storeMedia');
    Route::post('assets/ckmedia', 'AssetController@storeCKEditorImages')->name('assets.storeCKEditorImages');
    Route::resource('assets', 'AssetController');

    // Assets History
    Route::resource('assets-histories', 'AssetsHistoryController',
        ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Task Status
    Route::delete('task-statuses/destroy', 'TaskStatusController@massDestroy')->name('task-statuses.massDestroy');
    Route::resource('task-statuses', 'TaskStatusController');

    // Task Tag
    Route::delete('task-tags/destroy', 'TaskTagController@massDestroy')->name('task-tags.massDestroy');
    Route::resource('task-tags', 'TaskTagController');

    // Task
    Route::delete('tasks/destroy', 'TaskController@massDestroy')->name('tasks.massDestroy');
    Route::post('tasks/media', 'TaskController@storeMedia')->name('tasks.storeMedia');
    Route::post('tasks/ckmedia', 'TaskController@storeCKEditorImages')->name('tasks.storeCKEditorImages');
    Route::resource('tasks', 'TaskController');

    // Tasks Calendar
    Route::resource('tasks-calendars', 'TasksCalendarController',
        ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);


    // Contact Company
    Route::get('/all-users', [UserV2Controller::class, 'getAllUsers'])->name('users.all');
    Route::get('companies/{companyId}/users', 'ContactCompanyController@getUsers')
        ->name('companies.users');
    Route::delete('contact-companies/destroy',
        'ContactCompanyController@massDestroy')->name('contact-companies.massDestroy');
        Route::get('contact-companies/{contactCompany}/export', [ContactCompanyController::class, 'exportSingle'])->name('contact-companies.export.single');
    Route::resource('contact-companies', 'ContactCompanyController');

    // Contact Contacts
    Route::delete('contact-contacts/destroy',
        'ContactContactsController@massDestroy')->name('contact-contacts.massDestroy');
    Route::resource('contact-contacts', 'ContactContactsController');

    // Time Work Type
    Route::delete('time-work-types/destroy', 'TimeWorkTypeController@massDestroy')->name('time-work-types.massDestroy');
    Route::resource('time-work-types', 'TimeWorkTypeController');

    // Time Project
    Route::delete('time-projects/destroy', 'TimeProjectController@massDestroy')->name('time-projects.massDestroy');
    Route::resource('time-projects', 'TimeProjectController');

    // Time Entry
    Route::delete('time-entries/destroy', 'TimeEntryController@massDestroy')->name('time-entries.massDestroy');
    Route::resource('time-entries', 'TimeEntryController');

    // Time Report
    Route::delete('time-reports/destroy', 'TimeReportController@massDestroy')->name('time-reports.massDestroy');
    Route::resource('time-reports', 'TimeReportController');

    // Departments
    Route::delete('departments/destroy', 'DepartmentsController@massDestroy')->name('departments.massDestroy');
    Route::resource('departments', 'DepartmentsController');

    // Countries
    Route::delete('countries/destroy', 'CountriesController@massDestroy')->name('countries.massDestroy');
    Route::resource('countries', 'CountriesController');

    // Targets
    Route::delete('targets/destroy', 'TargetsController@massDestroy')->name('targets.massDestroy');
    Route::post('targets/parse-csv-import', 'TargetsController@parseCsvImport')->name('targets.parseCsvImport');
    Route::post('targets/process-csv-import', 'TargetsController@processCsvImport')->name('targets.processCsvImport');
    Route::resource('targets', 'TargetsController');

    // Order Sources
    Route::delete('order-sources/destroy', 'OrderSourcesController@massDestroy')->name('order-sources.massDestroy');
    Route::resource('order-sources', 'OrderSourcesController');

    // Restaurants
    Route::delete('restaurants/destroy', 'RestaurantsController@massDestroy')->name('restaurants.massDestroy');
    Route::get('/restaurants/showemail/{id}', [RestaurantsController::class, "showEmail"])->name("restaurants.showemail");
    Route::resource('restaurants', 'RestaurantsController');

    // OLD - Orders
    Route::delete('orders/destroy', 'OrdersController@massDestroy')->name('orders.massDestroy');
  //Route::resource('orders', 'OrdersController');

    // Maintenance
    Route::delete('maintenances/destroy', 'MaintenanceController@massDestroy')->name('maintenances.massDestroy');
    Route::post('maintenances/media', 'MaintenanceController@storeMedia')->name('maintenances.storeMedia');
    Route::post('maintenances/ckmedia',
        'MaintenanceController@storeCKEditorImages')->name('maintenances.storeCKEditorImages');
    Route::resource('maintenances', 'MaintenanceController');


    //Clients
    Route::get('clients/{client}/export', [ClientController::class, 'exportSingle'])->name('clients.export.single');
    Route::resource('clients', ClientController::class);



    Route::resource('app-expense-sources', AppExpenseSourceController::class)->except(['show']);
    Route::resource('app-expenses', AppExpenseController::class)->only(['index', 'store']);
    Route::resource('revenue-sources', RevenueSourceController::class)->except(['show']);
    Route::resource('app-revenues', AppRevenueController::class)->only(['index', 'store']);
    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
    Route::get('global-search', 'GlobalSearchController@search')->name('globalSearch');
    Route::get('team-members', 'TeamMembersController@index')->name('team-members.index');
    Route::post('team-members', 'TeamMembersController@invite')->name('team-members.invite');

    // Shifts
    Route::resource('shifts', \App\Http\Controllers\Admin\ShiftController::class);
    //Request types
    Route::resource('request-types', \App\Http\Controllers\Admin\RequestTypeController::class);
    //Requests
    Route::get('request/{hr_request}/{action}',
        [\App\Http\Controllers\Admin\RequestController::class, 'requestAction'])->name('request.action');
    Route::resource('requests', \App\Http\Controllers\Admin\RequestController::class);
    //attendance
    Route::resource('attendances', \App\Http\Controllers\Admin\AttendanceController::class);
    // new order
    Route::get('orders/change-status/{id}/{status}', [\App\Http\Controllers\Admin\OrderV2Controller::class, 'changeStatus'])
        ->name('orders.change_status')
        ->middleware('can:order_access');
        Route::get('orders/{order}/print-barcode', [\App\Http\Controllers\Admin\OrderV2Controller::class, 'printBarcode'])->name('orders.print_barcode');
    Route::resource('orders', \App\Http\Controllers\Admin\OrderV2Controller::class);
    // Mechanic
    Route::get('mechanics/{mechanic}/print-barcode', 'MechanicController@printBarcode')->name('mechanics.print_barcode');
    Route::resource('mechanics', \App\Http\Controllers\Admin\MechanicController::class);
    //Drivers
    Route::get('drivers/{driver}/export', [DriverController::class, 'exportSingle'])->name('drivers.export.single');

    Route::resource('drivers', DriverController::class);
    //daily-income
    Route::group(['prefix' => 'daily-income','as'=>'daily_income.','controller' => \App\Http\Controllers\Admin\DailyIncomeController::class],function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create'); // المسار لعرض نموذج الإضافة
        Route::post('/', 'store')->name('store');       // المسار لحفظ البيانات
    });



    // Maintenance Requests
    Route::get('maintenance-requests/{id}', [\App\Http\Controllers\Admin\MaintenanceRequestController::class, 'changeStatus'])
        ->name('maintenance-requests.change-status')
        ->middleware('can:maintenance_access');

        Route::get('maintenance-requests-work-order/{id}', [\App\Http\Controllers\Admin\MaintenanceRequestController::class, 'changeWorkOrderStatus'])
        ->name('maintenance-requests.change-work-order-status')
        ->middleware('can:maintenance_access');

        Route::put('maintenance-requests/signature/{id}', [\App\Http\Controllers\Admin\MaintenanceRequestController::class, 'update_signature'])
        ->name('maintenance-requests.update_signature')
        ->middleware(middleware: 'can:maintenance_access');

        Route::put('maintenance-requests/media/{id}', [\App\Http\Controllers\Admin\MaintenanceRequestController::class, 'updateMedia'])
        ->name('maintenance-requests.update_media')
        ->middleware(middleware: 'can:maintenance_access');

        Route::put('maintenance-requests/partial-update/{id}', [\App\Http\Controllers\Admin\MaintenanceRequestController::class, 'partialUpdate'])
        ->name('maintenance-requests.partial_update')
        ->middleware(middleware: 'can:maintenance_access');


    Route::resource('maintenance-requests', \App\Http\Controllers\Admin\MaintenanceRequestController::class)
        ->only(['store'])
        ->middleware('can:maintenance_access');

        Route::group(['prefix' => 'work-orders', 'as' => 'work_orders.', 'controller' => \App\Http\Controllers\Admin\WorkOrderController::class], function () {
            Route::get('/{id}', 'show')->name('show');
        });


        Route::resource('work-order-invoice', App\Http\Controllers\Admin\WorkOrderInvoiceController::class)
        ->only(['store'])
        ->middleware('can:maintenance_access');



});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});

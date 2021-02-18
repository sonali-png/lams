<?php

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
Route::get('/user/profile', function () {
    echo "my";
})->name('profile');
Route::get('/profile', function () {
    echo "my1";
});
Route::get('/', function () {
    return view('welcome');
});
Route::redirect('here', 'there', 302);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/add-phones', function () {
	
});
// Route::prefix('/admin')->group(function() {
//     Route::get('', function () {
//         return view('Admin.login');
//     });
//     Route::get('/dashboard', function () {
//         return view('admin_dashboard');
//     });
//     Route::prefix('/masters')->group(function() {
//         Route::get('/applications/{param?}/{param2?}', [App\Models\applications::class, 'performAppMasterOperations']);
//         Route::post('/applications/{param?}/{param2?}', [App\Models\applications::class, 'performAppMasterOperations']);
//         Route::get('/app-modules/{param?}/{param2?}', [App\Models\AppModule::class, 'performAppModuleMasterOperations']);
//         Route::post('/app-modules/{param?}/{param2?}', [App\Models\AppModule::class, 'performAppModuleMasterOperations']);
//     });
// });
Route::prefix('/admin')->group(function() {
    Route::get('/applications', [App\Models\applications::class, 'getApplicationList']);
    Route::get('/modules', [App\Models\AppModule::class, 'getModulesList']);
    // Route::get('/applications/{param?}/{param2?}', [App\Models\applications::class, 'performAppMasterOperations']);
    // Route::post('/applications/{param?}/{param2?}', [App\Models\applications::class, 'performAppMasterOperations']);
    // Route::get('/app-modules/{param?}/{param2?}', [App\Models\AppModule::class, 'performAppModuleMasterOperations']);
    // Route::post('/app-modules/{param?}/{param2?}', [App\Models\AppModule::class, 'performAppModuleMasterOperations']);
});
require __DIR__.'/auth.php';


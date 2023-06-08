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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\PropertyController::class, 'list'])->name('properties');

Route::get('/admin', function(){
    return view('admin');
});

Route::get('/admin1', function(){
    return view('admin1');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add-item', function(){
    return view('addItem');
});

Route::get('/property_types', function(){
    return view('property_types');
})->name('property_types');

Route::get('/addClients', function(){
    return view('addClients');
})->name('addClients');

Route::get('/property_types1', function(){
    return view('property_types1');
})->name('property_types1');


Route::get('property', [App\Http\Controllers\PropertyController::class, 'listProperty'])->name('property');
Route::get('edit_property/{id}', [App\Http\Controllers\PropertyController::class, 'editProperty'])->name('edit-property');
Route::post('update_property/{id}', [App\Http\Controllers\PropertyController::class, 'updateProperty'])->name('update-property');
Route::get('delete_property/{id}', [App\Http\Controllers\PropertyController::class, 'deleteProperty'])->name('delete-property');


Route::get('property-types', [App\Http\Controllers\PropertyController::class, 'listPropertyTypes'])->name('property-types');
Route::get('edit_property_type/{id}', [App\Http\Controllers\PropertyController::class, 'editPropertyTypes'])->name('edit-property-types');
Route::post('update_property_type/{id}', [App\Http\Controllers\PropertyController::class,'updatePropertyTypes'])->name('update-property-types');


Route::get('property-subtypes', [App\Http\Controllers\PropertyController::class, 'listPropertySubtypes'])->name('property-subtypes');
Route::get('edit_property_subtype/{id}', [App\Http\Controllers\PropertyController::class, 'editPropertySubtypes'])->name('edit-property-subtypes');
Route::post('update_property_subtype/{id}', [App\Http\Controllers\PropertyController::class, 'updatePropertySubtype'])->name('update-property-subtype');


Route::get('/property_sub_types', [App\Http\Controllers\PropertyController::class, 'index'])->name('property_sub_types');
Route::get('/property_subtypes1', [App\Http\Controllers\PropertyController::class, 'listSubtypes'])->name('property_subtypes1');
Route::get('/property_subtype_hierarchy', [App\Http\Controllers\PropertyController::class, 'index'])->name('property_subtype_hierarchy');


Route::get('/view-property/{id}', [App\Http\Controllers\PropertyController::class, 'show'])->name('view-property');
// Route::get('/view-property', function(){
//     return view('propertiesview');
// })->name('view-property');


Route::post('/add_property_type',[App\Http\Controllers\PropertyController::class, 'store'])->name('add_property_type');
Route::post('/add_property_sub_type',[App\Http\Controllers\PropertySubtypeController::class, 'store'])->name('add_property_subtype');
Route::post('/add_property_subtype_hierarchy', [App\Http\Controllers\PropertyController::class, 'subtypeHierarchy'])->name('add_property_subtype_hierarchy');

Route::post('/add_property', [App\Http\Controllers\ItemsController::class, 'store'])->name('add_property');

Route::get('search-property', [App\Http\Controllers\PropertyController::class, 'searchProperty'])->name('search-property');

Route::get('/clients', [App\Http\Controllers\ClientsController::class, 'list'])->name('clients');
Route::post('/add_clients', [App\Http\Controllers\ClientsController::class,'store'])->name('add_clients');

Route::get('edit_client/{id}', [App\Http\Controllers\ClientsController::class, 'edit'])->name('edit_clients');
Route::post('update_client/{id}', [App\Http\Controllers\ClientsController::class, 'update'])->name('update_client');
Route::get('delete_client/{id}', [App\Http\Controllers\ClientsController::class, 'destroy'])->name('delete_client');


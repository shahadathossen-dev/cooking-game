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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Route::resource('user', UserController::class);
    Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::post('users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
    
    Route::get('roles', [App\Http\Controllers\RoleController::class, 'roles'])->name('roles.index');
    
	Route::get('profile', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
	Route::put('profile', [App\Http\Controllers\UserController::class, 'updateProfile'])->name('profile.update');
	Route::get('reset-password', [App\Http\Controllers\UserController::class, 'password'])->name('user.password');
    Route::put('reset-password', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('password.change');

    // CM1A ROUTES
        // INGREDIENTS ROUTES
    Route::get('cm1a/ingredients', [App\Http\Controllers\CM1A\IngredientController::class, 'index'])->name('cm1a.ingredients.index');
    Route::get('cm1a/ingredients/create', [App\Http\Controllers\CM1A\IngredientController::class, 'create'])->name('cm1a.ingredients.create');
    Route::post('cm1a/ingredients', [App\Http\Controllers\CM1A\IngredientController::class, 'store'])->name('cm1a.ingredients.store');
    Route::get('cm1a/ingredients/{ingredient}/edit', [App\Http\Controllers\CM1A\IngredientController::class, 'edit'])->name('cm1a.ingredients.edit');
    Route::put('cm1a/ingredients/{ingredient}', [App\Http\Controllers\CM1A\IngredientController::class, 'update'])->name('cm1a.ingredients.update');
    Route::post('cm1a/ingredients/{ingredient}', [App\Http\Controllers\CM1A\IngredientController::class, 'destroy'])->name('cm1a.ingredients.destroy');

    Route::get('cm1a/ingredients/list', [App\Http\Controllers\CM1A\IngredientController::class, 'list'])->name('cm1a.ingredients.list');


        // MERGED INGREDIENTS ROUTES
    Route::get('cm1a/merged-ingredients', [App\Http\Controllers\CM1A\MergedIngredientController::class, 'index'])->name('cm1a.merged-ingredients.index');
    Route::get('cm1a/merged-ingredients/create', [App\Http\Controllers\CM1A\MergedIngredientController::class, 'create'])->name('cm1a.merged-ingredients.create');
    Route::post('cm1a/merged-ingredients', [App\Http\Controllers\CM1A\MergedIngredientController::class, 'store'])->name('cm1a.merged-ingredients.store');
    Route::get('cm1a/merged-ingredients/{ingredient}/edit', [App\Http\Controllers\CM1A\MergedIngredientController::class, 'edit'])->name('cm1a.merged-ingredients.edit');
    Route::put('cm1a/merged-ingredients/{ingredient}', [App\Http\Controllers\CM1A\MergedIngredientController::class, 'update'])->name('cm1a.merged-ingredients.update');
    Route::post('cm1a/merged-ingredients/{ingredient}', [App\Http\Controllers\CM1A\MergedIngredientController::class, 'destroy'])->name('cm1a.merged-ingredients.destroy');

        // Settings ROUTES
    Route::get('cm1a/attributes', [App\Http\Controllers\CM1A\AttributeController::class, 'index'])->name('cm1a.attributes.index');
    Route::get('cm1a/attributes/create', [App\Http\Controllers\CM1A\AttributeController::class, 'create'])->name('cm1a.attributes.create');
    Route::post('cm1a/attributes', [App\Http\Controllers\CM1A\AttributeController::class, 'store'])->name('cm1a.attributes.store');
    Route::get('cm1a/attributes/{attribute}/edit', [App\Http\Controllers\CM1A\AttributeController::class, 'edit'])->name('cm1a.attributes.edit');
    Route::put('cm1a/attributes/{attribute}', [App\Http\Controllers\CM1A\AttributeController::class, 'update'])->name('cm1a.attributes.update');
    Route::post('cm1a/attributes/{attribute}', [App\Http\Controllers\CM1A\AttributeController::class, 'destroy'])->name('cm1a.attributes.destroy');
    
    // CM2A ROUTES
        // INGREDIENTS ROUTES
    Route::get('cm2a/ingredients', [App\Http\Controllers\CM2A\IngredientController::class, 'index'])->name('cm2a.ingredients.index');
    Route::get('cm2a/ingredients/create', [App\Http\Controllers\CM2A\IngredientController::class, 'create'])->name('cm2a.ingredients.create');
    Route::post('cm2a/ingredients', [App\Http\Controllers\CM2A\IngredientController::class, 'store'])->name('cm2a.ingredients.store');
    Route::get('cm2a/ingredients/{ingredient}/edit', [App\Http\Controllers\CM2A\IngredientController::class, 'edit'])->name('cm2a.ingredients.edit');
    Route::put('cm2a/ingredients/{ingredient}', [App\Http\Controllers\CM2A\IngredientController::class, 'update'])->name('cm2a.ingredients.update');
    Route::post('cm2a/ingredients/{ingredient}', [App\Http\Controllers\CM2A\IngredientController::class, 'destroy'])->name('cm2a.ingredients.destroy');

    Route::get('cm2a/ingredients/list', [App\Http\Controllers\CM2A\IngredientController::class, 'list'])->name('cm2a.ingredients.list');


        // MERGED INGREDIENTS ROUTES
    Route::get('cm2a/merged-ingredients', [App\Http\Controllers\CM2A\MergedIngredientController::class, 'index'])->name('cm2a.merged-ingredients.index');
    Route::get('cm2a/merged-ingredients/create', [App\Http\Controllers\CM2A\MergedIngredientController::class, 'create'])->name('cm2a.merged-ingredients.create');
    Route::post('cm2a/merged-ingredients', [App\Http\Controllers\CM2A\MergedIngredientController::class, 'store'])->name('cm2a.merged-ingredients.store');
    Route::get('cm2a/merged-ingredients/{ingredient}/edit', [App\Http\Controllers\CM2A\MergedIngredientController::class, 'edit'])->name('cm2a.merged-ingredients.edit');
    Route::put('cm2a/merged-ingredients/{ingredient}', [App\Http\Controllers\CM2A\MergedIngredientController::class, 'update'])->name('cm2a.merged-ingredients.update');
    Route::post('cm2a/merged-ingredients/{ingredient}', [App\Http\Controllers\CM2A\MergedIngredientController::class, 'destroy'])->name('cm2a.merged-ingredients.destroy');

        // Settings ROUTES
    Route::get('cm2a/attributes', [App\Http\Controllers\CM2A\AttributeController::class, 'index'])->name('cm2a.attributes.index');
    Route::get('cm2a/attributes/create', [App\Http\Controllers\CM2A\AttributeController::class, 'create'])->name('cm2a.attributes.create');
    Route::post('cm2a/attributes', [App\Http\Controllers\CM2A\AttributeController::class, 'store'])->name('cm2a.attributes.store');
    Route::get('cm2a/attributes/{attribute}/edit', [App\Http\Controllers\CM2A\AttributeController::class, 'edit'])->name('cm2a.attributes.edit');
    Route::put('cm2a/attributes/{attribute}', [App\Http\Controllers\CM2A\AttributeController::class, 'update'])->name('cm2a.attributes.update');
    Route::post('cm2a/attributes/{attribute}', [App\Http\Controllers\CM2A\AttributeController::class, 'destroy'])->name('cm2a.attributes.destroy');
     
    // CM1B ROUTES
    // INGREDIENTS ROUTES
    Route::get('cm1b/ingredients', [App\Http\Controllers\CM1B\IngredientController::class, 'index'])->name('cm1b.ingredients.index');
    Route::get('cm1b/ingredients/create', [App\Http\Controllers\CM1B\IngredientController::class, 'create'])->name('cm1b.ingredients.create');
    Route::post('cm1b/ingredients', [App\Http\Controllers\CM1B\IngredientController::class, 'store'])->name('cm1b.ingredients.store');
    Route::get('cm1b/ingredients/{ingredient}/edit', [App\Http\Controllers\CM1B\IngredientController::class, 'edit'])->name('cm1b.ingredients.edit');
    Route::put('cm1b/ingredients/{ingredient}', [App\Http\Controllers\CM1B\IngredientController::class, 'update'])->name('cm1b.ingredients.update');
    Route::post('cm1b/ingredients/{ingredient}', [App\Http\Controllers\CM1B\IngredientController::class, 'destroy'])->name('cm1b.ingredients.destroy');

    Route::get('cm1b/ingredients/list', [App\Http\Controllers\CM1B\IngredientController::class, 'list'])->name('cm1b.ingredients.list');


        // MERGED INGREDIENTS ROUTES
    Route::get('cm1b/merged-ingredients', [App\Http\Controllers\CM1B\MergedIngredientController::class, 'index'])->name('cm1b.merged-ingredients.index');
    Route::get('cm1b/merged-ingredients/create', [App\Http\Controllers\CM1B\MergedIngredientController::class, 'create'])->name('cm1b.merged-ingredients.create');
    Route::post('cm1b/merged-ingredients', [App\Http\Controllers\CM1B\MergedIngredientController::class, 'store'])->name('cm1b.merged-ingredients.store');
    Route::get('cm1b/merged-ingredients/{ingredient}/edit', [App\Http\Controllers\CM1B\MergedIngredientController::class, 'edit'])->name('cm1b.merged-ingredients.edit');
    Route::put('cm1b/merged-ingredients/{ingredient}', [App\Http\Controllers\CM1B\MergedIngredientController::class, 'update'])->name('cm1b.merged-ingredients.update');
    Route::post('cm1b/merged-ingredients/{ingredient}', [App\Http\Controllers\CM1B\MergedIngredientController::class, 'destroy'])->name('cm1b.merged-ingredients.destroy');

        // Settings ROUTES
    Route::get('cm1b/attributes', [App\Http\Controllers\CM1B\AttributeController::class, 'index'])->name('cm1b.attributes.index');
    Route::get('cm1b/attributes/create', [App\Http\Controllers\CM1B\AttributeController::class, 'create'])->name('cm1b.attributes.create');
    Route::post('cm1b/attributes', [App\Http\Controllers\CM1B\AttributeController::class, 'store'])->name('cm1b.attributes.store');
    Route::get('cm1b/attributes/{attribute}/edit', [App\Http\Controllers\CM1B\AttributeController::class, 'edit'])->name('cm1b.attributes.edit');
    Route::put('cm1b/attributes/{attribute}', [App\Http\Controllers\CM1B\AttributeController::class, 'update'])->name('cm1b.attributes.update');
    Route::post('cm1b/attributes/{attribute}', [App\Http\Controllers\CM1B\AttributeController::class, 'destroy'])->name('cm1b.attributes.destroy');
    
    // CM2B ROUTES
        // INGREDIENTS ROUTES
    Route::get('cm2b/ingredients', [App\Http\Controllers\CM2B\IngredientController::class, 'index'])->name('cm2b.ingredients.index');
    Route::get('cm2b/ingredients/create', [App\Http\Controllers\CM2B\IngredientController::class, 'create'])->name('cm2b.ingredients.create');
    Route::post('cm2b/ingredients', [App\Http\Controllers\CM2B\IngredientController::class, 'store'])->name('cm2b.ingredients.store');
    Route::get('cm2b/ingredients/{ingredient}/edit', [App\Http\Controllers\CM2B\IngredientController::class, 'edit'])->name('cm2b.ingredients.edit');
    Route::put('cm2b/ingredients/{ingredient}', [App\Http\Controllers\CM2B\IngredientController::class, 'update'])->name('cm2b.ingredients.update');
    Route::post('cm2b/ingredients/{ingredient}', [App\Http\Controllers\CM2B\IngredientController::class, 'destroy'])->name('cm2b.ingredients.destroy');

    Route::get('cm2b/ingredients/list', [App\Http\Controllers\CM2B\IngredientController::class, 'list'])->name('cm2b.ingredients.list');


        // MERGED INGREDIENTS ROUTES
    Route::get('cm2b/merged-ingredients', [App\Http\Controllers\CM2B\MergedIngredientController::class, 'index'])->name('cm2b.merged-ingredients.index');
    Route::get('cm2b/merged-ingredients/create', [App\Http\Controllers\CM2B\MergedIngredientController::class, 'create'])->name('cm2b.merged-ingredients.create');
    Route::post('cm2b/merged-ingredients', [App\Http\Controllers\CM2B\MergedIngredientController::class, 'store'])->name('cm2b.merged-ingredients.store');
    Route::get('cm2b/merged-ingredients/{ingredient}/edit', [App\Http\Controllers\CM2B\MergedIngredientController::class, 'edit'])->name('cm2b.merged-ingredients.edit');
    Route::put('cm2b/merged-ingredients/{ingredient}', [App\Http\Controllers\CM2B\MergedIngredientController::class, 'update'])->name('cm2b.merged-ingredients.update');
    Route::post('cm2b/merged-ingredients/{ingredient}', [App\Http\Controllers\CM2B\MergedIngredientController::class, 'destroy'])->name('cm2b.merged-ingredients.destroy');

        // Settings ROUTES
    Route::get('cm2b/attributes', [App\Http\Controllers\CM2B\AttributeController::class, 'index'])->name('cm2b.attributes.index');
    Route::get('cm2b/attributes/create', [App\Http\Controllers\CM2B\AttributeController::class, 'create'])->name('cm2b.attributes.create');
    Route::post('cm2b/attributes', [App\Http\Controllers\CM2B\AttributeController::class, 'store'])->name('cm2b.attributes.store');
    Route::get('cm2b/attributes/{attribute}/edit', [App\Http\Controllers\CM2B\AttributeController::class, 'edit'])->name('cm2b.attributes.edit');
    Route::put('cm2b/attributes/{attribute}', [App\Http\Controllers\CM2B\AttributeController::class, 'update'])->name('cm2b.attributes.update');
    Route::post('cm2b/attributes/{attribute}', [App\Http\Controllers\CM2B\AttributeController::class, 'destroy'])->name('cm2b.attributes.destroy');
        

});
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

        // INGREDIENTS PRIORITY ROUTES
    Route::get('cm1a/ingredient-priority', [App\Http\Controllers\CM1A\IngredientPriorityController::class, 'index'])->name('cm1a.ingredient-priority.index');
    Route::get('cm1a/ingredient-priority/create', [App\Http\Controllers\CM1A\IngredientPriorityController::class, 'create'])->name('cm1a.ingredient-priority.create');
    Route::post('cm1a/ingredient-priority', [App\Http\Controllers\CM1A\IngredientPriorityController::class, 'store'])->name('cm1a.ingredient-priority.store');
    Route::get('cm1a/ingredient-priority/{ingredient}/edit', [App\Http\Controllers\CM1A\IngredientPriorityController::class, 'edit'])->name('cm1a.ingredient-priority.edit');
    Route::put('cm1a/ingredient-priority/{ingredient}', [App\Http\Controllers\CM1A\IngredientPriorityController::class, 'update'])->name('cm1a.ingredient-priority.update');
    Route::post('cm1a/ingredient-priority/{ingredient}', [App\Http\Controllers\CM1A\IngredientPriorityController::class, 'destroy'])->name('cm1a.ingredient-priority.destroy');

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

        // INGREDIENTS PRIORITY ROUTES
    Route::get('cm2a/ingredient-priority', [App\Http\Controllers\CM2A\IngredientPriorityController::class, 'index'])->name('cm2a.ingredient-priority.index');
    Route::get('cm2a/ingredient-priority/create', [App\Http\Controllers\CM2A\IngredientPriorityController::class, 'create'])->name('cm2a.ingredient-priority.create');
    Route::post('cm2a/ingredient-priority', [App\Http\Controllers\CM2A\IngredientPriorityController::class, 'store'])->name('cm2a.ingredient-priority.store');
    Route::get('cm2a/ingredient-priority/{ingredient}/edit', [App\Http\Controllers\CM2A\IngredientPriorityController::class, 'edit'])->name('cm2a.ingredient-priority.edit');
    Route::put('cm2a/ingredient-priority/{ingredient}', [App\Http\Controllers\CM2A\IngredientPriorityController::class, 'update'])->name('cm2a.ingredient-priority.update');
    Route::post('cm2a/ingredient-priority/{ingredient}', [App\Http\Controllers\CM2A\IngredientPriorityController::class, 'destroy'])->name('cm2a.ingredient-priority.destroy');

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

        // INGREDIENTS PRIORITY ROUTES
    Route::get('cm1b/ingredient-priority', [App\Http\Controllers\CM1B\IngredientPriorityController::class, 'index'])->name('cm1b.ingredient-priority.index');
    Route::get('cm1b/ingredient-priority/create', [App\Http\Controllers\CM1B\IngredientPriorityController::class, 'create'])->name('cm1b.ingredient-priority.create');
    Route::post('cm1b/ingredient-priority', [App\Http\Controllers\CM1B\IngredientPriorityController::class, 'store'])->name('cm1b.ingredient-priority.store');
    Route::get('cm1b/ingredient-priority/{ingredient}/edit', [App\Http\Controllers\CM1B\IngredientPriorityController::class, 'edit'])->name('cm1b.ingredient-priority.edit');
    Route::put('cm1b/ingredient-priority/{ingredient}', [App\Http\Controllers\CM1B\IngredientPriorityController::class, 'update'])->name('cm1b.ingredient-priority.update');
    Route::post('cm1b/ingredient-priority/{ingredient}', [App\Http\Controllers\CM1B\IngredientPriorityController::class, 'destroy'])->name('cm1b.ingredient-priority.destroy');

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

        // INGREDIENTS PRIORITY ROUTES
    Route::get('cm2b/ingredient-priority', [App\Http\Controllers\CM2B\IngredientPriorityController::class, 'index'])->name('cm2b.ingredient-priority.index');
    Route::get('cm2b/ingredient-priority/create', [App\Http\Controllers\CM2B\IngredientPriorityController::class, 'create'])->name('cm2b.ingredient-priority.create');
    Route::post('cm2b/ingredient-priority', [App\Http\Controllers\CM2B\IngredientPriorityController::class, 'store'])->name('cm2b.ingredient-priority.store');
    Route::get('cm2b/ingredient-priority/{ingredient}/edit', [App\Http\Controllers\CM2B\IngredientPriorityController::class, 'edit'])->name('cm2b.ingredient-priority.edit');
    Route::put('cm2b/ingredient-priority/{ingredient}', [App\Http\Controllers\CM2B\IngredientPriorityController::class, 'update'])->name('cm2b.ingredient-priority.update');
    Route::post('cm2b/ingredient-priority/{ingredient}', [App\Http\Controllers\CM2B\IngredientPriorityController::class, 'destroy'])->name('cm2b.ingredient-priority.destroy');

        // Settings ROUTES
    Route::get('cm2b/attributes', [App\Http\Controllers\CM2B\AttributeController::class, 'index'])->name('cm2b.attributes.index');
    Route::get('cm2b/attributes/create', [App\Http\Controllers\CM2B\AttributeController::class, 'create'])->name('cm2b.attributes.create');
    Route::post('cm2b/attributes', [App\Http\Controllers\CM2B\AttributeController::class, 'store'])->name('cm2b.attributes.store');
    Route::get('cm2b/attributes/{attribute}/edit', [App\Http\Controllers\CM2B\AttributeController::class, 'edit'])->name('cm2b.attributes.edit');
    Route::put('cm2b/attributes/{attribute}', [App\Http\Controllers\CM2B\AttributeController::class, 'update'])->name('cm2b.attributes.update');
    Route::post('cm2b/attributes/{attribute}', [App\Http\Controllers\CM2B\AttributeController::class, 'destroy'])->name('cm2b.attributes.destroy');

    // WoodChop CM1A ROUTES
        // Settings ROUTES
    Route::get('woodchop/wc1a/attributes', [App\Http\Controllers\WoodChop\WC1A\AttributeController::class, 'index'])->name('woodchop.wc1a.attributes.index');
    Route::get('woodchop/wc1a/attributes/create', [App\Http\Controllers\WoodChop\WC1A\AttributeController::class, 'create'])->name('woodchop.wc1a.attributes.create');
    Route::post('woodchop/wc1a/attributes', [App\Http\Controllers\WoodChop\WC1A\AttributeController::class, 'store'])->name('woodchop.wc1a.attributes.store');
    Route::get('woodchop/wc1a/attributes/{attribute}/edit', [App\Http\Controllers\WoodChop\WC1A\AttributeController::class, 'edit'])->name('woodchop.wc1a.attributes.edit');
    Route::put('woodchop/wc1a/attributes/{attribute}', [App\Http\Controllers\WoodChop\WC1A\AttributeController::class, 'update'])->name('woodchop.wc1a.attributes.update');
    Route::post('woodchop/wc1a/attributes/{attribute}', [App\Http\Controllers\WoodChop\WC1A\AttributeController::class, 'destroy'])->name('woodchop.wc1a.attributes.destroy');

    // CM2A ROUTES
        // Settings ROUTES
    Route::get('woodchop/wc2a/attributes', [App\Http\Controllers\WoodChop\WC2A\AttributeController::class, 'index'])->name('woodchop.wc2a.attributes.index');
    Route::get('woodchop/wc2a/attributes/create', [App\Http\Controllers\WoodChop\WC2A\AttributeController::class, 'create'])->name('woodchop.wc2a.attributes.create');
    Route::post('woodchop/wc2a/attributes', [App\Http\Controllers\WoodChop\WC2A\AttributeController::class, 'store'])->name('woodchop.wc2a.attributes.store');
    Route::get('woodchop/wc2a/attributes/{attribute}/edit', [App\Http\Controllers\WoodChop\WC2A\AttributeController::class, 'edit'])->name('woodchop.wc2a.attributes.edit');
    Route::put('woodchop/wc2a/attributes/{attribute}', [App\Http\Controllers\WoodChop\WC2A\AttributeController::class, 'update'])->name('woodchop.wc2a.attributes.update');
    Route::post('woodchop/wc2a/attributes/{attribute}', [App\Http\Controllers\WoodChop\WC2A\AttributeController::class, 'destroy'])->name('woodchop.wc2a.attributes.destroy');

    // CM1B ROUTES
        // Settings ROUTES
    Route::get('woodchop/wc1b/attributes', [App\Http\Controllers\WoodChop\WC1B\AttributeController::class, 'index'])->name('woodchop.wc1b.attributes.index');
    Route::get('woodchop/wc1b/attributes/create', [App\Http\Controllers\WoodChop\WC1B\AttributeController::class, 'create'])->name('woodchop.wc1b.attributes.create');
    Route::post('woodchop/wc1b/attributes', [App\Http\Controllers\WoodChop\WC1B\AttributeController::class, 'store'])->name('woodchop.wc1b.attributes.store');
    Route::get('woodchop/wc1b/attributes/{attribute}/edit', [App\Http\Controllers\WoodChop\WC1B\AttributeController::class, 'edit'])->name('woodchop.wc1b.attributes.edit');
    Route::put('woodchop/wc1b/attributes/{attribute}', [App\Http\Controllers\WoodChop\WC1B\AttributeController::class, 'update'])->name('woodchop.wc1b.attributes.update');
    Route::post('woodchop/wc1b/attributes/{attribute}', [App\Http\Controllers\WoodChop\WC1B\AttributeController::class, 'destroy'])->name('woodchop.wc1b.attributes.destroy');

    // CM2B ROUTES
        // Settings ROUTES
    Route::get('woodchop/wc2b/attributes', [App\Http\Controllers\WoodChop\WC2B\AttributeController::class, 'index'])->name('woodchop.wc2b.attributes.index');
    Route::get('woodchop/wc2b/attributes/create', [App\Http\Controllers\WoodChop\WC2B\AttributeController::class, 'create'])->name('woodchop.wc2b.attributes.create');
    Route::post('woodchop/wc2b/attributes', [App\Http\Controllers\WoodChop\WC2B\AttributeController::class, 'store'])->name('woodchop.wc2b.attributes.store');
    Route::get('woodchop/wc2b/attributes/{attribute}/edit', [App\Http\Controllers\WoodChop\WC2B\AttributeController::class, 'edit'])->name('woodchop.wc2b.attributes.edit');
    Route::put('woodchop/wc2b/attributes/{attribute}', [App\Http\Controllers\WoodChop\WC2B\AttributeController::class, 'update'])->name('woodchop.wc2b.attributes.update');
    Route::post('woodchop/wc2b/attributes/{attribute}', [App\Http\Controllers\WoodChop\WC2B\AttributeController::class, 'destroy'])->name('woodchop.wc2b.attributes.destroy');

    // CM3A ROUTES
        // Settings ROUTES
    Route::get('woodchop/wc3a/attributes', [App\Http\Controllers\WoodChop\WC3A\AttributeController::class, 'index'])->name('woodchop.wc3a.attributes.index');
    Route::get('woodchop/wc3a/attributes/create', [App\Http\Controllers\WoodChop\WC3A\AttributeController::class, 'create'])->name('woodchop.wc3a.attributes.create');
    Route::post('woodchop/wc3a/attributes', [App\Http\Controllers\WoodChop\WC3A\AttributeController::class, 'store'])->name('woodchop.wc3a.attributes.store');
    Route::get('woodchop/wc3a/attributes/{attribute}/edit', [App\Http\Controllers\WoodChop\WC3A\AttributeController::class, 'edit'])->name('woodchop.wc3a.attributes.edit');
    Route::put('woodchop/wc3a/attributes/{attribute}', [App\Http\Controllers\WoodChop\WC3A\AttributeController::class, 'update'])->name('woodchop.wc3a.attributes.update');
    Route::post('woodchop/wc3a/attributes/{attribute}', [App\Http\Controllers\WoodChop\WC3A\AttributeController::class, 'destroy'])->name('woodchop.wc3a.attributes.destroy');

    // CM3B ROUTES
        // Settings ROUTES
    Route::get('woodchop/wc3b/attributes', [App\Http\Controllers\WoodChop\WC3B\AttributeController::class, 'index'])->name('woodchop.wc3b.attributes.index');
    Route::get('woodchop/wc3b/attributes/create', [App\Http\Controllers\WoodChop\WC3B\AttributeController::class, 'create'])->name('woodchop.wc3b.attributes.create');
    Route::post('woodchop/wc3b/attributes', [App\Http\Controllers\WoodChop\WC3B\AttributeController::class, 'store'])->name('woodchop.wc3b.attributes.store');
    Route::get('woodchop/wc3b/attributes/{attribute}/edit', [App\Http\Controllers\WoodChop\WC3B\AttributeController::class, 'edit'])->name('woodchop.wc3b.attributes.edit');
    Route::put('woodchop/wc3b/attributes/{attribute}', [App\Http\Controllers\WoodChop\WC3B\AttributeController::class, 'update'])->name('woodchop.wc3b.attributes.update');
    Route::post('woodchop/wc3b/attributes/{attribute}', [App\Http\Controllers\WoodChop\WC3B\AttributeController::class, 'destroy'])->name('woodchop.wc3b.attributes.destroy');

    // CM1A ROUTES
        // MAPS ROUTES
    Route::get('v1is/islands', [App\Http\Controllers\V1IS\IslandController::class, 'index'])->name('v1is.islands.index');
    Route::get('v1is/islands/create', [App\Http\Controllers\V1IS\IslandController::class, 'create'])->name('v1is.islands.create');
    Route::post('v1is/islands', [App\Http\Controllers\V1IS\IslandController::class, 'store'])->name('v1is.islands.store');
    Route::get('v1is/islands/{island}/edit', [App\Http\Controllers\V1IS\IslandController::class, 'edit'])->name('v1is.islands.edit');
    Route::put('v1is/islands/{island}', [App\Http\Controllers\V1IS\IslandController::class, 'update'])->name('v1is.islands.update');
    Route::post('v1is/islands/{island}', [App\Http\Controllers\V1IS\IslandController::class, 'destroy'])->name('v1is.islands.destroy');

    Route::get('v1is/islands/list', [App\Http\Controllers\V1IS\IslandController::class, 'list'])->name('v1is.islands.list');

        // MAPS SHAPES ROUTES
    Route::get('v1is/island-shapes', [App\Http\Controllers\V1IS\IslandShapeController::class, 'index'])->name('v1is.island-shapes.index');
    Route::get('v1is/island-shapes/create', [App\Http\Controllers\V1IS\IslandShapeController::class, 'create'])->name('v1is.island-shapes.create');
    Route::post('v1is/island-shapes', [App\Http\Controllers\V1IS\IslandShapeController::class, 'store'])->name('v1is.island-shapes.store');
    Route::get('v1is/island-shapes/{islandShape}/edit', [App\Http\Controllers\V1IS\IslandShapeController::class, 'edit'])->name('v1is.island-shapes.edit');
    Route::put('v1is/island-shapes/{islandShape}', [App\Http\Controllers\V1IS\IslandShapeController::class, 'update'])->name('v1is.island-shapes.update');
    Route::post('v1is/island-shapes/{islandShape}', [App\Http\Controllers\V1IS\IslandShapeController::class, 'destroy'])->name('v1is.island-shapes.destroy');

        // MAPS SIZES ROUTES
    Route::get('v1is/island-sizes', [App\Http\Controllers\V1IS\IslandSizeController::class, 'index'])->name('v1is.island-sizes.index');
    Route::get('v1is/island-sizes/create', [App\Http\Controllers\V1IS\IslandSizeController::class, 'create'])->name('v1is.island-sizes.create');
    Route::post('v1is/island-sizes', [App\Http\Controllers\V1IS\IslandSizeController::class, 'store'])->name('v1is.island-sizes.store');
    Route::get('v1is/island-sizes/{islandSize}/edit', [App\Http\Controllers\V1IS\IslandSizeController::class, 'edit'])->name('v1is.island-sizes.edit');
    Route::put('v1is/island-sizes/{islandSize}', [App\Http\Controllers\V1IS\IslandSizeController::class, 'update'])->name('v1is.island-sizes.update');
    Route::post('v1is/island-sizes/{islandSize}', [App\Http\Controllers\V1IS\IslandSizeController::class, 'destroy'])->name('v1is.island-sizes.destroy');

        // MAPS ATTRIBUTES ROUTES
    Route::get('v1is/island-attributes', [App\Http\Controllers\V1IS\IslandAttributeController::class, 'index'])->name('v1is.island-attributes.index');
    Route::get('v1is/island-attributes/create', [App\Http\Controllers\V1IS\IslandAttributeController::class, 'create'])->name('v1is.island-attributes.create');
    Route::post('v1is/island-attributes', [App\Http\Controllers\V1IS\IslandAttributeController::class, 'store'])->name('v1is.island-attributes.store');
    Route::get('v1is/island-attributes/{attribute}/edit', [App\Http\Controllers\V1IS\IslandAttributeController::class, 'edit'])->name('v1is.island-attributes.edit');
    Route::put('v1is/island-attributes/{attribute}', [App\Http\Controllers\V1IS\IslandAttributeController::class, 'update'])->name('v1is.island-attributes.update');
    Route::post('v1is/island-attributes/{attribute}', [App\Http\Controllers\V1IS\IslandAttributeController::class, 'destroy'])->name('v1is.island-attributes.destroy');

});
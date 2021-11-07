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

    // CM3 ROUTES
    // PLATES ROUTES
    Route::get('cm3/plates', [App\Http\Controllers\CM3\PlateController::class, 'index'])->name('cm3.plates.index');
    Route::get('cm3/plates/create', [App\Http\Controllers\CM3\PlateController::class, 'create'])->name('cm3.plates.create');
    Route::post('cm3/plates', [App\Http\Controllers\CM3\PlateController::class, 'store'])->name('cm3.plates.store');
    Route::get('cm3/plates/{plate}/edit', [App\Http\Controllers\CM3\PlateController::class, 'edit'])->name('cm3.plates.edit');
    Route::put('cm3/plates/{plate}', [App\Http\Controllers\CM3\PlateController::class, 'update'])->name('cm3.plates.update');
    Route::post('cm3/plates/{plate}', [App\Http\Controllers\CM3\PlateController::class, 'destroy'])->name('cm3.plates.destroy');

    Route::get('cm3/plates/list', [App\Http\Controllers\CM3\PlateController::class, 'list'])->name('cm3.plates.list');


    // MERGED INGREDIENTS ROUTES
    Route::get('cm3/plate-combs', [App\Http\Controllers\CM3\PlateCombController::class, 'index'])->name('cm3.plate-combs.index');
    Route::get('cm3/plate-combs/create', [App\Http\Controllers\CM3\PlateCombController::class, 'create'])->name('cm3.plate-combs.create');
    Route::post('cm3/plate-combs', [App\Http\Controllers\CM3\PlateCombController::class, 'store'])->name('cm3.plate-combs.store');
    Route::get('cm3/plate-combs/{plate_comb}/edit', [App\Http\Controllers\CM3\PlateCombController::class, 'edit'])->name('cm3.plate-combs.edit');
    Route::put('cm3/plate-combs/{plate_comb}', [App\Http\Controllers\CM3\PlateCombController::class, 'update'])->name('cm3.plate-combs.update');
    Route::post('cm3/plate-combs/{plate_comb}', [App\Http\Controllers\CM3\PlateCombController::class, 'destroy'])->name('cm3.plate-combs.destroy');

    // INGREDIENTS PRIORITY ROUTES
    Route::get('cm3/food-items', [App\Http\Controllers\CM3\FoodItemController::class, 'index'])->name('cm3.food-items.index');
    Route::get('cm3/food-items/create', [App\Http\Controllers\CM3\FoodItemController::class, 'create'])->name('cm3.food-items.create');
    Route::post('cm3/food-items', [App\Http\Controllers\CM3\FoodItemController::class, 'store'])->name('cm3.food-items.store');
    Route::get('cm3/food-items/{food_item}/edit', [App\Http\Controllers\CM3\FoodItemController::class, 'edit'])->name('cm3.food-items.edit');
    Route::put('cm3/food-items/{food_item}', [App\Http\Controllers\CM3\FoodItemController::class, 'update'])->name('cm3.food-items.update');
    Route::post('cm3/food-items/{food_item}', [App\Http\Controllers\CM3\FoodItemController::class, 'destroy'])->name('cm3.food-items.destroy');

    // INGREDIENTS PRIORITY ROUTES
    Route::get('cm3/levels', [App\Http\Controllers\CM3\LevelController::class, 'index'])->name('cm3.levels.index');
    Route::get('cm3/levels/create', [App\Http\Controllers\CM3\LevelController::class, 'create'])->name('cm3.levels.create');
    Route::post('cm3/levels', [App\Http\Controllers\CM3\LevelController::class, 'store'])->name('cm3.levels.store');
    Route::get('cm3/levels/{level}/edit', [App\Http\Controllers\CM3\LevelController::class, 'edit'])->name('cm3.levels.edit');
    Route::put('cm3/levels/{level}', [App\Http\Controllers\CM3\LevelController::class, 'update'])->name('cm3.levels.update');
    Route::post('cm3/levels/{level}', [App\Http\Controllers\CM3\LevelController::class, 'destroy'])->name('cm3.levels.destroy');

    // Settings ROUTES
    Route::get('cm3/attributes', [App\Http\Controllers\CM3\AttributeController::class, 'index'])->name('cm3.attributes.index');
    Route::get('cm3/attributes/create', [App\Http\Controllers\CM3\AttributeController::class, 'create'])->name('cm3.attributes.create');
    Route::post('cm3/attributes', [App\Http\Controllers\CM3\AttributeController::class, 'store'])->name('cm3.attributes.store');
    Route::get('cm3/attributes/{attribute}/edit', [App\Http\Controllers\CM3\AttributeController::class, 'edit'])->name('cm3.attributes.edit');
    Route::put('cm3/attributes/{attribute}', [App\Http\Controllers\CM3\AttributeController::class, 'update'])->name('cm3.attributes.update');
    Route::post('cm3/attributes/{attribute}', [App\Http\Controllers\CM3\AttributeController::class, 'destroy'])->name('cm3.attributes.destroy');

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

    // Dungeon Cleaner ROUTES
    // Settings ROUTES
    Route::get('dungeon-cleaner/attributes', [App\Http\Controllers\DungeonCleaner\AttributeController::class, 'index'])->name('dungeon-cleaner.attributes.index');
    Route::get('dungeon-cleaner/attributes/create', [App\Http\Controllers\DungeonCleaner\AttributeController::class, 'create'])->name('dungeon-cleaner.attributes.create');
    Route::post('dungeon-cleaner/attributes', [App\Http\Controllers\DungeonCleaner\AttributeController::class, 'store'])->name('dungeon-cleaner.attributes.store');
    Route::get('dungeon-cleaner/attributes/{attribute}/edit', [App\Http\Controllers\DungeonCleaner\AttributeController::class, 'edit'])->name('dungeon-cleaner.attributes.edit');
    Route::put('dungeon-cleaner/attributes/{attribute}', [App\Http\Controllers\DungeonCleaner\AttributeController::class, 'update'])->name('dungeon-cleaner.attributes.update');
    Route::post('dungeon-cleaner/attributes/{attribute}', [App\Http\Controllers\DungeonCleaner\AttributeController::class, 'destroy'])->name('dungeon-cleaner.attributes.destroy');

    // Danger Meter ROUTES
    Route::get('dungeon-cleaner/pillur-coordinates', [App\Http\Controllers\DungeonCleaner\PillurCoordinateController::class, 'index'])->name('dungeon-cleaner.pillur-coordinates.index');
    Route::get('dungeon-cleaner/pillur-coordinates/create', [App\Http\Controllers\DungeonCleaner\PillurCoordinateController::class, 'create'])->name('dungeon-cleaner.pillur-coordinates.create');
    Route::post('dungeon-cleaner/pillur-coordinates', [App\Http\Controllers\DungeonCleaner\PillurCoordinateController::class, 'store'])->name('dungeon-cleaner.pillur-coordinates.store');
    Route::get('dungeon-cleaner/pillur-coordinates/{pillurCoordinate}/edit', [App\Http\Controllers\DungeonCleaner\PillurCoordinateController::class, 'edit'])->name('dungeon-cleaner.pillur-coordinates.edit');
    Route::put('dungeon-cleaner/pillur-coordinates/{pillurCoordinate}', [App\Http\Controllers\DungeonCleaner\PillurCoordinateController::class, 'update'])->name('dungeon-cleaner.pillur-coordinates.update');
    Route::post('dungeon-cleaner/pillur-coordinates/{pillurCoordinate}', [App\Http\Controllers\DungeonCleaner\PillurCoordinateController::class, 'destroy'])->name('dungeon-cleaner.pillur-coordinates.destroy');

    // Shop ROUTES
    Route::get('dungeon-cleaner/tile-spawns', [App\Http\Controllers\DungeonCleaner\TileSpawnController::class, 'index'])->name('dungeon-cleaner.tile-spawns.index');
    Route::get('dungeon-cleaner/tile-spawns/create', [App\Http\Controllers\DungeonCleaner\TileSpawnController::class, 'create'])->name('dungeon-cleaner.tile-spawns.create');
    Route::post('dungeon-cleaner/tile-spawns', [App\Http\Controllers\DungeonCleaner\TileSpawnController::class, 'store'])->name('dungeon-cleaner.tile-spawns.store');
    Route::get('dungeon-cleaner/tile-spawns/{tileSpawn}/edit', [App\Http\Controllers\DungeonCleaner\TileSpawnController::class, 'edit'])->name('dungeon-cleaner.tile-spawns.edit');
    Route::put('dungeon-cleaner/tile-spawns/{tileSpawn}', [App\Http\Controllers\DungeonCleaner\TileSpawnController::class, 'update'])->name('dungeon-cleaner.tile-spawns.update');
    Route::post('dungeon-cleaner/tile-spawns/{tileSpawn}', [App\Http\Controllers\DungeonCleaner\TileSpawnController::class, 'destroy'])->name('dungeon-cleaner.tile-spawns.destroy');

    // WC3A ROUTES
    // Settings ROUTES
    Route::get('woodchop/wc3a/attributes', [App\Http\Controllers\WoodChop\WC3A\AttributeController::class, 'index'])->name('woodchop.wc3a.attributes.index');
    Route::get('woodchop/wc3a/attributes/create', [App\Http\Controllers\WoodChop\WC3A\AttributeController::class, 'create'])->name('woodchop.wc3a.attributes.create');
    Route::post('woodchop/wc3a/attributes', [App\Http\Controllers\WoodChop\WC3A\AttributeController::class, 'store'])->name('woodchop.wc3a.attributes.store');
    Route::get('woodchop/wc3a/attributes/{attribute}/edit', [App\Http\Controllers\WoodChop\WC3A\AttributeController::class, 'edit'])->name('woodchop.wc3a.attributes.edit');
    Route::put('woodchop/wc3a/attributes/{attribute}', [App\Http\Controllers\WoodChop\WC3A\AttributeController::class, 'update'])->name('woodchop.wc3a.attributes.update');
    Route::post('woodchop/wc3a/attributes/{attribute}', [App\Http\Controllers\WoodChop\WC3A\AttributeController::class, 'destroy'])->name('woodchop.wc3a.attributes.destroy');

    // Danger Meter ROUTES
    Route::get('woodchop/wc3a/danger-meter', [App\Http\Controllers\WoodChop\WC3A\DangerMeterController::class, 'index'])->name('woodchop.wc3a.danger-meter.index');
    Route::get('woodchop/wc3a/danger-meter/create', [App\Http\Controllers\WoodChop\WC3A\DangerMeterController::class, 'create'])->name('woodchop.wc3a.danger-meter.create');
    Route::post('woodchop/wc3a/danger-meter', [App\Http\Controllers\WoodChop\WC3A\DangerMeterController::class, 'store'])->name('woodchop.wc3a.danger-meter.store');
    Route::get('woodchop/wc3a/danger-meter/{dangerMeter}/edit', [App\Http\Controllers\WoodChop\WC3A\DangerMeterController::class, 'edit'])->name('woodchop.wc3a.danger-meter.edit');
    Route::put('woodchop/wc3a/danger-meter/{dangerMeter}', [App\Http\Controllers\WoodChop\WC3A\DangerMeterController::class, 'update'])->name('woodchop.wc3a.danger-meter.update');
    Route::post('woodchop/wc3a/danger-meter/{dangerMeter}', [App\Http\Controllers\WoodChop\WC3A\DangerMeterController::class, 'destroy'])->name('woodchop.wc3a.danger-meter.destroy');

    // Shop ROUTES
    Route::get('woodchop/wc3a/shops', [App\Http\Controllers\WoodChop\WC3A\ShopController::class, 'index'])->name('woodchop.wc3a.shops.index');
    Route::get('woodchop/wc3a/shops/create', [App\Http\Controllers\WoodChop\WC3A\ShopController::class, 'create'])->name('woodchop.wc3a.shops.create');
    Route::post('woodchop/wc3a/shops', [App\Http\Controllers\WoodChop\WC3A\ShopController::class, 'store'])->name('woodchop.wc3a.shops.store');
    Route::get('woodchop/wc3a/shops/{shop}/edit', [App\Http\Controllers\WoodChop\WC3A\ShopController::class, 'edit'])->name('woodchop.wc3a.shops.edit');
    Route::put('woodchop/wc3a/shops/{shop}', [App\Http\Controllers\WoodChop\WC3A\ShopController::class, 'update'])->name('woodchop.wc3a.shops.update');
    Route::post('woodchop/wc3a/shops/{shop}', [App\Http\Controllers\WoodChop\WC3A\ShopController::class, 'destroy'])->name('woodchop.wc3a.shops.destroy');

    // Grade ROUTES
    Route::get('woodchop/wc3a/configs', [App\Http\Controllers\WoodChop\WC3A\ConfigController::class, 'index'])->name('woodchop.wc3a.configs.index');
    Route::get('woodchop/wc3a/configs/create', [App\Http\Controllers\WoodChop\WC3A\ConfigController::class, 'create'])->name('woodchop.wc3a.configs.create');
    Route::post('woodchop/wc3a/configs', [App\Http\Controllers\WoodChop\WC3A\ConfigController::class, 'store'])->name('woodchop.wc3a.configs.store');
    Route::get('woodchop/wc3a/configs/{level}/edit', [App\Http\Controllers\WoodChop\WC3A\ConfigController::class, 'edit'])->name('woodchop.wc3a.configs.edit');
    Route::put('woodchop/wc3a/configs/{level}', [App\Http\Controllers\WoodChop\WC3A\ConfigController::class, 'update'])->name('woodchop.wc3a.configs.update');
    Route::post('woodchop/wc3a/configs/{level}', [App\Http\Controllers\WoodChop\WC3A\ConfigController::class, 'destroy'])->name('woodchop.wc3a.configs.destroy');

    // Grade ROUTES
    Route::get('woodchop/wc3a/levels', [App\Http\Controllers\WoodChop\WC3A\LevelController::class, 'index'])->name('woodchop.wc3a.levels.index');
    Route::get('woodchop/wc3a/levels/create', [App\Http\Controllers\WoodChop\WC3A\LevelController::class, 'create'])->name('woodchop.wc3a.levels.create');
    Route::post('woodchop/wc3a/levels', [App\Http\Controllers\WoodChop\WC3A\LevelController::class, 'store'])->name('woodchop.wc3a.levels.store');
    Route::get('woodchop/wc3a/levels/{level}/edit', [App\Http\Controllers\WoodChop\WC3A\LevelController::class, 'edit'])->name('woodchop.wc3a.levels.edit');
    Route::put('woodchop/wc3a/levels/{level}', [App\Http\Controllers\WoodChop\WC3A\LevelController::class, 'update'])->name('woodchop.wc3a.levels.update');
    Route::post('woodchop/wc3a/levels/{level}', [App\Http\Controllers\WoodChop\WC3A\LevelController::class, 'destroy'])->name('woodchop.wc3a.levels.destroy');

    // CM3B ROUTES
    // Settings ROUTES
    Route::get('woodchop/wc3b/attributes', [App\Http\Controllers\WoodChop\WC3B\AttributeController::class, 'index'])->name('woodchop.wc3b.attributes.index');
    Route::get('woodchop/wc3b/attributes/create', [App\Http\Controllers\WoodChop\WC3B\AttributeController::class, 'create'])->name('woodchop.wc3b.attributes.create');
    Route::post('woodchop/wc3b/attributes', [App\Http\Controllers\WoodChop\WC3B\AttributeController::class, 'store'])->name('woodchop.wc3b.attributes.store');
    Route::get('woodchop/wc3b/attributes/{attribute}/edit', [App\Http\Controllers\WoodChop\WC3B\AttributeController::class, 'edit'])->name('woodchop.wc3b.attributes.edit');
    Route::put('woodchop/wc3b/attributes/{attribute}', [App\Http\Controllers\WoodChop\WC3B\AttributeController::class, 'update'])->name('woodchop.wc3b.attributes.update');
    Route::post('woodchop/wc3b/attributes/{attribute}', [App\Http\Controllers\WoodChop\WC3B\AttributeController::class, 'destroy'])->name('woodchop.wc3b.attributes.destroy');

    // V1IS ROUTES
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

    // V2IS ROUTES
    // MAPS ROUTES
    Route::get('v2is/islands', [App\Http\Controllers\V2IS\IslandController::class, 'index'])->name('v2is.islands.index');
    Route::get('v2is/islands/create', [App\Http\Controllers\V2IS\IslandController::class, 'create'])->name('v2is.islands.create');
    Route::post('v2is/islands', [App\Http\Controllers\V2IS\IslandController::class, 'store'])->name('v2is.islands.store');
    Route::get('v2is/islands/{island}/edit', [App\Http\Controllers\V2IS\IslandController::class, 'edit'])->name('v2is.islands.edit');
    Route::put('v2is/islands/{island}', [App\Http\Controllers\V2IS\IslandController::class, 'update'])->name('v2is.islands.update');
    Route::post('v2is/islands/{island}', [App\Http\Controllers\V2IS\IslandController::class, 'destroy'])->name('v2is.islands.destroy');

    Route::get('v2is/islands/list', [App\Http\Controllers\V2IS\IslandController::class, 'list'])->name('v2is.islands.list');

    // MAPS SHAPES ROUTES
    Route::get('v2is/island-shapes', [App\Http\Controllers\V2IS\IslandShapeController::class, 'index'])->name('v2is.island-shapes.index');
    Route::get('v2is/island-shapes/create', [App\Http\Controllers\V2IS\IslandShapeController::class, 'create'])->name('v2is.island-shapes.create');
    Route::post('v2is/island-shapes', [App\Http\Controllers\V2IS\IslandShapeController::class, 'store'])->name('v2is.island-shapes.store');
    Route::get('v2is/island-shapes/{islandShape}/edit', [App\Http\Controllers\V2IS\IslandShapeController::class, 'edit'])->name('v2is.island-shapes.edit');
    Route::put('v2is/island-shapes/{islandShape}', [App\Http\Controllers\V2IS\IslandShapeController::class, 'update'])->name('v2is.island-shapes.update');
    Route::post('v2is/island-shapes/{islandShape}', [App\Http\Controllers\V2IS\IslandShapeController::class, 'destroy'])->name('v2is.island-shapes.destroy');

    // MAPS SIZES ROUTES
    Route::get('v2is/island-sizes', [App\Http\Controllers\V2IS\IslandSizeController::class, 'index'])->name('v2is.island-sizes.index');
    Route::get('v2is/island-sizes/create', [App\Http\Controllers\V2IS\IslandSizeController::class, 'create'])->name('v2is.island-sizes.create');
    Route::post('v2is/island-sizes', [App\Http\Controllers\V2IS\IslandSizeController::class, 'store'])->name('v2is.island-sizes.store');
    Route::get('v2is/island-sizes/{islandSize}/edit', [App\Http\Controllers\V2IS\IslandSizeController::class, 'edit'])->name('v2is.island-sizes.edit');
    Route::put('v2is/island-sizes/{islandSize}', [App\Http\Controllers\V2IS\IslandSizeController::class, 'update'])->name('v2is.island-sizes.update');
    Route::post('v2is/island-sizes/{islandSize}', [App\Http\Controllers\V2IS\IslandSizeController::class, 'destroy'])->name('v2is.island-sizes.destroy');

    // MAPS ATTRIBUTES ROUTES
    Route::get('v2is/island-attributes', [App\Http\Controllers\V2IS\IslandAttributeController::class, 'index'])->name('v2is.island-attributes.index');
    Route::get('v2is/island-attributes/create', [App\Http\Controllers\V2IS\IslandAttributeController::class, 'create'])->name('v2is.island-attributes.create');
    Route::post('v2is/island-attributes', [App\Http\Controllers\V2IS\IslandAttributeController::class, 'store'])->name('v2is.island-attributes.store');
    Route::get('v2is/island-attributes/{attribute}/edit', [App\Http\Controllers\V2IS\IslandAttributeController::class, 'edit'])->name('v2is.island-attributes.edit');
    Route::put('v2is/island-attributes/{attribute}', [App\Http\Controllers\V2IS\IslandAttributeController::class, 'update'])->name('v2is.island-attributes.update');
    Route::post('v2is/island-attributes/{attribute}', [App\Http\Controllers\V2IS\IslandAttributeController::class, 'destroy'])->name('v2is.island-attributes.destroy');

    // MBV1 ROUTES
    // MINION BATTLE DECK ROUTES
    Route::get('mbv1/decks', [App\Http\Controllers\MBV1\DeckController::class, 'index'])->name('mbv1.decks.index');
    Route::get('mbv1/decks/create', [App\Http\Controllers\MBV1\DeckController::class, 'create'])->name('mbv1.decks.create');
    Route::post('mbv1/decks', [App\Http\Controllers\MBV1\DeckController::class, 'store'])->name('mbv1.decks.store');
    Route::get('mbv1/decks/{deck}/edit', [App\Http\Controllers\MBV1\DeckController::class, 'edit'])->name('mbv1.decks.edit');
    Route::put('mbv1/decks/{deck}', [App\Http\Controllers\MBV1\DeckController::class, 'update'])->name('mbv1.decks.update');
    Route::post('mbv1/decks/{deck}', [App\Http\Controllers\MBV1\DeckController::class, 'destroy'])->name('mbv1.decks.destroy');

    // MINION BATTLE CONFIG ROUTES
    Route::get('mbv1/deck-attributes', [App\Http\Controllers\MBV1\AttributeController::class, 'index'])->name('mbv1.deck-attributes.index');
    Route::get('mbv1/deck-attributes/create', [App\Http\Controllers\MBV1\AttributeController::class, 'create'])->name('mbv1.deck-attributes.create');
    Route::post('mbv1/deck-attributes', [App\Http\Controllers\MBV1\AttributeController::class, 'store'])->name('mbv1.deck-attributes.store');
    Route::get('mbv1/deck-attributes/{attribute}/edit', [App\Http\Controllers\MBV1\AttributeController::class, 'edit'])->name('mbv1.deck-attributes.edit');
    Route::put('mbv1/deck-attributes/{attribute}', [App\Http\Controllers\MBV1\AttributeController::class, 'update'])->name('mbv1.deck-attributes.update');
    Route::post('mbv1/deck-attributes/{attribute}', [App\Http\Controllers\MBV1\AttributeController::class, 'destroy'])->name('mbv1.deck-attributes.destroy');

    // MBV2 ROUTES
    // MINION BATTLE DECK ROUTES
    Route::get('mbv2/decks', [App\Http\Controllers\MBV2\DeckController::class, 'index'])->name('mbv2.decks.index');
    Route::get('mbv2/decks/create', [App\Http\Controllers\MBV2\DeckController::class, 'create'])->name('mbv2.decks.create');
    Route::post('mbv2/decks', [App\Http\Controllers\MBV2\DeckController::class, 'store'])->name('mbv2.decks.store');
    Route::get('mbv2/decks/{deck}/edit', [App\Http\Controllers\MBV2\DeckController::class, 'edit'])->name('mbv2.decks.edit');
    Route::put('mbv2/decks/{deck}', [App\Http\Controllers\MBV2\DeckController::class, 'update'])->name('mbv2.decks.update');
    Route::post('mbv2/decks/{deck}', [App\Http\Controllers\MBV2\DeckController::class, 'destroy'])->name('mbv2.decks.destroy');

    // MINION BATTLE CONFIG ROUTES
    Route::get('mbv2/deck-attributes', [App\Http\Controllers\MBV2\AttributeController::class, 'index'])->name('mbv2.deck-attributes.index');
    Route::get('mbv2/deck-attributes/create', [App\Http\Controllers\MBV2\AttributeController::class, 'create'])->name('mbv2.deck-attributes.create');
    Route::post('mbv2/deck-attributes', [App\Http\Controllers\MBV2\AttributeController::class, 'store'])->name('mbv2.deck-attributes.store');
    Route::get('mbv2/deck-attributes/{attribute}/edit', [App\Http\Controllers\MBV2\AttributeController::class, 'edit'])->name('mbv2.deck-attributes.edit');
    Route::put('mbv2/deck-attributes/{attribute}', [App\Http\Controllers\MBV2\AttributeController::class, 'update'])->name('mbv2.deck-attributes.update');
    Route::post('mbv2/deck-attributes/{attribute}', [App\Http\Controllers\MBV2\AttributeController::class, 'destroy'])->name('mbv2.deck-attributes.destroy');
});

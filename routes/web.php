<?php
use App\Models\Dish;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DishesController;
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

// Route::get('/', [DishesController::class,'index']); ->middleware(['auth', 'verified'])->name('dashboard')

Route::get('/', function () {return view('welcome',['dishes' => Dish::all()]);});

Route::get('/dashboard', [DishesController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('dishes', DishesController::class)
    ->only(['index','create', 'store', 'edit' , 'update', 'destroy'])
    ->middleware('auth');


Route::post('/update',[DishesController::class,'editDish'])->name('editDish');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

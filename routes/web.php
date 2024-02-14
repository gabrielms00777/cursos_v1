<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudantController;
use App\Livewire\{Admin, Home, Studant};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// auth()->loginUsingId(1);
// auth()->logout();
// php artisan view:clear
// php artisan cache:clear
// php artisan config:clear
// php artisan event:clear
// php artisan route:clear

Route::get('/', Home\Index::class)->name('index');

Route::get('/curso/{course}', Home\Show::class)->name('course');

Route::prefix('/meus-cursos')->middleware('studant')->group(function () {

    Route::get('/', Studant\Index::class)->name('studant.index');

    Route::get('/{course}/{lesson}', Studant\Show::class)->name('course.show');
});


Route::prefix('/dashboard')->middleware('admin')->group(function () {

    Route::get('/', Admin\Index::class)->name('dashboard');

    Route::get('/cursos', Admin\Course\Index::class)->name('admin.course.index');

    Route::get('/cursos/editar/{course}', Admin\Course\Edit::class)->name('admin.course.edit');
});



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\SongController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\BandController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeamController;
use App\Models\AlbumModel;

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

Route::resources([
    'songs' => SongController::class,
    'albums' => AlbumController::class,
    'bands' => BandController::class
]);

/* Songs LV1 en LV2 
Route::get('/songs', [SongController::class, 'index'])->Name('songs.index');
Route::post('/songs', [SongController::class, 'store'])->Name('songs.store');
Route::delete('/songs/{id}', [SongController::class, 'destroy'])->Name('songs.destroy');
Route::get('/songs/create', [SongController::class, 'create'])->Name('songs.create');
Route::get('/songs/{songIdx}',[SongController::class, 'show']);
Route::get('/songs/{songIdx}/edit',[SongController::class, 'edit'])->Name('songs.edit');
Route::put('/songs/{id}', [SongController::class, 'update'])->Name('songs.update');*/

/* Albums LV2 
Route::get('/albums', [AlbumController::class, 'index'])->Name('albums.index');
Route::post('/albums', [AlbumController::class, 'store'])->Name('albums.store');
Route::delete('/albums/{id}', [AlbumController::class, 'destroy'])->Name('albums.destroy');
Route::get('/albums/create', [AlbumController::class, 'create'])->Name('albums.create');
Route::get('/albums/{albumIdx}',[AlbumController::class, 'show']);
Route::get('/albums/{albumIdx}/edit',[AlbumController::class, 'edit'])->Name('albums.edit');
Route::put('/albums/{id}', [AlbumController::class, 'update'])->Name('albums.update');*/

/* Bands LV2 
Route::get('/bands', [BandController::class, 'index'])->Name('bands.index');
Route::post('/bands', [BandController::class, 'store'])->Name('bands.store');
Route::delete('/bands/{id}', [BandController::class, 'destroy'])->Name('bands.destroy');
Route::get('/bands/create', [BandController::class, 'create'])->Name('bands.create');
Route::get('/bands/{bandIdx}',[BandController::class, 'show']);
Route::get('/bands/{bandIdx}/edit',[BandController::class, 'edit'])->Name('bands.edit');
Route::put('/bands/{id}', [BandController::class, 'update'])->Name('bands.update');*/



/* Week 1 ('php artisan serve')*/
Route::get('/Bordeel', function () {
    return view('Week1/bordeel', ['name' => 'Martijn', 'age' => '17']);
});
Route::get('/Infobordeel/{ID}', [StudentController::class, 'idUitUrl']);

Route::get('/Overzicht', function () {
    return view('Week1/overzichtPoes');
});
Route::get('/Reserveren', function () {
    return view('Week1/reserveren');
});


/* Week 2 ('npm run dev')*/
Route::get('/Tail', function () {
    return view('Week2/Tailwind');
});

Route::get('/Student', function () {
    return view('Week2/Student', ['naam' => 'Martijn']);
});

Route::get('/Student2/{naamUitUrl}', [StudentController::class, 'show']); //De hele naam in caps

Route::get('/Home', function () {
    return view('Home');
});
Route::get('/teams', [TeamController::class, 'index'])->Name('teams');

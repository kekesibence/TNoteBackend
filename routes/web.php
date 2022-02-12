<?php

use App\Models\Note;
use App\Models\Styles;
use App\Models\Timetable;
use App\Models\User;
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

Route::get('/', function () {
    $users = User::all();
    $notes = Note::all();
    $styles = Styles::all();
    $timetables = Timetable::all();
    return view('welcome', [
        'usercount' => $users->count(), 
        'notecount' => $notes->count(),
        'stylecount' => $styles->count(),
        'timetablecount' => $timetables->count()
    ]);
});

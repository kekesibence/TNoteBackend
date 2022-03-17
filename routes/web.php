<?php

use App\Models\Note;
use App\Models\Style;
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

/*Route::get('/', function () {
    $users = User::all();
    $notes = Note::all();
    $styles = Style::all();
    $timetables = Timetable::all();
    return view('welcome', [
        'usercount' => $users->count(), 
        'notecount' => $notes->count(),
        'stylecount' => $styles->count(),
        'timetablecount' => $timetables->count()
    ]);
});
*/
Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');
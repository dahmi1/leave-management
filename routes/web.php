<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use app\Models\Vacation;

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

Route::get('/', function () 
{
    return view('home',  [
        'employees' => Employee::all()]);
}
);

Route::get('Employees/{id}', function ( Employee $id) {
    return view('SingleNewEmployee', [
        'employee'=> $id 
    ]);
});






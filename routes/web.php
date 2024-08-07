<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

// index The Home Page and it's just simple list for all the employee for the company
Route::get('/', function() {
    return view('home',  [
        'employees' => Employee::all()]);
}
);

// This is CRUD operation for Employee
// create an employee and save it to the database
Route::post('/home', function () {

    request()->validate([
        'workId' => ['required', 'unique:employee'],
        'firstName' => ['required', 'max:255'],
        'middleName' => ['required', 'max:255'],
        'lastName' =>  ['required', 'max:255'],
        'email' =>  ['email'],
        'phoneNo' =>  ['required', 'max:10', 'unique:employee'],
        'position' =>  ['required', 'max:255'],
        'sector' =>  ['required', 'max:255'],
        'nationalId' =>  ['required', 'max:255', 'unique:employee'],
        'joined' =>  ['required', 'max:255'],
        'dateOfBirth' => ['required']
    ]); 


    Employee::create([
        'workId' => request('workId'),
        'firstName' => request('firstName'),
        'middleName' => request('middleName'),
        'lastName' => request('lastName'),
        'email' => request('email'),
        'phoneNo' => request('phoneNo'),
        'position' => request('position'),
        'sector' => request('sector'),
        'nationalId' => request('nationalId'),
        'joined' => request('joined'),
        'dateOfBirth' => request('dateOfBirth')
    ]);
    return redirect('/');
});

// create an employee form
Route::get('/addNewEmployee', function () {
    return view('addNewEmployee');
});


// read employee
Route::get('Employees/{id}', function ( Employee $id) {
    return view('SingleNewEmployee', [
        'employee'=> $id 
    ]);
});

// update an existing employee
Route::get('/Employees/{id}/edit', function (Employee $id) {
    return view('editEmployee', [
        'employee' => $id
    ]);
});

Route::patch('/Employees/{id}/edit/', function ($id) {

    $employee = Employee::findOrFail($id);

    $data =    request()->validate([
        'workId' => ['required'],
        'firstName' => ['required', 'max:255'],
        'middleName' => ['required', 'max:255'],
        'lastName' =>  ['required', 'max:255'],
        'email' =>  ['email'],
        'phoneNo' =>  ['required', 'max:10'],
        'position' =>  ['required', 'max:255'],
        'sector' =>  ['required', 'max:255'],
        'nationalId' =>  ['required', 'max:255'],
        'joined' =>  ['required', 'max:255'],
        'dateOfBirth' => ['required']
    ]); 

    $employee->update($data);

    return redirect('/Employees/' . $employee->id);

});

// delete an employee
Route::delete('Employees/{id}/', function ($id) {

    Employee::findOrFail($id)->delete();

    return redirect('/');


});












<?php

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
use Illuminate\Http\Request;

Route::get('/', function () {
    $tasks = \App\Task::orderBy('created_at', 'asc')->get();
    return view('tasks', [
        'tasks' => $tasks
    ]);
});

Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
        'lastname' => 'required|max:255',
        'years' => 'required|max:255',
        'gender' => 'required|max:255',
        'city' => 'required|max:255',
        'education' => 'required|max:255',
        'speciality' => 'required|max:255',
        'employment' => 'required|max:255',
        'phone' => 'required|max:255',
        'email' => 'required|max:255',
    ]);

    if($validator->fails()) {
        return redirect('/')
        ->withInput()
        ->withErrors($validator);
    }

    $task = new \App\Task;
    $task->name = $request->name;
    $task->lastname = $request->lastname;
    $task->years = $request->years;
    $task->gender = $request->gender;
    $task->city = $request->city;
    $task->education = $request->education;
    $task->speciality = $request->speciality;
    $task->employment = $request->employment;
    $task->phone = $request->phone;
    $task->email = $request->email;
    $task->save();

    return redirect('/');
});

Route::delete('/task/{task}', function (\App\Task $task) {
    $task->delete();

    return redirect('/');
});
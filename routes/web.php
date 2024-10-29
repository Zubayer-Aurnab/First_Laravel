<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    $jobListing = new Job;
    dd($jobListing->all()[1]['title']);
    // return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});






Route::get('/jobs', function () {
    $jobModel = new Job();
    return view('jobs', [
        "jobs" => $jobModel->all()
    ]);
});

Route::get('/job/{id}', function ($id) {

    $jobModel = new Job();
    $job = $jobModel->find($id);


    return view(
        'job',
        [
            "job" => $job
        ]
    );
});

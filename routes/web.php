<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/jobs', function () {
    return view('jobs', [
        "jobs" => [

            [
                "id" => 1,
                "title" => "Programmer",
                "salary" => '$5000'
            ],
            [
                "id" => 2,
                "title" => "Designer",
                "salary" => '$1000'
            ],
            [
                "id" => 3,
                "title" => "Manager",
                "salary" => '$1000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $jobs = [

        [
            "id" => 1,
            "title" => "Programmer",
            "salary" => '$5000'
        ],
        [
            "id" => 2,
            "title" => "Designer",
            "salary" => '$1000'
        ],
        [
            "id" => 3,
            "title" => "Manager",
            "salary" => '$1000'
        ]
    ];

    $job =  Arr::first($jobs, fn($job) => $job['id'] == $id);


    return view(
        'contact',
        [
            "job" => $job
        ]
    );
});

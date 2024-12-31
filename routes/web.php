<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    // List of jobs with additional properties (id, description, salary)
    $jobs = [
        [
            'id' => 1,
            'title' => 'Software Developer',
            'description' => 'Develops and maintains software applications.',
            'salary' => '$80,000 - $120,000'
        ],
        [
            'id' => 2,
            'title' => 'Product Manager',
            'description' => 'Manages the development of new products from concept to launch.',
            'salary' => '$100,000 - $150,000'
        ],
        [
            'id' => 3,
            'title' => 'UX/UI Designer',
            'description' => 'Designs user-friendly interfaces for websites and apps.',
            'salary' => '$70,000 - $110,000'
        ],
        [
            'id' => 4,
            'title' => 'System Administrator',
            'description' => 'Maintains and configures computer systems and networks.',
            'salary' => '$60,000 - $90,000'
        ],
        [
            'id' => 5,
            'title' => 'Quality Assurance Engineer',
            'description' => 'Tests software applications to ensure they meet quality standards.',
            'salary' => '$50,000 - $80,000'
        ]
    ];

    // Pass the list of jobs to the 'about' view
    return view('about', ['jobs' => $jobs]);
});

Route::get('/job/{id}', function ($id) {
    // List of jobs (same as in the '/about' route)
    $jobs = [
        [
            'id' => 1,
            'title' => 'Software Developer',
            'description' => 'Develops and maintains software applications.',
            'salary' => '$80,000 - $120,000'
        ],
        [
            'id' => 2,
            'title' => 'Product Manager',
            'description' => 'Manages the development of new products from concept to launch.',
            'salary' => '$100,000 - $150,000'
        ],
        [
            'id' => 3,
            'title' => 'UX/UI Designer',
            'description' => 'Designs user-friendly interfaces for websites and apps.',
            'salary' => '$70,000 - $110,000'
        ],
        [
            'id' => 4,
            'title' => 'System Administrator',
            'description' => 'Maintains and configures computer systems and networks.',
            'salary' => '$60,000 - $90,000'
        ],
        [
            'id' => 5,
            'title' => 'Quality Assurance Engineer',
            'description' => 'Tests software applications to ensure they meet quality standards.',
            'salary' => '$50,000 - $80,000'
        ]
    ];

    // Find the job by id
    $job = collect($jobs)->firstWhere('id', $id);

    // Pass the job details to the view
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});


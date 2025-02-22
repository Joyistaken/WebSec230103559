<?php

use Illuminate\Support\Facades\Route;

// Default route
Route::get('/', function () {
    return view('welcome');
});

// Route for multiplication table
Route::get('/multable/{number?}', function ($number = null) {
    $j = $number ?? 2; // Default to 2 if no number is provided
    return view('multable', compact('j'));
});

// Route for prime numbers
Route::get('/prime', function () {
    return view('prime');
});

// Route for even numbers
Route::get('/even', function () {
    return view('even');
});

// Route for factorial
Route::get('/factorial', function () {
    $result = null;
    $number = request('number');

    if ($number) {
        $result = 1;
        for ($i = 1; $i <= $number; $i++) {
            $result *= $i;
        }
    }

    return view('factorial', compact('result', 'number'));
});
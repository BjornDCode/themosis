<?php

/**
 * Application routes.
 */

// Single Page Routes
Route::any('page', function ($page) {
    return view('page', [
        'page' => $page,
    ]);
});

// Front Page
Route::get('/', function () {
    return view('welcome');
});

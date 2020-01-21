<?php

/**
 * Application routes.
 */

Route::get('/blog/{post}', 'PostController@show');
Route::any('home', 'PostController@index');

// Single Page Routes
Route::any('page', function ($page) {
    return view('page', [
        'page' => $page,
    ]);
});

// Front Page
Route::get('front', function ($page) {
    return view('home', [
        'page' => $page,
    ]);
});

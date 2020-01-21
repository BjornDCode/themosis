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

Route::get('blog/{post}', 'PostController@show');

// Front Page
Route::get('front', function ($page) {
    return view('home', [
        'page' => $page,
    ]);
});

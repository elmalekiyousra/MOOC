<?php
Route::auth();

Route::get('/login', function ())
{
    return view('login');
};
?>
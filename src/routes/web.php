<?php
use Illuminate\Support\Facades\Route;

$namespace = 'Toolek\Message\Http';

Route::get('/api-toolek' , "$namespace\ApiToolekController@index");



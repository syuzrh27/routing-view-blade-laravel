<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (){
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        'name1'=>'John',
        'name2'=>'Lex',
        'name3'=>'Jane',
        'position1'=>'CEO',
        'position2'=>'Lead Designer',
        'position3'=>'Chief Developer',
        'company'=>'Rexi'
    ]);
});?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    /**** variables ****/
    $headerTitle = "Lara Start";
    $listItem1 = "About";
    $listItem2 = "Services";
    $listItem3 = "Contact";

    return view('index', compact("headerTitle", "listItem1", "listItem2", "listItem3"));
});

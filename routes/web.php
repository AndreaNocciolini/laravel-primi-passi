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
    return view('welcome');
});


Route::get('/try', function () {
    $data = [
        'name' =>  'Andrea',
        'lastname' => 'Nocciolini',
        'skills' => [
            'Javascript',
            'PHP',
            'HTML'
        ],
        'pets' => [
            [
                'name' => 'Semola',
                'type' => 'rabbit'
            ],
            [
                'name' => 'Gea',
                'type' => 'cat'
            ],
            [
                'name' => 'Indi',
                'type' => 'cat'
            ],

        ]
    ];
    return view('home', $data);
});

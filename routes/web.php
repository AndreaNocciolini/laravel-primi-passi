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
})->name('welcome');


Route::get('/andrea', function () {
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
    return view('andrea', $data);
})->name('andrea');

Route::get('/simone', function () {
    $data = [
        'name' =>  'Simone',
        'lastname' => 'Mazzola',
        'pets' => [
            [
                'name' => 'Fluvio',
                'type' => 'cat'
            ]
        ]
    ];
    return view('simone', $data);
})->name('simone');

Route::get('/lenticchie', function () {
    $data = [
        'name' =>  'lenticchie',
        'lastname' => 'lenticchie',
        'skills' => [
            'Javascript',
            'PHP',
            'HTML'
        ],
    ];
    return view('lenticchie', $data);
})->name('lenticchie');

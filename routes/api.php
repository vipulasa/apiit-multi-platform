<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/calculate-tax/{hotel_id}', function($hotel_id){

    $hotels = [
        [
            'id' => 1,
            'name' => 'Hotel 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies tincidunt, nisl nisl aliquam nisl, eget aliquam nisl nisl eu nisl.',
            'image' => 'https://source.unsplash.com/1200x400/?hotel,1',
            'price' => 15000
        ],
        [
            'id' => 2,
            'name' => 'Hotel 2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies tincidunt, nisl nisl aliquam nisl, eget aliquam nisl nisl eu nisl.',
            'image' => 'https://source.unsplash.com/1200x400/?hotel,2',
            'price' => 25000
        ],
        [
            'id' => 3,
            'name' => 'Hotel 3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies tincidunt, nisl nisl aliquam nisl, eget aliquam nisl nisl eu nisl.',
            'image' => 'https://source.unsplash.com/1200x400/?hotel,3',
            'price' => 45000
        ]
    ];

    $hotel = collect($hotels)->firstWhere('id', $hotel_id);

    return response()->json([
        'tax' => $hotel['price'] * 0.1,
        'display_tax' => number_format($hotel['price'] * 0.1, 2)
    ]);
});

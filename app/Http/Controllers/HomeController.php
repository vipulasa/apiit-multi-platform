<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {

        // create a list of hotels an array with the variable $hotels
        $hotels = [
            [
                'name' => 'Hotel 1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies tincidunt, nisl nisl aliquam nisl, eget aliquam nisl nisl eu nisl.',
                'image' => 'https://source.unsplash.com/1200x400/?hotel,1',
            ],
            [
                'name' => 'Hotel 2',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies tincidunt, nisl nisl aliquam nisl, eget aliquam nisl nisl eu nisl.',
                'image' => 'https://source.unsplash.com/1200x400/?hotel,2',
            ],
            [
                'name' => 'Hotel 3',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies tincidunt, nisl nisl aliquam nisl, eget aliquam nisl nisl eu nisl.',
                'image' => 'https://source.unsplash.com/1200x400/?hotel,3',
            ],
            [
                'name' => 'Hotel 4',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies tincidunt, nisl nisl aliquam nisl, eget aliquam nisl nisl eu nisl.',
                'image' => 'https://source.unsplash.com/1200x400/?hotel,4',
            ],
            [
                'name' => 'Hotel 5',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies tincidunt, nisl nisl aliquam nisl, eget aliquam nisl nisl eu nisl.',
                'image' => 'https://source.unsplash.com/1200x400/?hotel,5',
            ]
        ];

        return view('home', [
            'title' => 'Home',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies tincidunt, nisl nisl aliquam nisl, eget aliquam nisl nisl eu nisl.',
            'image' => 'https://source.unsplash.com/400x400/?company,logo',
            'cover' => 'https://source.unsplash.com/1200x400/?hotels,water',
            'hotels' =>  $hotels,
        ]);
    }
}

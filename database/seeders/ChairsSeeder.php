<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chair;

class ChairsSeeder extends Seeder
{
    public function run()
    {
        $chairs = [
            [
                'image' => 'chair__image__1',
                'title' => 'Стілець Білий',
                'price' => '1488₴',
                'status' => 'В наявності',
                'url' => '/chair__white'
            ],
            [
                'image' => 'chair__image__2',
                'title' => 'Стілець Сірий',
                'price' => '2023₴',
                'status' => 'В наявності',
                'url' => '/chair__white'
            ],
            [
                'image' => 'chair__image__3',
                'title' => 'Стілець Чорний',
                'price' => '4444₴',
                'status' => 'В наявності',
                'url' => '/chair__white'
            ]
        ];

        foreach ($chairs as $chair) {
            Chair::create($chair);
        }
    }
}


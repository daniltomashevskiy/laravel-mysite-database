<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'title' => 'Крісла',
                'svg' => 'svg__category_1',
                'url' => '/chairs'
            ],
            [
                'title' => 'Стільці',
                'svg' => 'svg__category_2',
                'url' => '/chairs'
            ],
            [
                'title' => 'Шафи',
                'svg' => 'svg__category_3',
                'url' => '/chairs'
            ],
            [
                'title' => 'Дивани',
                'svg' => 'svg__category_4',
                'url' => '/chairs'
            ],
            [
                'title' => 'Столи',
                'svg' => 'svg__category_5',
                'url' => '/chairs'
            ],
            [
                'title' => 'Ліжка',
                'svg' => 'svg__category_6',
                'url' => '/chairs'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}


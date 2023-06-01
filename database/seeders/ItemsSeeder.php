<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemsSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                'svg' => 'svg__item__1',
                'title' => 'Гарантія',
                'text' => 'На всю продукцію діє гарантія відповідно до законодавства України.'
            ],
            [
                'svg' => 'svg__item__2',
                'title' => 'Нам довіряють',
                'text' => '20 років на ринку. Задоволені покупці та партнери, тисячі рекомендацій.'
            ],
            [
                'svg' => 'svg__item__3',
                'title' => 'Все для Вас',
                'text' => 'Зробимо меблі на замовлення, які підходять саме Вам.'
            ]
        ];

        foreach ($items as $item) {
            Item::create($item);
        }
    }
}


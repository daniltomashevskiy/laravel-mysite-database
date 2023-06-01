<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Chair;
use App\Models\Item;

class MainController extends Controller
{
    public function home()
    {
        $items = Item::all();

        return view('index', ['items' => $items]);
    }

    public function categories()
    {
        $categories = Category::all();

        return view('categories', ['categories' => $categories]);
    }

    public function chairs()
    {
        $chairs = Chair::all();

        return view('chairs', ['chairs' => $chairs]);
    }

    public function chair__white()
    {
        $chairImages = ['chair__white__image__1', 'chair__white__image__2', 'chair__white__image__3'];

        $characteristics = [
            'Матеріал' => 'Пластик, дерево, метал',
            'Колір' => 'Білий',
            'Ширина' => '46 см',
            'Висота' => '82 см',
            'Призначення' => 'Для кухні, для вітальні'
        ];

        return view('chair__white', ['chairImages' => $chairImages, 'characteristics' => $characteristics]);
    }


}

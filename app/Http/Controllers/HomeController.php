<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sandwiches = [
            [
                'name' => 'Cheeseburger',
                'description' => 'Delicioso cheeseburger com queijo derretido, alface, tomate e molho especial.',
                'price' => 12.99,
                'image' => 'cheeseburger.jpg'
            ],
            [
                'name' => 'Frango',
                'description' => 'Saboroso sanduíche de frango grelhado com maionese, alface e tomate.',
                'price' => 10.99,
                'image' => 'frango.jpeg'
            ],
            [
                'name' => 'Veggie',
                'description' => 'Opção vegetariana com hambúrguer de grão-de-bico, alface, tomate e molho de iogurte.',
                'price' => 11.99,
                'image' => 'veggie.jpg'
            ]
        ];

        return view('home', compact('sandwiches'));
    }
}
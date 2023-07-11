<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function greet(string $id) {
        return view('about.hello', [
            'id' => $id,
            'info' => [
                'name' => 'Non',
                'address' => 'Bangkok'
            ]
        ]);
    }
}
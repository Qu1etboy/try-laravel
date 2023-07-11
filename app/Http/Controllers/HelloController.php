<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function greet(string $name) {
        return "Hello $name";
    }
}

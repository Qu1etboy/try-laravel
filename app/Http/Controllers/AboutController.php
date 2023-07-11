<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        return "about.index";
    }

    public function history() {
        return "about.history";
    }
}

<?php

namespace App\Http\Controllers\Creator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard() {
        $pages = "dash";
        return view('creator.dashboard', compact('pages'));
    }
}

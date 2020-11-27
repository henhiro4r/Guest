<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard() {
        $pages = "dash";
        return view('user.dashboard', compact('pages'));
    }
}

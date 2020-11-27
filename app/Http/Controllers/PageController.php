<?php

namespace App\Http\Controllers;

use App\Models\Event;

class PageController extends Controller
{
    public function index(){
        $events = Event::all()->where('status', '=', 1);
        return view('index', compact('events'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Homecontroller extends Controller
{
    public function index() : View
    {
       
    $messages = Message::all();
    return "home";
    }
}
        

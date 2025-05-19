<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Message;

class HomeController extends Controller
{
    public function index() : View
    {
        return view('home');


        // Récupère tous les messages dans la varaible $messages
        // et les ordonne par date_heure croissante
        $messages = Message::query()
        ->orderBy('date_heure', 'asc')
        ->get();
        //return view('home');
        return view('home', compact('messages'));
    }

    public function a_propos() : View
    {
        return view('a_propos');
    }

    public function contact() : View
    {
        return view('contact');
    }
    
    public function cgu() : View
    {
        return view('cgu');
    }


    
}


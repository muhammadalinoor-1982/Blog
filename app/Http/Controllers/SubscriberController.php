<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function create(){

        return view('layouts.front._footer');

    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'email',
        ]);
        //$subscriber = $request->except('_token');
        $data['email'] = $request->email;
        Subscriber::create($data);
        session()->flash('message','Thanks for your subscription');
        return redirect()->route('home');
    }
}

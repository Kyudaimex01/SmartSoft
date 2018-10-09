<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conference;
use App\User;

class ConferenceController extends Controller
{
    public $restful=true;

    public function get_index(){
        return view('home')
            ->with('title','Index')
            ->with('conferences', Conference::all()->sortBy('created_at'))
            ->with('size', Conference::all()->count());
    }

    public function get_userlist(){
        return view('userlist')
            ->with('title','Index')
            ->with('users', User::all()->sortBy('created_at'))
            ->with('size', User::all()->count());
    }

    public function store(Request $request){

    }


}

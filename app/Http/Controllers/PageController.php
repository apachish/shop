<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $firstName = 'shahriar';
        $lastName = 'pahlevan sadegh';
        $names =[
          ['firstName'=>'sanaz','lastName'=>'kolahi'],
          ['firstName'=>'ali','lastName'=>'pahlevansadegh'],
          ['firstName'=>'sahriar','lastName'=>'pahlevansadegh'],
        ];
        return view('welcome',compact('names'));
    }
    public function aboutUs()
    {
        return view('aboutUs');
    }
    //
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //this deals with homepage(main page-we do the whole logic here before displaying the homepage)
    public function index()
    {
        $name= 'BABWAT';
        $sex = 'Female';
        $colors = [
            'Black',
            'Red',
       'Yellow',
        ];
        return view('home', [
            'name' => $name,
            'sex' => $sex,
            'colors' => $colors,
        ]);
        //do our own php or dispaly our logic
        //return ("this is index from main controller");
    }
    public function about_us(){
       
        return view('others.about-us');
        //return ("this is about us from main controller");
    }
    public function contact_us(){
        return view('others.contact-us');
        //return ("this is contact us from main controller");
    }


}

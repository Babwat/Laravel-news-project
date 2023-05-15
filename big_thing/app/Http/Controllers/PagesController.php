<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function indexpage(){
       $title='Welcome to laravel';
       // return view('pages.index_page',compact('title'));
       //use this if you want to pass multiple values
       return view('pages.index_page')->with('title', $title); 

    }
    public function about(){
        $title='About us';
        return view('pages.about')->with('tilte', $title);
        
    }
    public function services(){
        $data = array(
        'title' =>'Our Services',
        'services' => ['Web Design', 'Programmming', 'seo']
        );
        return view('pages.services')->with( $data);
        
    }
    
}

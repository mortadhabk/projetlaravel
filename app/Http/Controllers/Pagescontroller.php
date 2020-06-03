<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
    public function index(){
         $title = 'Welcome To Laravel!' ;
   return view('pages.index')->with('title',$title);

    }
    public function about(){
        $title = 'Welcome To about!' ;
        return view('pages.about')->with('title',$title);
         }
    public function services(){
            $data = array(
                 'title'=> 'Servicesssss',
                 'services' => ['Web Design','Programming','SEO']

            );
     return view('pages.services')->with($data);

             }
}

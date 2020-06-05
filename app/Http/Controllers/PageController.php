<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   
   public function home () {

      $title = 'Home Page';

      return view('welcome',compact('title'));

   }

   public function services () {

         $title = 'Services Page';

         return view('pages.services.services')->with('title',$title);
   }

   public function about () {
      $title = 'About Page';

      $description = 'spoken or written representation or account of a person, object, or event.';
   
      return view('about', [
   
         'title' => 'About Page',
         'description'  => 'spoken or written representation or account of a person, object, or event.'
   
      ]);
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function showPage(Request $request)
   {
      if($request->path() !== "/") {        
        /*return view($request->path()); */
        try {
            return view($request->path());
        } catch (\Exception $e) {
            return abort('404');
        }
       } else {
        return view('home');
       }

   } 

   public function test(Request $request)
   {
        return view('test');
   }
}

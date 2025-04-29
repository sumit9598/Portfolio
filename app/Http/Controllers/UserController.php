<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   function getUser(){
    // return "Sumit Kumar Yadav Single";
    return view('home');
   }
   function getAbout(){
    return view('about');
    //  return "Hello This is a about Page";
   }
   function getContact(){
    return "Hello This is a Contact Page";
   }
   function getName($name){
    return "Hello this is my name {$name}";
   }
}

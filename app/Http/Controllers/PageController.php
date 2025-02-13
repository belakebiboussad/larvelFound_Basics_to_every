<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return "About Us PAge";
    }
    public function contact()
    {
       return "Contact Page";  
    }
    public function submitContact()
    {
       return "Contact Page";  
    }
}

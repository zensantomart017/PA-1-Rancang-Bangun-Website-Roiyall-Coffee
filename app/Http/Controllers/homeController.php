<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function Userhome()
    {
        return view("User.home");
    }
}

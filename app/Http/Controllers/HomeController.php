<?php

namespace Spf\Http\Controllers;

use Illuminate\Http\Request;

use Spf\Http\Requests;
use Spf\Shift\Entities\Missing;

class HomeController extends Controller
{
    public  function index()
    {
        $users = Missing::paginate(12);

        return view('home', compact('users'));
    }
}

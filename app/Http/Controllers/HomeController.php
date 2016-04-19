<?php

namespace Spf\Http\Controllers;

use Spf\Shift\Entities\Missing;

class HomeController extends Controller
{
    public  function index()
    {
        $users = Missing::orderBy('id','DESC')->paginate(12);

        return view('home', compact('users'));
    }

    public  function search()
    {
        $term = \Request::get('term');

        $persons = Missing::where('first_name','LIKE', "%$term%")->get();

        return $persons;

    }

}

<?php

namespace App\Http\Controllers;

use App\Graduates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraduatesController extends Controller
{
    // wyświetlanie 8 losowych absolwentow z bazy
    function index()
    {
        
        $graduates = Graduates::limit(8)->orderBy('id', 'ASC')->get()->toArray();
        return view('absolwenci', ['graduates' => $graduates]);

    }

    // wyswietlanie pojedynczego absolwenta
    function single_graduate($id)
    {
        $graduate = Graduates::find($id);
        return view('absolwent', ['graduate' => $graduate]);
    }

}
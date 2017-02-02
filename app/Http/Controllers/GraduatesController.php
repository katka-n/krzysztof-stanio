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
        $all_graduates = DB::table('graduates')->pluck('id');

        $arr = array();
        for ($i = 1; $i <= count($all_graduates); $i++) {
            $arr[$i - 1] = $all_graduates[$i - 1];
        }
        shuffle($arr);

        $graduates = [];
        foreach ($arr as $key => $value) {
            $graduate = Graduates::where('id', $value)->first();
            array_push($graduates, $graduate);
        }
        return view('absolwenci', ['graduates' => $graduates]);

    }

    // wyswietlanie pojedynczego absolwenta
    function single_graduate($id)
    {
        $graduate = Graduates::find($id);
        return view('absolwent', ['graduate' => $graduate]);
    }

}

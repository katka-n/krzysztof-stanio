<?php

namespace App\Http\Controllers;
use App\Graduates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraduatesController extends Controller
{
    function index()
    {
        $all_graduates = DB::table('graduates')->pluck('id');

        $arr = array();
        for ($i = 1; $i <= count($all_graduates); $i++) {
            $arr[$i-1] = $all_graduates[$i-1];
        }
        shuffle($arr);

        $graduates = [];
        foreach ($arr as $key => $value)
        {
            $graduate = Graduates::where('id', $value)->first();
            array_push($graduates, $graduate);
        }
        return view('index-1', ['graduates' => $graduates]);

    }


    function single_graduate($id)
        {
            $graduate = Graduates::where('id', $id)->first();
            return view('index-7', ['graduate' => $graduate]);
        }

}

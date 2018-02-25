<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueryGeneratorController extends Controller
{

    public function generateSQL(){
        return view('query',[
            'sql' => '',
            'name' => '',
            'moo' => '',
            'flag_building' => '',
            'flag_billboard' => '',
            'flag_land' => '',
            'flag_two_houses' => ''
        ]);
    }
    public function generateSQLWithParams(Request $req){
        $name = $req->input('name');
        $moo = $req->input('moo');
        $flag_building = $req->input('flag_building');
        $flag_billboard = $req->input('flag_billboard');
        $flag_land = $req->input('flag_land');
        $flag_two_houses = $req->input('flag_two_houses');

        $result = 'USE tax; SELECT * FROM `taxs` WHERE 1';

        if($name)
            $result .= " AND (name like '%$name%')";

        if($moo)
            $result .= " AND address_moo like '%$moo%' ";

        if($flag_building)
           $result .= " AND flag_building like '/' ";

       if($flag_billboard)
           $result .= " AND flag_billboard like '/' ";

       if($flag_land)
           $result .= " AND flag_land like '/' ";

       if($flag_two_houses)
           $result .= " AND flag_two_houses like '/' ";

        $result .= "ORDER BY name";
        return view('query',[
            'sql' => $result,
            'name' => $name,
            'moo' => $moo,
            'flag_building' => $flag_building,
            'flag_billboard' => $flag_billboard,
            'flag_land' => $flag_land,
            'flag_two_houses' => $flag_two_houses
        ]);
    }
}

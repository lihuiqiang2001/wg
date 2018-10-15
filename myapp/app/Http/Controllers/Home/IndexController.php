<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    public function index()
    {
    	$rs = DB::table('lunbo')->get();
        $res = DB::table('friend')->get();
    	$re = DB::table('goods')->get();
    	
    return view('home.index',[
    	'title'=>'前台首页',
    	'rs'=>$rs,
    	'res'=>$res,
        're'=>$re
    ]);

    }

}

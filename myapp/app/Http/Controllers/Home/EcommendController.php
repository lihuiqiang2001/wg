<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class EcommendController extends Controller
{
    public function ecommend()
    {
    	$re = DB::table('goods')->get();
        return view('home.ecommend.index',[
        	'title'=>'爆款推荐',
        	're'=>$re
        ]);
    }



}

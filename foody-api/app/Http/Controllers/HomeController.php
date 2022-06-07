<?php

namespace App\Http\Controllers;


use App\Models\CaptionBanner;
use App\Models\Config;
use App\Models\Province;
use Illuminate\Http\Request;
use \Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //
    public function getCaptionBanner()
    {
        return CaptionBanner::all()->where('status',1);
    }
    public function getConfig()
    {
        return Config::first();
    }
    public function getProvince(){
        if (!Session::has('provinces')) {
            Session::put('provinces','01');
        }
        $provinces = Province::where('matp',Session::get('provinces'))->get();

        return collect([
            'name' => $provinces->name,
            'id' => $provinces->matp,
        ]);
    }
    public function setProvince(Request $request)
    {
        Session::put('provinces',$request->get('provinces'));
        return $request->get('provinces');
    }
}

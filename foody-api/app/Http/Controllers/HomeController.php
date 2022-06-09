<?php

namespace App\Http\Controllers;


use App\Models\CaptionBanner;
use App\Models\Config;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //
    public function getCaptionBanner()
    {
        return CaptionBanner::all()->where('status', 1);
    }

    public function getConfig()
    {
        return Config::first();
    }

    public function test()
    {
        Session::put("provincesId", '01');
        return Session::get("provincesId");

    }
    public function getProvince()
    {
        if (!Session::has("provincesId")) {
            Session::put("provincesId", '01');
        }
        $provinces = Province::where('matp', Session::get('provincesId'))->firstOrFail();
        return collect([
            'name' => $provinces->name,
            'id' => $provinces->matp,
        ]);
    }
    public function setProvince(Request $request)
    {
        if (Session::has('provincesId')) {
            Session::forget('provincesId');
        }
        Session::put('provincesId', $request->get('provinces'));
        return Session::get('provincesId');
    }
}

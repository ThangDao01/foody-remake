<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\District;
use App\Models\Product;
use App\Models\Province;
use App\Models\Restaurant;
use App\Models\RestaurantCategory;
use App\Models\RestaurantDiscount;
use App\Models\Wards;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class RestaurantController extends Controller
{
    //
    public function test2()
    {
     return Session::get("provincesId");
    }


    public function getAllRestaurantHome(Request $request)
    {
        $provincesId = $request->get('provincesId');
        if (!$provincesId){
            $provincesId = '01';
        }
        return Restaurant::select('restaurant_name', 'restaurant_thumbnail', 'location_address')
            ->where('location_province', $provincesId )
            ->where('is_branch', 1)->get();
    }

    public function getDealToday(Request $request)
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        RestaurantDiscount::where('time_start', '<=', $now)->where('time_end', '>=', $now)->get();
        $listResId = RestaurantDiscount::select('restaurant_id')->where('time_start', '<=', $now)->where('time_end', '>=', $now)->get()->pluck('restaurant_id');
        return Restaurant::whereIn('id', $listResId)->where('location_province',$request->get('provincesId'))->get();
    }

    public function getFilterOption(Request $request)
    {
        $currentProvince = $request->get('provincesId');
        if (!$currentProvince) {
            $currentProvince = '01';
        }
        $district = District::select('maqh', 'name')->where('matp', $currentProvince)->orderBy('name', 'asc')->get();
        $category = Category::select('id', 'category_name')->where('type', 1)->get();
        $subCategory = Category::select('id', 'category_name')->where('type', 2)->get();
        return collect([
            'category' => $category,
            'subCategory' => $subCategory,
            'district' => $district,
            'provinces' => $request->get('provincesId'),
        ]);
    }

    public function getRestaurantFilter(Request $request)
    {
        $cate = $request->get('category');
        $subCate = $request->get('subCategory');
        $district = $request->get('district');
        $provinces = $request->get('provinces');
        $resByCate = [];
        $resBySubCate = [];
        if (!$cate && !$subCate && !$district) {
            return Restaurant::where('location_province', $provinces)
                ->where('is_branch', 1)->get();
        } else if (!$cate && !$subCate) {
            return Restaurant::where('location_district', $district)->get();
        }
        if ($cate) {
            $resByCate = RestaurantCategory::where('category_id', $cate)->get()->pluck('restaurant_id')->toArray();
        }
        if ($subCate) {
            $resBySubCate = RestaurantCategory::where('category_id', $subCate)->get()->pluck('restaurant_id')->toArray();
        }
        if ($cate && $subCate) {
            $resFilter = array_intersect($resByCate, $resBySubCate);
        } else {
            $resFilter = $resByCate + $resBySubCate;
        }
        if ($district && $resFilter) {
            return Restaurant::whereIn('id', $resFilter)->where('location_district', $district)->get();
        }
        return Restaurant::whereIn('id', $resFilter)->get();
    }
}

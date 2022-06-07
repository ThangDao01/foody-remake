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
    public function test()
    {
//        return Restaurant::all();
//        $list = Province::all()->where('');
        $list = District::select('maqh')->where('matp', 79)->get();
//        $list2 = WardsSeeder::all()->where('maqh', (int)$list[0]->maqh);
//        return $list2;
//        return $list;
//        $list = District::all('maqh');
//        $obj = json_decode($list, true);
//        $list2 = District::select('maqh')->where('matp', 01)->get();
//        $list2 = "";
//        $list2[0] = WardsSeeder::all()->where('maqh', $list[0]->maqh);

//        return $list2[1]->xaid;
        $size = 0;
        for ($i = 0; $i < count($list); $i++) {
//            $list2[$i] = WardsSeeder::all()->where('maqh', (int)$list[$i]->maqh);
            $list2[$i] = Wards::select('xaid', 'name', 'type', 'maqh')->where('maqh', $list[$i]->maqh)->get();
            for ($j = 1; $j < count($list2[$i]); $j++) {
                $list3[$size++] = $list2[$i][$j];
            }
        }

//        return $list3;
        return view('fetchseed', [
            'list' => $list3
        ]);
        return $list2;

    }

    public function getAllRestaurantHome()
    {
//        return Restaurant::all('is_branch');
        $currentProvince = '01';
        if (Session::has('provinces')) {
            $currentProvince = Session::get('provinces');
        }
        return Restaurant::select('restaurant_name', 'restaurant_thumbnail', 'location_address')
            ->where('location_province', $currentProvince)
            ->where('is_branch', 1)->get();
    }

    public function getDealToday()
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        RestaurantDiscount::where('time_start', '<=', $now)->where('time_end', '>=', $now)->get();
        $listResId = RestaurantDiscount::select('restaurant_id')->where('time_start', '<=', $now)->where('time_end', '>=', $now)->get()->pluck('restaurant_id');
        return Restaurant::whereIn('id', $listResId)->get();
    }

    public function getFilterOption()
    {
        $currentProvince = '01';
        if (Session::has('provinces')) {
            $currentProvince = Session::get('provinces');
        }
        $district = District::select('maqh', 'name')->where('matp', $currentProvince)->orderBy('name', 'asc')->get();
        $category = Category::select('id', 'category_name')->where('type', 1)->get();
        $subCategory = Category::select('id', 'category_name')->where('type', 2)->get();
        return collect([
            'category' => $category,
            'subCategory' => $subCategory,
            'district' => $district,
        ]);
    }

    public function getRestaurantFilter(Request $request)
    {
        $cate = $request->get('category');
        $subCate = $request->get('subCategory');
        $district = $request->get('district');
        $resByCate = [];
        $resBySubCate = [];
        if (!$cate && !$subCate && !$district) {
            return $this->getAllRestaurantHome();
        }else if (!$cate && !$subCate) {
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
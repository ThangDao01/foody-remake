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
    public function getRestaurantById($id){
        $restaurant =Restaurant::where('id',$id)->first();
        if ($restaurant==null){
            return 0;
        }
        $restaurant->categories;
        return $restaurant;
    }
    public function createRestaurant(Request $request)
    {
        $restaurant = new Restaurant();
        $restaurant->restaurant_name = $request->get('restaurant_name');
        $restaurant->restaurant_title= $request->get('restaurant_title');
        $restaurant->restaurant_thumbnail = $request->get('restaurant_thumbnail');
        $restaurant->restaurant_phone = $request->get('restaurant_phone');
        $restaurant->location_province = $request->get('location_province');
        $restaurant->location_district = $request->get('location_district');
        $restaurant->location_address = $request->get('location_address');
        $restaurant->price_min = $request->get('price_min');
        $restaurant->price_max = $request->get('price_max');
        $restaurant->is_branch = $request->get('is_branch');
        $restaurant->main_branch_id = $request->get('main_branch_id');
        $restaurant->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $restaurant->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $restaurant->save();
        $restaurant->categories()->saveMany(Category::whereIn('category_name',$request->get('categories'))->get());
        return 1;
    }
    public function editRestaurant(Request $request,$id)
    {
        $object = Restaurant::where('id',$id)->first();
        if (!$object){
            return 0;
        }
        $object->restaurant_name = $request->get('restaurant_name');
        $object->restaurant_title = $request->get('restaurant_title');
        $object->restaurant_thumbnail = $request->get('restaurant_thumbnail');
        $object->restaurant_phone = $request->get('restaurant_phone');
        $object->restaurant_discount = 0;
        $object->restaurant_coordinate = '';
        $object->location_province = $request->get('location_province');
        $object->location_district = $request->get('location_district');
        $object->location_address = $request->get('location_address');
        $object->open_time = $request->get('open_time');
        $object->price_min = $request->get('price_min');
        $object->price_max = $request->get('price_max');
        $object->is_branch = $request->get('is_branch');
        $object->main_branch_id = $request->get('main_branch_id');
        $object->total_gallery = $request->get('total_gallery');
        $object->total_reviews = $request->get('total_reviews');
        $object->total_save = $request->get('total_save');
        $object->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $object->save();
        $object->categories()->saveMany(Category::whereIn('category_name',$request->get('categories'))->get());
        return 1;
    }
    public function deleteRestaurant($id){
        $restaurant = Restaurant::where('id',$id)->first();
        if ($restaurant){
            $restaurant->categories()->delete();
            $restaurant->delete();
            return 1;
        }
        return 0;
    }
    public function getAllRestaurantHome(Request $request)
    {
        $provincesId = $request->get('provincesId');
        if (!$provincesId) {
            $provincesId = '01';
        }
        return Restaurant::select('restaurant_name', 'restaurant_thumbnail', 'location_address')
            ->where('location_province', $provincesId)
            ->where('is_branch', 1)->get();
    }

    public function getDealToday(Request $request)
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        RestaurantDiscount::where('time_start', '<=', $now)->where('time_end', '>=', $now)->get();
        $listResId = RestaurantDiscount::select('restaurant_id')->where('time_start', '<=', $now)->where('time_end', '>=', $now)->get()->pluck('restaurant_id');
        return Restaurant::whereIn('id', $listResId)->where('location_province', $request->get('provincesId'))->get();
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

    public function getRestaurantSearch(Request $request)
    {

        $search = $request->get('search');
        return Restaurant::select('restaurant_name', 'restaurant_thumbnail', 'location_address')
            ->where('restaurant_name', 'like', '%' . $search . '%')
            ->where('is_branch', 1)->get();
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

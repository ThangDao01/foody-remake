<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\District;
use App\Models\Province;
use App\Models\Restaurant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Object_;

class AdminController extends Controller
{
    //
    public function getAllLocation()
    {
        return collect([
            'provinces' => Province::all(),
            'districts' => District::all()
        ]);
    }

    public function getMainRestaurant()
    {
        return Restaurant::select('id', 'restaurant_name')->where('is_branch', '==', 0)->get();
    }

    public function getAllRestaurant()
    {
        $list_restaurant = Restaurant::all();
        for ($i = 0; $i < count($list_restaurant); $i++) {
            $list_restaurant[$i]->categories;
        }
        return $list_restaurant;
    }

    public function test(Request $request)
    {
        $object = new Restaurant();
        $object->restaurant_name = '';
        $object->restaurant_discount = 0;
        $object->restaurant_coordinate = '';
        $object->location_province = $request->get('location_province');
        $object->location_district = $request->get('location_district');
        $object->location_address = $request->get('location_address');
        $object->main_branch_id = $request->get('main_branch_id');
        $object->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $object->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $object->save();
        return $object->id;
    }

    public function subCategoryCreate(Request $request)
    {
        $list_cate_name = $request->get('new_cate');
//        return json_decode($request->get('new_cate'));
//        $list_cate_name = json_decode($request->get('new_cate'));
        for ($i = 0; $i < count($list_cate_name); $i++) {
            $cate = new Category();
            $cate->category_name=$list_cate_name[$i];
            $cate->save();
        }
        return $list_cate_name;
    }

    public function getAllCategoryName()
    {
        return Category::all()->pluck('category_name');
//        return Category::select('category_name')->get();
    }
}

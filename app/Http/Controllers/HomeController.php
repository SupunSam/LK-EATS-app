<?php

namespace App\Http\Controllers;

use App\Models\FoodItem;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{
    public function home()
    {
        // dd('hx');
        // $restaurants = Restaurant::get();
        // return view('index')->with('restaurants', $restaurants);

        $restaurants = Restaurant::orderBy('created_at', 'desc')->paginate(3);
        return view('index')->with('restaurants', $restaurants);
    }

    public function search(Request $request)
    {

        $searchq = $request->input('searchq');
        // dd($searchq);
        $fooditems = FoodItem::where('food_name', 'LIKE', '%' . $searchq . '%')->orWhere('food_desc', 'LIKE', '%' . $searchq . '%')->orderBy('created_at', 'desc')->paginate(5);
        // dd($fooditems);
        if (count($fooditems) > 0)
            return view('search', compact('fooditems', 'searchq'));
        else
            return view('search')->with('success', 'Whoops !!..No Details found. Try to search again !');
    }
}

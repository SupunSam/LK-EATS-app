<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\FoodItem;
use App\Models\Restaurant;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function home()
    {
        $restaurants = Restaurant::orderBy('created_at', 'desc')->paginate(3);
        return view('index')->with('restaurants', $restaurants);
    }

    public function search(Request $request)
    {

        $searchq = $request->input('searchq');

        $fooditems = FoodItem::where('food_name', 'LIKE', '%' . $searchq . '%')->orWhere('food_desc', 'LIKE', '%' . $searchq . '%')->orderBy('created_at', 'desc')->paginate(5);

        if (count($fooditems) > 0)
            return view('search', compact('fooditems', 'searchq'));
        else
            return view('search')->with('success', 'Whoops !!..No Details found. Try to search again !');
    }

    public function profile()
    {
        $owner = Auth::user()->id;

        $orders = count(Order::where('user_id', $owner)->get());
        return view('users.profile', compact('orders'));
    }

    public function profileUpdate(Request $request)
    {
        // $id = $request->id;
        // dd($request);
        $user = User::find($request->id);

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'same:confirm-password',
        ]);
        // dd($request->name);
        // $input = $request->all();
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect()->route('profile')
            ->with('success', 'Your details updated successfully');
    }
}

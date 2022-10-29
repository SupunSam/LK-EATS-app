<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\FoodItem;
use App\Models\OrderItem;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function cart()
    {
        return view('checkout');
    }

    public function addToCart($id)
    {
        $fooditem = FoodItem::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "rest_id" => $fooditem->rest_id,
                "fooditem_id" => $fooditem->id,
                "food_name" => $fooditem->food_name,
                "quantity" => 1,
                "food_price" => $fooditem->food_price,
                "food_image" => $fooditem->food_image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'FoodItem added to cart successfully!');
    }

    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'FoodItem removed successfully');
        }
    }

    public function newOrder()
    {
        $cart = session()->get('cart');

        $totalAmount = 0;

        foreach ($cart as $item) {
            $totalAmount += $item['food_price'] * $item['quantity'];
            $restaurant = $item['rest_id'];
        }

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->rest_id = $restaurant;
        $order->total_price = $totalAmount;
        $order->status = "Placed";

        $order->save();

        $data = [];

        foreach ($cart as $item) {
            $data['items'] = [
                [
                    'food_name' => $item['food_name'],
                    'food_price' => $item['food_price'],
                    'food_qty' => $item['quantity'],
                ]
            ];

            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->food_item_id = $item['fooditem_id'];
            $orderItem->food_name = $item['food_name'];
            $orderItem->food_qty = $item['quantity'];
            $orderItem->amount = $item['food_price'] * $item['quantity'];
            $orderItem->save();
        }

        $restaurants = Restaurant::orderBy('created_at', 'desc')->paginate(3);
        return view('index')->with('restaurants', $restaurants);
    }

    public function orders()
    {
        $owner = Auth::user()->id;
        $data = Order::where('user_id', $owner)->first();

        $orders = Order::where('user_id', $owner)->orderBy('created_at', 'desc')->paginate(5);

        $restaurant = Restaurant::where('id', $data->rest_id)->first();

        return view('users.myorders', compact('orders', 'restaurant'));
    }

    public function show($id)
    {
        $order = Order::find($id);
        $orderitems = OrderItem::where('order_id', $id)->orderBy('created_at', 'desc')->paginate(5);

        return view('orders.show', compact('order', 'orderitems'));
    }

    public function destroy($id)
    {
        Order::find($id)->delete();

        return view('users.myorders', compact('order', 'restaturant'));
    }
}

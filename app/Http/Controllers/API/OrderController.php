<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Fashion;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $order = new Order();
            $order->user_id = $user->id;
            $order->total_price = 0;
            $order->save();
            $items = json_decode($request->json_items, true)['items'];
            
            foreach( $items as $item ){
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $fashion = Fashion::where('id', $item['id'])->with('sizes:name')->first();  
                $orderDetail->fashion_id = $fashion->id;
                $orderDetail->name = $fashion->name;
                $orderDetail->species = $fashion->species;
                $orderDetail->description = $fashion->description;
                $orderDetail->style = $fashion->style;
                $orderDetail->sex = $fashion->sex;                
                $orderDetail->img_url = $fashion->img_url;
                $orderDetail->price = $fashion->price;
                $size = Size::where('id', $item['size_id'])->first();
                $orderDetail->size = $size->name;
                $orderDetail->quantity = $item['quantity'];
                $orderDetail->save();
                $order->total_price += $fashion->price * $orderDetail->quantity;
                $fashion->sizes[$item['size_id'] - 1]->pivot->quantity -= $orderDetail->quantity;
                $fashion->sizes[$item['size_id'] - 1]->pivot->save();
            }
            $order->save();

            return response()->json(['success' => $order], 200);
        }else{
            return response()->json(['error' =>'api.something_went_wrong'], 500);
        }
    }

    public function show($id)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $order = Order::where('id', $id)->with('order_details')->first();
            if ($order == null) {
                return response()->json(['error' =>'not found'], 404);
            }
            if ($order->user_id != $user->id) {
                return response()->json(['error' =>'unauthorized'], 401);
            }
            return $order;
        }else{
            return response()->json(['error' =>'api.something_went_wrong'], 500);
        }
    }

    public function showAllOrder(){
        if (Auth::check()) {
            $user = Auth::user();
            $orders = Order::where('user_id', $user->id)->get();
            return $orders;
        }else{
            return response()->json(['error' =>'api.something_went_wrong'], 500);
        }
    }
}

<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Interfaces\BaseInterface;
use Illuminate\Support\Facades\DB;

class CartRepo implements BaseInterface
{
    public function __construct() {
         
    }

    public function store($newData)
    {
        $data = new Cart();

        DB::transaction(function () use($newData, $data){
            $cart_details = collect($newData['cart_details']);
            //save dulu
            $data->customer_id = $newData['customer_id'];
            $cart_details->map(function ($item, $key) use($data) {
                $data->grand_total += $item['price'] * $item['quantity'];
            });
            $data->save();
            
            $cart_details->each(function ($item, $key) use($data) {
                $orderDetail = new CartDetail();
                $orderDetail->product_id = $item["product_id"];
                $orderDetail->quantity = $item["quantity"];
                $orderDetail->price = $item["price"];
                $data->orderDetails()->save($orderDetail);
            });
        }, 5);

        return $this->get($data->id);
    }

    public function all($isPaginated, $count=5)
    {
        
    }

    public function get($id)
    {
        return Cart::with(Cart::relations())->find($id)->firstOrCreate();
    }
    
    public function update($id, $newData)
    {
        $data = new Cart();

        DB::transaction(function () use($newData, $data){
            $cart_details = collect($newData['cart_details']);
            //save dulu
            $data->customer_id = $newData['customer_id'];
            $cart_details->map(function ($item, $key) use($data) {
                $data->grand_total += $item['price'] * $item['quantity'];
            });
            $data->update($newData);
            
            $cart_details->each(function ($item, $key) use($data) {
                $orderDetail = new CartDetail();
                $orderDetail->product_id = $item["product_id"];
                $orderDetail->quantity = $item["quantity"];
                $orderDetail->price = $item["price"];
                $data->orderDetails()->save($orderDetail);
            });
        }, 5);

        return $this->get($data->id);
    }

    public function delete($id)
    {
        $data = $this->get($id);
        $data->delete();
    }

    public function first()
    {
        return Cart::With(Cart::relations())->first();
    }

    public function IsExist()
    {
        return $this->first()->count() > 0 ? true : false;
    }
}

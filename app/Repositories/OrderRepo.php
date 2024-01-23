<?php

namespace App\Repositories;

use Carbon\Carbon;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Str;
use App\Interfaces\BaseInterface;
use Illuminate\Support\Facades\DB;

class OrderRepo implements BaseInterface
{
    public function __construct() {
         
    }

    public function store($newData)
    {
        $data = new Order();

        DB::transaction(function () use($newData, $data){
            $cart_details = collect($newData['cart_details']);
            //save dulu
            $data->customer_id = $newData['customer_id'];
            $cart_details->map(function ($item, $key) use($data) {
                $data->grand_total += $item['price'] * $item['quantity'];
            });
            $data->cash = $newData['cash'];
            $data->change = $data->cash - $data->grand_total;
            $data->save();
            
            $cart_details->each(function ($item, $key) use($data) {
                $orderDetail = new OrderDetail();
                $orderDetail->product_id = $item["product_id"];
                $orderDetail->quantity = $item["quantity"];
                $orderDetail->price = $item["price"];
                $data->orderDetails()->save($orderDetail);
            });
            
            //update buat create batchnya
            $now = Carbon::now();
            $data->receipt_number = $now->format('ymd') . ".". Str::upper(Str::random(5)) . "." . $data->id;
            $data->update(["receipt_number" => $data->receipt_number]);
        }, 5);

        return $this->get($data->id);
    }

    public function all($isPaginated, $count=5)
    {
        
    }

    public function get($id)
    {
        return Order::with(Order::relations())->find($id)->firstOrCreate();
    }
    
    public function update($id, $newData)
    {
        // $data = $this->get($id);
        // $data->name = $newData->name;
        // $data->is_active = $newData->is_active;
        // return $data->save();
    }

    public function delete($id)
    {
        $data = $this->get($id);
        $data->delete();
    }

    public function first()
    {
        return Order::With(Order::relations())->first();
    }

    public function print($data)
    {
        return Order::with(Order::relations())->where('receipt_number', $data->receipt_number)->first();
    }
}

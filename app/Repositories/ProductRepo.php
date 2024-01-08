<?php

namespace App\Repositories;

use App\Models\Label;
use App\Models\Price;
use App\Models\Product;
use App\Models\PriceDetail;
use App\Interfaces\BaseInterface;
use Illuminate\Support\Facades\DB;


class ProductRepo implements BaseInterface
{
    public function __construct() {
         
    }

    public function store($newData)
    {
        DB::transaction(function() use($newData) {
            $data = new Product();
            $data->name = $newData['name'];
            $data->description = $newData['description'];
            $data->product_category = $newData['product_category'];
            $data->save();

            foreach ($newData["labels"] as $rawLabel) {
                $label = new Label();
                $label->name = $rawLabel["name"];
                $data->labels()->save($label);
            }

            foreach ($newData["prices"] as $rawPrice) {
                $price = new Price();
                $price->unit = $rawPrice["unit"];
                $data->prices()->save($price);

                foreach ($rawPrice["price_details"] as $rawPriceDetail) {
                    $priceDetail = new PriceDetail();
                    $priceDetail->tier_id =$rawPriceDetail["tier_id"];
                    $priceDetail->price =$rawPriceDetail["price"];
                    $priceDetail->is_tier =$rawPriceDetail["is_tier"];
                    $price->price_details()->save($priceDetail);
                }
            }
        }, 5);
    }

    
    public function all($isPaginated, $count=5)
    {
        $data = null;
        if($isPaginated){
            $data = Product::paginate($count);
        }
        else{
            $data = Product::all();
        }
        return $data;
    }

    public function get($id)
    {
        return Product::find($id);
    }
    
    public function update($id, $newData)
    {
        DB::transaction(function() use($id, $newData){
            $data = $this->get($id);
            $data->name = $newData['name'];
            $data->description = $newData['description'];
            $data->product_category = $newData['product_category'];
            $data->update($newData);

            foreach ($newData["labels"] as $label) {
                if ($label["action"] == "DELETE") {
                    $data->labels()->where('id', $label['id'])->delete();
                }
                else{
                    $data->labels()->updateOrCreate(
                        ["id" => $label["id"]],
                        ["name" => $label["name"]]
                    );
                }
            }
            foreach ($newData["prices"] as $price) {
                if ($price['action'] == "DELETE") {                    
                    $data->prices()->where('id', $price['id'])->delete();
                }
                else{
                    $dataPrices = $data->prices()->updateOrCreate(
                        ["id" => $price["id"]],
                        ["unit" => $price["unit"]]
                    );
                    foreach ($price["price_details"] as $priceDetails) {
                        if($priceDetails['action'] == "DELETE"){
                            $dataPrices->price_details()->where('id', $priceDetails['id'])->delete();
                        }
                        else{
                            $dataPrices->price_details()->updateOrCreate(
                                ["id" => $priceDetails['id']],
                                [
                                    "tier_id" => $priceDetails['tier_id'],
                                    "is_tier" => $priceDetails['is_tier'],
                                    "price" => $priceDetails['price'],
                                ]
                            );
                        }
                    }
                }
            }
        }, 5);
    }

    public function delete($id)
    {
        $data = $this->get($id);
        $data->delete();
    }
}

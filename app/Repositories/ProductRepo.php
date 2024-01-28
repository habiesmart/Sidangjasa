<?php

namespace App\Repositories;

use App\Models\Label;
use App\Models\Price;
use App\Models\Product;
use App\Models\PriceDetail;
use App\Interfaces\BaseInterface;
use App\Repositories\CustomerRepo;
use Illuminate\Support\Facades\DB;


class ProductRepo implements BaseInterface
{
    private $customerRepo;
    public function __construct() {
        $this->customerRepo = new CustomerRepo();
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

                foreach ($rawPrice["priceDetail"] as $rawPriceDetail) {
                    $priceDetail = new PriceDetail();
                    $priceDetail->tier_id =$rawPriceDetail["tier_id"];
                    $priceDetail->price =$rawPriceDetail["price"];
                    $priceDetail->is_tier =$rawPriceDetail["is_tier"];
                    $price->priceDetail()->save($priceDetail);
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
                    foreach ($price["priceDetail"] as $priceDetails) {
                        if($priceDetails['action'] == "DELETE"){
                            $dataPrices->priceDetail()->where('id', $priceDetails['id'])->delete();
                        }
                        else{
                            $dataPrices->priceDetail()->updateOrCreate(
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

    public function search($data)
    {
        $customer = $this->customerRepo->get($data["customer_id"]);
        
        $result = Product::withWhereHas('labels', function($query) use($data){
                            return $query->where("labels.name", 'LIKE', "%".$data['keyword']."%")
                                        ->orWhereHas('product',function($q) use($data){
                                            return $q->where('name', 'LIKE', "%".$data['keyword']."%");
                                        });
                            })
                            ->withWhereHas('prices', function($query) use($data, $customer){
                                if ($data["price_id"]) {
                                    $query = $query->where('id', $data["price_id"]);
                                }
                                return $query->withWhereHas('priceDetails', function($query) use($customer){
                                    if ($customer)
                                        return $query->where("price_details.tier_id", $customer["tier_id"]);
                                    else
                                        return  $query->whereNull("price_details.tier_id");
                                });
                            });

        if($data['product_category_id'])
            $result = $result->where('product_category_id', $data['product_category_id']);

        return $result->get();
    }


    public function searchv1($data){
        
    }
}

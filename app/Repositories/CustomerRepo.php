<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Interfaces\BaseInterface;


class CustomerRepo implements BaseInterface
{
    public function __construct() {
         
    }

    public function store($newData)
    {
        $data = new Customer();
        $data->tier_id = $newData['tier_id'];
        $data->name = $newData['name'];
        $data->pic = $newData['pic'];
        $data->address = $newData['address'];
        $data->phone = $newData['phone'];
        $data->save();
    }

    public function all($isPaginated, $count=5)
    {
        $data = null;
        if($isPaginated){
            $data = Customer::paginate($count);
        }
        else{
            $data = Customer::all();
        }
        return $data;
    }

    public function get($id)
    {
        return Customer::where('id', $id)->firstOrCreate();
    }
    
    public function update($id, $newData)
    {
        $data = $this->get($id);
        $data->tier_id = $newData->tier_id;
        $data->name = $newData->name;
        $data->pic = $newData->pic;
        $data->address = $newData->address;
        $data->phone = $newData->phone;
        return $data->save();
    }

    public function delete($id)
    {
        $data = $this->get($id);
        $data->delete();
    }
}

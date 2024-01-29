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

    public function all($isPaginated, $count=5, $asc=true)
    {
        $data = !$asc ? Customer::orderBy('id', 'desc'): Customer::orderBy('id');

        if($isPaginated){
            $data = $data->paginate($count);
        }
        else{
            $data = $data->get();
        }
        return $data;
    }

    public function find(string $keyword)
    {
        if (strlen($keyword) < 3) {
            return $this->all(false);
        }
        
        return Customer::where(function($query) use($keyword){
            $query->where('name', 'LIKE', "%$keyword%")
                ->orWhere('pic', 'LIKE', "%$keyword%");
        })->get();
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

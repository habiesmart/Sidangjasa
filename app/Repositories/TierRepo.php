<?php

namespace App\Repositories;

use App\Models\Tier;
use App\Interfaces\BaseInterface;


class TierRepo implements BaseInterface
{
    public function __construct() {
         
    }

    public function store($newData)
    {
        $data = new Tier();
        $data->name = $newData['name'];
        $data->description = $newData['description'];
        $data->is_active = $newData['is_active'];
        $data->save();
    }

    public function all($isPaginated, $count=5)
    {
        $data = null;
        if($isPaginated){
            $data = Tier::paginate($count);
        }
        else{
            $data = Tier::all();
        }
        return $data;
    }

    public function get($id)
    {
        return Tier::where('id', $id)->firstOrCreate();
    }
    
    public function update($id, $newData)
    {
        $data = $this->get($id);
        $data->name = $newData->name;
        $data->description = $newData->description;
        $data->is_active = $newData->is_active;
        return $data->save();
    }

    public function delete($id)
    {
        $data = $this->get($id);
        $data->delete();
    }
}

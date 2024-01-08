<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface BaseInterface{
    public function store($newData);
    public function all($isPaginated, $count);
    public function get($id);
    public function update($id, $newData);
    public function delete($id);
}
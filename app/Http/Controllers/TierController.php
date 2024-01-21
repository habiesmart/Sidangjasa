<?php

namespace App\Http\Controllers;

use App\Models\Tier;
use Illuminate\Http\Request;
use App\Repositories\TierRepo;
use App\Http\Requests\TierAllRequest;
use App\Http\Requests\TierStoreRequest;
use App\Http\Requests\TierUpdateRequest;

class TierController extends Controller
{

    private $tierRepo;

    public function __construct() {
        $this->tierRepo = new TierRepo();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'data' => $this->tierRepo->all(true, $count = 5),
        ];
        return view('Tier.index', $data);
    }

    public function all(TierAllRequest $request)
    {
        return $this->tierRepo->all(
            $request->has('is_paginated'), 
            $request->input('count')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'route' => route('tier.store'),
            'http_method' => 'POST'
        ];
        return view('Tier.createOrEdit', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TierStoreRequest $request)
    {
        $data = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'is_active' => $request->has('is_active')
        ];

        $this->tierRepo->store($data);

        return redirect()->route('tier.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'data' => $this->tierRepo->get($id),
            'route' => route('tier.update', ['tier' => $id]),
            'http_method' => 'PUT'
        ];
        return view('Tier.createOrEdit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TierUpdateRequest $request, string $id)
    {
        $data = $this->tierRepo->get($id);
        $newData = new Tier();
        $newData->name = $request->name;
        $newData->description = $request->description;
        $newData->is_active = $request->is_active;
        if ($data) {
            $this->tierRepo->update($id, $newData);
            return redirect()->route('tier.index')->with('message', 'Data berhasil diupdate');
        }
        return redirect()->back()->with('error', 'Ada yang aneh saat update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->tierRepo->delete($id);
        return redirect()->back();
    }
}

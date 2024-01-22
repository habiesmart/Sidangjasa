<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CartRepo;
use App\Http\Requests\CartOrderStoreRequest;

class CartController extends Controller
{
    protected $cartRepo;

    public function __construct() {
        $this->cartRepo = new CartRepo();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CartOrderStoreRequest $request)
    {
        $newData = $request->all();
        $this->cartRepo->store($newData);

        $data = [
            'data' => $newData,
            'message' => 'berhasil',
        ];

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->cartRepo->first();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

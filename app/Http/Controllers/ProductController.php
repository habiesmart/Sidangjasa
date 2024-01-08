<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Repositories\ProductRepo;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use Illuminate\Database\Eloquent\Collection;

class ProductController extends Controller
{
    
    private $productRepo;

    public function __construct() {
        $this->productRepo = new ProductRepo();
    }

    /**
     * Display a listing of the resource.
     */
    public function index(ProductStoreRequest $request)
    {        
        $data = [
            'data' => $this->productRepo->all(true),
        ];
        return view('Product.index', $data);
    }

    public function all($paginated, $count)
    {
        return $this->productRepo->all($paginated, $count);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'route' => route('product.store'),
            'http_method' => 'POST',
        ];

        return view('Product.createOrEdit', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request)
    {
        // $data = [
        //     'name' => $request->input('name'),
        //     'description' => $request->input('description'),
        //     'product_category' => $request->input('product_category'),
        // ];

        $this->productRepo->store($request->all());

        return redirect()->route('product.index');
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
            'data' => $this->productRepo->get($id),
            'route' => route('product.update', ['product' => $id]),
            'http_method' => 'PUT',
        ];

        return view('Product.createOrEdit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request, string $id)
    {
        $data = $this->productRepo->get($id);
        if ($data) {
            $this->productRepo->update($id, $request->all());
            return redirect()->route('product.index');
        }
        return redirect()->back()->with('error', 'Ada yang aneh saat update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->productRepo->delete($id);
    }
}

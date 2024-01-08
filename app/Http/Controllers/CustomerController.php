<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Repositories\TierRepo;
use App\Repositories\CustomerRepo;
use App\Http\Requests\CustomerStoreRequest;
use App\Http\Requests\CustomerUpdateRequest;

class CustomerController extends Controller
{
    
    private $customerRepo, $tierRepo;

    public function __construct() {
        $this->customerRepo = new CustomerRepo();
        $this->tierRepo = new TierRepo();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'data' => $this->customerRepo->all(true),
        ];
        return view('Customer.index', $data);
    }

    public function all($paginated, $count)
    {
        return $this->customerRepo->all($paginated, $count);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'route' => route('customer.store'),
            'http_method' => 'POST',
            'tiers' => $this->tierRepo->all(false)
        ];
        return view('Customer.createOrEdit', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerStoreRequest $request)
    {
        $data = [
            'tier_id' => $request->input('tier_id'),
            'name' => $request->input('name'),
            'pic' => $request->input('pic'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address')
        ];

        $this->customerRepo->store($data);

        return redirect()->route('customer.index');
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
            'data' => $this->customerRepo->get($id),
            'route' => route('customer.update', ['customer' => $id]),
            'http_method' => 'PUT',
            'tiers' => $this->tierRepo->all(false)
        ];

        return view('Customer.createOrEdit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CustomerUpdateRequest $request, string $id)
    {
        $data = $this->customerRepo->get($id);
        $newData = new Customer();
        $newData->tier_id = $request->tier_id;
        $newData->name = $request->name;
        $newData->pic = $request->pic;
        $newData->address = $request->address;
        $newData->phone = $request->phone;
        if ($data) {
            $this->customerRepo->update($id, $newData);
            return redirect()->route('customer.index')->with('message', 'Data berhasil diupdate');
        }
        return redirect()->back()->with('error', 'Ada yang aneh saat update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->customerRepo->delete($id);
        return redirect()->back();
    }
}

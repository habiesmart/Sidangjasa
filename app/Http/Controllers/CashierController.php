<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CartRepo;
use App\Repositories\OrderRepo;
use App\Repositories\CustomerRepo;
use App\Http\Requests\CashierCartRequest;
use App\Http\Requests\CashierPrintReceiptRequest;

class CashierController extends Controller
{
    protected $sessionCust = "customer";
    protected $customerRepo, $cartRepo, $orderRepo;

    public function __construct() {
        $this->customerRepo = new CustomerRepo();
        $this->cartRepo = new CartRepo();
        $this->orderRepo = new OrderRepo();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'customers' => $this->customerRepo->all(false),
            'isExistCart' => $this->cartRepo->IsExist(),
        ];
        
        return view('cashier.selectCustomer', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CashierCartRequest $request)
    {
        $currentCart = $this->cartRepo->first();
        
        if ($request->boolean("create-new") || !$currentCart) {
            if ($currentCart) {
                $this->cartRepo->delete($currentCart->id);
            }
            $this->cartRepo->store($request->all());
        }

        $data = [
            'cart' => $currentCart
        ]; 
        
        return view('cashier.cashier', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function printReceipt(CashierPrintReceiptRequest $request)
    {
        $data = [
            'order' => $this->orderRepo->print($request->all())
        ];
        
        return view('Cashier.invoice', $data);
    }

    private function SetCustomerSession(Request $request, $existCustomer = null)
    {
        $customer = $existCustomer ?? $this->customerRepo->get($request->customerID);
        if (!$request->session()->get($this->sessionCust)) {
            $request->session()->forget($this->sessionCust);
        }
        $request->session()->put($this->sessionCust, $customer);
    }
}

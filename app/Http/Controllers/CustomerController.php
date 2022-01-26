<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        $customers = Customer::latest()->paginate(5);
        return view('customer.index',compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function store(Request $request, Customer $customer)
    {
        $request->validate([

            'username' => 'required',
            'title' => 'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'address1' => 'required',
            'address2',
            'county' => 'required',
            'towncity' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        //Create customer from blade form
        $customer->update($request->all());

        return redirect()->route('customer.index')
            ->with('success','Customer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return mixed
     */
    public function show(Customer $customer)
    {
        return view('customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return mixed
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([

            'username' => 'required',
            'title' => 'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'address1' => 'required',
            'address2',
            'county' => 'required',
            'towncity' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $customer->update($request->all());

        return redirect()->route('customer.index')
            ->with('success','Customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return mixed
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customer.index')
            ->with('success','Customer deleted successfully');
    }
}

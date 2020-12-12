<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    public function getAllCustomers() {
        $customers = Customer::all();
        return view('customers', array('customers' => $customers));
    }

    public function getCustomerByID(Request $request) {
        $customer = Customer::find($request->id);
        return view('customerinfo', array('customer' => $customer));
    }

    public function saveCustomer(Request $request) {
        $customer = new Customer;

        $customer->firstname = $request->firstname;
        $customer->insertion = $request->insertiom;
        $customer->lastname = $request->lastname;
        $customer->address = $request->address;
        $customer->housenumber = $request->housenumber;
        $customer->postalcode = $request->postalcode;
        $customer->province = $request->province;
        $customer->city = $request->city;
        $customer->country = $request->country;
        $customer->email = $request->email;
        $customer->phone = $request->phone;

        $customer->save();
        return redirect()->back()->with('message', 'ok');
    }

    public function saveEditedCustomer(Request $request) {
        $customer = Customer::find($request->customer_number);

        $customer->firstname = $request->firstname;
        $customer->insertion = $request->insertiom;
        $customer->lastname = $request->lastname;
        $customer->address = $request->address;
        $customer->housenumber = $request->housenumber;
        $customer->postalcode = $request->postalcode;
        $customer->province = $request->province;
        $customer->city = $request->city;
        $customer->country = $request->country;
        $customer->email = $request->email;
        $customer->phone = $request->phone;

        $customer->save();
        return redirect()->back()->with('message', 'ok');
    }   



    public function editCustomer(Request $request) {
      $customer = Customer::find($request->id);
      return view('editcustomer', array('customer' => $customer));
    } 

    public function deleteCustomer(Request $request) {
        $customer = Customer::find($request->id);
        $customer->delete();
        return redirect('/klanten')->with('status', 'Customer Deleted');
    }
}


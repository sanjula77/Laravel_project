<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
   public function customers(){
    $customerList = Customer::all();
       return view('customer\customer',['customers'=>$customerList]);
    }
   public function newCustomers(){
        return view('customer\newCustomer');
     } 
   public function addCustomers(Request $request){
        $customer = $request->validate([
            'name'=>'required',
            'address'=>'required',
            'designation'=>'required',
            'age'=>'required|integer',
        ]);

        $saveData=Customer::create($customer);
        return redirect(route('customer.customers'));
     } 
     public function modify(Customer $customer){
           return view('customer\modify',['customers'=>$customer]);
        }
        public function update(Customer $customer, Request $request){
            $createdCustomer = $request->validate([
                'name'=>'required',
                'address'=>'required',
                'designation'=>'required',
                'age'=>'required|integer',
            ]);
            $customer->update($createdCustomer);
            return redirect(route('customer.customers'));
         }

    }

 
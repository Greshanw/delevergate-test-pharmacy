<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Customer;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class OwnerController extends Controller
{
    public function index(){
        return view('owner.home');
    }

    public function addcustomer(Request $request){
        $data = $request->input();
			try{
				$customers = new Customer;
                $customers->name = $data['name'];
                $customers->mobile = $data['mobile'];
                $customers->address = $data['address'];
				$customers->save();
				return redirect('/owner');
			}
			catch(Exception $e){
				return redirect('/owner');
			}
    }

    public function additem(Request $request){
        $data = $request->input();
			try{
				$customers = new Medicine;
                $customers->name = $data['name'];
                $customers->type = $data['type'];
                $customers->dose = $data['dose'];
				$customers->save();
				return redirect('/owner');
			}
			catch(Exception $e){
				return redirect('/owner');
			}
    }
}

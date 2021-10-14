<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ManagerController extends Controller
{
    public function index(){
        $customers = DB::select('select * from customer');
        return view('manager.home', ['customers' => $customers]);
    }

    public function editform($id){
        $customer = DB::select('select * from customer where id = ?', [$id]);
        return view('manager.edit-customer', ['customer' => $customer]);
    }

    public function edit(Request $request){
        $id= $request->input('id');
        $name = $request->input('name');
        $mobile = $request->input('mobile');

        DB::update('update customer set name=?, mobile=? where id=?',[$name, $mobile,$id]);

        return redirect('manager');
    }

    public function delete($id) {
        DB::delete('delete from customer where id = ?',[$id]);
        return redirect('manager');
        }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CashierController extends Controller
{
    public function index(){
        $items = DB::select('select * from medicine');
        return view('cashier.home', ['items' => $items]);
    }

    public function delete($id){
        DB::delete('delete from medicine where id = ?',[$id]);
        return redirect('/cashier');
    }

    public function editform($id){
        $item = DB::select('select * from medicine where id = ?', [$id]);
        return view('cashier.edit-item', ['item' => $item]);
    }

    public function edit(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $type = $request->input('type');
        $dose = $request->input('dose');

        DB::update('update medicine set name=?, type=?, dose=? where id=?',[$name, $type, $dose, $id]);

        return redirect('/cashier');
    }
}

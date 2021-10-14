<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    public function index(Request $request){
        $data = $request->input();
        $username = $data['username'];
        $type = $data['type'];
        $password = $data['password'];

        $user = DB::select('select * from login where username=?', [$username]);

        if($user == null){
            return redirect('/');
        }
        else{
            if($user[0]->type == $type && $user[0]->password == $password){
                if($type == "owner"){
                    $request->session()->put('owner', $type);
                    return redirect('/owner');
                }
                elseif($type == "manager"){
                    $request->session()->put('manager', $type);
                    return redirect('/manager');
                }
                elseif($type == "cashier"){
                    $request->session()->put('cashier', $type);
                    return redirect('/cashier');
                }
                else{
                    return redirect('/');
                }
            }
            else{
                return redirect('/');
            }
        }
    }

    public function logout(Request $request){
        $request->session()->forget('owner');
        $request->session()->forget('manager');
        $request->session()->forget('cashier');
        return redirect('/');
    }
}

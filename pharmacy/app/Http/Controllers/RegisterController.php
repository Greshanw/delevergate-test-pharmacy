<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function index(Request $request){
        $data = $request->input();
        try{
            $user = new Login;
            $user->username = $data['username'];
            $user->password = $data['password'];
            $user->type = $data['type'];
            $user->save();
            return redirect('/');
        }
        catch(Exception $e){
            return redirect('/register')->with('failed',"User creation faild");
        }
    }
}

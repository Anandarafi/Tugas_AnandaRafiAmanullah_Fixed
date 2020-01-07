<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginModel;
use Validator;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }
    public function cek(Request $req){
        $this->validate($req,[
            'no_induk'=>'required',
            'password'=>'required',
        ]);
        $proses=LoginModel::where('no_induk',$req->no_induk)->where('password',md5($req->password));
        if($proses->count()>0){
            $data=$proses->first();
            Session::put('id',$data->id);
            Session::put('no_induk',$data->no_induk);
            Session::put('password',$data->password);
            Session::put('status',$data->status);
            Session::put('login_status',true);
            return redirect('/');
        }else{
            Session::flash('alert_message','NO INDUK dan PASSWORD TIDAK COCOK');
            return redirect('login');
        }
    }
    public function create()
    {
        return view('login.register');
    }
    public function store(Request $request)
    {
        LoginModel::create([
            'no_induk'          => $request->no_induk,
            'nama'              => $request->nama,
            'password'          => $request->password,
            'status'            => $request->status,
        ]);
        
        return redirect()->action('LoginController@index');
    }
    public function logout()
    {
        Session::flush();
        return redirect('login');
    }
    
}

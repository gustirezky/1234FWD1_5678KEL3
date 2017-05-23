<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Admin;
use Illuminate\Auth\SessionGuard;
use Auth;

class SesiController extends Controller
{
    //
    public function index()
    {
    	# code...
    	return view('master');
    }
    public function form()
    {
    	# code...
    	if (Auth::check()) {
    		# code...
    		return redirect('/');
    	}
    	return view('login');
    }
    public function validasi(Request $input)
    {
    $this->validate($input,[
'username'=>'required',
'password'=>'required'
    	]);
    $admin = Admin::where($input->only('username','password'))->first();
    if(! is_null($admin)){
    	Auth::login($admin);
        if (Auth::check() && Auth::user()->level==1) {
            # code...
            return redirect('proses')->with('informasi',"Selamat datanggg ".Auth::user()->username);
        }
    	if(Auth::check())
    		return redirect('proses')->with('informasi',"Selamat datang ".Auth::user()->username);
    }
    return redirect('/login')->withErrors(['pengguna tidak ditemukan']);
    	# code...
    }
    public function logout()
    {
    	# code...
    	if (Auth::check()) {
    		# code...
    		Auth::logout();
    		return redirect('/login')->withErrors(['Silahkan login untuk masuk ke sistem']);
    	}else{
    		return redirect('/login')->withErrors(['Silahkan login terlebih dahulu']);
    	}
    }
}

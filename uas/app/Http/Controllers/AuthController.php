<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pembeli;
use App\Models\Penjual;
use App\Models\UserDetail;
use Auth;

class AuthController extends Controller
{
    function showAdminLogin(){
        return view('adminlogin');
    }
    
    function AdminLoginprocess(){
        // if(Auth()->attempt(['email' => request('email'), 'password' => request('password')])){
        //     return redirect('home')->with('success', 'Login Berhasil');
        // }else{
        //     return back()->with('danger', 'Login Gagal, Cek Email dan Password Anda');
        // }

        if(Auth()->attempt(['email' => request('email'),'password' => request('password')])){
            $user = Auth()->user();
            if($user->level == 1) return redirect('home')->with('succes', 'Login Berhasil');
            if($user->level == 0) return redirect('admin/produk')->with('succes', 'Login Berhasil');

        }else{
            return back()->with('danger', 'Login Gagal,Silahkan cek email dan password anda');
        }

    }


    function AdminLogout(){
        Auth()->logout();
        return redirect('home');
    }

// register
    function ShowRegister(){
        return view('register');
    }
    function registration(){
        $pembeli = new Pembeli;
        $pembeli->nama = request("nama");
        $pembeli->username = request("username");
        $pembeli->email = request("email");
        $pembeli->password = request("password");
        $pembeli->save();

        // $userDetail = new UserDetail;
        // $userDetail->id_user = $user->id;
        // $userDetail->no_handphone = request('no_handphone');
        // $userDetail->save();

        return redirect ('client/index')->with('success', 'Data Berhasil Ditambahkan');
    }

    function forgotPassword(){
        return view('adminlogin');
    }


// login

    function showLogin(){
        return view('login');
    }
    
    function Loginprocess(){
        // if(Auth()->attempt(['email' => request('email'), 'password' => request('password')])){
        //     return redirect('client/index')->with('success', 'Login Berhasil');
        // }else{
        //     return back()->with('danger', 'Login Gagal, Cek Email dan Password Anda');
        // }

        $email = request('email');
        $user = Pembeli::where('email', $email)->first();
        if($user){
        $guard = 'pembeli';
            }else {
        $user = Penjual::where('email', $email)->first();
        }
            if(!$guard) {
                return back()->with('danger', 'Login Gagal, Email Tidak Ditemukan Di Database');
            }else{
                if(Auth()->guard($guard)->attempt(['email' => request('email'), 'password' => request('password')])){
                    return redirect("client/index")->with('success', 'Login Berhasil');
                }else{
                    return back()->with('danger', 'Login Gagal,Silahkan cek email dan password anda');
                }
            }
    }
    

    function Logout(){
        Auth()->logout();
        return redirect('client/index');
    }

}
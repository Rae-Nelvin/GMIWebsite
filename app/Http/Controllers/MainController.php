<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Photos;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class MainController extends Controller
{
    function index(){
        $image1 = Photos::where('is_key',1)->where('types','TTT')->take(1)->get();
        $image2 = Photos::where('is_key',1)->where('types','!=','TTT')->get();
        $images1 = Photos::where('is_key',0)->where('types','TTT')->orderBy('id','DESC')->take(4)->get();
        $images2 = Photos::where('is_key',0)->where('types','!=','TTT')->orderBy('id','DESC')->get();
        $admin = Admin::all();

        return view('welcome',['image1' => $image1,'image2' => $image2,
                                'images1' => $images1, 'images2' => $images2,
                                'admin'=>$admin]);
    }

    function login(){
        return view('auth.login');
    }

    function check(Request $request){
        //Validate requests
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        $userInfo = User::where('email','=',$request->email)->first();

        if(!$userInfo){
            return back()->with('Fail', 'We do not recognize your email address');
        }
        else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                
                return redirect('admin/dashboard/');
            }
            else{
                return back()->with('Fail', 'Incorrect Password');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

}

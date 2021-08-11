<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Photos;
use App\Models\Admin;
use App\Models\Captions;
use Illuminate\Support\Facades\Hash;


class MainController extends Controller
{
    function index(){
        $image1 = Photos::where('types','=','Background')->get();
        $images1 = Photos::where("types","=","Screenshoot")->get();
        $admin = Admin::with('photos')->get();
        $news1 = Captions::where("photo_id","!=","NULL")->orderBy('id','DESC')->with('photos')->take(5);
        $link = Captions::where("title","ServerIP")->orWhere("title","Content")->get();

        return view('welcome',['image1' => $image1,'images1' => $images1,
                                'admin'=> $admin,'news1' => $news1,
                                'link' => $link]);
    }

    function gallery($id){
        if($id == 1)
        {
            $gamemodes = "TTT";
        }else if($id == 2){
            $gamemodes = "Surf";
        }else if($id == 3){
            $gamemodes = "Deathrun";
        }else if($id == 4){
            $gamemodes = "PH";
        }else if($id == 5){
            $gamemodes = "Slender";
        }else if($id == 6){
            $gamemodes = "Sandbox";
        }
        $background = Photos::where("types","=","Background")->where("gamemodes","=",$gamemodes)->get();
        $images = Photos::Where("types","=","Screenshoot")->where("gamemodes","=",$gamemodes)->get();
        return view('gallery',['images' => $images,'background' => $background]);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Photos;
use App\Models\Posts;
use App\Models\Captions;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminController extends Controller
{
    function dashboard(){
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.dashboard',['admin'=>$admin]);
    }

    function photos(){
        $photo = Photos::get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.photos', ['admin'=>$admin,'photo'=>$photo]);
    }
}

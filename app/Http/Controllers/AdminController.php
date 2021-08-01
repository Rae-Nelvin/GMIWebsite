<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Photos;
use App\Models\Admin;
use App\Models\Captions;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
        $photo = Photos::paginate(5);
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.photos', ['admin'=>$admin,'photo'=>$photo]);
    }

    function news(){
        $news = Captions::with('photos')->get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.news', ['admin'=>$admin,'news'=>$news]);
    }

    function admin(){
        $admins = Admin::with('photos')->get();
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.admin', ['admin'=>$admin,'admins'=>$admins]);
    }
}

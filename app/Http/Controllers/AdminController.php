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
        $count_photos = Photos::count();
        $count_admin = Photos::where("types","=","Admin")->count();
        $count_news = Photos::where("types","=","News")->count();
        $count_link = Captions::where("title","=","ServerIP")->orWhere("title","=","Content")->count();
        return view('admin.dashboard',['admin'=>$admin,'count_photos'=>$count_photos,
                                        'count_admin'=>$count_admin,'count_news'=>$count_news,
                                        'count_link'=>$count_link]);
    }

    function photos(){
        $photo = Photos::where("types","=","Screenshoot")->orWhere("types","=","Background")->paginate(5);
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.photos', ['admin'=>$admin,'photo'=>$photo]);
    }

    function news(){
        $news = Captions::where("photo_id","!=","NULL")->with('photos')->paginate(5);
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.news', ['admin'=>$admin,'news'=>$news]);
    }

    function admin(){
        $admins = Admin::with('photos')->paginate(5);
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.admin', ['admin'=>$admin,'admins'=>$admins]);
    }

    function link(){
        $link = Captions::where("title","ServerIP")->orWhere("title","Content")->paginate(15);
        $id = Session::get('LoggedUser');
        $admin = User::where('id', $id)->get(['name']);
        return view('admin.link', ['admin'=>$admin,'link'=>$link]);
    }
}

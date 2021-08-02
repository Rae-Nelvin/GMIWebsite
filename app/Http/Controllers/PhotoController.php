<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;
use Session;
use App\Models\User;
use App\Models\Admin;
use App\Models\Captions;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    function upload_photos(){
        $id = Session::get('LoggedUser');
        $admin = User::where('id',$id)->get(['name']);
        return view('admin.upload_photos',['admin'=>$admin]);
    }

    function uploadphotos(Request $request){
        $request->validate([
            'caption' => 'required',
            'gamemodes' => 'required',
            'images' => 'required'
        ]);

        if($request->types == "Screenshoot"){
            $types = "Screenshoot";
            $gamemodes = $request->gamemodes;
        }else if($request->types == "Background"){
            $types = $request->types;
            $request->validate([
                'images' => 'max:1'
            ]);
        }

        $id = Session::get('LoggedUser');
        $files = $request->file('images');
        $check = Photos::where("types","=","Background")->where("gamemodes","=",$request->gamemodes)->first();
    
        if($request->types == "Screenshoot"){
                foreach($files as $file){
                $imageName = $types .'/'. $request->gamemodes . '/'.  $file->getClientOriginalName();
                $file->move(public_path('uploads/'. $types . '/' . $request->gamemodes), $imageName);

                Photos::create([
                    'author_id' => $id,
                    'caption' => $request->caption,
                    'types' => $types,
                    'gamemodes' => $gamemodes,
                    'file_path' => $imageName
                ]);
            }
        }else if($request->types == "Background"){
            if($check == NULL){
                foreach($files as $file){
                    $imageName = $request->gamemodes . $file->getClientOriginalName();
                    $imageURL = $types . '/' . $request->gamemodes . $file->getClientOriginalName();
                    $file->move(public_path('uploads/'. $types), $imageName);
    
                    Photos::create([
                        'author_id' => $id,
                        'caption' => $request->caption,
                        'types' => $types,
                        'gamemodes' => $request->gamemodes,
                        'file_path' => $imageURL
                    ]);
                }
            }else{
                foreach($files as $file){
                    $imageName =  $request->gamemodes . $file->getClientOriginalName();
                    $imageURL = $types . '/' . $request->gamemodes . $file->getClientOriginalName();
                    $file->move(public_path('uploads/'. $types), $imageName);
    
                    Photos::where("id","=",$check->id)
                    ->update([
                        'author_id' => $id,
                        'caption' => $request->caption,
                        'types' => $types,
                        'gamemodes' => $request->gamemodes,
                        'file_path' => $imageURL
                    ]);
                }
            }
        }
        

        return redirect('admin/photos')->with('Successful', 'Your Photo has been uploaded successfully!!');
    }

    function upload_admin(){
        $id = Session::get('LoggedUser');
        $admin = User::where('id',$id)->get(['name']);
        return view('admin.upload_admin',['admin'=>$admin]);
    }

    function uploadadmin(Request $request){
        $request->validate([
            'steam_name' => 'required',
            'real_name' => 'required',
            'images' => 'required',
            'types' => 'required'
        ]);

        $author_id = Session::get('LoggedUser');
        $files = $request->file('images');

        foreach($files as $file){
            $imageName = $request->types . '/'.  $file->getClientOriginalName();
            $file->move(public_path('uploads/'. $request->types . '/'), $imageName);

            Photos::create([
                'caption' => $request->steam_name,
                'author_id' => $author_id,
                'types' => $request->types,
                'file_path' => $imageName
            ]);

            $id = Photos::select("id")->where("caption","=",$request->steam_name)->first();

            Admin::create([
                'steam_name' => $request->steam_name,
                'real_name' => $request->real_name,
                'social_media' => $request->social_media,
                'role' => $request->role,
                'photo_id' => $id->id,
                'author_id' => $author_id
            ]);
        }

        return redirect('admin/admin')->with('Successful', 'Your Photo has been uploaded successfully!!');
    }

    function admin_edit($id){
        $ids = Session::get('LoggedUser');
        $admin = User::where('id',$ids)->get(['name']);
        $admins = Admin::where('id',$id)->get();
        return view('admin.admin_edit',['admin'=>$admin,'admins' => $admins]);
    }

    function adminedit(Request $request){
        $request->validate([
            'steam_name' => 'required',
            'real_name' => 'required',
            'images' => 'required',
            'types' => 'required',
            'prevpid' => 'required'
        ]);

        $author_id = Session::get('LoggedUser');
        $files = $request->file('images');

        foreach($files as $file){
            $imageName = $request->types . '/'.  $file->getClientOriginalName();
            $file->move(public_path('uploads/'. $request->types . '/'), $imageName);

            $updatephotos = Photos::where('id',$request->prevpid)
            ->update([
                'caption' => $request->steam_name,
                'author_id' => $author_id,
                'types' => $request->types,
                'file_path' => $imageName
            ]);

            $id = Photos::select("id")->where("caption","=",$request->steam_name)->first();

            $edit = Admin::where('id',$request->id)
                ->update([
                'steam_name' => $request->steam_name,
                'real_name' => $request->real_name,
                'social_media' => $request->social_media,
                'role' => $request->role,
                'photo_id' => $id->id,
                'author_id' => $author_id
            ]);
        }
        
            return redirect('admin/admin')->with('Successful', 'Your Photo has been updated successfully!!');
    }

    function upload_news(){
        $id = Session::get('LoggedUser');
        $admin = User::where('id',$id)->get(['name']);
        return view('admin.upload_news',['admin'=>$admin]);
    }

    function uploadnews(Request $request){
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'link' => 'required',
            'images' => 'required'
        ]);

        $author_id = Session::get('LoggedUser');
        $files = $request->file('images');
        $types = "News";

        foreach($files as $file){
            $imageName = $types . '/'.  $file->getClientOriginalName();
            $file->move(public_path('uploads/'. $types . '/'), $imageName);

            Photos::create([
                'caption' => $request->title,
                'author_id' => $author_id,
                'types' => $types,
                'file_path' => $imageName
            ]);

            $id = Photos::select("id")->where("file_path","=",$imageName)->first();

            Captions::create([
                'title' => $request->title,
                'desc' => $request->desc,
                'link' => $request->link,
                'photo_id' => $id->id,
                'author_id' => $author_id
            ]);
            
        }

        return redirect('admin/news')->with('Successful', 'Your Photo has been uploaded successfully!!');
    }

    function delete($id){

        $delete = Photos::where('id',$id)->get();
        $delete->each->delete();

        return redirect('admin/photos')->with('Fail', 'Your Photo has been deleted successfully!!');
    }
}

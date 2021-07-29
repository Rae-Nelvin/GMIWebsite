<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;
use Illuminate\Database\Eloquent\Collection;
use Session;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Posts;

class PhotoController extends Controller
{
    function upload_photos(){
        $id = Session::get('LoggedUser');
        $admin = User::where('id',$id)->get(['name']);
        return view('admin.upload_photos',['admin'=>$admin]);
    }

    function uploadphotos(Request $request){
        $request->validate([
            'title' => 'required',
            'images' => 'required'
        ]);

        $id = Session::get('LoggedUser');

        $files = $request->file('images');

        foreach($files as $file){
            $imageName = $request->event.'/'.$file->getClientOriginalName();
            $file->move(public_path('uploads/'. $request->event), $imageName);
            
            Photos::create([
                'author_id' => $id,
                'title' => $request->title,
                'types' => $request->types,
                'file_path' => $imageName
            ]);
        }

        return redirect('admin/photos')->with('Successful', 'Your Photo has been uploaded successfully!!');
    }

    function delete($id){

        $delete = Photos::where('id',$id)->get();
        $delete->each->delete();

        return redirect('admin/photos')->with('Fail', 'Your Photo has been deleted successfully!!');
    }
}

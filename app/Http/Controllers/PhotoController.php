<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;
use Session;
use App\Models\User;
use App\Models\Posts;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    function upload_photos(){
        $id = Session::get('LoggedUser');
        $admin = User::where('id',$id)->get(['name']);
        return view('admin.upload_photos',['admin'=>$admin]);
    }

    function check($types,$id){
        
        $check = Photos::where('types',$types)->where('is_key',1)->get()->first();
        $photos = Photos::where('types',$types)->orderBy('id','DESC')->get()->first();

        if($check == NULL)
        {
            $photos->is_key = true;
            $photos->save();
        }

        else{
            $check->is_key = false;
            $photos->is_key = true;
            $check->$photos->save();
        }
    }

    function uploadphotos(Request $request){
        $request->validate([
            'title' => 'required',
            'images' => 'required'
        ]);

        $id = Session::get('LoggedUser');
        $files = $request->file('images');

        foreach($files as $file){
            $imageName = $request->types.'/'.$file->getClientOriginalName();
            $file->move(public_path('uploads/'. $request->types), $imageName);

            Photos::create([
                'author_id' => $id,
                'title' => $request->title,
                'types' => $request->types,
                'file_path' => $imageName
            ]);
        }

        $this->check($request->types,$id);

        return redirect('admin/photos')->with('Successful', 'Your Photo has been uploaded successfully!!');
    }

    function delete($id){

        $delete = Photos::where('id',$id)->get();
        $delete->each->delete();

        return redirect('admin/photos')->with('Fail', 'Your Photo has been deleted successfully!!');
    }
}

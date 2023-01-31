<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
{
    public function update_foto(Request $request,$id)
    {
        $photo = Photo::where('user_id', $id)->first();

       if($photo == null){
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path_image = "images/";
            $image->move($path_image, $image_name);

            Photo::insert([
                'user_id'   => $id,
                'foto'  => $image_name
            ]);
            return redirect()->back()->with('success', 'Foto Berhasil di Simpan');
       }else{
            $path = "images/$photo->foto";
            
            if(File::exists($path)){
                File::delete($path);
                $hapus = $photo->delete();
                if($hapus){
                    $image = $request->file('image');
                    $image_name = $image->getClientOriginalName();
                    $path_image = "images/";
                    $image->move($path_image, $image_name);
        
                    Photo::insert([
                        'user_id'   => $id,
                        'foto'  => $image_name
                    ]);
                    }else{
                        echo "Error";
                    }
                    return redirect()->back()->with('success', "Foto Berhasil Di Update");
            }
       }
    }
}

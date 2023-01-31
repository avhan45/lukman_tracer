<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
{
    public function update_foto(Request $request,$id)
    {
        $photo = Photo::Where('user_id', $id);

       if($photo == null){
        echo "Tidak Ada Foto";
       }else{
            dd($photo);
       }
        // dd($id);

    //    $image = $request->file('image');
    //     $image_name = $image->getClientOriginalName();
    //     $path = "images/";
    //     $image->move($path, $image_name);

    //     Photo::insert([
    //         'user_id' => $id,
    //         'foto' => $image_name
    //     ]);
    }
}

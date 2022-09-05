<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;

class UploadController extends Controller
{
    public function index(){
        $data['mangas'] = Manga::orderBy('id', 'desc')->paginate(5);
        return view('Anipost.upload', $data);
    }


  public function upload(){
    return view('Anipost.upload');
  }

  // upload image
  public function addmanga(Request $request){
    $picture = new Manga;
    $picture->name = $request->input('name');
    $picture->picture = $request->input('picture');
    if($request->hasfile('picture')){
        $file = $request->file('picture');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $upload_location = 'image/';
        $name_img = $picture->name.'.'.$extension;
        $file->move($upload_location, $filename);
        $picture->picture = $filename;
    }
    
    $picture->save();
  return redirect()->back()->with('status', 'Successful');
  }
}
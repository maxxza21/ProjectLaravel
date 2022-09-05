<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Manga;

class InformationController extends Controller
{
    // data
    public function data(){
        $data['mangas'] = Manga::orderBy('id', 'desc')->paginate(5);
        return view('Anipost.information', $data);
    }
    // detele
    public function delete($id){
     $data = Manga::find($id);
     $data->delete();
     return redirect('Anipost/information')->with('success', 'delete successfully!');
    }
    // edit
    public function edit($id){
        $mangas = Manga::find($id);
        return view('Anipost.edit', compact('mangas'));
    }
    //update
    public function update(Request $request,$id){
        $mangas = Manga::find($id);
        $mangas->name = $request->input('name');
        $mangas->picture = $request->input('picture');
        $id = $request->id;
        $picture = $request->picture;
            if($request->hasfile('picture')){
            $updatepicture = 'image/'.$mangas->picture;
            if(File::exists($updatepicture))
            {
                File::delete($updatepicture);
            }
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('image/', $filename);
            $mangas->picture = $filename;
            $mangas->update();
        }
        
        
        return redirect('Anipost/edit/'. $id)->with('alert', 'update successfully');
    }
   
}
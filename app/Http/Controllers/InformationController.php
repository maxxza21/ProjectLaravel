<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Filesystem\Filesystem;
use App\Models\Manga;
use Illuminate\Support\Facades\DB;

class InformationController extends Controller
{
    // data
    public function data(){
        $data['mangas'] = Manga::orderBy('id', 'desc')->paginate(4);
        return view('Anipost.information', $data);
    }

    // detele
    // public function delete(){
    //     $mangas = DB::delete('delete from mangas where id=?', [$id]);
    //     return redirect('Anipost/information')->with('success', 'delete successfully!');
    // }
    public function delete($id){
     $data = Manga::find($id);
     $data->delete();
     return redirect('Anipost/information')->with('success', 'delete successfully!');
    }
    //edit
    public function edit($id){
        $mangas = Manga::find($id);
        return view('Anipost.edit', compact('mangas'));
    }
    //update
    public function update(Request $request,$id){
        $mangas = Manga::find($id);
        $mangas->name = $request->input('name');
        $mangas->secondname = $request->input('secondname');
        $mangas->author = $request->input('author');
        $mangas->status = $request->input('status');
        $mangas->website = $request->input('website');
        $mangas->synopsis = $request->input('synopsis');
        $mangas->artist = $request->input('artist');
        
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
        
        $mangas->update();
        return redirect('Anipost/edit/'. $id)->with('alert', 'Update Successfully');
    }
    public function search2(Request $request){
        $search = $request->get('search');
        $mangas = DB::table('mangas')->where('name', 'like', '%' .$search. '%')->paginate(5);
        return view('Anipost.information', ['mangas' => $mangas]);
    }
   
}
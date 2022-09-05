<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;


class AnipostController extends Controller
{
    // index
    public function index(){
        $data['mangas'] = Manga::orderBy('id', 'asc')->paginate(12);
        // $data = Manga::all();
        return view('Anipost.index', $data);
    }


    // check information
    public function check(){
        $datas = Manga::all();
        print_r($datas);
        return view('Anipost.test', compact('datas'));
    }
   public function redirects(){
    return redirect()->to('Anipost.information')->send();
   }
 
}


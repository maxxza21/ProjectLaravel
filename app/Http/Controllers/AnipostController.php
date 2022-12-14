<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;
use App\Models\User;



class AnipostController extends Controller
{
    // index
    public function index(){
        $data['mangas'] = Manga::orderBy('id', 'desc')->paginate(12);
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

   // contact page
   public function contact(){
    return view('Anipost.contact');
   }
     
   // redirect
   public function redirect(){
    return redirect('Anipost');
   }
      // index detail
      public function detail(){
        return view('Anipost.animedetail');
    }

    //search
    public function searchpage(){
        return view('Anipost.search');
    }
    public function search(Request $request){
        $search = $request->get('search');
        $mangas = DB::table('mangas')->where('name', 'like', '%' .$search. '%')->paginate(5);
        return view('Anipost.search', ['mangas' => $mangas]);
    }
    // user page
    public function user(){
        $data['mangas'] = Manga::orderBy('id', 'desc')->paginate(12);
        return view('Anipost.admin', $data);
    }
    // public function userindex(){
    //     return view('Anipost.user');
    // }
        public function adminpage(){
            return view('Anipost.admin');
        }
 
    public function usercheck()
    {
        if(Auth::check()){
            $data['mangas'] = Manga::orderBy('id', 'desc')->paginate(12);
            return view('Anipost.admin',$data);
        }else{
  
        return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

}





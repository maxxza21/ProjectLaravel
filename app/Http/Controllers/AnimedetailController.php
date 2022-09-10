<?php
namespace App\Http\Controllers;
use App\Models\Manga;
use App\Http\Controllers\AnipostController;
use Illuminate\Http\Request;


class AnimedetailController extends Controller
{

    public function index(){
        $data['mangas'] = Manga::orderBy('id', 'asc')->paginate(12);
        // $data = Manga::all();
        return view('Anipost.animedetail', $data);
    }

    // index detail
    public function detail($id){
        return view('Anipost.animedetail');
    }
    // get name

    public function title($id){
        $mangas = Manga::find($id);
        return view('Anipost.animedetail', compact('mangas'));
    }
  
 
    
}

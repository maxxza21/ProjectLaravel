<?php
namespace App\Http\Controllers;
use App\Models\Manga;
use App\Http\Controllers\AnipostController;
use Illuminate\Http\Request;


class Animedetail extends Controller
{

    public function index(){
        $data['mangas'] = Manga::orderBy('id', 'asc')->paginate(12);
        // $data = Manga::all();
        return view('Anipost.index', $data);
    }

    // index detail
    public function detail(){
        return view('Anipost.animedetail');
    }
    
}

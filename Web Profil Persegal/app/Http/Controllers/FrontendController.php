<?php

namespace App\Http\Controllers;
use App\Berita;
use App\Squad;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        $berita = Berita::orderBy('id','DESC')->paginate(4);
        $headers = Berita::orderBy('id', 'DESC')->paginate(3);
        $popular = Berita::orderBy('id', 'DESC')->paginate(6);

        $beritas = Berita::orderBy('id','DESC')->paginate(4);
        $headersb = Berita::orderBy('id', 'DESC')->paginate(3);
        $popularb = Berita::orderBy('id', 'DESC')->paginate(6);

        $squads = Squad::orderBy('id','DESC')->paginate(4);
        $squad = Squad::orderBy('id','DESC')->paginate(4);


        return view('frontend.home',compact('berita','headers', 'popular','squad','beritas','headersb','popularb','squads'));


   }


    public function beritanews(){
        $berita = Berita::orderBy('id','DESC')->paginate(4);
        $headers = Berita::orderBy('id', 'DESC')->paginate(3);
        $popular = Berita::orderBy('id', 'DESC')->paginate(6);
        return view('frontend.berita',compact('berita','headers', 'popular'));
    }

    public function beritadetail($slug){
        $berita = Berita::where('slug', $slug)->first();
        $headers = Berita::where('slug', $slug);
        $popular = Berita::orderBy('id', 'DESC')->paginate(6);
        return view('frontend.detailberita',compact('berita','headers', 'popular'));
    }



    public function daftarsquad(){
        $squad = Squad::orderBy('id','DESC')->paginate(4);
        $headers = Squad::orderBy('id', 'DESC')->paginate(3);
        $popular = Squad::orderBy('id', 'DESC')->paginate(6);
        return view('frontend.squad',compact('squad','headers', 'popular'));
    }

    public function squaddetail($slug){
        $squad = Squad::where('slug', $slug)->first();
        $headers = Squad::where('slug', $slug);
        $popular = Squad::orderBy('id', 'DESC')->paginate(6);

        $berita = Berita::orderBy('id','DESC')->paginate(4);
        $headersberita = Berita::orderBy('id', 'DESC')->paginate(3);
        $popularberita = Berita::orderBy('id', 'DESC')->paginate(6);

        return view('frontend.squaddetail',compact('squad','headers', 'popular','berita','headersberita','popularberita'));
    }
}

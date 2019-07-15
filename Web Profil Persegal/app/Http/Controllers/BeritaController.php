<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Category;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('status','1')->get();
        $berita = Berita::where('status','1')->get();
        return view('backend.berita.index',compact('berita', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status','1')->get();
        //dd($categories);
        return view('backend.berita.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = $request->file('foto')->store('berita');

        Berita::create([
            'judul' => $request->judul,
            'isi_konten' => $request->isi_konten,
            'id_kategori' => $request->category_id,
            'slug' => str_slug($request->judul),
            'foto' => $foto,//form
        ]);

        return redirect()->route('berita')->with('success','Category berhasil di tambhakan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::where('status','1')->get();
        $berita = Berita::find($id);
        return view('backend.berita.edit',compact('berita', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);
        $berita->judul = $request->judul;
        $berita->isi_konten = $request->isi_konten;
        $berita->id_kategori = $request->category_id;
        $foto = $request->file('foto');
        if ($foto == ''){
            $berita->foto = $request->old_foto;
        }else{
            $berita->foto = $request->file('foto')->store('berita');
        }
        $berita->update();

        return redirect()->route('berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->update(['status'=>'0']);
        return redirect()->route('berita');
    }
}

<?php

namespace App\Http\Controllers;

use App\Category;
use App\Squad;
use Storage;

use Illuminate\Http\Request;

class SquadController extends Controller
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

        $squad = Squad::where('status','1')->get();
        return view("backend.squad.index",compact('squad','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status','1')->get();
        return view("backend.squad.create",compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $foto = $request->file('foto')->store('squad');

        Squad::create([
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'nomor_punggung' => $request->nomor_punggung,
            'id_kategori'=> $request->id_kategori,
            'foto' => $foto,//form
            'tgl_lahir' => $request->tgl_lahir,
            'slug' => str_slug($request->nama),

        ]);

        return redirect()->route('squad');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Squad  $squad
     * @return \Illuminate\Http\Response
     */
    public function show(Squad $squad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Squad  $squad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::where('status','1')->get();
        $squad = Squad::find($id);
        return view("backend.squad.edit",compact('squad','categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Squad  $squad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $squad = Squad::find($id);
        $squad->nama = $request->nama;
        $squad->posisi = $request->posisi;
        $squad->nomor_punggung = $request->nomor_punggung;
        $squad->tgl_lahir = $request->tgl_lahir;
        $squad->id_kategori = $request->id_kategori;
        $foto = $request->file('foto');
        if ($foto == ''){
            $squad->foto = $request->old_foto;
        }else{
            $squad->foto = $request->file('foto')->store('squad');
        }
        $squad->update();

        return redirect()->route('squad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Squad  $squad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $squad=Squad::find($id);
        $squad->update(['status'=>'0']);
        return redirect()->route('squad');
    }
}

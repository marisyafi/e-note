<?php

namespace App\Http\Controllers;

use App\Notulensi;
use App\User;
use App\Acara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotulensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Notulensi.tambahNotulensi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        $this->validate($request, array(
            'judul' => 'required|string|max:255',
            'tempat' => 'required|string|max:255',
            'moderator' => 'required|string|max:255',
            'topik' => 'required|string|max:255',
            'jumlah' => 'required|integer|max:255',
            'kesimpulan' => 'required|string|max:255',

        ));

      
        //isi  database 
        $notulensi=new Notulensi;
        $notulensi->judul = $request->judul;
        $notulensi->tempat = $request->tempat;
        $notulensi->tanggal = $request->tanggal;
        $notulensi->moderator = $request->moderator;
        $notulensi->topik = $request->topik;
        $notulensi->jumlah = $request->jumlah;
        $notulensi->kesimpulan = $request->kesimpulan;
        $notulensi->id_user= $request->user()->id;
        $notulensi->change_by= $request->user()->id;
        $notulensi->id_acara= 0;
        $notulensi->id_divisi=0;
        
        $notulensi->save();

        return redirect()->route('Notulensi.show', $notulensi->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_buku = DB::table('buku')
        ->join('pengarang', 'pengarang.id', '=', 'buku.pengarang_id')
        ->join('penerbit', 'penerbit.id', '=', 'buku.penerbit_id')
        ->join('kategori', 'kategori.id', '=', 'buku.kategori_id')
        ->select('buku.*', 'pengarang.nama', 'penerbit.nama AS pen', 'kategori.nama AS kat')
        ->get();
        return view('buku/index', compact('ar_buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    DB::table('buku')->insert(
        [
            'isbn' => $request->isbn,
            'judul' =>$request->judul,
            'tahun_cetak'=>$request->tahun_cetak,
            'stok'=>$request->stok,
            'penerbit_id'=>$request->penerbit_id,
            'pengarang_id'=>$request->pengarang_id,
            'kategori_id'=>$request->kategori_id,
            'cover'=>$request->cover,
        ]
    );
    return redirect('/buku');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datas = DB::table('buku')
        ->join('pengarang', 'pengarang.id', '=', 'buku.pengarang_id')
        ->join('penerbit', 'penerbit.id', '=', 'buku.penerbit_id')
        ->join('kategori', 'kategori.id', '=', 'buku.kategori_id')
        ->select('buku.*', 'pengarang.nama', 'penerbit.nama AS pen', 'kategori.nama AS kat')
        ->where('buku.id', '=', $id)
        ->get();
        return view('buku.show', compact('datas'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = db::table('buku')->where('id', $id)->get();
        return view('buku.update', compact('datas'));
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
        DB::table('buku')->where('id', $request->id)->update(
        [
            'isbn' => $request->isbn,
            'judul' =>$request->judul,
            'tahun_cetak'=>$request->tahun_cetak,
            'stok'=>$request->stok,
            'penerbit_id'=>$request->penerbit_id,
            'pengarang_id'=>$request->pengarang_id,
            'kategori_id'=>$request->kategori_id,
            // 'cover'=>$request->cover,
        ]
    );
    return redirect('/buku'.'/'.$id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('buku')->where('id', $id)->delete();
        return redirect('/buku');
    }
}
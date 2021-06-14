@extends('layouts.index')

@section('content')
@php
$rs1 = App\models\Pengarang::all();
$rs2 = App\models\Penerbit::all();
$rs3 = App\models\Kategori::all();
@endphp
<h3>Form Buku</h3>
<form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">ISBN</label>
        <input type="text" name="isbn" value="" class="form-control"  />
    </div>
    <div class="form-group">
        <label for="">Judul</label>
        <input type="text" name="judul" value="" class="form-control" />
    </div>
    <div class="form-group">
        <label for="">Tahun Cetak</label>
        <input type="text" name="tahun_cetak" value="" class="form-control" />
    </div>
    <div class="form-group">
        <label for="">Stok</label>
        <input type="text" name="stok" value="" class="form-control" />
    </div>
    <div class="form-group">
        <label>Pilih Pengarang</label>
        <select class="form-control" id="exampleFormControlSelect1" name="pengarang_id">
            <option>--Pilih Pengarang--</option>
            @foreach ($rs1 as $value)
                <option value="{{$value->id}}">{{$value->nama}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Pilih Penerbit</label>
        <select class="form-control" id="exampleFormControlSelect1" name="penerbit_id">
            <option>--Pilih Penerbit--</option>
            @foreach ($rs2 as $value)
                <option value="{{$value->id}}">{{$value->nama}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Pilih Kategori</label><br/>
        @foreach ($rs3 as $item)
            <input type="radio" name="kategori_id" value="{{$item->id}}">{{$item->nama}}&nbsp;
        @endforeach
    </div>
    <div class="form-group">
        <label for="">Cover</label>
        <input type="file" name="cover" value="" />
    </div>
    <button type="submit" name="proses" value="simpan" class="btn btn-primary">Simpan</button>
    <button type="reset" name="unproses" value="batal" class="btn btn-info">Batal</button>
</form>
@endsection
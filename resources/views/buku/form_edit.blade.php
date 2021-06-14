@extends('layouts.index')

@section('content')
@php
$rs1 = App\models\Pengarang::all();
$rs2 = App\models\Penerbit::all();
$rs3 = App\models\Kategori::all();
@endphp
<h3>Form Edit Buku</h3>
@foreach ($datas as $data)
<form action="{{ route('buku.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">ISBN</label>
        <input type="text" name="isbn" value="{{$data->isbn}}" class="form-control"  />
    </div>
    <div class="form-group">
        <label for="">Judul</label>
        <input type="text" name="judul" value="{{$data->judul}}" class="form-control" />
    </div>
    <div class="form-group">
        <label for="">Tahun Cetak</label>
        <input type="text" name="tahun_cetak" value="{{$data->tahun_cetak}}" class="form-control" />
    </div>
    <div class="form-group">
        <label for="">Stok</label>
        <input type="text" name="stok" value="{{$data->stok}}" class="form-control" />
    </div>
    <div class="form-group">
        <label>Pilih Pengarang</label>
        <select class="form-control" id="exampleFormControlSelect1" name="pengarang_id">
            <option>--Pilih Pengarang--</option>
            @foreach ($rs1 as $value)
            @php
                $sel1 = ($value->id == $data->pengarang_id) ? 'selected' : '';
            @endphp
            <option value="{{$value->id}}" {{$sel1}}>{{$value->nama}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Pilih Penerbit</label>
        <select class="form-control" id="exampleFormControlSelect1" name="penerbit_id">
            <option>--Pilih Penerbit--</option>
            @foreach ($rs2 as $value)
            @php
                $sel2 = ($value->id == $data->penerbit_id) ? 'selected' : '';
            @endphp
            <option value="{{$value->id}}" {{$sel2}}>{{$value->nama}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Pilih Kategori</label><br />
        @foreach ($rs3 as $item)
        @php
                $sel3 = ($value->id == $data->kategori_id) ? 'checked' : '';
            @endphp
        <input type="radio" name="kategori_id" value="{{$item->id}}" {{$sel3}}>{{$item->nama}}&nbsp;
        @endforeach
    </div>
    <button type="submit" name="proses" value="update" class="btn btn-primary">Update</button>
    <button type="reset" name="unproses" value="batal" class="btn btn-info">Batal</button>
</form>
@endforeach
@endsection
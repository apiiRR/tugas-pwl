@extends('layouts.index')

@section('content')
<h3>Form Pengarang Buku</h3>
<form action="{{ route('pengarang.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Nama Pengarang</label>
        <input type="text" name="nama" value="" class="form-control"  />
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" value="" class="form-control" />
    </div>
    <div class="form-group">
        <label for="">HP</label>
        <input type="text" name="hp" value="" class="form-control" />
    </div>
    <div class="form-group">
        <label for="">Foto Pengarang</label>
        <input type="file" name="foto" value="" />
    </div>
    <button type="submit" name="proses" value="simpan" class="btn btn-primary">Simpan</button>
    <button type="reset" name="unproses" value="batal" class="btn btn-info">Batal</button>
</form>
@endsection
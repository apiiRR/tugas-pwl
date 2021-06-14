@extends('layouts.index')

@section('content')
<h3>Form Pengarang Buku</h3>
<form action="{{ route('pengarang.update', $rs->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Nama Pengarang</label>
        <input type="text" name="nama" value="{{ $rs->nama }}" class="form-control"  />
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" value="{{ $rs->email }}" class="form-control" />
    </div>
    <div class="form-group">
        <label for="">HP</label>
        <input type="text" name="hp" value="{{ $rs->hp }}" class="form-control" />
    </div>
    <div class="form-group">
        <label for="">Foto</label>
        <input type="text" name="foto" value="{{ $rs->foto }}" class="form-control" />
    </div>
    <button type="submit" name="proses" value="Ubah" class="btn btn-primary">Ubah</button>
    <input type="hidden" name="id" value="{{ $rs->id }}" /> 
    <button type="reset" name="unproses" value="batal" class="btn btn-info">Batal</button>
</form>
@endsection
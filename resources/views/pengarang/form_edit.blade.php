@extends('layouts.index')
@section('content')
<h3>Form Edit Pengarang</h3>
<form method="POST" action="{{ route('pengarang.update', $data->id) }}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label>Nama Pengarang</label>
        <input type="text" name="nama" value="{{ $data->nama }}" class="form-control" />
    </div>
    <div class="form-group">
        <label>Email Pengarang</label>
        <input type="text" name="email" value="{{ $data->email }}" class="form-control" />
    </div>
    <div class="form-group">
        <label>HP Pengarang</label>
        <input type="text" name="hp" value="{{ $data->hp }}" class="form-control" />
    </div>
    <div class="form-group">
        <label>Foto Pengarang</label>
        <input type="file" name="foto" value="{{ $data->foto }}" class="form-control" />
    </div>
    <button type="submit" class="btn btn-primary" name="proses">Ubah</button>
    <button type="reset" class="btn btn-danger" name="unproses">Batal</button>
</form>
@endsection
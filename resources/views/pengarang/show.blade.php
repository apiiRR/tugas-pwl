@extends('layouts.index')

@section('content')
<div class="jumbotron">
    <h3>Detail Data Pengarang Buku</h3>
    @foreach($ar_pengarang as $rs)
    Nama Pengarang : {{ $rs->nama }}
    <br />Email : {{ $rs->email }}
    <br />HP : {{ $rs->hp }}
    <br />Foto : {{ $rs->foto }}
    @endforeach
    <a class="btn btn-primary" href="{{ route('pengarang.index') }}">Go Back</a>
</div>
@endsection
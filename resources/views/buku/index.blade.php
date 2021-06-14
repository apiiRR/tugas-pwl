@extends('layouts.index')

@section('content')
@php
$ar_judul = ['No', 'ISBN', 'Judul', 'Stok', 'Pengarang', 'Penerbit', 'Kategori', 'Action'];
@endphp
<h3>Daftar Buku</h3>
<br />
<a href="{{route('buku.create')}}" class="btn btn-primary">Tambah Pengarang Buku</a>
<br /><br />
<table class="table table-striped">
    <thead>
        <tr>
            @foreach ($ar_judul as $jdl)
            <th scope="col">{{$jdl}}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($ar_buku as $no => $b)
        <tr>
            <td>{{++$no}}</td>
            <td>{{ $b->isbn}}</td>
            <td>{{ $b->judul}}</td>
            <td>{{ $b->stok}}</td>
            <td>{{ $b->nama}}</td>
            <td>{{ $b->pen}}</td>
            <td>{{ $b->kat}}</td>
            <td>
                <form action="{{ route('buku.destroy',$b->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-primary" href="{{ route('buku.show',$b->id)}}" role="button">Detail</a>
                    <a class="btn btn-warning" href="{{ route('buku.edit',$b->id)}}" role="button">Ubah</i></a>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin diHapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
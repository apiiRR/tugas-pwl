@extends('layouts.index')

@section('content')
@php
$ar_judul = ['No', 'ISBN', 'Judul', 'Stok', 'Pengarang', 'Penerbit', 'Kategori', 'Cover', 'Action'];
@endphp
<h3>Daftar Buku</h3>
<br />
<a href="{{route('buku.create')}}" class="btn btn-primary">Tambah Buku</a>
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
            <td>{{$b->isbn}}</td>
            <td>{{$b->judul}}</td>
            <td>{{$b->stok}}</td>
            <td>{{$b->nama}}</td>
            <td>{{$b->pen}}</td>
            <td>{{$b->kat}}</td>
            <td width="13%">
                @php
                if (!empty($b->foto)){
                @endphp
                <img src="{{ asset('images')}}/{{$b->foto}}" width="60%" />
                @php
                } else {
                @endphp
                <img src="{{asset('images')}}/nophoto.jpg" width="60%" />
                @php
                }
                @endphp
            </td>
            <td>
                <form method="POST" action="{{route('buku.destroy',$b->id)}}">
                    @csrf
                    @method('delete')
                    <a class="btn btn-info" href="{{route('buku.show', ['buku' => $b->id])}}">Detail</a>
                    <a class="btn btn-success" href="{{route('buku.edit',$b->id)}}">Edit</a>
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Anda Yakin Data dihapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
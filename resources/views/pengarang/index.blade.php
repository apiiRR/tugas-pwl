@extends('layouts.index')

@section('content')
@php
$ar_judul = ['No', 'Nama', 'Email', 'HP', 'Foto'];
@endphp
<h3>Daftar Pengarang</h3>
<br />
<a href="{{route('pengarang.create')}}" class="btn btn-primary">Tambah Pengarang Buku</a>
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
        @foreach ($ar_pengarang as $no => $row)
        <tr>
            <td>{{++$no}}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->hp }}</td>
            <td>{{ $row->foto }}</td>
            <td>
                <form action="{{ route('pengarang.destroy',$row->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-primary" href="{{ route('pengarang.show',$row->id)}}" role="button">Detail</a>
                    <a class="btn btn-warning" href="{{ route('pengarang.edit',$row->id)}}" role="button">Ubah</i></a>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin diHapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
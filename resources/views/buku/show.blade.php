@extends('layouts.index')

@section('content')
@foreach($datas as $data)
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$data->judul}}</h5>
        <p class="card-text">
            ISBN : {{$data->isbn}} <br/>
            Tahun Cetak : {{$data->tahun_cetak}} <br/>
            Stok : {{$data->stok}} <br/>
            Pengarang : {{$data->nama}} <br/>
            Penerbit : {{$data->pen}} <br/>
            Kategori : {{$data->kat}}
        </p>
        <a href="{{url('/buku')}}" class="btn btn-primary">Go Back</a>
    </div>
</div>
@endforeach
@endsection
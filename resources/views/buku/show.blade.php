@extends('layouts.index')

@section('content')
@foreach($datas as $data)
<div class="card" style="width: 18rem;">
    @php
    if (!empty($data->foto)){
    @endphp
    <img src="{{asset('images')}}/{{$data->foto}}" width="60%" class="card-img-top" />
    @php
    } else {
    @endphp
    <img src="{{asset('images')}}/nophoto.jpg" width="60%" class="card-img-top" />
    @php
    }
    @endphp
    <div class="card-body">
        <h5 class="card-title">{{$data->judul}}</h5>
        <p class="card-text">
            ISBN : {{$data->isbn}} <br />
            Tahun Cetak : {{$data->tahun_cetak}} <br />
            Stok : {{$data->stok}} <br />
            Pengarang : {{$data->nama}} <br />
            Penerbit : {{$data->pen}} <br />
            Kategori : {{$data->kat}}
        </p>
        <a href="{{url('/buku')}}" class="btn btn-primary">Go Back</a>
    </div>
</div>
@endforeach
@endsection
@extends('layouts.index')
@section('content')
<div class="card" style="width: 18rem;">
    @php
    if (!empty($pengarang->foto)){
    @endphp
    <img src="{{  asset('images')}}/{{$pengarang->foto}}" width="60%" class="card-img-top" />
    @php
    } else {
    @endphp
    <img src="{{asset('images')}}/nophoto.jpg" width="60%" class="card-img-top" />
    @php
    }
    @endphp
    <div class="card-body">
        <h5 class="card-title">{{$pengarang->nama}}</h5>
        <p class="card-text">
            Email: {{$pengarang->email}}
            <br />HP: {{$pengarang->hp}}
        </p>
        <a href="{{url('/pengarang')}}" class="btn btn-primary">Go Back</a>
    </div>
</div>
@endsection
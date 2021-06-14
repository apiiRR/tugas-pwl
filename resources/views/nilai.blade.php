@php
$nama = "Rafi Ramadhana";
$nilai = 59.99;
@endphp

{{-- Struktur kendali if --}}
@if ($nilai >= 60)
    @php 
        $ket = "Lulus"; 
    @endphp
@else
    @php
        $ket = "Gagal";
    @endphp        
@endif

Nama siswa : {{$nama}}
<br> Nilai : {{$nilai}}
<br> Keterangan : {{$ket}}




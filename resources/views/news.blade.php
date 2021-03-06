@extends('layouts.app')

<!-- bagian konten -->
@section('content')

    <p> Untuk Melihat kabar terkini, Anda bisa mengunjungi link dibawah ini.</p>
    <a href="https://www.educastudio.com/{{ $news }}"> Berita Utama</a><br>
    <a href="https://www.educastudio.com/{{ $news }}/{{ $topic }}"> Berita Covid</a>
    
@endsection

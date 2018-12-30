@extends('layouts.app')

@section('content')
<h4>{{ $ensiklopedia->istilah }}</h4>
<p>{{ $ensiklopedia->kategori }}</p>
<p>{{ $ensiklopedia->arti }}</p>
<a href="{{ route('ensiklopedia.index') }}" class="btn btn-default">Kembali</a>
@endsection
@extends('layouts.app')

@section('content')
	<H2>KAMUS IPA</H2>
    <a href="{{ route('ensiklopedia.create') }}" class="btn btn-success btn-sm">Istilah Baru</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Istilah</th>
            <th>Kategori</th>
            <th>Arti</th>

        </thead>
        <tbody>
            @foreach ($ensiklopedias as $ensiklopedia)
                <tr>
                    <td>{{ $ensiklopedia->id }}</td>
                    <td><a href="{{ route('ensiklopedia.show', $ensiklopedia->id) }}">{{ $ensiklopedia->istilah }}</a> 
                    </td>
                    <td><a href="{{ route('ensiklopedia.show', $ensiklopedia->id) }}">{{ $ensiklopedia->kategori }}</a>
                    </td>
                    <td><a href="{{ route('ensiklopedia.show', $ensiklopedia->id) }}">{{ $ensiklopedia->arti }}</a> 
                    </td>
                    <td>
                        <form action="{{ route('ensiklopedia.destroy', $ensiklopedia->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('ensiklopedia.edit', $ensiklopedia->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
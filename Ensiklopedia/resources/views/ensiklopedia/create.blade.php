@extends('layouts.app')

@section('content')
<h4>MEMBUAT ISTILAH BARU</h4>
<form action="{{ route('ensiklopedia.store') }}" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('istilah') ? 'has-error' : '' }}">
        <label for="istilah" class="control-label">Istilah</label>
        <input type="text" class="form-control" name="istilah" placeholder="Istilah">
        @if ($errors->has('arti'))
            <span class="help-block">{{ $errors->first('istilah') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('kategori') ? 'has-error' : '' }}">
        <label for="kategori" class="control-label">Kategori : </label>
        <label><input type="radio" name="kategori" value="Kimia"  /> Kimia</label>
        <label><input type="radio" name="kategori" value="Biologi" /> Biologi</label>
        <label><input type="radio" name="kategori" value="Fisika" /> Fisika</label>
        	
        @if ($errors->has('kategori'))
            <span class="help-block">{{ $errors->first('kategori') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('arti') ? 'has-error' : '' }}">
        <label for="arti" class="control-label">Arti</label>
        <textarea name="arti" cols="30" rows="5" class="form-control"></textarea>
        @if ($errors->has('arti'))
            <span class="help-block">{{ $errors->first('arti') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('ensiklopedia.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection
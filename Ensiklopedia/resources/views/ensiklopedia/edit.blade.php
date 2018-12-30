@extends('layouts.app')

@section('content')
<h4>MENGUBAH ISTILAH</h4>
<form action="{{ route('ensiklopedia.update', $ensiklopedia->id) }}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class="form-group {{ $errors->has('istilah') ? 'has-error' : '' }}">
        <label for="istilah" class="control-label">istilah</label>
        <input type="text" class="form-control" name="istilah" placeholder="istilah" value="{{ $ensiklopedia->istilah }}">
        @if ($errors->has('istilah'))
            <span class="help-block">{{ $errors->first('istilah') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('kategori') ? 'has-error' : '' }}">
        <label for="kategori" class="control-label">kategori</label>
        <label><input type="radio" name="kategori" value="Kimia" <?php if (  $ensiklopedia->kategori  == 'Kimia') {
        	echo "checked";
        }    ?> /> Kimia</label>
        <label><input type="radio" name="kategori" value="Biologi"  <?php if (  $ensiklopedia->kategori  == 'Biologi') {
        	echo "checked";
        }    ?>/> Biologi</label>
        <label><input type="radio" name="kategori" value="Fisika"  <?php if (  $ensiklopedia->kategori  == 'Fisika') {
        	echo "checked";
        }    ?>/> Fisika</label>
        
        @if ($errors->has('kategori'))
            <span class="help-block">{{ $errors->first('kategori') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('arti') ? 'has-error' : '' }}">
        <label for="arti" class="control-label">Arti</label>
        <textarea name="arti" cols="30" rows="5" class="form-control">{{ $ensiklopedia->arti }}</textarea>
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
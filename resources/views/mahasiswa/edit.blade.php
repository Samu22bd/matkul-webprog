@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label>@lang('crud.label_nama')</label>
            <input type="text" name="nama" value="{{ $mahasiswa->nama }}" required>
            
            <label>@lang('crud.label_nim')</label>
            <input type="text" name="nim" value="{{ $mahasiswa->nim }}" required>

            <label>@lang('crud.label_jurusan')</label>
            <select name="jurusan_id">
                @foreach ($jurusans as $jurusan)
                    <option value="{{ $jurusan->id }}" {{ $mahasiswa->jurusan_id == $jurusan->id ? 'selected' : '' }}>
                        {{ $jurusan->nama_jurusan }}
                    </option>
                @endforeach
            </select>
            
            <button type="submit" class="btn btn-primary">@lang('crud.btn_perbarui')</button>
        </form>
    </div>
</div>
@endsection

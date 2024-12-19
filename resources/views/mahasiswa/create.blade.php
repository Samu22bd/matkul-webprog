@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <label>@lang('crud.label_nama')</label>
            <input type="text" name="nama" required>
            
            <label>@lang('crud.label_nim')</label>
            <input type="text" name="nim" required>

            <label>@lang('crud.label_jurusan')</label>
            <select name="jurusan_id">
                @foreach ($jurusans as $jurusan)
                    <option value="{{ $jurusan->id }}">{{ $jurusan->nama_jurusan }}</option>
                @endforeach
            </select>
            
            <button type="submit" class="btn btn-primary">@lang('crud.btn_simpan')</button>
        </form>
    </div>
</div>
@endsection

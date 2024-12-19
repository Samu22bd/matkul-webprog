@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary"> @lang('crud.btn_tambah') </a>
        <table class="table">
            <tr>
                <th>@lang('crud.label_id')</th>
                <th>@lang('crud.label_nama')</th>
                <th>@lang('crud.label_nim')</th>
                <th>@lang('crud.label_jurusan')</th>
                <th>@lang('crud.label_aksi')</th>
            </tr>
            @foreach ($mahasiswas as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa->id }}</td>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->nim }}</td>
                <td>{{ $mahasiswa->jurusan->nama_jurusan }}</td>
                <td>
                    <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}" class="btn btn-success">@lang('crud.btn_tampil')</a>
                    <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning">@lang('crud.btn_ubah')</a>
                    <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">@lang('crud.btn_hapus')</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection

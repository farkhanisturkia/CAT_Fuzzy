@php
    $title = 'Data Kemampuan Siswa';
@endphp
@extends('layouts.admin_template')
@section('title', $title)
@section('content')

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">@yield('title')</h2>
                    @include('layouts.partials.breadcrumb')
                </div>
            </div>
        </div>
        <div class="row m-t-25">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex justify-content-between">
                        <h5 class="m-0 font-weight-bold">
                            <i class="fas fa-user"></i>&ensp;{{ $title }}
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="text-white" style="background-color: #365cad;">
                                    <tr>
                                        <th>No</th>
                                        <th>NISN</th>
                                        <th>Nama Siswa</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->nisn }}</td>
                                            <td>{{ $data->user->name }}</td>
                                            <td>
                                                <div class="au-btn-group text-center" role="group">
                                                    <a class="btn btn-warning btn-sm" href="{{ route('fuzzy.show', $data->id) }}" data-placement="top" title="Hasil"><i class="fas fa-chart-bar"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach ($students as $data)

<div class="modal fade" id="modal-delete-student-{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">
                    <i class="fas fa-trash"></i>&emsp; Hapus Pengguna
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('student.destroy', $data->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    @method('DELETE')
                    <div class="row form-group">
                        <div class="col col-md justify-content">
                            <label>Apakah anda ingin menghapus siswa <b style="color: red">{{ $data->name }}</b> ?</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="save" class="btn btn-primary"value="Hapus">
                        <input type="reset" name="reset" class="btn btn-danger" data-dismiss="modal" value="Batal">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach

@endsection

@push('scripts')

@endpush

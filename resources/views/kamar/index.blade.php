@extends('layouts.testing')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-md-flex justify-content-between align-items-center">
            <h4 class="m-0 font-weight-bold text-secondary">Data datakamar</h4>
            <a href="{{route('datakamar.create')}}" class="btn btn-secondary">+ Tambah</a>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    @if (\Session::has('success'))
                    <div class="alert alert-success">
                        {!! \Session::get('success') !!}
                    </div>
                    @endif
                </div>

                <div class="col-md-12">
                    @if (\Session::has('error'))
                    <div class="alert alert-danger">
                        {!! \Session::get('error') !!}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama kamar</th>
                            <th>gambar_kamar</th>
                            <th>Deskripsi_kamar</th>
                            <th>harga</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datakamar as $item)
                            <tr>
                                <td>{{ @$item->nama_kamar }}</td>
                                <td><img width="100" src="{{ asset('public/gambar_kamar/' . @$item->gambar_kamar) }}" alt=""></td>
                                <td>{{ Str::limit(@$item->Deskripsi_kamar, 20) }}</td>
                                <td>{{ @$item->harga }}</td>
                                   <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a class="m-2" class="text-primary" href="{{ route('datakamar.edit' , @$item->id) }}">
                                            <i class="fa fa-edit"></i>Edit
                                        </a>
                                        <form action="{{ route('datakamar.destroy',$item->id) }}" method="Post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn text-danger"><i class="fa fa-trash"></i>
                                            Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
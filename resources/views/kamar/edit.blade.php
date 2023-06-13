@extends('layouts.testing')
@section('button-submit' , 'Edit')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-md-flex justify-content-between align-items-center">
            <h4 class="m-0 font-weight-bold text-warning">Edit datakamar</h4>
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-md-4 text-center">
                <h6 class="mt-2 mb-2">Gambar datakamar</h6>
                <img src="{{ asset('public/gambar_kamar/' . $data->gambar_kamar) }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-8">
                    <form action="{{ route('datakamar.update' , @$data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('datakamar.field')
                    </form>
            </div>
        </div>
        </div>
    </div>
@endsection
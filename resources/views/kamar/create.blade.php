@extends('layouts.testing')
@section('button-submit' , 'Buat')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-md-flex justify-content-between align-items-center">
            <h4 class="m-0 font-weight-bold text-warning">Buat datakamar</h4>
        </div>
        <div class="container mt-4">
            <div class="row">
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
            <form action="{{ route('datakamar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('kamar.field')
            </form>
        </div>
    </div>
@endsection
@extends('layouts.testing')
@section('content')
     <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800">Tables</h1>
 <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
     For more information about DataTables, please visit the <a target="_blank"
         href="https://datatables.net">official DataTables documentation</a>.</p>

 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
     </div>
     <div class="card-body">
         <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                     <tr>
                         <th>nama_kamar</th>
                         <th>gambar_kamar</th>
                         <th>Deskrisi_kamar</th>
                         <th>harga</th>
                     </tr>
                 </thead>
                 <tbody>
                    @foreach ($datakamar as $item)
                        
                    @endforeach
                     <tr>
                         <td>{{ $item->nama_kamar }}</td>
                         <td><img src="{{ asset('public/gambar_kamar/'. $item->gambar_kamar)}}" style="heigth: 100px; width: 100px"></td>
                         <td>{{ Str::limit($item->Deskripsi_kamar, 20)}}</td>
                         <td>Rp. {{ number_format($item->harga) }}</td>
                     </tr>
                 </tbody>
             </table>
         </div>
     </div>
 </div>
@endsection
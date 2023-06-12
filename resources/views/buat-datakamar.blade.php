<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>add data kamar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add datakamar</h2>
                </div>
                {{-- open untuk menyambungkan pada route pada create tabel --}}
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('datakamar.index') }}"> Back</a>
                </div>
                 {{-- close untuk menyambungkan pada route pada create tabel --}}
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        {{-- open masukan nama-nama pada tabel --}}
        <form action="{{ route('datakamar.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> nama_kamar:</strong>
                        <input type="text" name="nama_kamar" class="form-control" placeholder=" nama_kamar">
                        @error('nama_kamar')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> gambar_kamar:</strong>
                        <input type="file" name="gambar_kamar" class="form-control" placeholder="gambar_kamar">
                        @error('gambar_kamar')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> Deskripsi_kamar:</strong>
                        <input type="text" name="Deskripsi_kamar" class="form-control" >
                        @error('Deskripsi_kamar')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong> harga:</strong>
                       <input type="text number" name="harga" class="form-control" placeholder=" harga">
                       @error('harga')
                       <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                   </div>
                </div>
            </div>
                {{-- close masukan nama-nama pada tebel --}}
               
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
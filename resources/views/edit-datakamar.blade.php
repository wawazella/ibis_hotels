<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit datakamar Informasi Kamar Hotel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit datakamar</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-secondary" href="{{ route('datakamar.index') }}" enctype="multipart/form-data">Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('datakamar.update',$datakamar->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>  nama_kamar:</strong>
                        <input type="text" name="nama_kamar" class="form-control" placeholder=" nama_kamar"
                            value="{{ $datakamar->nama_kamar }}">
                        @error('nama_kamar')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> gambar_kamar:</strong>
                        <input type="file" name="gambar_kamar" value="{{ $datakamar->gambar_kamar }}" class="form-control"
                        placeholder="gambar_kamar">
                        @error('gambar_kamar')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> Deskripsi_kamar:</strong>
                        <input type="text" name="Deskripsi_kamar" value="{{ $datakamar->Deskripsi_kamar }}" class="form-control"
                        placeholder=" Deskripsi_kamar">
                        @error('Deskripsi_kamar')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div> 
            
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>  harga:</strong>
                        <input type="number" name="harga" value="{{ $datakamar->harga }}" class="form-control"
                        placeholder=" harga">
                        @error('harga')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>  diskon:</strong>
                        <input type="number" name="diskon" value="{{ $datakamar->diskon }}" class="form-control"
                        placeholder=" diskon">
                        @error('diskon')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
              
                <button type="submit" class="btn btn-secondary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
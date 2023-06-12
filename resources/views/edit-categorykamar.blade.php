<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit categorykamar Informasi Kamar Hotel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit category kamar</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('categorykamar.index') }}" enctype="multipart/form-data">Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('categorykamar.update',$categorykamar->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>  nama_kamar:</strong>
                        <input type="text" name="nama_kamar" class="form-control" placeholder=" nama_kamar"
                            value="{{ $categorykamar->nama_kamar }}">
                        @error('nama_kamar')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> gambar_kamar:</strong>
                        <input type="file" name="gambar_kamar" value="{{ $categorykamar->gambar_kamar }}" class="form-control"
                        placeholder="gambar_kamar">
                        @error('gambar_kamar')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div> 
            </div>

              
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Informasi Kamar Hotel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Informasi Kamar Hotel</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('datakamar.create') }}"> Create datakamar</a>
                </div>
            </div>
        </div>

        {{-- open bikin yang ada pada tabel --}}
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>nama_kamar</th>
                    <th>gambar_kamar</th>
                    <th>Deskripsi_kamar</th>
                    <th>harga</th>
                    {{-- <th>datakamar image</th> --}}
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datakamar as $key => $datakamars)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $datakamars->nama_kamar }}</td>
                        <td>
                            <img src="{{ asset('public/gambar_kamar/'.$datakamars->gambar_kamar)}}" style="heigth: 100px; width: 100px">
                        </td>
                        <td>{{ $datakamars->Deskripsi_kamar }}</td>
                        <td>{{ $datakamars->harga }}</td>
                        <td>
                            <form action="{{ route('datakamar.destroy',$datakamars->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('datakamar.edit',$datakamars->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $datakamar->links() !!}
    </div>
</body>
</html>
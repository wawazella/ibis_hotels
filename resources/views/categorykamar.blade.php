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
                    <a class="btn btn-success" href="{{ route('categorykamar.create') }}"> Create category kamar</a>
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
                    <th>kd_kamar</th>
                    <th>nama_kamar</th>
                    <th>gambar_kamar</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorykamar as $key => $categorykamars)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $categorykamars->kd_kamar }}</td>
                        <td>{{ $categorykamars->nama_kamar }}</td>
                        <td>
                            <img src="{{ url('public/gambar_kamar/'.$categorykamars->gambar_kamar)}}" style="heigth: 100px; width: 100px">
                        </td>
        {{-- close yang ada pada tebel --}}
                        
                     {{-- open nyambungin gambar --}}
                       

                    {{-- close nyambungin gambar --}}
    
                      
                        <td>
                            <form action="{{ route('categorykamar.destroy',$categorykamars->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('categorykamar.edit',$categorykamars->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $categorykamar->links() !!}
    </div>
</body>
</html>
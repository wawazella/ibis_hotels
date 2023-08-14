<div class="row">
    <div class="col-md-4 mb-3">
        <label for="nama_kamar">Nama kamar</label>
        <input type="text" class="form-control" name="nama_kamar" id="nama_kamar" required value="{{ isset($data) ? @$data->nama_kamar : ''}}" required>
    </div>
    <div class="col-md-4 mb-3">
        <label for="gambar_kamar">Gambar kamar</label>
        <input type="file" class="form-control" name="gambar_kamar" id="gambar_kamar" value="{{ isset($data) ? @$data->gambar_kamar : ''}}">
    </div>
    <div class="col-md-4 mb-3">
        <label for="harga">Harga Per 1 malam</label>
        <input type="number" class="form-control" name="harga" id="harga" value="{{ isset($data) ? @$data->harga : ''}}" required>
    </div>
    <div class="col-md-4 mb-3">
        <label for="diskon">Diskon Harga (%)</label>
        <input type="number" class="form-control" name="diskon" id="diskon" value="{{ isset($data) ? @$data->diskon : ''}}" required>
        <small style="color: red">Nominal harus 1 - 100</small>
    </div>
    <div class="col-md-12 mb-3">
        <label for="Deskripsi_kamar">Deskripsi Kamar</label>
        <textarea type="text" class="form-control" name="Deskripsi_kamar" id="Deskripsi_kamar" style="height: 100px" required>{{ isset($data) ? @$data->Deskripsi_kamar : ''}}</textarea>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 text-start">
                <a href="{{ route('datakamar.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
            <div class="col-md-6 text-right">
                <button type="submit" class="btn btn-warning text-white">@yield('button-submit')</button>
            </div>
        </div>
    </div>
</div>
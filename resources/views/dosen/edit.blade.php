<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12" style="margin-top: 2%">
                <h3 style="text-align: center">Edit Data Dosen</h3>
            </div>
            <div class="col-md-12">
                <div class="card" style="margin-top: 3%">
                    <div class="card">
                        <div class="card-header">
                            <h3>Form Edit Dosen</h3>
                        </div>
                        <div class="card-body">
                            <div class="container mt-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card border-0 shadow-sm rounded">
                                            <div class="card-body">
                                                <form action="{{ route('dosens.update', $dosen->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="form-group">
                                                        <label for="nama">Nama</label>
                                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama" value="{{ $dosen->nama }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="mahasiswa">Mahasiswa</label>
                                                        <select name="mhs_id" class="form-control">
                                                            <option value="" disabled>-- Pilih Mahasiswa --</option>
                                                            @foreach($mahasiswas as $p)
                                                                <option value="{{ $p->id }}" @if($p->id == $dosen->mhs_id) selected @endif>{{ $p->nama }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="matakuliah">Matakuliah</label>
                                                        <select name="matakuliah_id" class="form-control">
                                                            <option value="" disabled>-- Pilih Matakuliah --</option>
                                                            @foreach($matakuliahs as $p)
                                                                <option value="{{ $p->id }}" @if($p->id == $dosen->matakuliah_id) selected @endif>{{ $p->matakuliah }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <br>
                                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                    &nbsp;
                                                    <a href="{{ route('dosen.index') }}" class="btn btn-md btn-success">Kembali</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

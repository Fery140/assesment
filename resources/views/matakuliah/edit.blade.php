<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12" style="margin-top: 2%">
                <h3 style="text-align: center">Data Perkuliahan STMIK MARDIRA INDONESIA</h3>
            </div>
            <div class="col-md-12" style="margin-top: 2%">
                {{-- <button type="button" class="btn btn-primary" href="#">Data Mahasiswa</button>
                &nbsp;
                <button type="button" class="btn btn-success" href="#">Data Prodi</button>
                &nbsp;
                <button type="button" class="btn btn-info" href="#">Data Mata Kuliah</button> --}}
            </div>
            <div class="col-md-12">
                <div class="card" style="margin-top: 3%">
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit Data Matakuliah</h3>
                        </div>
                        <div class="card-body">
                            <div class="container mt-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card border-0 shadow-sm rounded">
                                            <div class="card-body">
                                                <form action="{{ route('matakuliahs.update', $matakuliah->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT') 
                                            
                                                    <div class="form-group">
                                                        <label for="nama">Nama Prodi</label> 
                                                        <input type="text" name="matakuliah" id="nama" class="form-control" value="{{ $matakuliah->matakuliah }}">
                                                    </div> 
                                                    
                                                    <br>
                                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                    &nbsp;
                                                    <a href="{{ route('matakuliah.index') }}" class="btn btn-md btn-success">Kembali</a>
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
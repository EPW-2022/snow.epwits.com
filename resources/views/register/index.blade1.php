@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration mt-3">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <h3>1. Akun Tim</h3>
            <form action="/register" method="post" class="mb-5" enctype="multipart/form-data">
                @csrf
                <div class="form-floating">
                    <input type="text" class="form-control @error('namatim') is-invalid @enderror" name="namatim" id="namatim" placeholder="namatim" required value={{ old('name') }}>
                    <label for="namatim">Nama tim</label>
                    <div class="invalid-feedback">
                        Username minimal memiliki 6 karakter
                    </div>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="username" required value={{ old('username') }}>
                    <label for="username">Username Tim</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('conpassword') is-invalid @enderror" name="conpassword" id="conpassword" placeholder="conpassword" required>
                    <label for="conpassword">Confirm Password</label>
                </div>
                
            
            <h3>2. Biodata Tim</h3>
            
                <div class="form-floating">
                    <input type="text" class="form-control" name="asalsekolah" id="asalsekolah" placeholder="asalsekolah" required value={{ old('asalsekolah') }}>
                    <label for="asalsekolah">Asal Sekolah</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="kota" id="kota" placeholder="kota" required value={{ old('kota') }}>
                    <label for="kota">Kota</label>
                </div>
            
            <h3>Ketua</h3>
            
                <div class="form-floating">
                    <input type="text" class="form-control" name="namaketua" id="namaketua" placeholder="namaketua" required value={{ old('namaketua') }}>
                    <label for="namaketua">Nama Ketua</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat" required value={{ old('alamat') }}>
                    <label for="alamat">Alamat</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="nomorhp" id="nomorhp" placeholder="nomorhp" required value={{ old('nomorhp') }}>
                    <label for="nomorhp">Nomor Handphone</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="email" value={{ old('email') }}>
                    <label for="email">Email</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="nisn" id="nisn" placeholder="nisn" required value={{ old('nisn') }}>
                    <label for="nisn">NISN/NIM</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="tempatlahir" id="tempatlahir" placeholder="tempatlahir" required value={{ old('tempatlahir') }}>
                    <label for="tempatlahir">Tempat Lahir</label>
                </div>
                <div class="form-floating">
                    <input type="date" class="form-control" name="tanggallahir" id="tanggallahir" placeholder="tanggallahir" required>
                    <label for="tanggallahir">Tanggal Lahir</label>
                </div>
            
            <h3>Anggota 1</h3>
            
                <div class="form-floating">
                    <input type="text" class="form-control" name="namaanggota1" id="namaanggota1" placeholder="namaanggota1" required value={{ old('namaanggota1') }}>
                    <label for="namaanggota1">Nama Anggota 1</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="nisn1" id="nisn1" placeholder="nisn1" required value={{ old('nisn1') }}>
                    <label for="nisn1">NISN/NIM</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="tempatlahir1" id="tempatlahir1" placeholder="tempatlahir1" required value={{ old('tempatlahir1') }}>
                    <label for="tempatlahir1">Tempat Lahir</label>
                </div>
                <div class="form-floating">
                    <input type="date" class="form-control" name="tanggallahir1" id="tanggallahir1" placeholder="tanggallahir1" required>
                    <label for="tanggallahir1">Tanggal Lahir</label>
                </div>
            
            <div class="accordion mt-5" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Tambahkan Anggota 2
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        
                            <div class="form-floating">
                                <input type="text" class="form-control" name="namaanggota2" id="namaanggota2" placeholder="namaanggota2">
                                <label for="namaanggota2">Nama Anggota 2</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="nisn2" id="nisn2" placeholder="nisn2">
                                <label for="nisn2">NISN/NIM</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="tempatlahir2" id="tempatlahir2" placeholder="tempatlahir2">
                                <label for="tempatlahir2">Tempat Lahir</label>
                            </div>
                            <div class="form-floating">
                                <input type="date" class="form-control" name="tanggallahir2" id="tanggallahir2" placeholder="tanggallahir2">
                                <label for="tanggallahir2">Tanggal Lahir</label>
                            </div>
                        
                    </div>
                  </div>
                </div>
              </div>

              <h3>3. Dokumen Pendukung</h3>
              <h2>Upload pas foto</h2>
                    <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" id="foto" placeholder="foto">
                    <label for="foto">Foto Ketua</label>
                    <input type="file" class="form-control @error('foto1') is-invalid @enderror" name="foto1" id="foto1" placeholder="foto1">
                    <label for="foto1">Foto Anggota 1</label>
                    <input type="file" class="form-control @error('foto2') is-invalid @enderror" name="foto2" id="foto2" placeholder="foto2">
                    <label for="foto2">Foto Anggota 2</label>
              <h2>Upload Kartu Pelajar</h2>
                    <input type="file" class="form-control @error('kartupel') is-invalid @enderror" name="kartupel" id="kartupel" placeholder="kartupel">
                    <label for="kartupel">kartupel ketua</label>
                    <input type="file" class="form-control @error('kartupel1') is-invalid @enderror" name="kartupel1" id="kartupel1" placeholder="kartupel1">
                    <label for="kartupel1">kartupel anggota 1</label>
                    <input type="file" class="form-control @error('kartupel2') is-invalid @enderror" name="kartupel2" id="kartupel2" placeholder="kartupel2">
                    <label for="kartupel2">kartupel anggota 2 </label>
                <h2> Upload twibbon </h2>
                    <input type="file" class="form-control @error('twibbon') is-invalid @enderror" name="twibbon" id="twibbon" placeholder="twibbon">
                    <label for="twibbon">twibbon ketua</label>
                    <input type="file" class="form-control @error('twibbon1') is-invalid @enderror" name="twibbon1" id="twibbon1" placeholder="twibbon1">
                    <label for="twibbon1">twibbon anggota 1</label>
                    <input type="file" class="form-control @error('twibbon2') is-invalid @enderror" name="twibbon2" id="twibbon2" placeholder="twibbon2">
                    <label for="twibbon2">twibbon anggota 2</label>
              
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
            <small>Have registered? <a href="/login">Login here</a></small>
        </main>
    </div>
</div>
@endsection
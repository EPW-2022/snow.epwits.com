@extends('layouts.main')

@section('content')

    <section class="body">
      <div class="container-fluid">
        <div class="gambar jumbotron text-center">
          <img src="/img/regis-snow.png" alt="regis snow">
        </div>
        <form action="/register" method="post" enctype="multipart/form-data">
          @csrf
        <div class="container content">
            <!--Akun Tim-->
            <div class="row mb-3">
              <div class="col-md-12 d-flex">
                <b>1. Akun Tim</b><span class="line flex-grow-1"></span>
              </div>
            </div>                      
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="namatim" class="form-label">Nama Tim*</label>
                  <input type="text" class="form-control @error('namatim') is-invalid @enderror" name="namatim" id="namatim" placeholder="Nama Tim" required value={{ old('namatim') }}>
                  @error('namatim')
                    <div class="invalid-feedback ps-1 pt-1">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="password*" class="form-label">Password*</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror"name="password" id="password" placeholder="Password" required>
                  @error('password')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
                </div>
              </div>
            </div>          
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="usernametim" class="form-label">Username Tim*</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username Tim" required value={{ old('username') }}>
                  @error('username')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="conpassword" class="form-label">Confirm Password*</label>
                  <input type="password" class="form-control @error('conpassword') is-invalid @enderror"name="conpassword" id="conpassword" placeholder="Confirm Password" required>
                </div>
              </div>
            </div>  
            <!--End of Akun Tim-->    
            <!--Biodata Tim-->
            <div class="row mb-3 mt-3">
              <div class="col-md-12 d-flex">
                <b>2. Biodata Tim</b><span class="line flex-grow-1"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="asalsekolah" class="form-label">Asal Sekolah*</label>
                  <input type="text" class="form-control @error('asalsekolah') is-invalid @enderror" name="asalsekolah" id="asalsekolah" placeholder="Asal Sekolah" required value={{ old('asalsekolah') }}>
                  @error('asalsekolah')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                    <label for="kota" class="form-label">Kota*</label>
                    <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" id="kota" placeholder="Kota" required value={{ old('kota') }}>
                    @error('kota')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
                  </div>
              </div>
            </div>
            <!--End of Biodata Tim-->
            <!--Biodata Ketua-->
            <div class="blok mb-2" style="background-color: #424a63; padding:1rem; color:white; border-radius:5px">Ketua</div>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="namaketua" class="form-label">Nama Ketua*</label>
                  <input type="text" class="form-control @error('namaketua') is-invalid @enderror" name="namaketua" id="namaketua" placeholder="Nama Ketua" required value={{ old('namaketua') }}>
                  @error('namaketua')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
                </div>
              </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="nisn" class="form-label">NISN/NIM</label>
                    <input type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" id="nisn" placeholder="NISN/NIM" required value={{ old('nisn') }}>
                    @error('nisn')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" placeholder="Alamat" required value={{ old('alamat') }}>
                  @error('alamat')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                  <input type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" id="tempatlahir" placeholder="Tempat Lahir" required value={{ old('tempatlahir') }}>
                  @error('tempatlahir')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="nomorhp" class="form-label">No. Handphone</label>
                  <input type="text" class="form-control @error('nomorhp') is-invalid @enderror" name="nomorhp" id="nomorhp" placeholder="No. Handphone" required value={{ old('nomorhp') }}>
                  @error('nomorhp')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control @error('tanggallahir') is-invalid @enderror" name="tanggallahir" id="tanggallahir" placeholder="tanggallahir" required>
                  @error('tanggallahir')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="email" class="form-label">Alamat Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Alamat Email" required value={{ old('email') }}>
                  @error('email')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                </div>
              </div>
            </div>
            <!--End of Biodata Ketua-->
            <!--Biodata Anggota 1-->
            <div class="blok mb-2" style="background-color: #424a63; padding:1rem; color:white; border-radius:5px">Anggota 1</div>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="namaanggota1" class="form-label">Nama Anggota 1*</label>
                  <input type="text" class="form-control @error('namaanggota1') is-invalid @enderror" name="namaanggota1" id="namaanggota1" placeholder="Nama Anggota 1" required value={{ old('namaanggota1') }}>
                  @error('namaanggota1')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="nisn1" class="form-label">NISN/NIM</label>
                  <input type="text" class="form-control @error('nisn1') is-invalid @enderror"  name="nisn1" id="nisn1" placeholder="NISN/NIM" required value={{ old('nisn1') }}>
                  @error('nisn1')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="tempatlahir1" class="form-label">Tempat Lahir</label>
                  <input type="text" class="form-control @error('tempatlahir1') is-invalid @enderror" name="tempatlahir1" id="tempatlahir1" placeholder="Tempat Lahir" required value={{ old('tempatlahir1') }}>
                  @error('tempatlahir1')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="tanggallahir1" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control @error('tanggallahir1') is-invalid @enderror" name="tanggallahir1" id="tanggallahir1" placeholder="Tanggal Lahir" required>
                  <label for="tanggallahir1">
                    @error('tanggallahir1')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
                </div>
              </div>
            </div>
            <!--End of Biodata Anggota 1-->
            <!--Biodata Anggota 2-->
            <div class="blok mb-2" style="background-color: #424a63; padding:1rem; color:white; border-radius:5px">
              <div class="d-flex justify-content-between">
                  <p>Anggota 2</p>
                  <div data-bs-toggle="collapse" data-bs-target="#anggota2" aria-expanded="false" aria-controls="anggota2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-plus-lg" viewBox="0 0 16 16">
                          <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
                      </svg>
                  </div>
              </div>
            </div>
            <div class="collapse" id="anggota2">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="namaanggota2" class="form-label">Nama Anggota 2*</label>
                    <input type="text" class="form-control @error('namaanggota2') is-invalid @enderror" name="namaanggota2" id="namaanggota2" placeholder="Nama Anggota 2">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="nisn2" class="form-label">NISN/NIM</label>
                    <input type="text" class="form-control @error('nisn2') is-invalid @enderror" name="nisn2" id="nisn2" placeholder="NISN/NIM">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="tempatlahir2" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control @error('tempatlahir2') is-invalid @enderror" name="tempatlahir2" id="tempatlahir2" placeholder="Tempat Lahir">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="tanggallahir2" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control @error('tanggallahir2') is-invalid @enderror" name="tanggallahir2" id="tanggallahir2" placeholder="tanggallahir2">
                  </div>
                </div>
              </div>
            </div>
            <!--End of Biodata Anggota 2-->
        </div>
        <div class="upload container">
          <!--Upload Document-->
          <div class="row mb-3 mt-3">
            <div class="col-md-12 d-flex">
                <b>3. Dokumen Pendukung</b><span class="line flex-grow-1"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <label>Upload Pas Foto</label> 
            </div>
            <div class="col-md-6">
              <label>Upload Scan Kartu Pelajar</label>
            </div>
          </div>
          <div class="row">
            <!--foto ketua-->
            <div class="col-md-6 mt-3 kotak">
              <label for="kartupel" class="form-label">Ketua</label>
                <input type="file" class="form-control   @error('foto') is-invalid @enderror" name="foto" id="foto" placeholder="foto">
                @error('foto')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <!--kartupel ketua-->
            <div class="col-md-6 mt-3">
              <label for="kartupel" class="form-label">Ketua</label>
              <input type="file" class="form-control  @error('kartupel') is-invalid @enderror" name="kartupel" id="kartupel" placeholder="Kartu Pelajar">
              @error('kartupel')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
            </div>
          </div>
          <div class="row">
            <!--foto anggota 1-->
            <div class="col-md-6 mt-3">
                <label for="foto1" class="form-label">Anggota 1</label>
                <input type="file" class="form-control  @error('foto1') is-invalid @enderror" name="foto1" id="foto1" placeholder="foto1">
                @error('foto1')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <!--kartu anggota 1-->
            <div class="col-md-6 mt-3">
              <label for="kartupel1" class="form-label">Anggota 1</label>
            <input type="file" class="form-control  @error('kartupel1') is-invalid @enderror" name="kartupel1" id="kartupel1" placeholder="kartupel1">
            @error('kartupel1')
            <div class="invalid-feedback ps-1 pt-1">
              {{ $message }}
            </div>
          @enderror
            </div>
          </div>
          <div class="row">
            <!--foto anggota 2-->
            <div class="col-md-6 mt-3">
              <label for="foto2" class="form-label">Anggota 2</label>
                <input type="file" class="form-control  @error('foto2') is-invalid @enderror" name="foto2" id="foto2" placeholder="foto2">
                @error('foto2')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <!--kartu anggota 2-->
            <div class="col-md-6 mt-3">
              <label for="kartupel2" class="form-label">Anggota 2</label>
            <input type="file" class="form-control  @error('kartupel2') is-invalid @enderror" name="kartupel2" id="kartupel2" placeholder="kartupel2">
            @error('kartupel2')
            <div class="invalid-feedback ps-1 pt-1">
              {{ $message }}
            </div>
          @enderror
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-md-6 mt-3">
                <label>Format : .jpg, max. Size: 2 Mb</label> 
            </div>
            <div class="col-md-6 mt-3">
                <label>Format : .jpg, max. Size: 2 Mb</label> 
            </div>
          </div>
          <!--Upload Twibbon-->
          <div class="col-md-6">
            <label>Upload Twibbon</label> 
          </div>
        <div class="col-md-6">
        </div>
          <div class="row">
            <!--Twibbon Ketua-->
            <div class="col-md-6 mt-3">
                <label for="twibbon" class="form-label">Ketua</label>
                <input type="file" class="form-control  @error('twibbon') is-invalid @enderror" name="twibbon" id="twibbon" placeholder="twibbon" required>
                @error('twibbon')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="col-md-6 mt-3">
            </div>
          </div>
          <div class="row">
            <!--Twibbon Anggota 1-->
            <div class="col-md-6 mt-3">
                <label for="twibbon1" class="form-label">Anggota 1</label>
                <input type="file" class="form-control  @error('twibbon1') is-invalid @enderror" name="twibbon1" id="twibbon1" placeholder="twibbon1" required>
                @error('twibbon1')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="col-md-6 mt-3">
            </div>
          </div>
          <div class="row">
            <!--Twibbon Anggota 2-->
            <div class="col-md-6 mt-3">
                <label for="twibbon2" class="form-label">Anggota 2</label>
                <input type="file" class="form-control @error('twibbon1') is-invalid @enderror " name="twibbon2" id="twibbon2" placeholder="twibbon2">
                @error('twibbon2')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                @enderror
            </div>
              <div class="col-md-6 mt-3">
              </div>
          </div>
          <!--End of Upload Document-->
        </div>
        <div class="agreement container">
          <!--Persetujuan-->
          <div class="row mt-3 mb-2">
            <div class="col-md-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="agreement" required>
                  <label class="form-check-label" for="agreement">
                    Saya menyatakan bahwa data/informasi/berkas yang saya sampaikan pada formulir ini adalah benar
                  </label>
              </div>
            </div>
          </div>
        <!--End of Persetujuan-->
        <!--Submit-->
          <div class="row d-flex justify-content-center">
            <div class="col-md-6 d-flex justify-content-center">
                <button type="submit" class="btn">
                  <b>Daftar</b> 
                </button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </section>













@endsection
@extends('layouts.main')

@section('content')

    <section class="body">
      <div class="container-fluid">
        
          <h2 class="text-center mb-5"> Form Peminjaman Barang </h2>
        
        <form action="/register" method="post" enctype="multipart/form-data">
          @csrf
        <div class="container content">
            <!--Akun Tim-->
            <div class="row mb-3">
              <div class="col-md-12 d-flex">
                <b>1. Biodata</b><span class="line flex-grow-1"></span>
              </div>
            </div>                      
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="namatim" class="form-label">Nama Lengkap*</label>
                  <input type="text" class="form-control @error('namatim') is-invalid @enderror" name="nama" id="nama" placeholder="Nama Lengkap" required value={{ old('nama') }}>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="password*" class="form-label">Kelas*</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror"name="kelas" id="kelas" placeholder="Kelas" required>
                </div>
              </div>
            </div>          
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="usernametim" class="form-label">Jurusan*</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" name="jurusan" id="jurusan" placeholder="Jurusan" required value={{ old('username') }}>
                </div>
              </div>
            </div>  
            <!--End of Akun Tim-->    
            <!--Biodata Tim-->
            <div class="row mb-3 mt-3">
              <div class="col-md-12 d-flex">
                <b>2. Peminjaman</b><span class="line flex-grow-1"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="asalsekolah" class="form-label">Nama Barang*</label>
                  <input type="text" class="form-control" name="namabarang" id="namabarang" placeholder="Nama Barang" required value={{ old('namabarang') }}>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                    <label for="kota" class="form-label">Keperluan*</label>
                    <input type="text" class="form-control" name="keperluan" id="keperluan" placeholder="Keperluan" required value={{ old('kota') }}>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                    <label for="kota" class="form-label">Mulai*</label>
                    <input type="text" class="form-control" name="mulai" id="mulai" placeholder="Mulai" required value={{ old('kota') }}>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                    <label for="kota" class="form-label">Sampai*</label>
                    <input type="text" class="form-control" name="sampai" id="sampai" placeholder="Sampai" required value={{ old('kota') }}>
                </div>
              </div>
            </div>
        <!--Submit-->
          <div class="row d-flex pd-5 justify-content-center">
            <div class="col-md-6 mt-3 mb-5 d-flex justify-content-center">
                <button type="submit" class="btn btn-secondary">
                  <b>Daftar</b> 
                </button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </section>













@endsection
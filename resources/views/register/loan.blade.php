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
                <b>1. Barang</b><span class="line flex-grow-1"></span>
              </div>
            </div>                      
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="namatim" class="form-label">Nama Barang*</label>
                  <input type="text" class="form-control @error('namatim') is-invalid @enderror" name="namabarang" id="namabarang" placeholder="Nama Barang" required value={{ old('nama') }}>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="password*" class="form-label">Tanggal Masuk*</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror"name="tanggalmasuk" id="tanggalmasuk" placeholder="Tanggal Masuk" required>
                </div>
              </div>
            </div>          
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="usernametim" class="form-label">Sumber Dana*</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" name="sumberdana" id="sumberdana" placeholder="Sumber Dana" required value={{ old('username') }}>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="usernametim" class="form-label">Sumber Barang*</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" name="sumberbarang" id="sumberbarang" placeholder="Sumber Barang" required value={{ old('username') }}>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="usernametim" class="form-label">Harga Satuan Barang*</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" name="hargasatuan Barang" id="hargasatuanbarang" placeholder="Harga Satuan Barang" required value={{ old('username') }}>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="usernametim" class="form-label">Jumlah Barang*</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" name="jumlahbarang" id="jumlahbarang" placeholder="Jumlah Barang" required value={{ old('username') }}>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="usernametim" class="form-label">Total Harga*</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" name="totalharga" id="totalharga" placeholder="Total Harga" required value={{ old('username') }}>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="usernametim" class="form-label">Tanggal Masuk*</label>
                  <input type="date" class="form-control @error('username') is-invalid @enderror" name="tanggalmasuk" id="tanggalmasuk" placeholder="Tanggal Masuk" required value={{ old('username') }}>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="usernametim" class="form-label">Kondisi*</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" name="kondisi" id="kondisi" placeholder="Kondisi" required value={{ old('username') }}>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="usernametim" class="form-label">Keterangan*</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" name="keterangan" id="keterangan" placeholder="Keterangan" required value={{ old('username') }}>
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
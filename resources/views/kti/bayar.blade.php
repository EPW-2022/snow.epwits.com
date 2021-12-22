@extends('layouts.main')

@section('content')

<div class="container profil">
    <img src="\svg\profile.svg" class="rounded mx-auto d-block mt-5" alt="...">
    </div>
    <div class="container badan">
        <div class="Team-name">
            <p>{{ auth()->user()->namatim }}</p>
        </div>
        <div class="Team-from">
            <p>{{ auth()->user()->leader->asalsekolah }}</p>
        </div>
        <div class="Team-No">
            <p>  @if ( auth()->user()->id  < 10)
                00{{ auth()->user()->id }}
            @else
                @if (auth()->user()->id < 100)
                    0{{ auth()->user()->id }}
                @else
                    {{ auth()->user()->id }}
                @endif
            @endif   </p>
        </div>

        <div class="container abstrak-sub mx-auto">
          <br>
          <div class="container profil my-5">
            <img src="\svg\selamat.svg" class="rounded mx-auto d-block mt-5" alt="...">
            </div>
          <div class="col abs-text">
            <p style="padding:0; font-size:24px">Anda dinyatakan <strong> LULUS </strong> seleksi abstrak SNOW EPW 2022. </p><p style="padding:0; font-size:24px">Silahkan melanjutkan ke tahap pengumpulan Karya Tulis Ilmiah</p>
          </div>
          <br><br>
        </div>
        <div class="container abstrak-sub mx-auto">
            <div class="row">

              {{-- @if (session()->has('abstrak'))
              <div class="container">
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                  {{ session('abstrak') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              </div>
              @endif --}}

              <div class="col abs-text">
                <p class="mt-3"><strong> Bukti Pembayaran </strong></p>
                
              </div>
              <div class="col order-1 formside">
                @if (session()->has('sukses'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        {{ session('sukses') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="/submitbayar" method="post" class="mb-5" enctype="multipart/form-data">
                  @csrf
                  <div class="bb">
                    <div class="form">
                  <input type="file" class="form-control  @error('file') is-invalid @enderror" id="input file" name="file" required>
                  @error('file')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                  @enderror
                  </div>
                  </div>
                  <div class="mb-3 submit-btn">
                    <button class="btn btn-primary" type="submit">Submit</button>
                  </div>           
                </form>
              </div>
            </div>
          </div>

          
                
                    
                
                
    </div>            
                
                

@endsection
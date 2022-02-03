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
            <p style="padding:0; font-size:24px">Anda dinyatakan <strong> LULUS </strong> seleksi <strong> Karya Tulis Ilmiah </strong> SNOW EPW 2022. </p><p style="padding:0; font-size:24px">Silahkan melanjutkan ke tahap pengumpulan Poster, File Presentasi, dan Video. </p>
          </div>
          <br><br>
        </div>
        
        <div class="container abstrak-sub mx-auto">
            
              <div class="col order-1 formside">
                @if (session()->has('sukses'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        {{ session('sukses') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <br><br><br><br><br>
                <form action="/submitfinal" method="post"  enctype="multipart/form-data">
                  @csrf
                  <div style="padding: 0" class="bb row">
                      <div class="col-md-5 abs-text" style="padding-top: 0px"> <p style="padding: 0"> Poster </p> </div>
                    <div class="form col-md-5" style="padding: 0">
                  <input type="file" class="form-control  @error('poster') is-invalid @enderror" id="input file" name="poster" required>
                  @error('poster')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                  @enderror
                  </div>
                  </div>
                
                  <div style="padding: 0" class="bb row">
                    <div class="col-md-5 abs-text" style="padding-top: 0px"> <p style="padding: 0"> File Presentasi </p> </div>
                  <div class="form col-md-5" style="padding: 0">
                <input type="file" class="form-control  @error('presentasi') is-invalid @enderror" id="input file" name="presentasi" required>
                @error('presentasi')
                <div class="invalid-feedback ps-1 pt-1">
                  {{ $message }}
                </div>
                @enderror
                </div>
                </div>

                <div style="padding: 0" class="bb row">
                    <div class="col-md-5 abs-text" style="padding-top: 0px"> <p style="padding: 0"> Link Video </p> </div>
                  <div class="form col-md-5" style="padding: 0">
                    <input type="text" class="form-control @error('filename5') is-invalid @enderror" name="filename5" id="namatim" placeholder="Masukkan link Youtube" required value={{ old('namatim') }}>
                @error('filename5')
                <div class="invalid-feedback ps-1 pt-1">
                  {{ $message }}
                </div>
                @enderror
                </div>
                </div>
                  
                
                  
                  
                  <div class="submit-btn">
                    <button class="btn btn-primary" type="submit">Submit</button>
                  </div> 
                  <br><br>          
                </form>
              </div>
              
            </div>
            <p style="margin-left:170px">  * Catatan : Link GuideBook Final SNOW 2022 dapat diakses <a style="all: unset" href="https://drive.google.com/drive/folders/1luC5IPxmMx7T269BrmdMnsTYvHd8Noh5?usp=sharing"> <strong> disini </strong> </a> </p>
            
                    
                
                
    </div>                     
                
                

@endsection
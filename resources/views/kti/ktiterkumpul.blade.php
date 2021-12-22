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
            <br>
            <div class="col abs-text">
              <p class="py-3" style="padding-bottom:0; font-size:24px;">Selamat tim anda telah berhasil mengumpulkan Karya Tulis Ilmiah. Silakan menunggu pengumuman seleksi. </p>
            </div>
          </div>
                
                    
                
                
    </div>                     
                
                

@endsection
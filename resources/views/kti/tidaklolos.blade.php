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
            <br><br><br>
          <div class="col abs-text">
            <p style="padding:0; font-size:24px">Mohon maaf, Anda dinyatakan <strong> TIDAK LULUS </strong> KTI SNOW EPW 2022 dan tidak dapat melanjutkan ke babak selanjutnya. <br> <br> <strong> JANGAN PUTUS ASA DAN TETAP SEMANGAT!  </strong> </p>
          </div>
          <br><br>
        </div>
                
                    
                
                
    </div>                     
                
                

@endsection
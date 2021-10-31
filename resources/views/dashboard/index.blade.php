@extends("layouts.main")
@section("content")
    <div class="container profil">
    <img src="\svg\profile.svg" class="rounded mx-auto d-block mt-5" alt="...">
    </div>
    <div class="container badan">
        <div class="Team-name">
            <p>{{ $namatim }}</p>
        </div>
        <div class="Team-from">
            <p>{{ $asal }}</p>
        </div>
        <div class="Team-No">
            <p>  @if ($number<10)
                00{{ $number }}
            @else
                @if ($number < 100)
                    0{{ $number }}
                @else
                    {{ $number }}
                @endif
            @endif   </p>
        </div>
        <a class="d-grid btn btn-primary gap-3 col-3 mx-auto kartu" href="https://nekocalc.com/px-to-rem-converter" target="blank"  role="button">Lihat Kartu Peserta</a> 
        <div class="container abstrak-sub mx-auto">
            <div class="row">
              <div class="col abs-text">
                <p>ABSTRAK</p>
                
              </div>
              <div class="col order-1 formside">
                <form action="/submitabs" method="post" class="mb-5" enctype="multipart/form-data">
                  @csrf
                  <div class="bb">
                    <div class="form">
                  <input type="file" class="form-control custom-file-input @error('filename') is-invalid @enderror" id="input file" name="file" required>
                </div>
                </div>
                <a href="/kunciabs" class="kunci">Kunci Abstrak</a>
                <div class="mb-3 submit-btn">
                  <button class="btn btn-primary" type="submit">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>
    </div>
 @endsection

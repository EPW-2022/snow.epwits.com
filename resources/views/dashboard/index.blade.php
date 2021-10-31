@extends("layouts.main")
@section("content")
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
        <a class="d-grid btn btn-primary gap-3 col-3 mx-auto kartu" href="https://nekocalc.com/px-to-rem-converter" target="blank"  role="button">Lihat Kartu Peserta</a> 
        
        <div class="container abstrak-sub mx-auto">
            <div class="row">
              <div class="col abs-text">
                <p>ABSTRAK</p>
                
              </div>
              <div class="col order-1 formside">
                @if (session()->has('sukses'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        {{ session('sukses') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="/submitabs" method="post" class="mb-5" enctype="multipart/form-data">
                  @csrf
                  <div class="bb">
                    <div class="form">
                  <input type="file" class="form-control custom-file-input @error('file') is-invalid @enderror" id="input file" name="file" required>
                  </div>
                  </div>
                  <div class="mb-3 submit-btn">
                    <button class="btn btn-primary" type="submit">Submit</button>
                  </div>
                </form>
                <form action="/kunciabs" method="POST">
                  @csrf
                  <div class="mb-3 submit-btn">
                  <button class="btn btn-primary" type="submit"> Kunci abstrak </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
                @if (auth()->user()->abstrak->filename)
                    
                        @if (auth()->user()->abstrak->is_locked == "1")
                        
                        @else
                        
                        @endif
                @else
                    
                @endif
                
    </div>
 @endsection

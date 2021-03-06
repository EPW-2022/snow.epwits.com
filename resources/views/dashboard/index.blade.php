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
         
        
        <div class="container abstrak-sub mx-auto">
            <div class="row">

              @if (session()->has('abstrak'))
              <div class="container">
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                  {{ session('abstrak') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              </div>
              @endif

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
                  @error('file')
                  <div class="invalid-feedback ps-1 pt-1">
                    {{ $message }}
                  </div>
                  @enderror
                  </div>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
                
                    
                
                
    </div>
 @endsection

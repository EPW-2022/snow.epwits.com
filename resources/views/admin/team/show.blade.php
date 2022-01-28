@extends('admin.layouts.main')

@section('container')
  <!--Header-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Data Tim : <span class="fw-bold">{{ $team->user_id }}</span></div>
    <div class="ps-3 ms-auto">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a>
          </li>
          <li class="breadcrumb-item"><a href="/admin/tim">Akun Tim Peserta</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">{{ $team->user_id }}</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <div class="row">
    <div class="col-12 col-lg-8">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h5 class="mb-2">Data Tim {{ $team->user_id }} : {{ $team->user->namatim }}</h5>
          <div class="mb-0 d-flex justify-content-between flex-md-row flex-column">
            <div class="pb-2">
              Terdaftar pada : <span class="fw-bold">{{ $team->user->created_at }}</span>
            </div>
            @if ($team->user->leader->is_verified == true)
              <div class="text-success text-end"><i class="bi bi-patch-check"></i> Telah diverifikasi</div>
            @else
              <div class="text-danger text-end">Belum diverifikasi</div>
            @endif
          </div>
          <hr>

          <div class="row">
            {{-- Informasi Tim --}}
            <div class="col-xl-6">
              <div class="card border">
                <div class="card-header">
                  <h6 class="mb-0">Informasi Tim</h6>
                </div>
                <div class="card-body">
                  <div class="row mb-2">
                    <div class="col-md-6 d-flex justify-content-between">
                      <span>Nomor Tim</span>
                      <span class="d-none d-md-block">:</span>
                    </div>
                    <div class="col-md-6 fw-bold">
                      {{ $team->user_id }}
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-6 d-flex justify-content-between">
                      <span>Nama Tim</span>
                      <span class="d-none d-md-block">:</span>
                    </div>
                    <div class="col-md-6 fw-bold">
                      {{ $team->user->namatim }}
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-6 d-flex justify-content-between">
                      <span>Asal Sekolah</span>
                      <span class="d-none d-md-block">:</span>
                    </div>
                    <div class="col-md-6 fw-bold">
                      {{ $team->asalsekolah }}
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-6 d-flex justify-content-between">
                      <span>Kota</span>
                      <span class="d-none d-md-block">:</span>
                    </div>
                    <div class="col-md-6 fw-bold">
                      {{ $team->kota }}
                    </div>
                  </div>
                  {{-- <div class="row mb-2">
                    <div class="col-md-6 d-flex justify-content-between">
                      <span>Pembayaran</span>
                      <span class="d-none d-md-block">:</span>
                    </div>
                    <div class="col-md-6 fw-bold">
                      <span class="fw-normal">a.n.</span> {{ $team->user->file->payment_name }}
                      <a href="/files/payment/{{ $team->user->file->payment_slip }}" target="_blank" class="d-block">Lihat Bukti Bayar!</a>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>

            {{-- Informasi Tim --}}
            <div class="col-xl-6 mb-4">
              <div class="card border">
                <div class="card-header">
                  <h6 class="mb-0">Informasi Akun</h6>
                </div>
                <div class="card-body">
                  <div class="row mb-2">
                    <div class="col-md-6 d-flex justify-content-between">
                      <span>Username</span>
                      <span class="d-none d-md-block">:</span>
                    </div>
                    <div class="col-md-6 fw-bold">
                      {{ $team->user->username }}
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-6 d-flex justify-content-between">
                      <span>Email</span>
                      <span class="d-none d-md-block">:</span>
                    </div>
                    <div class="col-md-6 fw-bold">
                      {{ $team->user->email }}
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-6 d-flex justify-content-between">
                      <span>Password</span>
                      <span class="d-none d-md-block">:</span>
                    </div>
                    <div class="col-md-6 fw-bold"> decrypted
                      {{-- <form action="/admin/tim/resetpass/{{ $team->user->id }}" method="POST">
                        @csrf
                        <button type="submit" id="resetpass" class="btn-sm border-0 bg-transparent p-0 m-0 text-danger">Reset Password!</button>
                      </form> --}}
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-6 d-flex justify-content-between">
                      <span>Terdaftar</span>
                      <span class="d-none d-md-block">:</span>
                    </div>
                    <div class="col-md-6 fw-bold">
                      {{ $team->user->created_at }}
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-md-6 d-flex justify-content-between">
                      <span>Terverifikasi</span>
                      <span class="d-none d-md-block">:</span>
                    </div>
                    <div class="col-md-6 fw-bold">
                      @if ($team->user->leader->is_verified == true)
                        Telah diverifikasi
                      @else
                        Belum diverifikasi
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          {{-- Informasi Ketua --}}
          <div class="card border mb-4">
            <div class="card-header">
              <h6 class="mb-0">Data Ketua</h6>
            </div>
            <div class="card-body">
              <div class="row mb-2">
                <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                  <span>Nama Ketua</span>
                  <span class="d-none d-sm-block">:</span>
                </div>
                <div class="col-md-8 col-sm-7 fw-bold">
                  {{ $team->user->leader->namaketua }}
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                  <span>NISN</span>
                  <span class="d-none d-sm-block">:</span>
                </div>
                <div class="col-md-8 col-sm-7 fw-bold">
                  {{ $team->user->leader->nisn }}
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                  <span>Tempat, Tanggal Lahir</span>
                  <span class="d-none d-sm-block">:</span>
                </div>
                <div class="col-md-8 col-sm-7 fw-bold">
                  {{ $team->user->leader->tempatlahir }}, {{ $team->user->leader->tanggallahir }}
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                  <span>No. HP</span>
                  <span class="d-none d-sm-block">:</span>
                </div>
                <div class="col-md-8 col-sm-7 fw-bold">
                  {{ $team->user->leader->nomorhp }}
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                  <span>Email</span>
                  <span class="d-none d-sm-block">:</span>
                </div>
                <div class="col-md-8 col-sm-7 fw-bold">
                  {{ $team->user->email }}
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                  <span>Alamat Rumah</span>
                  <span class="d-none d-sm-block">:</span>
                </div>
                <div class="col-md-8 col-sm-7 fw-bold">
                  {{ $team->user->leader->alamat }}
                </div>
              </div>
            </div>
          </div>

          @if ($team->user->member->namaanggota1)
            {{-- Informasi Anggota --}}
            <div class="card border">
              <div class="card-header">
                <h6 class="mb-0">Data Anggota 1</h6>
              </div>
              <div class="card-body">
                <div class="row mb-2">
                  <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                    <span>Nama Anggota</span>
                    <span class="d-none d-sm-block">:</span>
                  </div>
                  <div class="col-md-8 col-sm-7 fw-bold">
                    {{ $team->user->member->namaanggota1 }}
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                    <span>NISN</span>
                    <span class="d-none d-sm-block">:</span>
                  </div>
                  <div class="col-md-8 col-sm-7 fw-bold">
                    {{ $team->user->member->nisn1 }}
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                    <span>Tempat, Tanggal Lahir</span>
                    <span class="d-none d-sm-block">:</span>
                  </div>
                  <div class="col-md-8 col-sm-7 fw-bold">
                    {{ $team->user->member->tempatlahir1 }}, {{ $team->user->member->tanggallahir1 }}
                  </div>
                </div>
              </div>
            </div>
          @endif
            
          @if ($team->user->member2)
            {{-- Informasi Anggota 2 --}}
            <div class="card border mt-4">
              <div class="card-header">
                <h6 class="mb-0">Data Anggota 2</h6>
              </div>
              <div class="card-body">
                <div class="row mb-2">
                  <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                    <span>Nama Anggota</span>
                    <span class="d-none d-sm-block">:</span>
                  </div>
                  <div class="col-md-8 col-sm-7 fw-bold">
                    {{ $team->user->member2->namaanggota2 }}
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                    <span>NISN</span>
                    <span class="d-none d-sm-block">:</span>
                  </div>
                  <div class="col-md-8 col-sm-7 fw-bold">
                    {{ $team->user->member2->nisn2 }}
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                    <span>Tempat, Tanggal Lahir</span>
                    <span class="d-none d-sm-block">:</span>
                  </div>
                  <div class="col-md-8 col-sm-7 fw-bold">
                    {{ $team->user->member2->tempatlahir2 }}, {{ $team->user->member2->tanggallahir2 }}
                  </div>
                </div>
              </div>
            </div>
          @endif
          <div class="card border mt-4">
            <div class="card-header">
              <h6 class="mb-0">File Tim</h6>
            </div>
            <div class="card-body">
              <div class="row mb-2">
                <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                  <span> Abstrak </span>
                  <span class="d-none d-sm-block">:</span>
                </div>
                <div class="col-md-8 col-sm-7 fw-bold">
                  @if ($team->user->abstrak->filename)
                  <a href="/abstrak/{{ $team->user->abstrak->filename }}" target="_blank" class="mb-0 text-secondary d-block">Lihat disini</a>    
                  @endif
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                  <span> Bukti Bayar </span>
                  <span class="d-none d-sm-block">:</span>
                </div>
                <div class="col-md-8 col-sm-7 fw-bold">
                  @if ($team->user->step >=3)
                      Sudah diverifikasi
                  @endif
                  @if ($team->user->step ==2)
                  <a href="/buktibayar/{{ $team->user->abstrak->filename1 }}" target="_blank" class="mb-0 text-secondary d-block">Lihat disini</a>
                  <form action="/admin/tim/verifbayar/{{ $team->user->id }}" method="POST" class="d-inline">
                    @csrf   
                  <button style="font-size:12px" type="submit" class="btn btn-success">Verifikasi Pembayaran</button>
                  </form>
                  @endif
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                  <span> Full KTI </span>
                  <span class="d-none d-sm-block">:</span>
                </div>
                <div class="col-md-8 col-sm-7 fw-bold">
                  @if ($team->user->abstrak->filename2)
                  <a href="/fullKTI/{{ $team->user->abstrak->filename2 }}" target="_blank" class="mb-0 text-secondary d-block">Lihat disini</a>    
                  @endif
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                  <span> Final </span>
                  <span class="d-none d-sm-block">:</span>
                </div>
                <div class="col-md-8 col-sm-7 fw-bold">
                  @if ($team->user->step <=4)
                   <form action="/admin/tim/lolosfinal/{{ $team->user->id }}" method="POST" class="d-inline">
                    @csrf   
                  <button style="font-size:12px" type="submit" class="btn btn-success">Loloskan</button>
                  </form>
                  @endif
                  @if ($team->user->step > 4)
                  Lolos Final
                  @endif
                </div>
              </div>
              
              @if ($team->user->step == 6)
              <div class="row mb-2">
                <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                  <span> Poster </span>
                  <span class="d-none d-sm-block">:</span>
                </div>
                <div class="col-md-8 col-sm-7 fw-bold">
                  @if ($team->user->abstrak->filename3)
                  <a href="/poster/{{ $team->user->abstrak->filename3 }}" target="_blank" class="mb-0 text-secondary d-block">Lihat disini</a>    
                  @endif
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                  <span> Presentasi </span>
                  <span class="d-none d-sm-block">:</span>
                </div>
                <div class="col-md-8 col-sm-7 fw-bold">
                  @if ($team->user->abstrak->filename4)
                  <a href="/presentasi/{{ $team->user->abstrak->filename4 }}" target="_blank" class="mb-0 text-secondary d-block">Lihat disini</a>    
                  @endif
                </div>
                <div class="row mb-2 mt-2">
                  <div class="col-md-4 col-sm-5 d-flex justify-content-between">
                    <span> Link video </span>
                    <span class="d-none d-sm-block">:</span>
                  </div>
                  <div class="col-md-8 col-sm-7 fw-bold">
                    @if ($team->user->abstrak->filename5)
                    <a href="{{ $team->user->abstrak->filename5 }}" target="_blank" class="mb-0 text-secondary d-block">Disini</a>    
                    @endif
                  </div>
                </div>
              </div>
              @endif

            </div>
            
            
          </div>

          <div class="text-end mt-4">
            <form action="/admin/tim/deleteData/{{ $team->user->id }}" method="POST" class="d-inline">
              @csrf
              <button type="submit" class="btn btn-outline-danger">Hapus Data</button>
            </form>
            @if ($team->user->leader->is_verified == false)
            <form action="/admin/tim/verifikasi/{{ $team->user->id }}" method="POST" class="d-inline">
              @csrf
              <button type="submit" class="btn btn-success">Verifikasi Data!</button>
            </form>
            @endif
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4">
      <div class="card shadow-sm border-0 overflow-hidden">
        <div class="card-body">
          <div class="profile-avatar text-center">
            <a href="/foto_ketua/{{ $team->foto }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Klik untuk lihat foto">
              <img src="/foto_ketua/{{ $team->foto }}" class="shadow" height="120" alt="">
            </a>
          </div>
          <div class="text-center mt-4">
            <h4 class="mb-1">{{ $team->namaketua }}</h4>
            <p class="mb-0 text-secondary">Ketua <span class="fw-bolder">{{ $team->user->namatim }}</span></p>
            <p class="mb-0 text-secondary">{{ $team->kota }}</p>
            <p class="mb-0 text-secondary">{{ $team->asalsekolah }}</p>
            <div class="mt-4"></div>
            <a href="/kartupel_ketua/{{ $team->kartupel }}" target="_blank" class="mb-0 text-secondary d-block">Lihat Kartu Pelajar</a>
            <a href="/twibbon_ketua/{{ $team->twibbon }}" target="_blank" class="mb-0 text-secondary d-block">Lihat Twibbon</a>
          </div>
        </div>
      </div>
      <div class="card shadow-sm border-0 overflow-hidden">
            <div class="card-body">
              <div class="profile-avatar text-center">
                <a href="/foto_anggota1/{{ $team->user->member->foto1 }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Klik untuk lihat foto">
                  <img src="/foto_anggota1/{{ $team->user->member->foto1 }}" class="shadow" height="120" alt="">
                </a>
              </div>
              <div class="text-center mt-4">
                <h4 class="mb-1">{{ $team->user->member->namaanggota1 }}</h4>
                <p class="mb-0 text-secondary">Anggota 1 <span class="fw-bolder">{{ $team->user->namatim }}</span></p>
                <p class="mb-0 text-secondary">{{ $team->asalsekolah }}</p>
                <div class="mt-4"></div>
                <a href="/kartupel_anggota1/{{ $team->user->member->kartupel1 }}" target="_blank" class="mb-0 text-secondary d-block">Lihat Kartu Pelajar</a>
                <a href="/twibbon_anggota1/{{ $team->user->member->twibbon1 }}" target="_blank" class="mb-0 text-secondary d-block">Lihat Twibbon</a>
              </div>
            </div>
          </div>
          @if ($team->user->member2)
            <div class="card shadow-sm border-0 overflow-hidden">
              <div class="card-body">
                <div class="profile-avatar text-center">
                  <a href="/foto_anggota2/{{ $team->user->member2->foto2 }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Klik untuk lihat foto">
                    <img src="/foto_anggota2/{{ $team->user->member2->foto2 }}" class="shadow" height="120" alt="">
                  </a>
                </div>
                <div class="text-center mt-4">
                  <h4 class="mb-1">{{ $team->user->member2->namaanggota2 }}</h4>
                  <p class="mb-0 text-secondary">Anggota 2 <span class="fw-bolder">{{ $team->user->namatim }}</span></p>
                  <p class="mb-0 text-secondary">{{ $team->asalsekolah }}</p>
                  <div class="mt-4"></div>
                  <a href="/kartupel_anggota2/{{ $team->user->member2->kartupel2 }}" target="_blank" class="mb-0 text-secondary d-block">Lihat Kartu Pelajar</a>
                  <a href="/twibbon_anggota2/{{ $team->user->member2->twibbon2 }}" target="_blank" class="mb-0 text-secondary d-block">Lihat Twibbon</a>
                </div>
              </div>
            </div>
          @endif
    </div>
  </div><!--end row-->
  
@endsection
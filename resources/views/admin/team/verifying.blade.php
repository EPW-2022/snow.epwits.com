@extends('admin.layouts.main')

@section('container')
    
  <!--Header-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Perlu Verifikasi</div>
    <div class="ps-3 ms-auto">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Perlu Verifikasi</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <h6 class="mb-0 text-uppercase">Data Tim yang perlu diverifikasi</h6>
  <hr>

  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table id="example2" class="table table-striped table-bordered py-3">
          <thead>
            <tr>
              <th>No</th>
              <th>No. Tim</th>
              <th>Nama Tim</th>
              <th>Sekolah</th>
              <th>Ketua</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($leaders as $leader)
            <tr>
              <td class="text-center">{{ $loop->iteration }}</td>
              <td class="text-center">{{ $leader->user_id }}</td>
              <td>{{ $leader->user->namatim }}</td>
              <td>{{ $leader->asalsekolah }}</td>
              <td>{{ $leader->namaketua }}</td>
              <td>
                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                  <a href="/admin/tim/{{ $leader->user_id }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Detail Data"><i class="bi bi-eye-fill"></i></a>
                  {{-- <a href="" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a> --}}
                  <form action="/admin/tim/deleteData/{{ $leader->user_id }}" method="POST">
                    @csrf
                    <button type="submit" id="deletingData" class="text-danger btn p-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus Data"><i class="bi bi-trash-fill"></i></button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>No</th>
              <th>No. Tim</th>
              <th>Nama Tim</th>
              <th>Sekolah</th>
              <th>Ketua</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
  
@endsection
@extends('admin.dashboard')
@section('gejala')

<hr class="my-5" />
<!-- Bordered Table -->
 <!-- Content wrapper -->
 <div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <h5 class="card-header">Tabel Gejala</h5>
          <hr class="m-0" />
          <div class="card-body">
          <a href="{{ route('gejala.create') }}" type="button" class="btn btn-danger" id="btn-create-gejala">Tambah Gejala</a>
         </div>
            <div class="table-responsive text-nowrap">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Gejala</th>
                    <th>Kode Gejala</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
              </thead>
              <tbody id="table-gejala">
                @forelse ($gejalas as $gejala)
                  <tr>
                  <td>{{ $gejala->nama_gejala }}</td>
                  <td>{{ $post->kd_gejala }}</td>
                  <td>
                    <div class="dropdown">
                      <button
                        type="button"
                        class="btn p-0 dropdown-toggle hide-arrow"
                        data-bs-toggle="dropdown"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu"  onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('gejalas.destroy', $gejala->id) }}" method="POST">>
                        <a class="dropdown-item" href="{{ route('gejalas.edit', $gejala->id) }}"
                          ><i class="bx bx-edit-alt me-1"></i> Edit</a
                        >
                        @csrf
                        @method('DELETE')
                        <a class="dropdown-item"
                          ><i class="bx bx-trash me-1"></i> Delete</a
                        >
                      </div>
                  </td>
                  @empty
                  <div class="alert alert-danger">
                    Data Post belum Tersedia.
                </div>
                  @endforelse
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script>
      //message with toastr
      @if(session()->has('success'))
      
          toastr.success('{{ session('success') }}', 'BERHASIL!'); 

      @elseif(session()->has('error'))

          toastr.error('{{ session('error') }}', 'GAGAL!'); 
          
      @endif
  </script>
@endsection
           
              <!--/ Bordered Table -->
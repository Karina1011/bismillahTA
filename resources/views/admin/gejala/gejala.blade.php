@extends('admin.dashboard')
@section('gejala')

<!-- Bordered Table -->
 <!-- Content wrapper -->
 <div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Gejala</h4>
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
              <tbody>
                @forelse ($gejalas as $gejala)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $gejala->nama_gejala }}</td>
                      <td>{!! $gejala->kd_gejala !!}</td>
                      <td class="text-center">
                          <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('gejala.destroy', $gejala->id) }}" method="POST">
                              <a href="{{ route('gejala.edit', $gejala->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                          </form>
                      </td>
                  </tr>
                @empty
                    <div class="alert alert-danger">
                        Data Gejala belum Tersedia.
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
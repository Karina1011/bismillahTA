@extends('admin.dashboard')
@section('tambah-gejala')
 <!-- Content wrapper -->
 <div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Form/</span> Tambah Data Gejala</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Tambah Gejala</h5>
            <small class="text-muted float-end">Default label</small>
          </div>
          <div class="card-body">
            <form action="{{ route('gejala.store') }}" method="POST">
              @csrf
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Gejala</label>
                <div class="col-sm-10">
                  <input
                    type="text" class="form-control" id="basic-default-company" @error('nama_gejala')placeholder="Masukan Nama Gejala"/>
                  </div>
                    <!-- error message untuk tambah gejala -->
                    @error('nama_gejala')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Kode Gejala</label>
                <div class="col-sm-10">
                  <input
                  type="text" class="form-control" id="basic-default-company" @error('kd_gejala') placeholder="Masukan Nama Gejala"/>
                  </div>
                  @error('kd_gejala')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
                <div class="row justify-content-end">
                  <div class="col-sm-13">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>  
              </div>
            </form>
          </div>
        </div>
      </div> 
      @endsection
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
      <script>
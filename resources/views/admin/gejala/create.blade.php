@include('admin.dashboard')
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
              <div class="form-group">
                  <label class="font-weight-bold">Nama Gejala</label>
                  <input type="text" class="form-control @error('nama_gejala') is-invalid @enderror" name="nama_gejala" value="{{ old('nama_gejala') }}" placeholder="Masukkan Nama Gejala">
              
                  <!-- error message untuk nama_gejala -->
                  @error('nama_gejala')
                      <div class="alert alert-danger mt-2">
                          {{ $message }}
                      </div>
                  @enderror
              </div>

              <div class="form-group">
                <label class="font-weight-bold">Kode Gejala</label>
                <input type="text" class="form-control @error('kd_gejala') is-invalid @enderror" name="kd_gejala" value="{{ old('kd_gejala') }}" placeholder="Masukkan Nama Gejala">
            
                <!-- error message untuk kd_gejala -->
                @error('kd_gejala')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
              <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
              <button type="reset" class="btn btn-md btn-warning">RESET</button>
          </form> 
          </div>
        </div>
      </div> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
      <script>
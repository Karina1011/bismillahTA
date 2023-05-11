@extends('admin.dashboard')
@section('tambah-penyakit')
 <!-- Content wrapper -->
 <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Form/</span> Tambah Data Penyakit</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Tambah Penyakit</h5>
                      <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                      <form action="{{ route('stadium.store') }}" method="POST" enctype="multipart/form-data">
                        
                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">nama satium</label>
                            <input type="text" class="form-control @error('nama_stadium') is-invalid @enderror" name="nama_stadium" value="{{ old('nama_stadium') }}">
                        
                            <!-- error message untuk title -->
                            @error('nama_stadium')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">kode stadium</label>
                            <textarea class="form-control @error('kd_stadium') is-invalid @enderror" name="kd_stadium" >{{ old('kd_stadium') }}</textarea>
                          
                            <!-- error message untuk content -->
                            @error('kd_stadium')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                          <label class="font-weight-bold">solusi</label>
                          <textarea class="form-control @error('solusi') is-invalid @enderror" name="solusi" >{{ old('solusi') }}</textarea>
                      
                          <!-- error message untuk content -->
                          @error('solusi')
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
                @endsection
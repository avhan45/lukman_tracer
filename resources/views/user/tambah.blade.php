@extends('layout.template')
@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
    
   <div class="card shadow mb-4">
       <div class="card-header py-3">
           {{-- <a href="#" class="m-0 font-weight-bold btn btn-primary btn-sm">Tambah Data Alumni <i class="fas fa-plus"></i></a> --}}
           <h3 class="m-0 font-weight-bol text-primary">Data Alumni</h3>
       </div>
       <div class="card-body">
           <form action="{{ url('user_store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nim" class="form-label">Nim</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}">
                        @error('nim')
                            <span class="text-danger text-sm">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                        @error('password')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan</button>
                       <button type="button" onclick="history.back()" class="btn btn-secondary text-right">Kembali</button>
                    </div>
                </div>
                
            </div>
                </form>
       </div>
   </div>
</div>
@endsection
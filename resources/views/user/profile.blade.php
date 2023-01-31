@extends('layout.template')
@section('content')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
@endsection

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header ">
                  <strong>Data User</strong>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                <form action="{{ url('user_update', $profile->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="m-3 row">
                        <label for="nim" class="col-sm-4 col-form-label">Nim</label>
                        <div class="col-sm-8">
                          <input type="text" readonly class="form-control-plaintext" id="nim" name="nim" value="{{$profile->nim}}">
                          {{-- <input type="hidden" class="form-control-plaintext" id="id" name="id" value="{{$profile->id}}"> --}}
                        </div>
                      </div>
                    <div class="m-3 row">
                        <label for="namaLengkap" class="col-sm-4 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="namaLengkap" name="nama" value="{{$profile->username}}">
                        </div>
                      </div>
                    <div class="m-3 row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="email" name="email" value="{{$profile->email}}">
                        </div>
                      </div>
                   
                      <div class="m-3 row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="inputPassword" name="password">
                        </div>
                      </div>
                      <div class="m-3 row">
                        <button class="btn btn-primary" type="submit">Update</button>
                      </div>
                </form>
              </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
              {{-- @if($profile->photo->foto) --}}
              @if(!empty($profile->photo->foto))
                <img src="/images/{{ $profile->photo->foto }}" class="card-img-top rounded" alt="{{$profile->photo->foto}}">
                @else
                <img src="{{asset('assets/img/undraw_profile.svg')}}" class="card-img-top rounded" alt="Profile">
                @endif
              <div class="card-body">
                <form action="{{url('update_foto',$profile->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                        <div class="row mb-2">
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="row">
                            <button class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                  {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                </div>
              </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection
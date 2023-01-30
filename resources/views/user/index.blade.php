@extends('layout.template')
@section('content')
<div class="container-fluid">
    <!-- DataTales Example -->
   <div class="card shadow mb-4">
       <div class="card-header py-3">
           <a href="/tambahUser" class="m-0 font-weight-bold btn btn-primary btn-sm">Tambah Data Alumni <i class="fas fa-plus"></i></a>
       </div>
       @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
        </div>
        @endif
       @if ($message = Session::get('warning'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
        </div>
        @endif
       <div class="card-body">
           <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <thead>
                       <tr>
                           <th>No</th>
                           <th>Nim</th>
                           <th>Username</th>
                           <th>Email</th>
                           <th>Role</th>
                           <th>Aksi</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($UserAlumni as $index => $data)
                       <tr>
                           <td>{{ $loop->iteration}}</td>
                           <td>{{ $data->nim }}</td>
                           <td>{{ $data->username }}</td>
                           <td>{{ $data->email }}</td>
                           <td>
                            @if ($data->level == "admin")
                                <span class="badge badge-danger">{{ $data->level }}</span>
                            @else 
                                <span class="badge badge-success">{{ $data->level }}</span>
                            @endif
                           </td>
                           <td>
                            <a href="{{ url('editUser',$data->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a> | 
                            <a href="{{ url('deleteUser',$data->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> </a>
                           </td>
                       </tr>
                       @endforeach
                       
                   </tbody>
               </table>
           </div>
       </div>
   </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
  $('#dataTable').DataTable();
});

    </script>  
@endsection

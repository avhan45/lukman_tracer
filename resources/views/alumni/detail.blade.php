@extends('layout.template')
@section('content')
<div class="container-fluid">
     <!-- DataTales Example -->
     <div class="row">
        <div class="col-md-6">
         <div class="card shadow mb-4">
             <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profile --> {{ $alumni->nama_lengkap }}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table"  cellspacing="0">
                    <thead>
                        <th>Nim</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $alumni->nama_lengkap }}</td>
                            <td>{{ $alumni->email }}</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection
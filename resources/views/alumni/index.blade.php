@extends('layout.template')
@section('content')
<div class="container-fluid">
     <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Alumni</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jk</th>
                            <th>Lulus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumni as $data)
                        <tr>
                            <td>1</td>
                            <td>{{ $data->nama_lengkap }}</td>
                            <td>{{ $data->jk }}</td>
                            <td>{{ $data->thn_wisuda }}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    $(document).ready(function() {
  $('#dataTable').DataTable();
});

    </script>  
@endsection


@endsection
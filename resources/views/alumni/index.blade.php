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
                            <th width="30">No</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Tahun Lulus</th>
                            {{-- <th class="text-center">Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumni as $data)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $nim }}</td>
                            <td>{{ $data->nama_lengkap }}</td>
                            <td>{{ $data->prodi }}</td>
                            <td>{{ $data->thn_wisuda }}</td>
                            {{-- <td class="text-center">
                                <a href="{{ url('detail',$data->id) }}" class="btn btn-info btn-sm"> <i class="fas fa-eye"></i> </a>
                            </td> --}}
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
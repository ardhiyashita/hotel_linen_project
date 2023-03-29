@extends('layouts/hotel_linen/master')

@section('title', 'Total Hotel')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Total Hotel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Total Hotel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
              <a href="{{ route('hotel_create') }}" class="btn btn-primary btn-sm" style="width: 200px;"> 
                  <i class="mr-1 fas fa-plus"></i>
                  Add Data
              </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">             
                <table id="example1" class="table table-bordered table-striped">
                <thead style="font-size: 12px;">
                            <tr>
                                
                                <th class="border-top-0" style="text-align: center">No</th>
                                <th class="border-top-0" style="text-align: center">Hotel code</th>
                                <th class="border-top-0" style="text-align: center">Hotel name</th>
                                <th class="border-top-0" style="text-align: center">Laundry plant</th>
                                <th class="border-top-0" style="text-align: center">Contact name</th>
                                <th class="border-top-0" style="text-align: center">Phone</th>
                                <th class="border-top-0" style="text-align: center">Email</th>
                                <th class="border-top-0" style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tfoot style="font-size: 12px;">
                            <tr>
                                
                                <th class="border-top-0" style="text-align: center">No</th>
                                <th class="border-top-0" style="text-align: center">Hotel code</th>
                                <th class="border-top-0" style="text-align: center">Hotel name</th>
                                <th class="border-top-0" style="text-align: center">Laundry plant</th>
                                <th class="border-top-0" style="text-align: center">Contact name</th>
                                <th class="border-top-0" style="text-align: center">Phone</th>
                                <th class="border-top-0" style="text-align: center">Email</th>
                                <th class="border-top-0" style="text-align: center">Action</th>
                            </tr>
                        </tfoot>
                        <tbody style="font-size: 12px;">
                            @foreach($data as $val)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $val->hotel_code}}</td>
                                <td>{{ $val->hotel_name }}</td>
                                <td>{{ $val->laundry_plant }}</td>
                                <td>{{ $val->contact_name }}</td>
                                <td>{{ $val->phone }}</td>
                                <td>{{ $val->email }}</td>
                                <td>
                                  <form action="{{ route('hotel_delete', $val->id) }}" method="POST">
                                    <div class="" role="group" aria-label="Basic example">
                                    @csrf
                                          <a class="btn btn-warning btn-sm" href="{{ route('hotel_update', $val->id) }}">
                                            <i class="fas fa-edit"></i>
                                            </a>
                                            <a class="btn btn-success btn-sm" href="{{ route('hotel_read', $val->id) }}">
                                              <i class="fas fa-eye"></i>
                                              </a>
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('apakah kamu yakin menghapus data ini ?')">
                                          <i class="fas fa-trash"></i>
                                        </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@endsection

@section('js')
<script>
$(function () {
    $("#example1").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    });
});
</script>
    
@endsection
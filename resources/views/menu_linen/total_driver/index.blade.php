@extends('layouts/hotel_linen/master')

@section('title', 'Total Driver')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Total Driver</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Total Driver</li>
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
              <a href="{{ route('driver_create') }}" class="btn bg-primary" style="width: 300px;"> 
                  <i class="mr-1 fas fa-plus">
                  </i>
                  Add Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">             
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                            <tr>
                                <th class="border-top-0" style="text-align: center">No</th>
                                <th class="border-top-0" style="text-align: center">Driver id</th>
                                <th class="border-top-0" style="text-align: center">First name</th>
                                <th class="border-top-0" style="text-align: center">Last name</th>
                                <th class="border-top-0" style="text-align: center">Gender</th>
                                <th class="border-top-0" style="text-align: center">Phone</th>
                                <th class="border-top-0" style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="border-top-0" style="text-align: center">No</th>
                                <th class="border-top-0" style="text-align: center">Driver id</th>
                                <th class="border-top-0" style="text-align: center">First name</th>
                                <th class="border-top-0" style="text-align: center">Last name</th>
                                <th class="border-top-0" style="text-align: center">Gender</th>
                                <th class="border-top-0" style="text-align: center">Phone</th>
                                <th class="border-top-0" style="text-align: center">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($data as $val)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $val->driver_id}}</td>
                                <td>{{ $val->first_name }}</td>
                                <td>{{ $val->last_name }}</td>
                                <td>{{ $val->gender }}</td>
                                <td>{{ $val->phone }}</td>
                                <td>
                                    <form action="" method="POST">
                                        <div class="" role="group" aria-label="Basic example">
                                        @csrf
                                        <a class="btn bg-warning" href="">
                                          <i class="fas fa-edit"></i>
                                          </a>
                                        <a type="submit" class="btn bg-danger"
                                            onclick="return confirm('apakah kamu yakin menghapus data ini ?')">
                                          <i class="fas fa-trash"></i>
                                        </a>
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
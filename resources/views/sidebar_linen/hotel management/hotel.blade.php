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
              <a href="{{ route('linen_category_create') }}" class="btn bg-primary" style="width: 300px;"> 
                  <i class="mr-1 fas fa-plus">
                  </i>
                  Add Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">             
                <table id="example1" class="table table-bordered table-striped">
                <thead style="font-size: 12px;">
                            <tr>
                                <th><input type="checkbox" id="head_cb"></th>
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
                                <th><input type="checkbox" id="head_cb"></th>
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
                                <td><input type="checkbox" class="cb_child" value=""></td>
                                <td>{{ $data2->hotel_code}}</td>
                                <td>{{ $data2->hotel_name }}</td>
                                <td>{{ $data2->laundry_plant }}</td>
                                <td>{{ $data2->contact_name }}</td>
                                <td>{{ $data2->phone }}</td>
                                <td>{{ $data2->email }}</td>
                                <td width="160px">
                                    <form action="" method="POST">
                                        <div class="" role="group" aria-label="Basic example">
                                        @csrf
                                        <a type="button" class="btn btn-success" href="">Edit</a>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('apakah kamu yakin menghapus data ini ?')">Hapus</button>
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
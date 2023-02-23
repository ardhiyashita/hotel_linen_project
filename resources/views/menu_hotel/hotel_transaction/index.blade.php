@extends('layouts/hotel_linen/master')

@section('title', 'Hotel Transaction')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead style="font-size: 12px;">
                            <tr>
                                <th class="border-top-0" style="text-align: center">No</th>
                                <th class="border-top-0" style="text-align: center">Trans Code</th>
                                <th class="border-top-0" style="text-align: center">Trans Date</th>
                                <th class="border-top-0" style="text-align: center">Hotel Code</th>
                                <th class="border-top-0" style="text-align: center">Hotel Name</th>
                                <th class="border-top-0" style="text-align: center">Clean</th>
                                <th class="border-top-0" style="text-align: center">Soil</th>
                                <th class="border-top-0" style="text-align: center">Stain</th>
                                <th class="border-top-0" style="text-align: center">Torn</th>
                                <th class="border-top-0" style="text-align: center">Trans Status</th>
                                <th class="border-top-0" style="text-align: center">Delivery Status</th>
                                <th class="border-top-0" style="text-align: center">Discard</th>
                                <th class="border-top-0" style="text-align: center">Treatment</th>
                                <th class="border-top-0" style="text-align: center">Request Linen</th>
                                <th class="border-top-0" style="text-align: center">Driver</th>
                                <th class="border-top-0" style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tfoot style="font-size: 12px;">
                            <tr>
                                <th class="border-top-0" style="text-align: center">No</th>
                                <th class="border-top-0" style="text-align: center">Trans Code</th>
                                <th class="border-top-0" style="text-align: center">Trans Date</th>
                                <th class="border-top-0" style="text-align: center">Hotel Code</th>
                                <th class="border-top-0" style="text-align: center">Hotel Name</th>
                                <th class="border-top-0" style="text-align: center">Clean</th>
                                <th class="border-top-0" style="text-align: center">Soil</th>
                                <th class="border-top-0" style="text-align: center">Stain</th>
                                <th class="border-top-0" style="text-align: center">Torn</th>
                                <th class="border-top-0" style="text-align: center">Trans Status</th>
                                <th class="border-top-0" style="text-align: center">Delivery Status</th>
                                <th class="border-top-0" style="text-align: center">Discard</th>
                                <th class="border-top-0" style="text-align: center">Treatment</th>
                                <th class="border-top-0" style="text-align: center">Request Linen</th>
                                <th class="border-top-0" style="text-align: center">Driver</th>
                                <th class="border-top-0" style="text-align: center">Action</th>
                            </tr>
                        </tfoot>
                        <tbody style="font-size: 12px;">
                            @foreach($data as $val)
                            <tr>
                                <td>1</td>
                                <td>{{ $val->trans_code}}</td>
                                <td>{{ $val->trans_date }}</td>
                                <td>{{ $val->hotel_code }}</td>
                                <td>{{ $val->hotel_name }}</td>
                                <td>{{ $val->clean }}</td>
                                <td>{{ $val->soil }}</td>
                                <td>{{ $val->stain }}</td>
                                <td>{{ $val->torn }}</td>
                                <td>{{ $val->trans_status }}</td>
                                <td>{{ $val->delivery_status }}</td>
                                <td>{{ $val->discard }}</td>
                                <td>{{ $val->treatment }}</td>
                                <td>{{ $val->request_linen }}</td>
                                <td>{{ $val->driver }}</td>
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
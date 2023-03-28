@extends('layouts/hotel_linen/master')

@section('title', 'Packing')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Packing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Packing</li>
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

                
              <!-- /.card-header -->
              <div class="card-body">             
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                            <tr>
                                <th class="border-top-0" style="text-align: center">No</th>
                                <th class="border-top-0" style="text-align: center">Packing code</th>
                                <th class="border-top-0" style="text-align: center">Packing date</th>
                                <th class="border-top-0" style="text-align: center">Packed by</th>
                                <th class="border-top-0" style="text-align: center">Hotel code</th>
                                <th class="border-top-0" style="text-align: center">Hotel name</th>
                                <th class="border-top-0" style="text-align: center">Total</th>
                                <th class="border-top-0" style="text-align: center">Status</th>
                                <th class="border-top-0" style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="border-top-0" style="text-align: center">No</th>
                                <th class="border-top-0" style="text-align: center">Packing code</th>
                                <th class="border-top-0" style="text-align: center">Packing date</th>
                                <th class="border-top-0" style="text-align: center">Packed by</th>
                                <th class="border-top-0" style="text-align: center">Hotel code</th>
                                <th class="border-top-0" style="text-align: center">Hotel name</th>
                                <th class="border-top-0" style="text-align: center">Total</th>
                                <th class="border-top-0" style="text-align: center">Status</th>
                                <th class="border-top-0" style="text-align: center">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($data as $val)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $val->packing_code}}</td>
                                <td>{{ $val->packing_date }}</td>
                                <td>{{ $val->packed_by }}</td>
                                <td>{{ $val->hotel_code }}</td>
                                <td>{{ $val->hotel_name }}</td>
                                <td>{{ $val->total }}</td>
                                <td>{{ $val->status }}</td>

                                    <td>
                                        <a class="btn bg-success" href="{{ route('packing_read', $val->id) }}">
                                          <i class="fas fa-eye"></i>
                                          </a>
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
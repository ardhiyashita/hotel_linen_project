@extends('layouts/hotel_linen/master')

@section('title', 'Internal Transaction')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Internal Transaction</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Internal Transaction</li>
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
              <!-- /.card-header -->
              <div class="card-body">             
                <table id="example1" class="table table-bordered table-striped">
                <thead style="font-size: 12px;">
                            <tr>
                                <th class="border-top-0" style="text-align: center">No</th>
                                <th class="border-top-0" style="text-align: center">Trans code</th>
                                <th class="border-top-0" style="text-align: center">Trans date</th>
                                <th class="border-top-0" style="text-align: center">Type</th>
                                <th class="border-top-0" style="text-align: center">Laundry</th>
                                <th class="border-top-0" style="text-align: center">Total</th>
                                <th class="border-top-0" style="text-align: center">Status</th>
                                <th class="border-top-0" style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tfoot style="font-size: 12px;">
                            <tr>
                                <th class="border-top-0" style="text-align: center">No</th>
                                <th class="border-top-0" style="text-align: center">Trans code</th>
                                <th class="border-top-0" style="text-align: center">Trans date</th>
                                <th class="border-top-0" style="text-align: center">Type</th>
                                <th class="border-top-0" style="text-align: center">Laundry</th>
                                <th class="border-top-0" style="text-align: center">Total</th>
                                <th class="border-top-0" style="text-align: center">Status</th>
                                <th class="border-top-0" style="text-align: center">Action</th>
                            </tr>
                        </tfoot>
                        <tbody style="font-size: 12px;">
                            @foreach($data as $val)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $val->trans_code}}</td>
                                <td>{{ $val->trans_date }}</td>
                                <td>{{ $val->delivery_type }}</td>
                                <td>{{ $val->laundry_name }}</td>
                                <td>{{ $val->total_packing }}</td>
                                <td>{{ $val->delivery_status }}</td>
                                <td>
                                  <a class="btn btn-success btn-sm" href="{{ route('internal_transaction_read', $val->id) }}">
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
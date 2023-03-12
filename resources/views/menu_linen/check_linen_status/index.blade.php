@extends('layouts/hotel_linen/master')

@section('title', 'Check Linen Status')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Check Linen Status</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Check Linen Status</li>
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
                                <th class="border-top-0" style="text-align: center">Tag id</th>
                                <th class="border-top-0" style="text-align: center">Place</th>
                                <th class="border-top-0" style="text-align: center">Linen status</th>
                                <th class="border-top-0" style="text-align: center">Linen type</th>
                                <th class="border-top-0" style="text-align: center">Hotel name</th>
                                <th class="border-top-0" style="text-align: center">Size</th>
                                <th class="border-top-0" style="text-align: center">Current wash cycle</th>
                                <th class="border-top-0" style="text-align: center">Linen belong LC</th>
                            </tr>
                        </thead>
                        <tfoot style="font-size: 12px;">
                            <tr>
                                <th class="border-top-0" style="text-align: center">No</th>
                                <th class="border-top-0" style="text-align: center">Tag id</th>
                                <th class="border-top-0" style="text-align: center">Place</th>
                                <th class="border-top-0" style="text-align: center">Linen status</th>
                                <th class="border-top-0" style="text-align: center">Linen type</th>
                                <th class="border-top-0" style="text-align: center">Hotel name</th>
                                <th class="border-top-0" style="text-align: center">Size</th>
                                <th class="border-top-0" style="text-align: center">Current wash cycle</th>
                                <th class="border-top-0" style="text-align: center">Linen belong LC</th>
                            </tr>
                        </tfoot>
                        <tbody style="font-size: 12px;">
                            @foreach($data as $val)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $val->tag_id}}</td>
                                <td>{{ $val->place }}</td>
                                <td>{{ $val->linen_status }}</td>
                                <td>{{ $val->total_template->linen_type }}</td>
                                <td>{{ $val->total_hotel->hotel_name }}</td>
                                <td>{{ $val->total_template->size }}</td>
                                <td>{{ $val->current_wash_cycle }}</td>
                                <td>{{ $val->linen_belong }}</td>
                                
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
@extends('layouts/hotel_linen/master')

@section('title', 'Total Template Linen')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Total Linen Template </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Total Linen</li>
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
              <a href="{{ route('template_create') }}" class="btn bg-primary" style="width: 200px;"> 
                  <i class="mr-1 fas fa-plus">
                  </i>
                  Add Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">             
                <table id="example1" class="table table-bordered table-striped">
                <thead style="font-size: 12px;">
                            <tr>
                                <th class="border-top-0" style="text-align: center">No</th>
                                <th class="border-top-0" style="text-align: center">Linen code</th>
                                <th class="border-top-0" style="text-align: center">Template name</th>
                                <th class="border-top-0" style="text-align: center">Linen type</th>
                                <th class="border-top-0" style="text-align: center">Size</th>
                                <th class="border-top-0" style="text-align: center">Color</th>
                                <th class="border-top-0" style="text-align: center">Supplier</th>
                                <th class="border-top-0" style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tfoot style="font-size: 12px;">
                            <tr>
                                <th class="border-top-0" style="text-align: center">No</th>
                                <th class="border-top-0" style="text-align: center">Linen code</th>
                                <th class="border-top-0" style="text-align: center">Template name</th>
                                <th class="border-top-0" style="text-align: center">Linen type</th>
                                <th class="border-top-0" style="text-align: center">Size</th>
                                <th class="border-top-0" style="text-align: center">Color</th>
                                <th class="border-top-0" style="text-align: center">Supplier</th>
                                <th class="border-top-0" style="text-align: center">Action</th>
                            </tr>
                        </tfoot>
                        <tbody style="font-size: 12px;">
                            @foreach($data as $val)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $val->linen_code}}</td>
                                <td>{{ $val->template_name }}</td>
                                <td>{{ $val->linen_type }}</td>
                                <td>{{ $val->size }}</td>
                                <td>{{ $val->color }}</td>
                                <td>{{ $val->supplier }}</td>
                                <td>
                                  <form action="{{ route('template_delete', $val->id) }}" method="POST">
                                    <div class="" role="group" aria-label="Basic example">
                                    @csrf
                                          <a class="btn bg-warning" href="{{ route('template_update', $val->id) }}">
                                            <i class="fas fa-edit"></i>
                                            </a>
                                        <button type="submit" class="btn bg-danger"
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
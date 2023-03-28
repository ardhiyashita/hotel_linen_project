@extends('layouts/hotel_linen/master')

@section('title', 'Detail Total Linen')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Total Linen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Detail Total Linen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form action="{{ route('linen_update_save', $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Tag id</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->tag_id }}</div>
                            </div>
                        </div>    
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Linen name</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->linen_name }}</div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                          <div class="row">
                              <label class="col-sm-12 col-md-3">Hotel name</label>
                              <div class="col-sm-12 col-md-1">:</div>
                              <div class="col-sm-12 col-md-8"> {{ $data->hotel_name }}</div>
                          </div>
                      </div>
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Linen category</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->linen_category }}</div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                          <div class="row">
                              <label class="col-sm-12 col-md-3">Linen status</label>
                              <div class="col-sm-12 col-md-1">:</div>
                              <div class="col-sm-12 col-md-8"> {{ $data->linen_status }}</div>
                          </div>
                      </div>
                        
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Supplier</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->supplier }}</div>
                            </div>
                        </div>    
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Place</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->place }}</div>
                            </div>
                        </div>
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Current wash cycle</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->current_wash_cycle }}</div>
                            </div>
                        </div>
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                          <div class="row">
                              <label class="col-sm-12 col-md-3">Linen belong</label>
                              <div class="col-sm-12 col-md-1">:</div>
                              <div class="col-sm-12 col-md-8"> {{ $data->linen_belong }}</div>
                          </div>
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <a href="{{ route('linen_index') }}" class="btn bg-primary" style="width: 200px;">
                          <i class="mr-1 fa fa-arrow-left"></i>
                          Back
                        </a>

                    </div>
                </div>
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
    </form>    
  </div>

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@endsection
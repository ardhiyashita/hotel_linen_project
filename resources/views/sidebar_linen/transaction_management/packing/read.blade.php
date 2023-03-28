@extends('layouts/hotel_linen/master')

@section('title', 'Detail Packing')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Packing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Detail Packing</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form action="{{ route('packing_update_save', $data->id) }}" method="POST" enctype="multipart/form-data">
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
                                <label class="col-sm-12 col-md-3">Packing code</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->packing_code }}</div>
                            </div>
                        </div> 
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Packing date</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->packing_date }}</div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Packed by</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->packed_by }}</div>
                            </div>
                        </div>   

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Hotel code</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->hotel_code }}</div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Hotel name</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->hotel_name }}</div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-12 col-md-6">
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Total</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->total }}</div>
                            </div>
                        </div>
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Status</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->status }}</div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Driver pickup</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->driver_pickup_status }}</div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Manualy delivery out</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->manual_delivery_out }}</div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Manual to hotel</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->manual_to_hotel }}</div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <a href="{{ route('packing_index') }}" class="btn bg-primary" style="width: 200px;">
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
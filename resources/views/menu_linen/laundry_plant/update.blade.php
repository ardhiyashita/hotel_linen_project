@extends('layouts/hotel_linen/master')

@section('title', 'Update Laundry Plant')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Laundry Plant</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Update Laundry Plant</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form action="{{ route('laundry_plant_update_save', $data->id) }}" method="POST" enctype="multipart/form-data">
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
                        <div class="form-group">
                            Name
                            <input class="form-control form-control-sm" name="name" type="text" placeholder="-- Name --" value="{{ $data->name }}">
                        </div>    
                        @error('name')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Code
                            <input class="form-control form-control-sm" name="code" type="text" placeholder="-- Code --" value="{{ $data->code }}">
                        </div>
                        @error('code')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Phone
                            <input class="form-control form-control-sm" name="phone" type="text" placeholder="-- Phone --" value="{{ $data->phone }}">
                        </div>
                        @error('phone')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                        
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            Email
                            <input class="form-control form-control-sm" name="email" type="text" placeholder="-- Email --" value="{{ $data->email }}">
                        </div>    
                        @error('email')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Linen Center
                            <select class="selectpicker form-control form-control-sm" name="linen_center" id="linen_center" data-live-search="true">
                                @foreach($linen_center as $item)
                                    <option value="{{ $data->id_linen_center }}"
                                        @if($data->id_linen_center == $item->id_linen_center)
                                            {{'selected="selected"'}}
                                        @endif
                                        >
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('linen_center')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                    </div>

                    <div class="col-sm-12 col-md-6">
                        <button type="submit" class="btn bg-success" style="width: 200px;">
                            <i class="mr-1 fas fa-save"></i>
                            Save
                        </button>
                        <a href="{{ route('laundry_plant_index') }}" class="btn bg-primary" style="width: 200px;">
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
@extends('layouts/hotel_linen/master')

@section('title', 'Create Linen Type')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Linen Type</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Create Linen Type</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form action="{{ route('linen_type_create_save') }}" method="POST" enctype="multipart/form-data">
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
                            Linen Code
                            <input class="form-control form-control-sm" name="linen_code" type="text" placeholder="-- linen code --">
                        </div>
                        @error('linen_code')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Linen Type
                            <input class="form-control form-control-sm" name="linen_type" type="text" placeholder="-- linen name --">
                        </div>    
                        @error('linen_name')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Linen Category
                            <select class="selectpicker form-control form-control-sm" name="linen_category" id="linen_category" data-live-search="true">
                            <option>-- Select Linen Category --</option>
                                @foreach($linen_category as $item)
                                <option value="{{ $item->id }}">{{ $item->linen_name }}</option>
                            @endforeach
                        </select>
                        </div>
                        @error('linen_category')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Size
                            <input class="form-control form-control-sm" name="size" type="text" placeholder="-- size --">
                        </div>
                        @error('size')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
     
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            Color
                            <input class="form-control form-control-sm" name="color" type="text" placeholder="-- color --">
                        </div>
                        @error('color')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Max cycle
                            <input class="form-control form-control-sm" name="max_cycle" type="text" placeholder="-- max cycle --">
                        </div>
                        @error('max_cycle')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Standar packing
                            <input class="form-control form-control-sm" name="standar_packing" type="text" placeholder="-- standar packing --">
                        </div>
                        @error('standar_packing')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <button type="submit" class="btn bg-success" style="width: 200px;">
                            <i class="mr-1 fas fa-save"></i>
                            Save
                        </button>
                        <a href="{{ route('linen_type_index') }}" class="btn bg-primary" style="width: 200px;">
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
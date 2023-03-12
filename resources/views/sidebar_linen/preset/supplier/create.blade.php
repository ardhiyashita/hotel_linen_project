@extends('layouts/hotel_linen/master')

@section('title', 'Create Total Supplier')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Total Supplier</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Create Total Supplier</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form action="{{ route('supplier_create_save') }}" method="POST" enctype="multipart/form-data">
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
                            Code
                            <input class="form-control form-control-sm" name="code" type="text" placeholder="-- Code --">
                        </div>
                        @error('code')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Name
                            <input class="form-control form-control-sm" name="name" type="text" placeholder="-- Name --">
                        </div>    
                        @error('name')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Manufacture
                            <input class="form-control form-control-sm" name="manufacture" type="text" placeholder="-- manufacture --">
                        </div>    
                        @error('manufacture')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Address
                            <textarea class="form-control form-control-sm" name="address" type="textarea" rows="4" placeholder="-- Address --"></textarea>
                        </div>
     
                    </div>
                    <div class="col-sm-12 col-md-6">

                      <div class="form-group">
                        Phone
                        <input class="form-control form-control-sm" name="phone" type="text" placeholder="-- Phone --">
                    </div>
                    @error('phone')
                    <div class="alert alert-danger" role="alert">{{$message}}</div>
                    @enderror

                      <div class="form-group">
                        Email
                        <input class="form-control form-control-sm" name="email" type="text" placeholder="-- Email --">
                    </div>
                    @error('email')
                    <div class="alert alert-danger" role="alert">{{$message}}</div>
                    @enderror

                        <div class="form-group">
                            Note
                            <textarea class="form-control form-control-sm" name="note" type="textarea" rows="4" placeholder="-- note --"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <button type="submit" class="btn bg-success" style="width: 200px;">
                            <i class="mr-1 fas fa-save"></i>
                            Save
                        </button>
                        <a href="{{ route('supplier_index') }}" class="btn bg-primary" style="width: 200px;">
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
@extends('layouts/hotel_linen/master')

@section('title', 'Create Hotel')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Hotel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Create Hotel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form action="{{ route('hotel_create_save') }}" method="POST" enctype="multipart/form-data">
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
                            Hotel Code
                            <input class="form-control form-control-sm" name="hotel_code" type="text" placeholder="-- Hotel Code --">
                        </div>
                        @error('hotel_code')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Hotel Name
                            <input class="form-control form-control-sm" name="hotel_name" type="text" placeholder="-- Hotel Name --">
                        </div>    
                        @error('hotel_name')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Laundry Plant
                            <select class="selectpicker form-control form-control-sm" name="laundry_plant" id="laundry_plant" data-live-search="true">
                            <option>-- Select Laundry Plant --</option>
                                @foreach($laundry_plant as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        </div>
                        @error('laundry_plant')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                          Address
                          <textarea class="form-control form-control-sm" name="address" type="textarea" rows="4" placeholder="-- Address --"></textarea>
                      </div>
     
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            Contact name
                            <input class="form-control form-control-sm" name="contact_name" type="text" placeholder="-- contact name --">
                        </div>
                        @error('contact_name')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

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
                      <textarea class="form-control form-control-sm" name="note" type="textarea" rows="4" placeholder="-- Description --"></textarea>
                  </div>

                    </div>

                    <div class="col-sm-12 col-md-6">
                        <button type="submit" class="btn bg-success" style="width: 200px;">
                            <i class="mr-1 fas fa-save"></i>
                            Save
                        </button>
                        <a href="{{ route('hotel_index') }}" class="btn bg-primary" style="width: 200px;">
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
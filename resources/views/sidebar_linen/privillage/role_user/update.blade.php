@extends('layouts/hotel_linen/master')

@section('title', 'Update Role User')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Role User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Update Role User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form action="{{ route('role_user_update_save', $data->id) }}" method="POST" enctype="multipart/form-data">
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
                            Role user
                            <input class="form-control form-control-sm" name="role" type="text" placeholder="-- role user --" value="{{ $data->role }}">
                        </div>    
                        @error('role')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Description
                            <input class="form-control form-control-sm" name="description" type="text" placeholder="-- description --" value="{{ $data->description }}">
                        </div>
                        @error('description')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Role type
                            <select class="selectpicker form-control form-control-sm" name="role_type" id="role_type" data-live-search="true">
                                @foreach($role_type as $item)
                                    <option value="{{ $item->id }}"
                                        @if($data->id_jabatan == $item->id)
                                            {{'selected="selected"'}}
                                        @endif
                                        >
                                        {{ $item->nama_jabatan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('role_type')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                        
                    </div>
                    <div class="col-sm-12 col-md-6">

                    </div>

                    <div class="col-sm-12 col-md-6">
                        <button type="submit" class="btn bg-success" style="width: 200px;">
                            <i class="mr-1 fas fa-save"></i>
                            Save
                        </button>
                        <a href="{{ route('role_user_index') }}" class="btn bg-primary" style="width: 200px;">
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
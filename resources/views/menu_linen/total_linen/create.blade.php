@extends('layouts/hotel_linen/master')

@section('title', 'Create Linen')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Linen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Create Linen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form action="{{ route('linen_create_save') }}" method="POST" enctype="multipart/form-data">
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
                            Tag ID
                            <input class="form-control form-control-sm" name="tag_id" type="text" placeholder="-- tag ID --">
                        </div>    
                        @error('tag_id')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                          Template
                          <select class="selectpicker form-control form-control-sm" name="template" id="template" data-live-search="true">
                          <option>-- Select Template --</option>
                              {{-- @foreach($template as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach --}}
                      </select>
                      </div>
                      @error('template')
                      <div class="alert alert-danger" role="alert">{{$message}}</div>
                      @enderror

                        <div class="form-group">
                            Linen Name
                            <input class="form-control form-control-sm" name="linen_name" type="text" placeholder="-- linen name --">
                        </div>
                        @error('linen_name')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Size
                            <input class="form-control form-control-sm" name="size" type="text" placeholder="-- Size --">
                        </div>
                        @error('size')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Price
                            <input class="form-control form-control-sm" name="price" type="text" placeholder="-- price --">
                        </div>
                        @error('price')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                          Color
                          <input class="form-control form-control-sm" name="color" type="date" placeholder="-- color --">
                        </div>    
                        @error('color')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                          Supplier
                          <input class="form-control form-control-sm" name="supplier" type="text" placeholder="-- supplier --">
                        </div>
                        @error('supplier')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                          Serial number
                          <input class="form-control form-control-sm" name="serial_number" type="text" placeholder="-- serial number --">
                        </div>
                        @error('serial_number')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                        
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            Year
                            <input class="form-control form-control-sm" name="year" type="date" placeholder="-- year --">
                        </div>    
                        @error('year')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                          Quarter
                          <input class="form-control form-control-sm" name="quarter" type="text" placeholder="-- quarter --">
                      </div>
                      @error('quarter')
                      <div class="alert alert-danger" role="alert">{{$message}}</div>
                      @enderror

                        <div class="form-group">
                            Linen type
                            <select class="selectpicker form-control form-control-sm" name="linen_type" id="linen_type" data-live-search="true">
                            <option>-- Select Linen type --</option>
                                {{-- @foreach($linen_type as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach --}}
                            </select>
                        </div>
                        @error('linen_type')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                          Linen category
                          <select class="selectpicker form-control form-control-sm" name="linen_category" id="linen_category" data-live-search="true">
                          <option>-- Select Linen category --</option>
                              {{-- @foreach($linen_category as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach --}}
                      </select>
                      </div>
                      @error('linen_category')
                      <div class="alert alert-danger" role="alert">{{$message}}</div>
                      @enderror

                      <div class="form-group">
                        Ownership
                        <select class="selectpicker form-control form-control-sm" name="ownership" id="ownership" data-live-search="true">
                        <option>-- Select Ownership --</option>
                            {{-- @foreach($ownership as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach --}}
                        </select>
                        </div>
                        @error('ownership')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                          Sew by
                          <select class="selectpicker form-control form-control-sm" name="sew_by" id="sew_by" data-live-search="true">
                          <option>-- Select Sew By --</option>
                              {{-- @foreach($sew_by as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach --}}
                          </select>
                          </div>
                          @error('sew_by')
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
                          Description
                          <textarea class="form-control form-control-sm" name="description" type="text" placeholder="-- description --"></textarea>
                        </div>
                        @error('description')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                    </div>

                    <div class="col-sm-12 col-md-6">
                        <button type="submit" class="btn bg-success" style="width: 200px;">
                            <i class="mr-1 fas fa-save"></i>
                            Save
                        </button>
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
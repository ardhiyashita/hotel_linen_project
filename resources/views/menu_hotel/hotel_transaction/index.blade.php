@extends('layouts/master')

@section('title', 'Transaction List')

@section('heading')
    
@endsection

@section('content')
        <!-- DataTables Example -->
        <div class="card shadow mb-4">
            <div class="card-header d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary d-flex">Hotel Trasaction</h6>
                <div class="btn-group">
                    <button type="button" id="deleteAllChecked" disabled onclick="nonAktifkan()" class="d-none d-sm-inline-block btn btn-m btn-danger shadow-sm mb-3" style="float: right;">
                        <i class="fas fa-trash-alt fa-sm text-white-50"></i>  Hapus Pilihan</button>
                    <a href="" class="d-none d-sm-inline-block btn btn-m btn-info shadow-sm mb-3 mr-2" style="float: right;">
                        + Tambah List</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                        <thead style="font-size: 12px;">
                            <tr>
                                <th><input type="checkbox" id="head_cb"></th>
                                <th class="border-top-0" style="text-align: center">No</th>
                                <th class="border-top-0" style="text-align: center">Train Code</th>
                                <th class="border-top-0" style="text-align: center">Train Date</th>
                                <th class="border-top-0" style="text-align: center">Hotel Code</th>
                                <th class="border-top-0" style="text-align: center">Hotel Name</th>
                                <th class="border-top-0" style="text-align: center">Clean</th>
                                <th class="border-top-0" style="text-align: center">Soil</th>
                                <th class="border-top-0" style="text-align: center">Stain</th>
                                <th class="border-top-0" style="text-align: center">Torn</th>
                                <th class="border-top-0" style="text-align: center">Train Status</th>
                                <th class="border-top-0" style="text-align: center">Delivery Status</th>
                                <th class="border-top-0" style="text-align: center">Discard</th>
                                <th class="border-top-0" style="text-align: center">Treatment</th>
                                <th class="border-top-0" style="text-align: center">Request Linen</th>
                                <th class="border-top-0" style="text-align: center">Driver</th>
                                <th class="border-top-0" style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tfoot style="font-size: 12px;">
                            <tr>
                                <th></th>
                                <th class="border-top-0" style="text-align: center">No</th>
                                <th class="border-top-0" style="text-align: center">Train Code</th>
                                <th class="border-top-0" style="text-align: center">Train Date</th>
                                <th class="border-top-0" style="text-align: center">Hotel Code</th>
                                <th class="border-top-0" style="text-align: center">Hotel Name</th>
                                <th class="border-top-0" style="text-align: center">Clean</th>
                                <th class="border-top-0" style="text-align: center">Soil</th>
                                <th class="border-top-0" style="text-align: center">Stain</th>
                                <th class="border-top-0" style="text-align: center">Torn</th>
                                <th class="border-top-0" style="text-align: center">Train Status</th>
                                <th class="border-top-0" style="text-align: center">Delivery Status</th>
                                <th class="border-top-0" style="text-align: center">Discard</th>
                                <th class="border-top-0" style="text-align: center">Treatment</th>
                                <th class="border-top-0" style="text-align: center">Request Linen</th>
                                <th class="border-top-0" style="text-align: center">Driver</th>
                                <th class="border-top-0" style="text-align: center">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($data2 as $val)
                            <tr>
                                <td><input type="checkbox" class="cb_child" value=""></td>
                                <td>{{ $data2->train_code}}</td>
                                <td>{{ $data2->train_date }}</td>
                                <td>{{ $data2->hotel_code }}</td>
                                <td>{{ $data2->hotel_name }}</td>
                                <td>{{ $data2->clean }}</td>
                                <td>{{ $data2->soil }}</td>
                                <td>{{ $data2->stain }}</td>
                                <td>{{ $data2->torn }}</td>
                                <td>{{ $data2->train_status }}</td>
                                <td>{{ $data2->delivery_status }}</td>
                                <td>{{ $data2->discard }}</td>
                                <td>{{ $data2->treatment }}</td>
                                <td>{{ $data2->request_linen }}</td>
                                <td>{{ $data2->driver }}</td>
                                <td width="160px">
                                    <form action="" method="POST">
                                        <div class="" role="group" aria-label="Basic example">
                                        @csrf
                                        <a type="button" class="btn btn-success" href="">Edit</a>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('apakah kamu yakin menghapus data ini ?')">Hapus</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
            </div>
            </div>
        </div>

        @section('js')
        <script src="{{ asset('assets/datatables/datatables.min.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#table').DataTable();
            });

            let isChecked = 0;
            const table = $('#table').DataTable({
                "processing": true,
                "order": [[ 1, 'asc']],     
                    

                columnDefs: [
                {
                    "targets": 0,
                    "class":"text-nowrap",
                    "sortable": false,
                },
                {
                    "targets": 10,
                    "sortable": false,
                },
                ]
            })

            // JQUERY DETECT CHECKED CHECKBOX
            // $(this)->elemen yang dimaksud untuk diambil atau digunakan
            $("#head_cb").on('click', function(){
                var isChecked = $('#head_cb').prop('checked')
                $('.cb_child').prop('checked', isChecked)
                
                // STEP PER STEP
                // if($(this).prop('checked') == true){
                //     $('.cb_child').prop('checked', true)
                // }else{
                //     $('.cb_child').prop('checked', false)
                // }

                $('#deleteAllChecked').prop('disabled', !isChecked)
            })

            $('#table tbody').on('click', '.cb_child', function(){                
                if($(this).prop('checked') != true){
                    $('#head_cb').prop('checked', false)
                }

                let allChecked = $('#table tbody .cb_child:checked')
                let button_non_aktif_status = (allChecked.length>0)
                $('#deleteAllChecked').prop('disabled', !button_non_aktif_status)
            })

            function nonAktifkan(){
                let checkbox_terpilih = $('#table tbody .cb_child:checked')
                let all_ids = []
                $.each(checkbox_terpilih, function(index,elm){
                    all_ids.push(elm.value);
                })
                $.ajax({
                    url: "",
                    method: 'post',
                    data: {ids:all_ids},
                    success:function(){
                        location.reload(true);
                    }
                })
            }
        </script>
            
        @endsection
@endsection
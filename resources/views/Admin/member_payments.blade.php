@extends('Admin.layout')
@section('admin.content')

<?php
$mempays=DB::table('member_payment')
            ->get();
            ?>
        <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                        </div>
                                        <h4 class="card-title">Members</h4>
                                    
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                            <tr>
                                                <th>Scheme</th>
                                                <th>Book</th>
                                                <th>ID NO</th>
                                                <th>Policy Number</th>
                                                <th>EasyPay NO</th>
                                                <th>Full Name</th>
                                                <th>Cover Date</th>
                                                <th>Policy Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>

                                            @foreach( $mempays as $mempay)

                                            
                                            <tr>
                                          
                                                <td>{{$mempay->scheme}}</td>
                                                <td>{{$mempay->book}}</td>
                                                <td>{{$mempay->id_number}}</td>
                                                <td>{{$mempay->policy_number}}</td>
                                                <td>{{$mempay->easypay_number}}</td>
                                                <td>{{$mempay->full_name}}</td>
                                                <td>{{$mempay->cover_date}}</td>
                                                <td>Active</td>
                                                <td>
                                                <button type="button" class="btn btn-success waves-effect waves-light">Make Payments</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
               
            </div>
            <!-- end main content-->

    

@endsection
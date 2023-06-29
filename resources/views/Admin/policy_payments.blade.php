@extends('Admin.layout')
@section('admin.content')
        <!-- Start right Content here -->
            <!-- ============================================================== -->

            <?php
                    $polpayments=DB::table('member_payment')
                            ->get();
            ?>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                        </div>
                                        <h4 class="card-title">Member Payments</h4>
                                    
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                            <tr>
                                                <th>Policy Number</th>
                                                <th>ID Number</th>
                                                <th>Member</th>
                                                <th>EasyPay Number</th>
                                                <th>Cover Date</th>
                                                <th>Policy Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                                @foreach($polpayments as $polpayment)
                                            <tr>
                                                <td>{{$polpayment->policy_number}}</td>
                                                <td>{{$polpayment->id_number}}</td>
                                                <td>{{$polpayment->member}}</td>
                                                <td>{{$polpayment->easypay_number}}</td>
                                                <td>{{$polpayment->cover_date}}</td>
                                                <td>{{$polpayment->policy_status}}</td>
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
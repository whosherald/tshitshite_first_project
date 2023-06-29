@extends('Admin.layout')
@section('admin.content')
        <!-- Start right Content here -->
            <!-- ============================================================== -->
            <?php
                $otherpayments=DB::table('other_payment')
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
                                        <h4 class="card-title">Members</h4>
                                    
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                            <tr>
                                                <th>Policy NO</th>
                                                <th>ID  NO</th>
                                                <th>Member</th>
                                                <th>EasyPay No</th>
                                                <th>Cover Date</th>
                                                <th>Policy Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>

                                            @foreach($otherpayments as $otherpaymen)
                                            <tr>
                                                <td>{{$otherpaymen->policy_number}}</td>
                                                <td>{{$otherpaymen->id_number}}</td>
                                                <td>{{$otherpaymen->member}}</td>
                                                <td>{{$otherpaymen->easypay_no}}</td>
                                                <td>{{$otherpaymen->cover_date}}</td>
                                                <td>{{$otherpaymen->policy_status}}</td>
                                                
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
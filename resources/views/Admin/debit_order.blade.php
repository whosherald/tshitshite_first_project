@extends('Admin.layout')
@section('admin.content')
        <!-- Start right Content here -->
            <!-- ============================================================== -->

            <?php
                $debitorders=DB::table('debit_order')
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
                                        <h4 class="card-title">Debit Order Batches</h4>
                                    
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                            <tr>
                                                <th>Debit Batch</th>
                                                <th>Action Date</th>
                                                <th>Service Type</th>
                                                <th>Batch Name</th>
                                                <th>Volume</th>
                                                <th>Amount</th>
                                                <th>UnPaid Value</th>
                                                <th>UnPaid Volumes</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>

                                            @foreach($debitorders as  $debitorder)
                                            <tr>
                                                <td>{{$debitorder->debit_batch}}</td>
                                                <td>{{$debitorder->action_date}}</td>
                                                <td>{{$debitorder->service_type}}</td>
                                                <td>{{$debitorder->batch_name}}</td>
                                                <td>{{$debitorder->volume}}</td>
                                                <td>{{$debitorder->amount}}</td>
                                                <td>{{$debitorder->unpaid_value}}</td>
                                                <td>{{$debitorder->unpaid_volumes}}</td>
                                                <td>Active</td>
                                                <td>
                                                <button type="button" class="btn btn-secondary waves-effect waves-light">Download</button>
                                                <button type="button" class="btn btn-primary waves-effect waves-light">View</button>
                                                <button type="button" class="btn btn-success waves-effect waves-light">Authorize</button>
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
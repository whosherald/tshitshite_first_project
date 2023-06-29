@extends('Admin.layout')
@section('admin.content')
        <!-- Start right Content here -->
            <!-- ============================================================== -->
            <?php
                $gpayments=DB::table('group_payment')
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
                                        <h4 class="card-title">Group List</h4>
                                    
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                                
                                            <tr>
                                                <th>Group name</th>
                                                <th>Modified user</th>
                                                <th>Modified Date</th>
                                               
                                                
                                                
                                                
                                                
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>

                                            @foreach($gpayments as $gpayment)
                                            <tr>
                                                <td>{{$gpayment->group_name}}</td>
                                                <td>{{$gpayment->modified_user}}</td>
                                                <td>{{$gpayment->modified_date}}</td>
                                                
                                                
                                                
                                                
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
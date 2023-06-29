@extends('Admin.layout')
@section('admin.content')

      <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <?php
                $admembers=DB::table('applications')
                            ->get();
            ?>
            
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        
                                            
                                            
                                            
                                            
                                            
                                                <!-- <div class="invalid-feedback">
                                                    Please select a valid state.
                                                </div> -->
                                            
                                            
                                           
                                        
                                        <!-- <h4 class="card-title">Find Member</h4> -->
                                 

                                        
                                        <div class="form-group">
                                            <div>
                                            <!-- <input type="text" class="form-controller" id="search" name="search"></input> -->

                                            </div>
                                        </div>

                                        <style>
                                        
                                        .dataTables_wrapper .dataTables_paginate .paginate_button
                                            {
                                                padding:0px !important;
                                                margin:0px !important;
                                            }
                                            .table-secondary {
                                                            bs-table-bg: #04316a;
                                                            bs-table-striped-bg: #226bdc;
                                                            bs-table-striped-color: #226bdc;
                                                            bs-table-active-bg: #cbccce;
                                                            bs-table-active-color: #fff;
                                                            bs-table-hover-bg: #d1d2d4;
                                                            bs-table-hover-color: #000;
                                                            color: #000;
                                                            border-color: #cbccce;
                                            }
                                            .table>:not(:last-child)>:last-child>*{

                                                 background-color:#ddd; ! important;
                                            }

                                            .btn-outline-info {
                                                    color: #3bc3e9;
                                                    border-color: #3bc3e9;
                                                }
                                                .btn-outline-danger {
                                                        color: #ea553d;
                                                        border-color: #ea553d;
                                                    }
                                            
                                        </style>

                                        
                                    
                                        <table id="datatable" class="table table-secondary table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                            <tr>
                                                <th>Policy Number</th>
                                                <th>ID Number</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>                                               
                                                <th>Email Address</th>
                                                <th>Cellphone Number</th>
                                                <th>Branch Name</th>
                                                <th>Policy Status</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>

                                            <tbody class="alldata">
                                            
                                                @foreach ($admembers as $admembers)
                                            <tr>
                                                <td>{{$admembers->policynumber}}</td>
                                                <td>{{$admembers->id_number}}</td>
                                                <td>{{$admembers->first_name}}</td>
                                                <td>{{$admembers->last_name}}</td>
                                                <td>{{$admembers->email_address}}</td>
                                                <td>{{$admembers->cellphone_number}}</td>
                                                <td>{{$admembers->branch_name}}</td>
                                                <td>{{$admembers->policy_status}}</td>
                                                
                                                <td style="width: 100px">
                                                            <a class="btn btn-outline-info btn-sm edit"  href="{{('/noble/'.$admembers->tbl_id)}}">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            <a class="btn btn-outline-danger btn-sm edit" href="{{('/delete/'.$admembers->tbl_id)}}">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                            
                                                </td>
                                            </tr>

                                            @endforeach

                                            

                                            </tbody>
                                            
                                            <tbody id="Content" class="searchdata">

                                            </tbody>
                                        </table>
                                        <script type="text/javascript">
                                            $('#search').on('keyup',function(){
                                            $value=$(this).val();
                                            $.ajax({
                                            type : 'get',
                                            url : '{{URL::to('search')}}',

                                            data:{'search':$value},
                                            success:function(data){
                                            $('tbody').html(data);
                                            }
                                            });
                                            })
                                        </script>
                                        
                                            <script type="text/javascript">
                                                     $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
                                            </script>


                                        

                                        <!-- <script type="text/javascript">

                                                $('#search').on('keyup',function()
                                                {
                                                    $value=$(this).val();
                                                        
                                                    if($value)
                                                    {

                                                        $('.alldata').hide();
                                                        $('.showdata').show();

                                                    }
                                                    else
                                                    {
                                                        $('.alldata').show();
                                                        $('.showdata').hide();
                                                    }
                                                    $.ajax({

                                                        type:'get',
                                                        url:'{{URL::to('search')}}',
                                                        data:{'search':$value},

                                                        success:function(data)
                                                        {
                                                            console.log(data);
                                                            $('#Content').html(data);
                                                        }

                                                    });
                                                })
                                        </script> -->

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
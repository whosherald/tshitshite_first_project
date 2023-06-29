


@extends('Admin.layout')
@section('admin.content')
        <!-- Start right Content here -->
            <!-- ============================================================== -->
              <!-- ============================================================== -->

              <?php
   $cards=DB::table('policy_details') 
   ->where('policy_status','=','Lapsed')  
   ->get();
?>
<form id="form-horizontal" class="form-horizontal form-wizard-wrapper" action="{{ url('/save-applications')}}" method="POST">
@csrf
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">
        <div class="row" style="margin-top:-4rem">
            <div class="col-sm-12">
              
                                                 

                                                <style>
                                                       
                                                        
                                                             .table-secondary 
                                                            {
                                                               --bs-table-bg: #e2e3e5;
                                                               --bs-table-striped-bg: #d7d8da;
                                                               --bs-table-striped-color: #000;
                                                               --bs-table-active-bg: #cbccce;
                                                               --bs-table-active-color: #fff;
                                                               --bs-table-hover-bg: #d1d2d4;
                                                               --bs-table-hover-color: #000;
                                                               color: #000;
                                                               border-color: #cbccce;
                                                           }
                                                           .table>:not(:last-child)>:last-child>*
                                                           {

                                                               background-color:#555659; ! important;
                                                           }

                                                               .btn-outline-danger 
                                                           {
                                                               color: #ea553d;
                                                               border-color: #ea553d;
                                                           }
                                                           .btn-outline-info 
                                                           {
                                                               color: #3bc3e9;
                                                               border-color: #3bc3e9;
                                                           }

                                                           .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
                                                                border: 1px solid #ddd;
                                                            }
                                                            .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
                                                                z-index: 3;
                                                                color: #fff;
                                                                cursor: default;
                                                                background-color: #337ab7;
                                                                border-color: #337ab7;
                                                            }
                                                       </style>
                        
                               
                    </div>
                    
                <!-- </div>
                                      
                <label for="txt" class="col-lg-1 col-form-label"  style="margin-left:940px !important">search</label>
                        
                        <input id="txt" name="search" type="text" class="">
                <div class="row g-3" style="margin-top:10px !important" >
                                                        -->
                
                           
                                <div class="col"style="margin-top:20px;padding:2rem">
                                    <p class="text-muted"></p>
                                        
                                    <a href="{{('/dashboard')}}" type="button" class="btn btn-primary waves-effect waves-light" id="sa-success" >Back</a>
                                    
                                </div>
                            </div>
                            
                                <table id="datatable" class="table table-secondary table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                    <thead>
                                        <tr>
                                            <th>branch name</th>
                                            <th>product type</th>                        
                                            <th>start date</th>
                                            <th>policy cover date</th>
                                            <th>policy status</th>
                                        </tr>
                                    </thead>
                                            <tbody>
                                                   
                                            @foreach($cards as $card)
                                        <tr>
                                
                                            <td>{{$card->branchname}}</td>
                                            <td>{{$card->product_type}}</td>
                                            <td>{{$card->policy_start_date}}</td>
                                            <td>{{$card->cover_date}}</td>
                                            <td style="color:#109618">{{$card->policy_status}}</td>
                                            
                                        </tr>
                                            @endforeach
                                            </tbody>

                                </table>
            
        </div>
        
        
    </div>
    
</div>




</div>
</form>
@endsection

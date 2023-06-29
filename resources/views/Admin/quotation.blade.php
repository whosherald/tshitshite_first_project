@extends('Admin.layout')
@section('admin.content')


  <!-- ============================================================== -->

 
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                     <div class="row">
                         <div class="col-lg-12">
                             <div class="card">
                             <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                                <fieldset>
                                                    <div class="row">
                                                    
                                                    </div>
                                                    <div class="row">
                                                    
                                                        
                                                    </div>
                                                    
                                                    <div class="row">
                                                    <div class="card-tittle" style="background-color:#67a8e4; height:50px; align:center !important; margin-bottom:20px;border-radius: 10px 10px 10px 10px !important;box-shadow: 2px 5px 10px #888888;border: 1px solid;">
                                                    <h4 style="margin-top:15px !important; margin-left:40% !important;"> QUOTATION CONTACT INFO</h4>
                                                    </div>

                                                    <hr>

                                                    <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" action="quotation" method="POST">
                                                         @csrf
                                                         <fieldset>
                                                         
                                                   
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">title</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="title" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">physical address</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="physical_address" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">first name</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="first_name" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">street address</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="str_address" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">last name</label>
                                                                <div class="col-lg-9">
                                                               <input id="txtCityBilling" name="last_name" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">town or city</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="town_city" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">quotation_status</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="quotation_status" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">cell number</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="cell_number" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">quotation_date</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="quotation_date" type="date" class="form-control">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">province</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="province" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">tellphone number</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="tellphone_number" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">code</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="code" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                          
                                                        </div>
                                                        <div>
                                                        <div id="liveAlertPlaceholder" class="button-items" style="margin-top:20px">                   
                                        <div  class="button-items">
                                        <button  type="submit" class="btn btn-success waves-effect waves-light"style="border-radius: 4px;padding: 8px 15px;color: #fff;}">create quotation </button>
                                        
                                        <!-- <button type="button" class="btn btn-success waves-effect waves-light">select services</button>
                                        <button type="button" class="btn btn-success waves-effect waves-light">clear</button> -->
                                        </div>
                                                       
                                        <hr>       
                                                </fieldset>
                                            
                                            
                                                <div>
                                                        <h4 class="title"> quotation list</h4>
                                                        </div>

                                                        <?php
                                                                $quotations=DB::table('quotation')
                                                                            ->get();
                                                        ?>

                                                        <style>
                                                       
                                                        
                                                        .table-secondary {
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
                                                        </style>
                                                    <div class="card-body">
                                                    
                                                       
                                                        <div class="row g-3" style="margin-top:10px !important" >
                                                        
                                                    
                                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                                            <thead>
                                                            <tr>
                                                                <th>first name</th>
                                                                <th>last name</th>
                                                                <th>Cell number</th>
                                                                <th>quotation date</th>
                                                                <th>town/city</th>
                                                                <th>quotation status</th>
                                                                <th>Actions</th>
                                                                
                                                                
                                                            </tr>
                                                            </thead>


                                                            <tbody>
                                                            @foreach( $quotations as $quotation)
                                                            <tr>
                                                                <td>{{$quotation->first_name}}</td>
                                                                <td>{{$quotation->last_name}}</td>
                                                                <td>{{$quotation->cell_number}}</td>
                                                                <td>{{$quotation->quotation_date}}</td>
                                                                <td>{{$quotation->town_city}}</td>
                                                                <td>{{$quotation->quotation_status}}</td>
                                                                <td style="width: 100px">
                                                            <a class="btn btn-outline-info btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            
                                                            <a class="btn btn-outline-danger btn-sm delete" href="{{('/delete-quotation/'.$quotation->quotation_id)}}" >
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </td>
                                                            </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                
                                             </div>
                                            </div>



                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div> 
        </fieldset>  
        </form>            
@endsection
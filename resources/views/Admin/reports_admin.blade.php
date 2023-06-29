@extends('Admin.layout')
@section('admin.content')




   <!-- ============================================================== -->
   <div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                <div class="card-tittle" style="background-color:#67a8e4; height:50px; align:center !important;">
               <h4 style="margin-top:10px !important; margin-left:10px !important;"> Generate Reports</h4>
               
            </div>
                    <div class="card-body">
                        <div>
                            <h5>Generate  Report by Selecting Reference</h5>
                            
                        </div>
                        <hr>
                                <fieldset>
                                          
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">report type</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="report_type" class="form-select">
                                                                <option  readonly Selected=" "> choose report type</option>
                                                                    <option value="">Admin</option>
                                                                  
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtLastNameBilling" class="col-lg-3 col-form-label">report</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="report" class="form-select">
                                                            <option  readonly Selected=" "> Select report</option>
                                                                    <option value="">Select Report</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                 
                                                    <div>
                                                        <hr class="line1">
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                <div class="card-tittle" style="background-color:#67a8e4; height:50px; align:center !important; margin-bottom:20px;">
                                                <h4 style="margin-top:10px !important; margin-left:10px !important;"> Filter Reports</h4>
                                                 </div>

                                        
                                                <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">date from</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="date_from" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">date to</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="dateto" type="date_to" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">branch name</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="branch_name" class="form-select">
                                                            <option  readonly Selected=" "> Select branch name</option>
                                                                    <option value="">Select Report</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">group</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="group" class="form-select">
                                                            <option  readonly Selected=" "> Select group</option>
                                                                    <option value="">Select Report</option>
                                                                    
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">agent</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="agent" class="form-select">
                                                            <option  readonly Selected=" "> Select agent</option>
                                                                    <option value="">Select Report</option>
                                                                    
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">initials</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="initials" class="form-select">
                                                            <option  readonly Selected=" "> Initials</option>
                                                                    <option value="">Select Report</option>
                                                                    
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">payment type</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="payment_type" class="form-select">
                                                            <option  readonly Selected=" "> payment type</option>
                                                                    <option value="">Select Report</option>
                                                                    
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">policy status</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="policy_status" class="form-select">
                                                            <option  readonly Selected=" "> policy status</option>
                                                                    <option value="">Select Report</option>
                                                                    
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div>
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">report export type</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="report_export_type" class="form-select">
                                                                <option  readonly Selected=" "> report type</option>
                                                                    <option value="">Excel</option>
                                                                    <option value="">PDF</option>
                                                                    <option value="">Word</option>
                                                                  
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtLastNameBilling" class="col-lg-3 col-form-label">send email</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="email" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <button type="button" class="btn btn-blue-grey waves-effect waves-light" style ="width:150px !important; float:right !important; margin-top: 20px !important">Generate Report</button>
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

@endsection
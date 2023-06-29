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
                                                            <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Report Type</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="gender" class="form-select">
                                                                <option  readonly Selected=" "> choose report type</option>
                                                                    <option value="">duplicate report</option>
                                                                  
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Report</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="gender" class="form-select">
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
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Date from</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="policy_number" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Date to</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="txtCityBilling" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Branch Name</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="gender" class="form-select">
                                                            <option  readonly Selected=" "> Select branch name</option>
                                                                    <option value="">Select Report</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Group</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="gender" class="form-select">
                                                            <option  readonly Selected=" "> Select group</option>
                                                                    <option value="">Select Report</option>
                                                                    
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Agent</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="gender" class="form-select">
                                                            <option  readonly Selected=" "> Select agent</option>
                                                                    <option value="">Select Report</option>
                                                                    
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Initials</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="gender" class="form-select">
                                                            <option  readonly Selected=" "> Initials</option>
                                                                    <option value="">Select Report</option>
                                                                    
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Payment Type</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="gender" class="form-select">
                                                            <option  readonly Selected=" "> Payment Type</option>
                                                                    <option value="">Select Report</option>
                                                                    
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Policy Status</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="gender" class="form-select">
                                                            <option  readonly Selected=" "> Policy Status</option>
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
                                                            <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Report export type</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="gender" class="form-select">
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
                                                            <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Send Email</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="txtCityBilling" type="text" class="form-control">
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
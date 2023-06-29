<!doctype html>
<html lang="en">
    
<!-- Mirrored from themesbrand.com/admiria-multi/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 09:05:26 GMT -->
    <head>
    
        <meta charset="utf-8">
        <title>TSHITSHITHE |MEMBER CLAIM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
    
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    
    </head>

    <body data-sidebar="dark">

    

        <!-- Loader -->
            <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="#" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo.png" alt=""  height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="#" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-light.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="36">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <div class="d-none d-sm-block ms-2">
                            <h4 class="page-title">Member claim</h4>
                        </div>
                    </div>

                    <!-- Search input -->
                    <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input form-control" placeholder="Search">
                            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                <i class="mdi mdi-close-circle"></i>
                            </a>
                        </div>
                    </div>

                    
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Main</li>


                                    <li>
                                    <a href="{{ url('/dashboard') }}" class="waves-effect">
                                          
                                            <i class="mdi mdi-view-dashboard"></i>
                                            <span> Dashboard </span>
                                        </a>
                                    </li>   
                         </li>
                    </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Member Claim</h4>
                                     <style>

                                        .wizard>.steps a, .wizard>.steps a:active, .wizard>.steps a:hover{
                                            border-radius: 10px 10px 10px 10px !important;
                                            border: 1px solid;
                                            padding: 10px;
                                            box-shadow: 2px 5px 10px #888888;
                                                }
                                     </style>

                                        <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" action="{{ url('/save-applications')}}" method="post">
                                            @csrf
                                            <h3>Claims Details</h3>
                                            <hr>
                                            
                                        <fieldset>
                                            <div class="page-content">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="card">
                                                                        
                                                             <div class="card-body">
                                                    <div>
                                                                             
                                                </div>
                               
                                        <fieldset>
                                                        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card"style="margin-top:-50px !important;">
                    <div class="card-tittle" style="background-color:#67a8e4; height:50px; align:center !important;margin-top:-90px !important;border-radius: 10px 10px 10px 10px !important;box-shadow: 2px 5px 10px #888888;border: 1px solid;">
                    <h4 style="margin-top:10px !important; margin-left:40% !important;"> CLAIMS DETAILS</h4>
                     </div>
                    <div class="card-body" >
                        <div>
                        <h6>Member</h6> 
                        </div>
                        <hr>
                <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" action="{{ url('/save-applications')}}" method="POST">
                        @csrf
                    <fieldset>                 
                        <div class="row">
                            <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label name="claiming" class="container">Claiming for member
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                        </label>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label name="apply" class="container">Apply waiting period
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                        </label>
                                    </div>
                            </div>
                        </div>
                        <style>
                            .element.style {
                                background-color: #67a8e4;
                                height: 50px;
                                align: center !important;
                                margin-top: -90px !important;

                                border-radius: 10px 10px 10px 10px !important;
                                            border: 1px solid;
                                            padding: 10px;
                                            box-shadow: 2px 5px 10px #888888;

                        }
                        </style>
                        
                        <hr>
                             
                                        <div class="row">
                                                  
                                            </div>
                                                <div>
                                                    <h6>Claim Details</h6> 
                                                </div>
                                                <hr>
                                            <div class="row">
                                                 
                                                
                                                </div>
                                                
                                                <div class="row">
                                                                                                                                                                                                                                                                                                               
                                                    <div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">claim date</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="claim_date" type="date" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">claim number</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="claim_number" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">cause of death</label>
                                                            <div class="col-lg-9">
                                                               
                                                            <input id="txtCityBilling" name="cause_death" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Claim Notes</label>
                                                            <div class="col-lg-9">
                                                               
                                                            
                                                                <textarea  name="notes"required class="form-control" rows="5"></textarea>
                                                                
                                                            
                                                            
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">cover amount</label>
                                                            <div class="col-lg-9">
                                                              
                                                            <input id="txtCityBilling" name="cover_amount" type="text" class="form-control"> 
                                                            </div>
                                                            <div class="col-md-6" style="margin-top:20px;">
                                                            
                                                    </div>
                                                    <div class="col-md-6" style="margin-top:20px;>
                                                            <div class="row mb-3">
                                                                <label class="container">Apply waiting period
                                                                <input name="apply_period"type="checkbox" >
                                                                <span class="checkmark"></span>
                                                                </label>
                                                            </div>



                                                            <div class="col sm-6">
                                                             <label class="form-label" style="margin-left:20px">Select Supported Document File</label>
                                                            <div>
                                                            <input id="txtCityBilling" name="documents" type="file" class="form-control">
                                                            </div>
                                                            <div class="row">
                                                                
                                                                <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label name="choose_file" class="container" style="margin-left:-120px">Bl663
                                                                            <input type="radio" >
                                                                            <span class="checkmark"></span>
                                                                            </label>
                                                                        </div>
                                                                </div>
                                                               
                                                                <div class="col-md-6">
                                                                        <div class="row mb-3">
                                                                            <label name="Certificate" class="container" style="margin-left:-120px">Death Certificate
                                                                            <input type="radio" >
                                                                            <span class="checkmark"></span>
                                                                            </label>
                                                                        </div>
                                                                </div>
                                                               
                                                       
                                                            </div>
                                                            
                                                            </div>
                                                        </div>
    
                                                    </div>
                                                </div>
                                                    <div class="col-md-6">                                                     
                                                                                                                                                                                         
                                                </div>
                                                     
                                </div>
                    
                            </div>
                                     
                                 <div class="button-items">
                                        <button type="button" class="btn btn-success waves-effect waves-light">print claim</button>                                                                      
                                        <button type="button" class="btn btn-success waves-effect waves-light">payment history</button>
                                        <button type="button" class="btn btn-success waves-effect waves-light">claim payment</button>
                                        <button type="button" class="btn btn-success waves-effect waves-light">clear</button>
                                        
                                        
                                        
                                 </div>
                                                       
                                <hr>
                           
                
                            </div>
            
                    </div>
        
        
                </div>                    
                                                                                                    

                                                  
                        
                </fieldset>
                               
            
                       
    </fieldset>
                                                   
                                            
             <h3>Claimant Details</h3>
                <fieldset>
                    <h3></h3>
                    <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-tittle" style="background-color:#67a8e4; height:50px; align:center !important;border-radius: 10px 10px 10px 10px !important;box-shadow: 2px 5px 10px #888888;border: 1px solid;">
                            <h4 style="margin-top:10px !important; margin-left:40% !important;"> CLAIMANT DETAILS</h4>
                        </div>
                            <div class="card-body">
                        
                        
                                
                                                <div class="row">
                                                  
                                                </div>
                                                <div class="row">
                                                 
                                                    <div>
                                                        <hr class="line1">
                                                    </div>
                                                </div>
                                            <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" action="{{ url('/save-applications')}}" method="POST">
                                                @csrf

                                                <fieldset>
                                                <div class="row">
                                                

                                        
                                                <div class="col-md-6">
                                                         <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Title</label>
                                                            <div class="col-lg-9">
                                                               
                                                                <select class="form-select" name="title" id="ddlCreditCardType">
                                                                    <option value="">Choose</option>
                                                                    
                                                                    <option value="Mr" >Mr</option>
                                                                    <option value="Mrs">Mrs</option>
                                                                    <option value="Miss">Miss</option>
                                                                    <option value="Dr">Dr</option>
                                                                    <option value="Prof">Prof</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div> 
                                                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Street Address</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="street_address" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Last Name</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="last_name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Town or City</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="town_city" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">First Name</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="first_name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Province</label>
                                                            <div class="col-lg-9">
                                                               
                                                               <select class="form-select" name="province" id="ddlCreditCardType">
                                                                   <option value="">Choose</option>
                                                                   
                                                                   <option value="mpumalanga" >mpumalanga</option>
                                                                   <option value="gauteng">gauteng</option>
                                                                   <option value="limpopo">limpopo</option>
                                                                   <option value="north west">north west</option>
                                                                   <option value="free state">free state</option>
                                                                   
                                                               </select>
                                                           </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">ID Number</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="id_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Code </label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="code" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Date of Birth</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="date_of_birth" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Contact Number</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="contact_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    
                                                    </div>


                                                    
                                                </fieldset>
                                                    
                                                    <hr>
                                                <fieldset>
                                                    <div>
                                                        <h5>Beneficiary Banking Details</h5> 
                                                    </div>
                                                    <div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Bank Name</label>
                                                                <div class="col-lg-9">
                                                               
                                                                <select class="form-select"name="bank_name" id="validationCustom04" required>
                                                                    <option value="">Choose</option>
                                                                    
                                                                    <option value="Standard Bank" >Standard Bank</option>
                                                                    <option value="Captec Bank">Captec Bank</option>
                                                                    <option value="FNB Bank">FNB Bank</option>
                                                                    <option value="ABSA Bank">ABSA Bank</option>
                                                                    <option value="Nedbank">Nedbank</option>
                                                                    
                                                                </select>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Account Holder</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="acc_holder" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Bank Branch</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="bank_branch" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Account Number</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="acc_number" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Branch Code</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="branch_code" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Account Type</label>
                                                            <div class="col-lg-9">
                                                               
                                                                <select class="form-select" name="account" id="validationCustom04" required>
                                                                    <option  value="">Choose</option>
                                                                    
                                                                    <option value="Active" >Any</option>
                                                                    <option>Current/Cheque</option>
                                                                    <option>Savings</option>
                
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                    
                                                    
                                                   
                                                    
                                                </div>
                                                

                                                  
                        
                                
                               
                                    </div>
                    
                                </div>
                                      
                            <div class="button-items">
                                 <!-- <a href="{{url('/claims-details')}}" type="button" class="btn btn-success waves-effect waves-light">Back</a>
                                        

                                        <button type="button" class="btn btn-success waves-effect waves-light">Recent</button> -->
                                        
                                        
                                 </div>
                                                       
                            <hr>
                           
                
                        </div>
            
        </div>
                        
                                            </fieldset>
                                            <h3>Deceased Details</h3>
                                            <fieldset>
                                            <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-tittle" style="background-color:#67a8e4; height:50px; align:center !important;border-radius: 10px 10px 10px 10px !important;box-shadow: 2px 5px 10px #888888;border: 1px solid;">
                    <h4 style="margin-top:10px !important; margin-left:40% !important;"> DECEASED DETAILS</h4>
                     </div>
                    <div class="card-body">
                        
                                
                                         <div class="row">
                                                  
                                                </div>
                                                <div class="row">
                                                 
                                                    <div>
                                                        <hr class="line1">
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                
                                             <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" action="{{ url('/save-applications')}}" method="POST">
                                                @csrf 
                                                <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">First Name</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="first_name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Street Address</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="street_address" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Last Name</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="last_name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Town or City</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="town_city" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">ID Number</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="id_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Province</label>
                                                            <div class="col-lg-9">
                                                               
                                                               <select class="form-select" name="province" id="ddlCreditCardType">
                                                                   <option value="">Choose</option>
                                                                   
                                                                   <option value="mpumalanga" >mpumalanga</option>
                                                                   <option value="gauteng">gauteng</option>
                                                                   <option value="limpopo">limpopo</option>
                                                                   <option value="north west">north west</option>
                                                                   <option value="free state">free state</option>
                                                                   
                                                               </select>
                                                           </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Date of Birth</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="date_of_birth" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Time of Funeral </label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="time_of_funeral" type="time" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Date of death</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="date_of_death" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Cemetery</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="cemetery" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Cause of Death</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="cause_of_death" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Code</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="code" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Date of Funeral</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="date_of_funeral" type="date" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Collected From</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="collected_from" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Driver and Car</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="driver_car" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Grave No</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="grave_no" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Gender</label>
                                                    
                                                            <div class="col-lg-3">
                                                                <div class="row">
                                                                    <div class="col md-6">
                                                                        <label for="txtLastNameBilling" class="col-lg-3col-form-label">Male</label>
                                                                    </div>
                                                                    <div class="col md-3">
                                                                        <input id="txtCityBilling" name="txtCityBilling" type="radio" >
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col md-6">
                                                                        <label for="txtLastNameBilling" class="col-lg-3col-form-label">Female</label>
                                                                    </div>
                                                                    <div class="col md-3">
                                                                        <input id="txtCityBilling" name="txtCityBilling" type="radio" >
                                                                    </div>
                                                                </div>
                                                       
                                                            </div>
                                                       
                                                        </div>
                                                    </div>
                                                            
                                                            
                                                    </div>
                                                    
                                                    
                                                   
                                                    
                                                </div>
                                                

                                                  
                        
                                
                               
                    </div>
                    
                </div>
                                      
                                 <!-- <div class="button-items">
                                 <a href="{{url('/claimant-details')}}" type="button" class="btn btn-success waves-effect waves-light">Back</a>

                                        <button type="button" class="btn btn-success waves-effect waves-light">Reset</button> -->
                                        <!-- <button type="submit" class="btn btn-success waves-effect waves-light" style="margin-left:1040px">Save</button> -->
                                        
                                 <!-- </div> -->
                                 
                                                       
                <hr>
                           
                
                            </div>
            
        </div>
                                            </fieldset>
                                           <style>
                                            .wizard>.actions a, .wizard>.actions a:active, .wizard>.actions a:hover
                                             {
                                                background-color: #67a8e4;
                                                border-radius: 4px;
                                                padding: 8px 15px;
                                                color: #030714;
                                                border-radius: 4px;
                                                padding: 8px 15px;
                                                border-radius: 10px 0 10px 2px !important;
                                                box-shadow: 2px 5px 10px #888888;
                                                border: 1px solid;
                                            }
                                            .wizard>.actions .disabled a, .wizard>.actions .disabled a:active, .wizard>.actions .disabled a:hover {
                                                opacity: .65;
                                                background-color: #67a8e4;
                                                color: #01030a;
                                                cursor: not-allowed;
                                            }
                                            .wizard>.actions a, .wizard>.actions a:active, .wizard>.actions a:hover {
                                                background-color: #67a8e4;
                                                border-radius: 4px;
                                                padding: 8px 15px;
                                                color: #030714;
                                                border-radius: 4px;
                                                padding: 8px 15px;
                                                border-radius: 10px 10px 10px 10px !important;
                                                box-shadow: 2px 5px 10px #888888;
                                                border: 1px solid;
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
                                            
                                        
                                            <h3>Terms and conditions</h3>
                                            <fieldset>
                                                <div class="p-3">
                                                    <div class="">
                                                        <input type="checkbox" class="form-check-input me-2" id="customCheck1">
                                                        <label class="form-label" name="terms" for="customCheck1">I agree with the Terms and Conditions.</label>
                                                    </div>
                                                </div>  
                                                <button  type="submit" style="background-color:#67a8e4;border-radius: 4px;hieght:10px;padding: 8px 15px;border-radius: 10px 10px 10px 10px !important;box-shadow: 2px 5px 10px #888888;border: 1px solid;}">Final </button>
 
                                            </fieldset>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row end -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © TSHITSHITHE.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Tendai ICT
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>

        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0">
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="Layouts-1">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch">
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="Layouts-2">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="Layouts-3">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox"  id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>
            
            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- form wizard -->
        <script src="assets/libs/jquery-steps/build/jquery.steps.min.js"></script>

        <!-- form wizard init -->
        <script src="assets/js/pages/form-wizard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/admiria-multi/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 09:05:28 GMT -->
</html>

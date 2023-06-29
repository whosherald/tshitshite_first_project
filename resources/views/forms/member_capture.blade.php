<!doctype html>
<html lang="en">
    

    <head>
    
        <meta charset="utf-8">
        <title>TSHITSHITHE |MEMBER CAPTURE</title>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    </head>

    <?php
        $id=Session::get('id');
        $broker=DB::table('users')
            ->where('id',$id)
            ->first();

            $brokercodes=DB::table('users')
            ->where('id',$id)
            ->first();

            $year =date('Y');
            $month =date('m');
            $day =date('d');
            $today = $year . '-' . $month .'-'.$day;

           
    ?>

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
                            <h4 class="page-title">Member capture</h4>
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

                                        <h4 class="card-title">Member Capture</h4>
                                     

                                        <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" action="{{ url('/save-application')}}" method="post">
                                            @csrf
                                            <h3>Capture new member</h3>
                                            <hr>
                                            
                                            <fieldset class="tab">
                                            <h4>Sales Representative</h4>
                                            <div class="tab">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="broker-code" class="col-lg-3 col-form-label">Sales Rep Code</label>
                                                            <div class="col-lg-9">
                                                                
                                                                <select  name="brokercode" class="form-select"id="broker-code">
                                                                    
                                                                    <option value="{{$brokercodes->broker_code}}" selected>{{$brokercodes->broker_code}}</option>
                                                                  
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">    
                                                            <label for="Broker-name"class="col-lg-3 col-form-label">Sales Rep Name</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" name="brokername" id="Broker-name"class="form-control"
                                                                
                                                                    value="{{ $brokercodes->firstname. ' ' . $brokercodes->lastname }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCompanyBilling" class="col-lg-3 col-form-label">Branch Name</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCompanyBilling" name="branchname" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label">Email Address</label>
                                                            <div class="col-lg-9">
                                                                
                                                                <input type="email" name="agentcode" id="advisoremail" placeholder="Email"class="form-control"
                                                                value="{{ $broker->email }}" onchange="EmailValidation()">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label">Policy Number</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressBilling" name="policy_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label">Agent Name</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressBilling" name="agentname" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <hr class="line1">
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <h4>Main Member</h4>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Policy Number</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="policy_number" type="text" class="form-control" style="text-transform: uppercase !important; ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Title</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="gender" class="form-select">
                                                                    <option value=""></option>
                                                                    <option value="mrs">Mrs</option>
                                                                    <option value="mr">Mr</option>
                                                                    <option value="dr">Dr</option>
                                                                    <option value="miss">Miss</option>
                                                                    <option value="prof">Prof</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div > 
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Full Names</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="first_name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Surname</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="last_name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="id_number" class="col-lg-3 col-form-label">ID Number</label>
                                                            <div class="col-lg-9">
                                                                <input id="id_number" name="id_number" type="text" class="form-control" maxlength="13">
                                                                <input type="text" name="main-age" id="main-age" value="No validation took place so no age was obtained" hidden>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Initials</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="initials" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label" >Date of Birth</label>
                                                            <div class="age">
                                                                <input type="date" id="dob" name="ext_birth"  onchange="calAge()" style="height:36px" class="form-control"/>                                                                
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                        <label for="txtExpirationDate" class="col-lg-3 col-form-label" >Date of Birth</label>
                                                            <div class=" age col-lg-9">
                                                                <input type="date" id="dob" name="ext_birth" onchange="calAge()"style="height:36px" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   

                                                                                        
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="date_of_birth" class="col-lg-3 col-form-label">Age</label>
                                                            <div class="col-lg-9">
                                                                <input id="the-age" name="age" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <script>

                                                        function calAge(){
                                                            var inputage = document.getElementById("dob").value;
                                                            var currentyear = new Date().getFullYear();
                                                            var year = inputage.substring(0,4);// 2022/07/07
                                                            console.log(year)

                                                            age = currentyear-year;
                                                            console.log(age)

                                                            document.getElementById("the-age").value=age;

                                                        }

                                                    </script>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Citizenship</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="citizen" class="form-select">
                                                                <option value=""></option>
                                                                    <option value="RSA">South Africa</option>
                                                                    <option value="ZMA">Zambia</option>
                                                                    <option value="MZQ">Mozambique</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Passport Number</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="passport_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Marital Status</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="marital_status" class="form-select">
                                                                <option value=""></option>
                                                                    <option value="S">Single</option>
                                                                    <option value="M">Married</option>
                                                                    <option value="D">Divorced</option>
                                                                    <option value="W">Window</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Cellphone Number</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="cellphone_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Gender</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="gender" class="form-select">
                                                                    <option value=""></option>
                                                                    <option value="F">Female</option>
                                                                    <option value="M">Male</option>
                                                                    <option value="">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Tellphone Number</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="tellphone_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Email Address</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="email_address" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtNameCard" class="col-lg-3 col-form-label">Street Address</label>
                                                            <div class="col-lg-9">
                                                                <input id="residential_num" name="residential_num" type="text"placeholder="street address" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="ddlCreditCardType" class="col-lg-3 col-form-label">PO Box</label>
                                                            <div class="col-lg-9">
                                                            <input id="postal_pobox" name="postal_pobox" type="text" placeholder="P o Box"class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Town or City</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCreditCardNumber" name="town_city" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Province</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="postal_sub" class="form-select">
                                                                     <option value=""></option>
                                                                    <option value="gauteng">gauteng</option>
                                                                    <option value="limpopo">limpopo</option>
                                                                    <option value="free state">free state</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Street Code</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtExpirationDate" name="residential_code" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Postal Code</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtExpirationDate" name="postal_suburb" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                
            
                                                <?php
                                                    $members=DB::table('policy_details')
                                                    ->get();
                                                ?>
                                                                                                  
                                                <div>
                                                        <hr class="line1">
                                                    </div>
                                                   
                                            </div>
                                            </fieldset>
                                                   
                                            <h3>Policy details</h3>
                                            <fieldset class="tab">
                                                <h4>Policy Details</h4>
                                                <div class="tab" class="row">
                                                
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">

                                                        <?php
                                                        $plans=DB::table('products_plan')
                                                        ->get();
                                                        ?>
                                                            <label for="txtFirstNameShipping" class="col-lg-3 col-form-label">Product type</label>
                                                            <div class="col-lg-9">
                                                           
                                                                <select onChange="myplan()" id="plan_type" name="protype" style="height:36px !important;width:415px">
                                                                    
                                                                    @foreach($plans as $plan)
                                                                   
                                                                    <option id="producttype"  readonly name="product_type" value="{{ $plan->plan_type }}">{{ $plan->plan_type }}</option>  
                                                                   
                                                                    @endforeach
                                                             
                                                                </select>

                                                               
                                                            </div>
                                                        </div>
                                                    </div>

                                                                <script>
                                                                        function myplan(){
                                                                            var prod = document.getElementById("plan_type").value;

                                                                            // console.log(prod);
                                                                            
                                                                            $(document).ready(function(){
                                                                                $.ajax({
                                                                                    url : "/getproducttype",
                                                                                    type : "GET",
                                                                                    dataType : "form_data",
                                                                                    data : {'prod':prod}
                                                                                }).done(function(response){
                                                                                    console.log(response.data);
                                                                                    console.log("Product type: " + response.data['product_type']);
                                                                                    document.getElementById("prodprem").value = response.data['plan_type'];
                                                                                   
                                                                                    
                                                                                })
                                                                            })

                                                                        }
                                                                    

                                                                </script>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtLastNameShipping" class="col-lg-3 col-form-label">Policy Status</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="policy_status" class="form-select">
                                                                    <option value=""></option>
                                                                    <option value="Active">Active </option>
                                                                    <option value="Archieve">Archive</option>
                                                                    <option value="Cancelled">Cancelled</option>
                                                                    <option value="Deceased">Deceased</option>
                                                                    <option value="Deleted">Deleted</option>
                                                                    <option value="On Trial">On Trial</option>
                                                                    <option value="Lapsed">Lapsed</option>
                                                                    <option value="In Arrears">In Arrears</option>
                                                                    <option value="Lead">Lead</option>
                                                                    <option value="NTU">NTU</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCompanyShipping" class="col-lg-3 col-form-label">ID number</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCompanyShipping" name="id_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCompanyShipping" class="col-lg-3 col-form-label">Policy number</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCompanyShipping" name="Policy_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCompanyShipping" class="col-lg-3 col-form-label">Policy Start Date</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCompanyShipping"  name="policy_start_date" style="height:36px"type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Policy Inception Date</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressShipping" name="policy_inception_date" style="height:36px"type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="col-md-6">
                                                       
                                                        <div class="row mb-3">
                                                            <label for="txtCityShipping" class="col-lg-3 col-form-label">Premium</label>
                                                            <div class="col-lg-9">
                                                                <input id="prodprem" name="premium" type="text" class="form-control">
                                                               
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                       
                                                        <div class="row mb-3">
                                                            <label for="txtCityShipping" class="col-lg-3 col-form-label">Cover Amount</label>
                                                            <div class="col-lg-9">
                                                                <input id="" name="coverAmount" type="text" class="form-control">
                                                               
                                                                
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <script>

                                                        function prodplan(){
                                                            var inputage = document.getElementById("prodtype").value;
                                                            
                                                            console.log(year)

                                                            age = currentyear-year;
                                                            console.log(age)

                                                            document.getElementById("prodprem").value=age;

                                                        }

                                                        </script>


                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label">Policy Cover date</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtStateProvinceShipping" name="cover_date"style="height:36px" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label">Total Premium</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtStateProvinceShipping" name="total_preium" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label">Policy Underwritten By</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtStateProvinceShipping" name="policy_underwritten_by" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label">Cover Amount</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtStateProvinceShipping"style="margin-top:-8px" name="cover_amount" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label">Policy number</label>
                                                            <div class="col-lg-9">
                                                                
                                                                <input type="text" name="policy_agent" id="Broker-name"class="form-control">
                                                                
                                                            
                                                            </div>
                                                        </div>
                                                    </div>

                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="field[]" placeholder="Enter a value">
                                                            <button type="button" class="btn btn-danger remove-field">Remove</button>
                                                        </div>
                                                        <div id="main-form">
                                                            <div id="fields-container">
                                                                <!-- dynamically added fields will go here -->
                                                            </div>

                                                            <button type="button" id="add-field" class="btn btn-primary">Add Field</button>
                                                            <button type="submit" class="btn btn-success">Submit</button>
                                                        
                                                    </div>
                                                    
                                             </div>

                                             <script>

                                                
                                             </script>


                                             
                                                    <!-- <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label">Membership Number</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtStateProvinceShipping" name="membership_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label">Type of Income</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="type_of_income" class="form-select">
                                                                    <option value=""></option>
                                                                    <option value="Active">cash </option>
                                                                    <option value="inst-(JHB)">inst-(UCT)</option>
                                                                    <option value="inst-(KZN)">inst-(UKZN)</option>
                                                                    <option value="inst-(UJ)">inst-(UJ)</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label">Easypay Number</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtStateProvinceShipping" name="easypay_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label">Branch Name</label>
                                                            <div class="col-lg-9">                                               
                                                                <input id="txtStateProvinceShipping" name="branchname" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label">Employment Type</label>
                                                            <div class="col-lg-9">
                                                                <input id="ddlCreditCardType" name="employmenttype" class="form-control">
                                                                
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label">Source</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="Source" class="form-select">
                                                                    <option value=""></option>
                                                                    <option value="LSM101">LSM101 </option>
                                                                    <option value="LSM102">LSM102</option>
                                                                    <option value="LSM103">LSM103</option>
                                                                    <option value="LSM104">LSM104</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                
                                                
                                                
                                                    

                                            </fieldset>
                                            <h3>Capturing extended member</h3>
                                            <fieldset class="tab">
                                            <h3></h3>
                                            <div class="tab" class="row1">
                                                <div class="tab" class="row1">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtNameCard" class="col-lg-3 col-form-label">Title</label>
                                                            <div class="col-lg-9">
                                                                
                                                                    <select id="ext_title" name="ext_title" class="form-select">
                                                                        <option value="">Title</option>
                                                                        <option value="Mr">Mr</option>
                                                                        <option value="Mrs">Mrs</option>
                                                                        <option value="Dr">Dr</option>
                                                                        <option value="Prof">Prof</option>
                                                                        <option value="Adv">Adv</option>
                                                                    
                                                                    </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="ddlCreditCardType" class="col-lg-3 col-form-label">Relationship</label>
                                                            <div class="col-lg-9">
                                                                <select id="ext_relation" name="ext_relation" class="form-select">
                                                                     <option value="">select</option>
                                                                    <option value="Spouse">Spouse</option>
                                                                    <option value="child">child</option>
                                                                    <option value="father or mother">father or mother</option>
                                                                    <option value="sibling">sibling</option>
                                                                    <option value="Free extended">Free extended</option>
                                                                    
                                                                  
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">FullNames</label>
                                                            <div class="col-lg-9">
                                                                <input id="ext_first_name" name="ext_first_name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Surname</label>
                                                            <div class="col-lg-9">
                                                                <input id="ext_last_name" name="ext_last_name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">ID No</label>
                                                            <div class="col-lg-9">
                                                                <input id="ext_id" name="ext_id" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                        <label for="txtExpirationDate" class="col-lg-3 col-form-label" >Date of Birth</label>
                                                            <div class=" age col-lg-9">
                                                                <input type="date" id="dob" name="ext_dob" style="height:36px" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Cellphone</label>
                                                            <div class="col-lg-9">
                                                                <input id="ext_cell" name="ext_cell" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Email Adress</label>
                                                            <div class="col-lg-9">
                                                                <input id="ext_email" name="ext_email" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Gender</label>
                                                            <div class="col-lg-9">
                                                                <select id="ext_gender" name="ext_gender" class="form-select">
                                                                    <option value=""></option>
                                                                    <option value="F">Female</option>
                                                                    <option value="M">Male</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Initials</label>
                                                            <div class="col-lg-9">
                                                                <input id="ext_initials" name="ext_initials" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        $plans=DB::table('products_plan')
                                                        ->get();
                                                        ?>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtFirstNameShipping" class="col-lg-3 col-form-label">Product type</label>
                                                            <div class="col-lg-9">
                                                           
                                                                <select onChange="myplan()" id="plan_type" name="product_type" style="height:36px !important;width:415px">
                                                                    
                                                                    @foreach($plans as $plan)
                                                                   
                                                                    <option id="producttype"  readonly name="product_type" value="{{ $plan->plan_type }}">{{ $plan->plan_type }}</option>  
                                                                   
                                                                    @endforeach
                                                             
                                                                </select>

                                                               
                                                            </div>
                                                        </div>
                                                        
                                                     </div>
                                                     <script>
                                                                        function myplan(){
                                                                            var prod = document.getElementById("plan_type").value;

                                                                            // console.log(prod);
                                                                            
                                                                            $(document).ready(function(){
                                                                                $.ajax({
                                                                                    url : "/getproducttype",
                                                                                    type : "GET",
                                                                                    dataType : "form_data",
                                                                                    data : {'prod':prod}
                                                                                }).done(function(response){
                                                                                    console.log(response.data);
                                                                                    console.log("Product type: " + response.data['product_type']);
                                                                                    document.getElementById("prodprem").value = response.data['plan_type'];
                                                                                   
                                                                                    
                                                                                })
                                                                            })

                                                                        }
                                                                    

                                                                </script>

                                                     <div class="col-md-6">
                                                       
                                                       <div class="row mb-3">
                                                           <label for="txtCityShipping" class="col-lg-3 col-form-label">Cover Amount</label>
                                                           <div class="col-lg-9">
                                                               <input id="ext_coveramount" name="ext_coveramount" type="text" class="form-control">
                                                              
                                                               
                                                           </div>
                                                       </div>
                                                   </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Add premium</label>
                                                            <div class="col-lg-9">
                                                                <input id="ext_addprem" name="ext_addprem" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Total premium</label>
                                                            <div class="col-lg-9">
                                                                <input id="ext_totalprem" name="ext_totalprem" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="half text flexrow" style="flex-direction:row;">

                                                        <!-- <div  id= newext class="quart text flexrow" style="flex-direction:column; align-items:flex-end">
                                                            
                                                            <button class="btn btn-primary waves-effect waves-light" id="addExtMember" type="button">
                                                             Add Exteneded member
                                                            </button>
                                                        </div> -->
                                                    </div>
                                                    <!-- <div class="col-md-6" id="inputFormRow">
    <div class="col-lg-12">

    <div>
        <hr>
    </div>
 
        <div id="newRow"></div>
                    <button id="addRow" type="button" class="btn btn-info" >Added Beneficiary</button>
    </div>
    </div> -->
    

                                <div class="col-md-6" id="inputFormRow">
                                    <div class="col-lg-12">
                                        <div>
                                            <hr>
                                        </div>
                                        <div  id= "newext"></div>
                                                            
                                            <button id="addExtMember" type="button" class="btn btn-primary waves-effect waves-light"> Add Exteneded member</button>
                                                 
                                        </div>
                                         
                                    </div>
              

                                                    <div id="inputExt" class="row" style="margin-top:10px">

                                                    
                                                        <!-- script for extended member -->
                                                        <script type="text/javascript" style="margin-left:400px ! important">
                                                                // add extended member
                                                                $(document).ready(function(){

                                                                
                                                                $("#addExtMember").click(function () {



                                                                    var count=$('#newext').val();


                                                                    
                                                                    var html = '';

                                                                    
                                                                    html += '<div id="inputExt" class="row">';
                                                                    html +='<h4>Extended member </h4>';
                                                                            html += '<div class="col-md-6">';
                                                                                html += '<div class="row mb-3">';
                                                                                    
                                                                                    html += '<div class="col-lg-9">';
                                                                                        // html += '<input type="text" name="title[]" style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Enter Title:" autocomplete="off">';
                                                                                    html += '</div>';
                                                                                    html +='<select id="idtitle" name="ext_titles" class="form-select">';
                                                                                    html += '<option value="">Title</option>';
                                                                                    html += '<option value="Mr">Mr</option>';
                                                                                    html += '<option value="Mrs">Mrs</option>';
                                                                                    html += '<option value="Dr">Dr</option>';
                                                                                    html += '<option value="Prof">Prof</option>';
                                                                                    html += '<option value="Adv">Adv</option>';
                                                                    
                                                                                    html += '</select>';
                                                                                html += '</div>';
                                                                            html += '</div>';

                                                                            html += '<div class="col-md-6">';
                                                                                html += '<div class="row mb-3">';
                                                                                    
                                                                                    html += '<div class="col-lg-9">';
                                                                                        // html += '<input type="text" name="title[]"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Enter Relationship:" autocomplete="off">';
                                                                                    html += '</div>';
                                                                                    html +='<select id="idrelationship" name="ext_relationship" class="form-select">';
                                                                                    html += '<option value="">Relationship</option>';
                                                                                    html += '<option value="Spouse">Spouse</option>';
                                                                                    html += '<option value="child">child</option>';
                                                                                    html += '<option value="father or mother">father or mother</option>';
                                                                                    html += '<option value="sibling">sibling</option>';
                                                                                    html += '<option value="Free extended">Free extended</option>';
                                                                    
                                                                                    html += '</select>';
                                                                                html += '</div>';
                                                                            html += '</div>';

                                                    



                                                                            html += '<div class="col-md-6">';
                                                                                html += '<div class="row mb-3">';
                                                                                    
                                                                                    html += '<div class="col-lg-9">';
                                                                                        html += '<input id="idfullname" type="text" name="ext_fullnames"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Fullnames:" autocomplete="off">';
                                                                                    html += '</div>';
                                                                                html += '</div>';
                                                                            html += '</div>';

                                                                            html += '<div class="col-md-6">';
                                                                                html += '<div class="row mb-3">';
                                                                                    
                                                                                    html += '<div class="col-lg-9">';
                                                                                        html += '<input id="idsurname" type="text" name="ext_surnames"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder=" Surname:" autocomplete="off">';
                                                                                    html += '</div>';
                                                                                html += '</div>';
                                                                            html += '</div>';

                                                                            html += '<div class="col-md-6">';
                                                                                html += '<div class="row mb-3">';
                                                                                    
                                                                                    html += '<div class="col-lg-9">';
                                                                                        html += '<input id="idno" type="text" name="ext_id_no"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="ID NO:" autocomplete="off">';
                                                                                    html += '</div>';
                                                                                html += '</div>';
                                                                            html += '</div>';

                                                                            html += '<div class="col-md-6">';
                                                                                html += '<div class="row mb-3">';
                                                                                    
                                                                                    html += '<div class="col-lg-9">';
                                                                                        html += '<input id="iddate_birth" type="date" name="ext_date_birth"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Date of Birth:" autocomplete="off">';
                                                                                    html += '</div>';
                                                                                html += '</div>';
                                                                            html += '</div>';

                                                                            html += '<div class="col-md-6">';
                                                                                html += '<div class="row mb-3">';
                                                                                    
                                                                                    html += '<div class="col-lg-9">';
                                                                                        html += '<input id="idcellphone" type="text" name="ext_cellphone"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Cellphone:" autocomplete="off">';
                                                                                    html += '</div>';
                                                                                html += '</div>';
                                                                            html += '</div>';

                                                                            html += '<div class="col-md-6">';
                                                                                html += '<div class="row mb-3">';
                                                                                    
                                                                                    html += '<div class="col-lg-9">';
                                                                                        html += '<input id="idemails" type="text" name="ext_emails"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Email Address:" autocomplete="off">';
                                                                                    html += '</div>';
                                                                                html += '</div>';
                                                                            html += '</div>';

                                                                            html += '<div class="col-md-6">';
                                                                                html += '<div class="row mb-3">';
                                                                                    
                                                                                    html += '<div class="col-lg-9">';
                                                                                        html += '<input id="idgenders" type="text" name="ext_genders"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder=" Gender:" autocomplete="off">';
                                                                                    html += '</div>';
                                                                                html += '</div>';
                                                                            html += '</div>';

                                                                            html += '<div class="col-md-6">';
                                                                                html += '<div class="row mb-3">';
                                                                                    
                                                                                    html += '<div class="col-lg-9">';
                                                                                        html += '<input id="idprod_type" type="text" name="ext_prod_type"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder=" Product Type:" autocomplete="off">';
                                                                                    html += '</div>';
                                                                                html += '</div>';
                                                                            html += '</div>';

                                                                            html += '<div class="col-md-6">';
                                                                                html += '<div class="row mb-3">';
                                                                                    
                                                                                    html += '<div class="col-lg-9">';
                                                                                        html += '<input id="idcover_amount" type="text" name="ext_cover_amount" style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder=" Cover Amount:" autocomplete="off">';
                                                                                    html += '</div>';
                                                                                html += '</div>';
                                                                            html += '</div>';

                                                                            html += '<div class="col-md-6">';
                                                                                html += '<div class="row mb-3">';
                                                                                    
                                                                                    html += '<div class="col-lg-9">';
                                                                                        html += '<input id="idcover_amount" type="text" name="ext_premium" style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder=" Add Premium:" autocomplete="off">';
                                                                                    html += '</div>';
                                                                                html += '</div>';
                                                                            html += '</div>';

                                                                            html += '<div class="col-md-6">';
                                                                                html += '<div class="row mb-3">';
                                                                                    
                                                                                    html += '<div class="col-lg-9">';
                                                                                        html += '<input id="idtotal_premium" type="text" name="ext_total_premium" style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Total Premium:" autocomplete="off">';
                                                                                    html += '</div>';
                                                                                html += '</div>';
                                                                            html += '</div>';
                                                                            html += '<div class="input-group-append" style=" margin-left:300px">';
                                                                            html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
                                                                            html += '</div>';

                                                                            html += '<div class="input-group-append" style=" margin-left:300px">';
                                                                            html += '<button id="idadd" type="submit" class="btn btn-primary">add</button>';
                                                                            html += '</div>';

                                                                    html += '</div>';

                                                                    // <div class="input-group-append" style=" margin-left:300px">
                                                                    //         <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                                                    // </div>

                                                                    $('#newext ').append(html);
                                                                });
                                                            });

                                                                // remove row
                                                                $(document).on('click', '#removeRow', function () {
                                                                    $(this).closest('#inputExt').remove();
                                                                });

                                                                $(document).ready(function(){
                                                                $('#inputExt').submit(function(e) {
                                                                    e.preventDefault();
                                                                    $("idadd").val('adding..');
                                                                    var title = $('#idtitle').val();
                                                                    var relationship = $('#idrelationship').val();
                                                                    var fullname = $('#idfullname').val();
                                                                    var surname = $('#idsurname').val();
                                                                    var id_no =$('#idno').val();
                                                                    var date_of_birth = $('#iddate_birth').val();
                                                                    var cellphone =$('#idcellphone').val();
                                                                    var email =$('#idemails').val();
                                                                    var gender =$('#idgenders').val();
                                                                    var pro_type =$('#idprod_type').val();
                                                                    var cover_amount =$('#idcover_amount').val();
                                                                    
                                                                    var total_premium =$('#idtotal_premium').val()

                                                                
                                                                    $.ajax({
                                                                    url:"/member-capture",
                                                                    type:"get",
                                                                    data:{
                                                                        _token: $("#csrf").val(),
                                                                         type: 1,
                                                                        title:title,
                                                                        relationship:idrelationship,
                                                                        fullname:fullname,
                                                                        surname:surname,
                                                                        id_no:id_no,
                                                                        date_of_birth:date_of_birth,
                                                                        cellphone:cellphone,
                                                                        email:email,
                                                                        gender:gender,
                                                                        pro_type:pro_type,
                                                                        cover_amount:cover_amount,
                                                                        total_premium:total_premium

                                                                    },
                                                                    success:function(response)
                                                                    if(response.success){
                                                                        console(response)
                                                                    }
                                                                    });
                                                                });
                                                                    // $(this).submit('#inputExt').submit();
                                                                });
                                                            </script>



                                        <!-- add more extended member -->
                                        <!-- <script>
                                            $(document).ready(function(){
                                                $('#idadd').on('click',function(){
                                                    var title = $('#idtitle').val();
                                                    var relationship = $('#idrelationship').val();
                                                    var fullname = $('#idfullname').val();
                                                    var surname = $('#idsurname').val();
                                                    var id_no =$('#idno').val();
                                                    var date_of_birth = $('#iddate_birth').val();
                                                    var cellphone =$('#idcellphone').val();
                                                    var email =$('#idemails').val();
                                                    var gender =$('#idgenders').val();
                                                    var pro_type =$('#idprod_type').val();
                                                    var cover_amount =$('#idcover_amount').val();
                                                    
                                                    var total_premium =$('#idtotal_premium').val()

                                                   {
                                                                $.ajax({
                                                                    url:"/member-capture",
                                                                    type:"get",
                                                                    data:{
                                                                        _token: $("#csrf").val(),
                                                                         type: 1,
                                                                        title:title,
                                                                        relationship:idrelationship,
                                                                        fullname:fullname,
                                                                        surname:surname,
                                                                        id_no:id_no,
                                                                        date_of_birth:date_of_birth,
                                                                        cellphone:cellphone,
                                                                        email:email,
                                                                        gender:gender,
                                                                        pro_type:pro_type,
                                                                        cover_amount:cover_amount,
                                                                        total_premium:total_premium

                                                                    },
                                                                    success:function(result)
                                                                    {
                                                                        $('.alert').show();
                                                                        $('.alert').html(result.success);
                                                                        //$('#tbcat').append(result.row);
                                                                    }

                                                                
                                                                })
                                                            }



                                                });
                                               <div class="input-group-append" style=" margin-left:300px">
                                                                            <button id="idadd" type="button" class="btn btn-primary">add</button>
                                                                            </div>
                                            });
                                         </script> -->
                                                            



                                                <!-- <div class="col-md-6">
                                                        <button  type="submit" class="btn btn waves-effect waves-light" style="background-color:#67a8e4">save </button>
                                                </div> -->
                                                <style>
                                                    .age{
                                                        display:flex;
                                                        align-items:center;
                                                        justify-content:center;
                                                    }
                                                    input[type="date"]{
                                                        border-radius: 5px;
                                                        height:20px;
                                                        border-color:green;
                                                        outline-color:green;
                                                    }
                                              
                                                </style>
                                               
                                                    
                                               
                                                <h4>Member List</h4>

<style>
    .table>:not(:last-child)>:last-child>*{
        background-color:#555659;
    }

    

.wizard>.steps a, .wizard>.steps a:active, .wizard>.steps a:hover{
border-radius: 10px 0 10px 2px !important;
border: 1px solid;
padding: 10px;
box-shadow: 2px 5px 10px #888888;
}

.btn-outline-info {
color: #3bc3e9;
border-color: #3bc3e9;
}
.btn-outline-danger {
    color: #ea553d;
    border-color: #ea553d;
}
input[type="date"] {
border-radius: 5px;
height: 20px;
border-color: #ced4da !important;
outline-color: #ced4da !important;
border-top-color: #ced4da;
border-right-color: #ced4da;
border-bottom-color: #ced4da;
border-left-color: #ced4da;
}

/* .wizard>.actions a, .wizard>.actions a:active {
background-color: #fff;
border-radius: 4px;
border-top-left-radius: 4px;
border-top-right-radius: 4px;
border-bottom-right-radius: 4px;
border-bottom-left-radius: 4px;
padding: 8px 15px;
padding-top: 8px;
padding-right: 15px;
padding-bottom: 8px;
padding-left: 15px;
color: #fff;
} */

</style>





<div>
<table id="datatable" class="table table-secondary table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;background-color:#053f9c !important">
<thead style="background-color:#053f9c">
<tr>
    <th>main member fullnames</th>
    <th>Surname</th>
    <th>ID Number</th>
    <th>Relationship</th>
    <th>Extended name</th>
    <th>Extended surname</th>
    <th>Policy Number</th>
    <th>Branch Name</th>
    <th>Start date</th>
    <th>Inception date</th>
    <th>Cover date</th>
    <th>Actions</th>
    
</tr>
</thead>
<tbody class="alldata">

@foreach( $members as  $member)
<tr>
    <td>{{$member->first_name}}</td>
    <td>{{$member->last_name}}</td>
    <td>{{$member->id_number}}</td>
    <td>{{$member->ext_relation}}</td>
    <td>{{$member->ext_first_name}}</td>
    <td>{{$member->ext_last_name}}</td>
    <td>{{$member->policy_number}}</td>
    <td>{{$member->branchname}}</td>
    <td>{{$member->policy_start_date}}</td>
    <td>{{$member->policy_inception_date}}</td>
    <td>{{$member->cover_date}}</td>


    
    <td style="width: 100px">
        <a class="btn btn-outline-info btn-sm edit" title="Edit">
            <i class="fas fa-pencil-alt"></i>
        </a>
        
        <a class="btn btn-outline-danger btn-sm delete" title="delete" href="{{('/delete-member/'.$member->policydtl_id)}}">
            <i class="fa fa-trash"></i>
        </a>
    </td>
</tr>
@endforeach 
</tbody>
</table>
</div>
</div>

                                            </fieldset>

                                            <?php
                                                 $membpolicys=DB::table('applications')
                                                 ->get();
                                            ?>
                                            <!-- <h3>Member Updated</h3>
                                            <fieldset>
                                            <h3>member</h3>
                                                <div class="p-3">
                                                <div class="table-responsive">
                                            <table class="table table-secondary table-hover">
                                                <thead>
                                                    <tr>
                                                       
                                                        <th>ID NUMBER</th>
                                                        <th>FIRST NAME</th>
                                                        <th>LAST NAME</th>
                                                        <th>INITIALS</th>
                                                        
                                                        <th>ACTIONS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($membpolicys as $mempolicy)
                                                    
                                                    <tr>                                    
                                                    <td>{{$mempolicy->id_number}}</td>
                                                    <td>{{$mempolicy->first_name}}</td>
                                                    <td>{{$mempolicy->last_name}}</td>
                                                    <td>{{$mempolicy->initials}}</td>                                                   
                                                    

                                                    <td style="width: 100px">
                                                            <a class="btn btn-outline-info btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            <a class="btn btn-outline-danger btn-sm delete"title="delete" href="{{('/delete-update/'.$mempolicy->tbl_id)}}">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                   @endforeach
                                                </tbody>
                                            </table>
                                        </div>
        
                                                </div>
                                            </fieldset> -->
                                            <h3>Benefinciary Details</h3>
                                             <fieldset class="tab">
                                         

     <div class="tab" id="inputFormRow" class="row1">

<h4>Benefinciary Details</h4>

    <div class="col-md-6">
        <div class="row mb-3">
            <label for="txtCityBilling" class="col-lg-3 col-form-label">Title</label>
            <div class="col-lg-9">
                <input id="txtCityBilling" name="ben_title" type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="row mb-3">
            <label for="txtCityBilling" class="col-lg-3 col-form-label">ID Number</label>
            <div class="col-lg-9">
                <input id="txtCityBilling" name="ben_id_number" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row mb-3">
            <label for="txtCityBilling" class="col-lg-3 col-form-label">FullNames</label>
            <div class="col-lg-9">
                <input id="txtCityBilling" name="ben_first_name" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row mb-3">
            <label for="txtCityBilling" class="col-lg-3 col-form-label">surname</label>
            <div class="col-lg-9">
                <input id="txtCityBilling" name="ben_last_name" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row mb-3">
            <label for="txtCityBilling" class="col-lg-3 col-form-label">Initials</label>
            <div class="col-lg-9">
                <input id="txtCityBilling" name="ben_initials" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row mb-3">
            <label for="txtCityBilling" class="col-lg-3 col-form-label">Gender</label>
            <div class="col-lg-9">
                <select id="ddlCreditCardType" name="ben_gender" class="form-select">
                     <option value=""></option>
                    <option value="F">Female</option>
                    <option value="M">Male</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row mb-3">
            <label for="txtCityBilling" class="col-lg-3 col-form-label">Date of birth</label>
            <div class="col-lg-9">
                <input id="txtCityBilling" name="ben_birth" type="date" style="margin-top:-1px;height:36px;margin-left:-1px" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-md-6">
            <div class="row mb-3">
                <label for="txtCompanyShipping" class="col-lg-3 col-form-label">Cell:</label>
                <div class="col-lg-9">
                <input id="txtCompanyShipping" name="ben_cell" type="text" class="form-control">
                </div>
            </div>
        </div>
    <div class="col-md-6">
        <div class="row mb-3">
            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Work Tell:</label>
            <div class="col-lg-9">
                <input id="txtEmailAddressShipping" name="ben_work_tell" type="text" class="form-control">
            </div>
        </div>
    </div>


    <div class="col-md-6">
        <div class="row mb-3">
            <label for="txtCompanyShipping" class="col-lg-3 col-form-label"> Home Tell</label>
            <div class="col-lg-9">
                <input id="txtCompanyShipping" name="ben_home_tell" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-md-6">
    <label for="txtCityBilling" class="col-lg-3 col-form-label">percentage</label>
        <div class="progress" style="margin-left:195px ! important;margin-top:-33px">
           
            <div class="progress_fill">
               
                <span class="progress_text">70%</span>
            </div>
        </div>
    </div>
    <!-- <div>
        <hr>
    </div>
    <h4>Contact Details</h4> -->
   
        
    <div class="col-md-6">
        <div class="row mb-3">
            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Email</label>
            <div class="col-lg-9">
                <input id="txtEmailAddressShipping" name="ben_email" type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="col-md-6" id="inputFormRow">
        <div class="col-lg-12">

            <div>
                <hr>
            </div>
 
                <div id="newRow"></div>
                <button id="addRow" type="button" class="btn btn-info" >Added Beneficiary</button>
        </div>
    </div>

   
    
    <style>
        .progress{
            position:relative;
            width:210px;
            height: 30px;
            background:#ccc;
            border-radius: 5px;
            overflow:hidden;
        }
        .progress_fill{
            width:70%;
            height:100%;
            background:#009579;
            transition:all 0.2s;

        }
        .progress_text{
            position: absolute;
            top:50%;
            right: 5px;
            transform:translatey(-50%);
            color:#fff;
        }
    </style>
    
    
    <script>
        function updateProgressBar(progressBar,value){
            progressBar.querySelector(".progress_fill").style.width=`${value}%`;
            progressBar.querySelector(".progress_text").textContent=`${value}%`;
        }
    </script>
   

    <style>
	.btn_round {
  width: 35px;
  height: 35px;
  display: inline-block;
  border-radius: 50%;
  text-align: center;
  line-height: 35px;
  margin-left: 10px;
  border: 1px solid #ccc;
  cursor: pointer;
}
.btn_round:hover {
  color: #fff;
  background: #6b4acc;
  border: 1px solid #6b4acc;
}

.btn_content_outer {
  display: inline-block;
  width: 85%;
}
.close_c_btn {
  width: 30px;
  height: 30px;
  position: absolute;
  right: 10px;
  top: 0px;
  line-height: 30px;
  border-radius: 50%;
  background: #ededed;
  border: 1px solid #ccc;
  color: #ff5c5c;
  text-align: center;
  cursor: pointer;
}

.add_icon {
  padding: 10px;
  border: 1px dashed #aaa;
  display: inline-block;
  border-radius: 50%;
  margin-right: 10px;
}
.add_group_btn {
  display: flex;
}
.add_group_btn i {
  font-size: 32px;
  display: inline-block;
  margin-right: 10px;
}

.add_group_btn span {
  margin-top: 8px;
}
.add_group_btn,
.clone_sub_task {
  cursor: pointer;
}

.sub_task_append_area .custom_square {
  cursor: move;
}

.del_btn_d {
  display: inline-block;
  position: absolute;
  right: 20px;
  border: 2px solid #ccc;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  font-size: 18px;
}
</style>
   

    <div id="inputFormRow" class="row" style="margin-top:10px">



   
<!-- script for add beneficiary -->
<script type="text/javascript" style="margin-left:400px ! important">
        // add beneficiary
        $("#addRow").click(function () {
            var html = '';
            html += '<div id="inputFormRow" class="row">';
            html +='<h4>Add Benefinciary </h4>';
                    html += '<div class="col-md-6">';
                        html += '<div class="row mb-3">';
                            
                            html += '<div class="col-lg-9">';
                                 html += '<input type="text" name="title[]" style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Enter Title:" autocomplete="off">';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';

                    html += '<div class="col-md-6">';
                        html += '<div class="row mb-3">';
                            
                            html += '<div class="col-lg-9">';
                                 html += '<input type="text" name="title[]"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Enter FullNames:" autocomplete="off">';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';

                    html += '<div class="col-md-6">';
                        html += '<div class="row mb-3">';
                            
                            html += '<div class="col-lg-9">';
                                 html += '<input type="text" name="title[]"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Enter surname:" autocomplete="off">';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';

                    html += '<div class="col-md-6">';
                        html += '<div class="row mb-3">';
                            
                            html += '<div class="col-lg-9">';
                                 html += '<input type="text" name="title[]"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Enter ID Number:" autocomplete="off">';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';

                    html += '<div class="col-md-6">';
                        html += '<div class="row mb-3">';
                            
                            html += '<div class="col-lg-9">';
                                 html += '<input type="text" name="title[]"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Enter Initials:" autocomplete="off">';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';

                    html += '<div class="col-md-6">';
                        html += '<div class="row mb-3">';
                            
                            html += '<div class="col-lg-9">';
                                 html += '<input type="text" name="title[]"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Enter Gender:" autocomplete="off">';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';

                    html += '<div class="col-md-6">';
                        html += '<div class="row mb-3">';
                            
                            html += '<div class="col-lg-9">';
                                 html += '<input type="text" name="title[]"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Enter Date of birth:" autocomplete="off">';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';

                    html += '<div class="col-md-6">';
                        html += '<div class="row mb-3">';
                            
                            html += '<div class="col-lg-9">';
                                 html += '<input type="text" name="title[]"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Enter Cell:" autocomplete="off">';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';

                    html += '<div class="col-md-6">';
                        html += '<div class="row mb-3">';
                            
                            html += '<div class="col-lg-9">';
                                 html += '<input type="text" name="title[]"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Enter Work Tell:" autocomplete="off">';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';

                    html += '<div class="col-md-6">';
                        html += '<div class="row mb-3">';
                            
                            html += '<div class="col-lg-9">';
                                 html += '<input type="text" name="title[]"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Enter Home Tell:" autocomplete="off">';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';

                    html += '<div class="col-md-6">';
                        html += '<div class="row mb-3">';
                            
                            html += '<div class="col-lg-9">';
                                 html += '<input type="text" name="title[]"style="margin-top:-1px;height:36px;width:360px" class="form-control m-input" placeholder="Enter Email:" autocomplete="off">';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';
                    html += '<div class="input-group-append" style=" margin-left:300px">';
                     html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
                 html += '</div>';

            html += '</div>';

           

            $('#newRow').append(html);
        });

        // remove beneficiary
        $(document).on('click', '#removeRow', function () {
            $(this).closest('#inputFormRow').remove();
        });
    </script>








    </div>
</div>
                                                       


                        
                                                <script>
                                                    function AddBen(){
                                                        ++counterben
                                                        console.log(counterben);
                                                       
                                                        addBens(); //$('#ben'+counter).show();
                                                        document.getElementById("bencounter").setAttribute("value", counterben);
                                                    }
                                                </script>

                                                <div>
                                                <!-- <button type="button" class="btn btn-blue-grey waves-effect waves-light" style="float: right; margin-top:10px ;width:150px">Add</button> -->
                                                    <hr>
                                                </div>
                                                <?php
                                                     $membbeneficiary=DB::table('beneficiary_details')
                                                     ->get();
                                                ?>
                                               <h4>Benefinciary list</h4>
                                                <div>
                                                <!-- <table class="table table-secondary table-hover">  -->
                                                <table id="datatable" class="table table-secondary table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>FIRST NAME</th>
                                                        <th>LAST NAME</th>
                                                        <th>ID NUMBER</th>
                                                        <th>GENDER</th>
                                                        <th>CELL</th>
                                                        <th>EMAIL</th>
                                                        <th>ACTIONS</th>

                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                @foreach( $membbeneficiary as  $membbeneficiar)
                                                    <tr>
                                                        <td>{{$membbeneficiar->ben_first_name}}</td>
                                                        <td>{{$membbeneficiar->ben_last_name}}</td>
                                                        <td>{{$membbeneficiar->ben_id_number}}</td>
                                                        <td>{{$membbeneficiar->ben_gender}}</td>
                                                        <td>{{$membbeneficiar->ben_cell}}</td>
                                                        <td>{{$membbeneficiar->ben_email}}</td>
                                                        
                                                        <td style="width: 100px">
                                                            <a class="btn btn-outline-info btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            <a class="btn btn-outline-danger btn-sm delete" title="delete" href="{{('/delete-ben/'.$membbeneficiar->ben_id)}}">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </td>
                                                        

                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                            </fieldset>
                                            <h3>Payment Methods</h3>
                                             <fieldset class="tab">
                                             
                                             <div class="tab">
                                           
                                                <h3>
                                                    Method of payment 
                                                </h3>
                                               <div id="debithide">
                                                     <input type="checkbox" name="chkbox" id="chk" onchange="showHide()" style="height:20px;width:20px"> 
                                                    <label for="chk">Debit Order</label>
                                                </div>  

                                                
                                            <div id="debt" style=" display:none ! important">
                                            <hr>

                                                <div class="row">
                                                    <div class="col" id="mainshide">
                                                        <input type="checkbox" name="chkbox" id="hidemain" onchange="memberHide()" style="height:20px;width:20px"> 
                                                        <label for="chk">Main Member</label>
                                                    </div>
                                                </div>
                                       
                                                <div class="row">
                                                    <div class="col"id="premiumhides">
                                                        <input type="checkbox" name="prembox" id="pprem" onchange="showpremium()" style="height:20px;width:20px"> 
                                                        <label for="pprem">Premium payer</label>
                                                    </div>
                                                </div>
                                                
                                              <div id="premiumhide" style="display:none ! important">
                                                
                                                <div class="row"id="to-show">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Account Holder</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCompanyShipping" name="Acc_holder" type="text" class="form-control">       
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Number:</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressShipping" name="account_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Bank Name:</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="bank_name" class="form-select">
                                                                     <option value=""></option>
                                                                    <option value="FNB">FNB</option>
                                                                    <option value="standard_bank">Standard Bank</option>
                                                                    <option value="Capitec">Capitec</option>
                                                                    <option value="Nedbank">Nedbank</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Type:</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="account_type" class="form-select">
                                                                     <option value=""></option>
                                                                    <option value="cheque">cheque</option>
                                                                    <option value="savings">savings</option>
                                                                    <option value="transmission">transmission</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Branch Code:</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressShipping" name="branch_code" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Frequency:</label>
                                                            <div class="col-lg-9">
                                                                <!-- <input id="txtEmailAddressShipping" name="debit_date" style="height:36px" type="date" class="form-control"> -->
                                                                <select id="ddlCreditCardType"name="debit_date" style="height:36px"" class="form-select">
                                                                     <option value=""></option>
                                                                    <option value="December Debit Date">December Debit Date</option>
                                                                    <option value="Monthly">Monthly</option>
                                                                    <option value="Half Yearly">Half Yearly</option>
                                                                    <option value="Yearly">Yearly</option>
                                                                    <option value="Other">Other</option>
                                                                    
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Debit Day:</label>
                                                            <div class="col-lg-9">
                                                                <!-- <input id="txtEmailAddressShipping" name="debit_date" style="height:36px" type="date" class="form-control"> -->
                                                                <select id="ddlCreditCardType"name="debit_date" style="height:36px"" class="form-select">
                                                                    <option value=""></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="5">5</option>
                                                                    <option value="7">7</option>
                                                                    <option value="15">15</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="">22</option>
                                                                    <option value="25">25</option>
                                                                    <option value="28">28</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="other">other</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtNameCard" class="col-lg-3 col-form-label">Cellphone</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtNameCard" name="mem_residential_num" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtNameCard" class="col-lg-3 col-form-label">Street Address</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtNameCard" name="mem_residential_num" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="ddlCreditCardType" class="col-lg-3 col-form-label">PO Box</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtNameCard" name="mem_postal_pobox" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Town or City</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCreditCardNumber" name="mem_town_city" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Province</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="postal_suburb" class="form-select">
                                                                     <option value=""></option>
                                                                    <option value="gauteng">gauteng</option>
                                                                    <option value="limpopo">limpopo</option>
                                                                    <option value="free state">free state</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Street Code</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtExpirationDate" name="mem_residential_code" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Postal Code</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtExpirationDate" name="mem_postal_suburb" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                    <hr>

                                                </div>

                                            </div>
                                           
                                             <script type="text/javascript">
                                                    function showpremium(){
                                                        var checkbox = document.getElementById("premiumhides");

                                                            if(checkbox.checked){
                                                               document.getElementById("premiumhide").style.display="block";
                                                            //    document.getElementById("stophide").style.display="none";
                                                              
                                                               console.log("i am runining");
                                                            }
                                                            else{
                                                                document.getElementById("premiumhide").style.display="none";
                                                                // document.getElementById("stophide").style.display="block";
                                                              
                                                                
                                                            }
                                                            
                                                        
                                                    }
                                            </script>
                                         
                                            <hr>
                                                
                                                        <br/>

                                                <div class="row"id="to-show">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Account Holder</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCompanyShipping" name="Acc_holder" type="text" class="form-control">       
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Number:</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressShipping" name="account_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Bank Name:</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="bank_name" class="form-select">
                                                                     <option value=""></option>
                                                                    <option value="FNB">FNB</option>
                                                                    <option value="standard_bank">Standard Bank</option>
                                                                    <option value="Capitec">Capitec</option>
                                                                    <option value="Nedbank">Nedbank</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Type:</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="account_type" class="form-select">
                                                                     <option value=""></option>
                                                                    <option value="cheque">cheque</option>
                                                                    <option value="savings">savings</option>
                                                                    <option value="transmission">transmission</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Branch Code:</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressShipping" name="branch_code" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Frequency:</label>
                                                            <div class="col-lg-9">
                                                                <!-- <input id="txtEmailAddressShipping" name="debit_date" style="height:36px" type="date" class="form-control"> -->
                                                                <select id="ddlCreditCardType"name="debit_date" style="height:36px"" class="form-select">
                                                                     <option value=""></option>
                                                                    <option value="December Debit Date">December Debit Date</option>
                                                                    <option value="Monthly">Monthly</option>
                                                                    <option value="Half Yearly">Half Yearly</option>
                                                                    <option value="Yearly">Yearly</option>
                                                                    
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Debit Day:</label>
                                                            <div class="col-lg-9">
                                                                <!-- <input id="txtEmailAddressShipping" name="debit_date" style="height:36px" type="date" class="form-control"> -->
                                                                <select id="ddlCreditCardType"name="debit_date" style="height:36px"" class="form-select">
                                                                    <option value=""></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="5">5</option>
                                                                    <option value="7">7</option>
                                                                    <option value="15">15</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="">22</option>
                                                                    <option value="25">25</option>
                                                                    <option value="28">28</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="other">other</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtNameCard" class="col-lg-3 col-form-label">Cellphone</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtNameCard" name="cell_no" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtNameCard" class="col-lg-3 col-form-label">Street Address</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtNameCard" name="mem_residential_num" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="ddlCreditCardType" class="col-lg-3 col-form-label">PO Box</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtNameCard" name="mem_postal_pobox" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Town or City</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCreditCardNumber" name="mem_town_city" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Province</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="postal_suburb" class="form-select">
                                                                     <option value=""></option>
                                                                    <option value="gauteng">gauteng</option>
                                                                    <option value="limpopo">limpopo</option>
                                                                    <option value="free state">free state</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Street Code</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtExpirationDate" name="mem_residential_code" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Postal Code</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtExpirationDate" name="mem_postal_suburb" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>

                                                <hr>

                                              
                                                    <div class="container inside">
                                                        
                                                        
                                                        <div class="full text flexrow" style="margin-left: -36px ! important">
                                                            <p><strong>Debit order deduction:(application to debit order payment only)
                                                                    </strong>
                                                            <ol>
                                                            <li>Authority</li>
                                                                <p>
                                                                    I hereby authorise Tshitshithe & Bros Funeral Undertakers to issue and deliver payment instructions to your Banker for collection
                                                                    against my above-mentioned account at my above-mentioned Bank(or any other Bank or branch to which I may transfer my account).
                                                                </p>
                                                                <p>
                                                                    In the event that the payment day falls on a sunday, or recognised South African public holiday, the payment day will automatically be 
                                                                    the very next ordinary business day.
                                                                </p>
                                                                <p>
                                                                    I understand that the withdrawls hereby authorised will be processed through a computerised system provided by the South African 
                                                                    Banks.I also understand that details of each withdrawl will be printed on the Bank statement. Such must contain a number, which must 
                                                                    be included in the said payment instruction and if provided to me should enable me to identify the Agreement. This number must be added
                                                                    to this form under the Agreement Reference Number section before the issuing of any payment instruction.  
                                                                </p>
                                                                <li>Mandate</li>
                                                                <p>
                                                                    I acknowledge that all payment instructions issued by you shall be treated by my above-mentioned Banks as if the instructions have been 
                                                                    issued by me/us personally.
                                                                </p>
                                                                <li>Cancellation</li>
                                                                <p>
                                                                    I agree that although this Authority and Mandate may be cancelled by me, such cancellation will not cancel the Agreement. I shall not be 
                                                                     entitled to any refund of amounts which you have withdrawn while this Authority was in force, if such amounts were legally owing to you.
                                                                </p>
                                                                <li>Assignment</li>
                                                                <p>
                                                                    I acknowledge that this Authority may be ceded or assigned to a third party if the Agreement is also ceded or assigned to that third party,
                                                                    but in the absence of such assignment of the Agreement, this Authority and mandate cannot be assigned to any third party.
                                                                </p>
                                                            </ol>
                                                            </p>
                                                        </div>
                                                        <div class="half text flexrow">
                                                            <label for="advisor-date">Date</label>
                                                            <input type="date"value="<?php echo $today; ?>" name="advisor-date" id="advisor-date">
                                                        </div>
                                                        <!-- <div class="full text flexrow">
                                                            <p>In the case of a dispute, the registered Rules of Bonitas will apply, subject to approval by the
                                                                Registrar of Medical Schemes.</p>
                                                        </div>
                                                        <div class="half text flexrow">
                                                            <label for="advisor-memfullname">Member full name</label>
                                                            <input type="text" name="advisor-memfullname" id="advisor-memfullname">
                                                        </div>
                                                        <div class="full text flexrow">
                                                            <label for="memdeclare" style="width: 100%;"><input type="checkbox" name="memdeclare" id="memdeclare"
                                                                    style="width: 2%;vertical-align: middle;margin-bottom: 5px;" onchange="consentcheck()"> I
                                                                declare that the information provided in this document or voice recording is true and accurate and
                                                                that I authorise the consultant to sign on my behalf.</label>
                                                        </div>
                                                        <div class="full text flexrow">
                                                            <label for="popi" style="width: 100%;">
                                                                <p>I agree that Bonitas, Medscheme and its Contracted Third Parties may contact and provide Me and My Dependants with information about insurance, lifestyle rewards and products which have been negotiated on Your behalf by Bonitas.</br></br>
                                                                Your consent, along with that of Your dependants, to the disclosure of Your Personal information is protected by the Protection of Personal Information Act, 4 of 2013 (which came into effect on 1 July 2020) (“POPIA”) and will principally be governed by the POPIA, as well as any other Applicable Data Protection Legislation of the Republic of South Africa.</br></br>
                                                                You have the right to inform Us when You do not want to receive any automated direct-marketing information and You may opt out of receiving such information by using the unsubscribe / opt out options on the Platforms.</br></br>
                                                                I agree
                                                                <input type="checkbox" name="popi" id="popi" style="width: 2%;vertical-align: middle;margin-bottom: 5px;" onchange="consentcheck()"></p>
                                                                </label>                                        
                                                        </div> -->
                                                    </div>
                                              
                                            </div>

                                                    

                                            

                                             <script type="text/javascript">
                                                    function showHide(){
                                                        var checkbox = document.getElementById("chk");

                                                            if(checkbox.checked){
                                                               document.getElementById("debt").style.display="block";
                                                               document.getElementById("stophide").style.display="none";
                                                               document.getElementById("cashhide").style.display="none";
                                                                document.getElementById("persalhide").style.display="none";
                                                               console.log("i am runining");
                                                            }
                                                            else{
                                                                document.getElementById("debt").style.display="none";
                                                                document.getElementById("stophide").style.display="block";
                                                                document.getElementById("cashhide").style.display="block";
                                                                document.getElementById("persalhide").style.display="block";
                                                                
                                                            }
                                                            
                                                        
                                                    }
                                            </script>


                                        <div id="memberhides" style=" display:none ! important">
                                                
                                                <br/>

                                        <div class="row"id="to-show">
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="txtCityBilling" class="col-lg-3 col-form-label">Fullnames</label>
                                                    <div class="col-lg-9">
                                                        <input id="txtCompanyShipping" name="cash_fullnames" type="text" class="form-control">       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Surname</label>
                                                    <div class="col-lg-9">
                                                        <input id="txtEmailAddressShipping" name="cash_surname" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                           
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Branch Code:</label>
                                                    <div class="col-lg-9">
                                                        <input id="txtEmailAddressShipping" name="branch_code" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label"> Date:</label>
                                                    <div class="col-lg-9">
                                                        <input id="txtEmailAddressShipping" name="debit_date" style="height:36px" type="date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                           
                                           
                                           
                                        </div>
                                       
                                        </div>





                                            <script>

                                                function memberHide(){
                                                    var checkbox = document.getElementById("hidemain");

                                                    if(checkbox.checked){
                                                        document.getElementById("memberhides").style.display="block";
                                                        document.getElementById("debithide").style.display="none";
                                                        console.log("myself");
                                                    }
                                                    else{
                                                        document.getElementById("memberhides").style.display="none";
                                                        document.getElementById("debithide").style.display="block";
                                                    }
                                                }
                                            </script>

                                                        






                                            <div id="stophide">
                                                     <input type="checkbox" name="chkbox" id="stopid" onchange="sshowHide()" style="height:20px;width:20px"> 
                                                    <label for="stopid">Stop Order</label>
                                                </div>  
                                                
                                            <div id="stop" style=" display:none ! important">
                                                
                                                        <br/>

                                                <div class="row"id="to-show">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Account Holder</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCompanyShipping" name="Acc_holder" type="text" class="form-control">       
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Number:</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressShipping" name="account_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Bank Name:</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="bank_name" class="form-select">
                                                                     <option value=""></option>
                                                                    <option value="FNB">FNB</option>
                                                                    <option value="standard_bank">Standard Bank</option>
                                                                    <option value="Capitec">Capitec</option>
                                                                    <option value="Nedbank">Nedbank</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Type:</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="account_type" class="form-select">
                                                                     <option value=""></option>
                                                                    <option value="cheque">cheque</option>
                                                                    <option value="savings">savings</option>
                                                                    <option value="transmission">transmission</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                   
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                        <label for="txtExpirationDate" class="col-lg-3 col-form-label" >Day:</label>
                                                            <div class=" age col-lg-9">
                                                            <select id="ddlCreditCardType"name="debit_date" style="height:36px"" class="form-select">
                                                                    <option value=""></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Status</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="bank_name" class="form-select">
                                                                     <option value=""></option>
                                                                    <option value="Active">Active</option>
                                                                    <option value="Not-Active">Not-Active</option>
                                                                    <option value="Cancel Stop Order">Cancel Stop Order</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                    
                                                    
                                                    
                                                   
                                                    
                                                   
                                                </div>
                                              
                                            </div>

                                             <script type="text/javascript">
                                                    function sshowHide(){
                                                        var checkbox = document.getElementById("stopid");

                                                            if(checkbox.checked){
                                                                document.getElementById("stop").style.display="block";
                                                               document.getElementById("debithide").style.display="none";
                                                               document.getElementById("cashhide").style.display="none";
                                                                document.getElementById("persalhide").style.display="none";
                                                               console.log("i am runining");
                                                            }
                                                            else{
                                                                document.getElementById("stop").style.display="none";
                                                                document.getElementById("debithide").style.display="block";
                                                                document.getElementById("cashhide").style.display="block";
                                                                document.getElementById("persalhide").style.display="block";
                                                                
                                                            }
                                                            
                                                        
                                                    }
                                            </script>



                                                <div id="cashhide">
                                                     <input type="checkbox" name="chkboxs" id="chks" onchange="showHides()" style="height:20px;width:20px"> 
                                                    <label for="chks">Cash</label>
                                                </div>  
                                                
                                               <div id="cas" style=" display:none ! important">
                                                
                                                        <br/>

                                                <div class="row"id="to-show">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Fullnames</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCompanyShipping" name="cash_fullnames" type="text" class="form-control">       
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Surname</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressShipping" name="cash_surname" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                   
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Branch Code:</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressShipping" name="branch_code" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label"> Date:</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressShipping" name="debit_date" style="height:36px" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtNameCard" class="col-lg-3 col-form-label">Street Address</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtNameCard" name="mem_residential_num" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="ddlCreditCardType" class="col-lg-3 col-form-label">PO Box</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtNameCard" name="mem_postal_pobox" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Town or City</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCreditCardNumber" name="mem_town_city" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Province</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="postal_suburb" class="form-select">
                                                                     <option value=""></option>
                                                                    <option value="gauteng">gauteng</option>
                                                                    <option value="limpopo">limpopo</option>
                                                                    <option value="free state">free state</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Street Code</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtExpirationDate" name="mem_residential_code" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Postal Code</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtExpirationDate" name="mem_postal_suburb" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                               
                                                </div>

                                             <script type="text/javascript">
                                                    function showHides(){
                                                        var checkboxs = document.getElementById("chks");


                                                       

                                                            if(checkboxs.checked){
                                                               document.getElementById("cas").style.display="block";
                                                               document.getElementById("debithide").style.display="none";
                                                               document.getElementById("stophide").style.display="none";
                                                               document.getElementById("persalhide").style.display="none";
                                                               console.log("i am runining");
                                                            }
                                                            else{
                                                                document.getElementById("cas").style.display="none";
                                                                document.getElementById("debithide").style.display="block";
                                                                document.getElementById("stophide").style.display="block";
                                                                document.getElementById("persalhide").style.display="block";
                                                            }
                                                        
                                                    }
                                            </script>
                                                    

                                                <div id="persalhide">
                                                     <input type="checkbox" name="chkboxx" id="chkx" onchange="showHidex()" style="height:20px;width:20px"> 
                                                    <label for="chkx">Persal</label>
                                                </div>  
                                                
                                               <div id="persa" style=" display:none ! important">
                                                
                                                        <br/>
                                                        <p><strong> PERSAL INFORMATION: Required ID Copy and Payslip for Persal Deduction or Letter from Employment)
                                                                    </strong>
                                                <div class="row"id="to-show">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Employment details/Authorisation:employer:</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCompanyShipping" name="employer" type="text" class="form-control">       
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Persal no:</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressShipping" name="persal_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Cellphone no:</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressShipping" name="persal_cell" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Paypoint</label>
                                                            <div class="col-lg-9">
                                                                
                                                                <input id="txtEmailAddressShipping" name="Paypoint" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                    
                                                  
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Persal Holder</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressShipping" name="persal_holder" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">premium</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressShipping" name="persal_premium" style="height:36px" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtNameCard" class="col-lg-3 col-form-label">Street Address</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtNameCard" name="mem_residential_num" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="ddlCreditCardType" class="col-lg-3 col-form-label">PO Box</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtNameCard" name="mem_postal_pobox" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Town or City</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCreditCardNumber" name="mem_town_city" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Province</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="postal_suburb" class="form-select">
                                                                     <option value=""></option>
                                                                    <option value="gauteng">gauteng</option>
                                                                    <option value="limpopo">limpopo</option>
                                                                    <option value="free state">free state</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Street Code</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtExpirationDate" name="mem_residential_code" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Postal Code</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtExpirationDate" name="mem_postal_suburb" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                <hr>

                                                    
                                                <div class="container inside">
                                                        
                                                        
                                                        <div class="full text flexrow" style="margin-left: -38px ! important">
                                                            
                                                                <p>
                                                                    I, the undersigned, hereby authorise the Accounting officer of the Depeartment to deduct a premium from salary on amonthly basis remit it to workers</br>
                                                                    Life Assurance Company from which I have obtained an insurance policy,until such time as I cancel this authorisation in writing or until I substitute it with a new</br>
                                                                    authorisation.should the relevant premium be adjusted by workers life A ssurance Company as a result of ageneral contractual increase/decrease in the premium, or should</br>
                                                                    request Workers Life Assurance Company to increase/decrease the premium for certain reasons, I hereby grant permission that the adjusted premium may be deducted from </br>
                                                                    my salary until such time as I cancel this authorisation in writing or substitute it with a new authorisation.
                                                                </p>
                                                                
                                                                
                                                               
                                                           
                                                        </div>
                                                        <div class="half text flexrow">
                                                            <label for="advisor-date">Date</label>
                                                            <input type="date"value="<?php echo $today; ?>" name="advisor-date" id="advisor-date">
                                                        </div>
                                                   
                                              


                                                </div>

                                             <script type="text/javascript">
                                                    function showHidex(){
                                                        var checkboxx = document.getElementById("chkx");


                                                       

                                                            if(checkboxx.checked){
                                                               document.getElementById("persa").style.display="block";
                                                               document.getElementById("debithide").style.display="none";
                                                               document.getElementById("stophide").style.display="none";
                                                               document.getElementById("cashhide").style.display="none";
                                                               console.log("i am runining");
                                                            }
                                                            else{
                                                                document.getElementById("persa").style.display="none";
                                                                document.getElementById("debithide").style.display="block";
                                                                document.getElementById("stophide").style.display="block";
                                                                document.getElementById("cashhide").style.display="block";
                                                            }
                                                        
                                                    }
                                            </script>



                                                        





                                                    
                                            <!-- <div class="col">
                                                <p class="text-muted"></p>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light" id="sa-success">Debit Order</button>
                                            </div>
                                            <div class="col">
                                                <p class="text-muted"></p>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light" id="sa-success">Cash</button>
                                            </div>
                                            <div class="col">
                                                <p class="text-muted"></p>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light" id="sa-success">Persal</button>
                                            </div> -->
                                                <!-- <div id="to-show"class="hide">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Account Holder</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCompanyShipping" name="Acc_holder" type="text" class="form-control">       
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Number:</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressShipping" name="account_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Payment Method:</label>
                                                            <div class="col-lg-9">
                                                                <select id="ddlCreditCardType" name="payment_method" class="form-select">
                                                                    <option value=""></option>
                                                                    <option value="cash">cash</option>
                                                                    <option value="debit">debit</option>
                                                                    <option value="transfer">transfer</option>
                                                                    <option value="stop_order">stop order</option>
                                                                    <option value="persal">persal</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Bank Name:</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="bank_name" class="form-select">
                                                                     <option value=""></option>
                                                                    <option value="FNB">FNB</option>
                                                                    <option value="standard_bank">Standard Bank</option>
                                                                    <option value="Capitec">Capitec</option>
                                                                    <option value="Nedbank">Nedbank</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Account Type:</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="account_type" class="form-select">
                                                                     <option value=""></option>
                                                                    <option value="cheque">cheque</option>
                                                                    <option value="savings">savings</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Branch Code:</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressShipping" name="branch_code" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Debit Date:</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressShipping" name="debit_date" style="height:36px" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtNameCard" class="col-lg-3 col-form-label">Street Address</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtNameCard" name="mem_residential_num" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="ddlCreditCardType" class="col-lg-3 col-form-label">PO Box</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtNameCard" name="mem_postal_pobox" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Town or City</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCreditCardNumber" name="mem_town_city" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Province</label>
                                                            <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="postal_suburb" class="form-select">
                                                                     <option value=""></option>
                                                                    <option value="gauteng">gauteng</option>
                                                                    <option value="limpopo">limpopo</option>
                                                                    <option value="free state">free state</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Street Code</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtExpirationDate" name="mem_residential_code" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Postal Code</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtExpirationDate" name="mem_postal_suburb" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                <div class="row">
                                                                                      
                                                    <div class="row">
                                                    
                                                    
                                                </div>
                                                
                                                </div>                                   

                                                <div class="row">
                                                    
                                                    
                                                </div>
                                                <div class="row">
                                                    
                                                    
                                                </div> -->
                                                
                                                
                                            </fieldset>

                                            <script>

                                                    document.getElementById('show-element').onclick = function() {
                                                    var element = document.getElementById('to-show');
                                                    if (element.className === 'hide') {
                                                        element.className = 'show';
                                                        document.getElementsByTagName('body')[0].className = 'on';
                                                        document.getElementById('show-element').className = 'active';
                                                    } else {
                                                        element.className = 'hide';
                                                        document.getElementsByTagName('body')[0].className = 'off';
                                                        document.getElementById('show-element').className = '';
                                                    }
                                                    }
                                            </script>
                                            <!-- <h3>Residential Address</h3>
                                            <hr> -->
                                            
                                            <!-- <fieldset>
                                                <h4>Address Details</h4>
                                                <div class="row">
                                                    
                                                </div>
                                                <div class="row">
                                                    
                                                </div>
                                                <div class="row">
                                                    
                                                </div>

                                                
                                                
                                            </fieldset> -->
                                            class="col-md-5 col-form-label"
                                            
                                            <h3>verification</h3>
                                            <fieldset class="tab">
                                                <div class="tab" class="p-3">
                                                   
                                                <a style="background-color:#67a8e4;"href="{{url('/pdfgenerate')}}">View Record</a>

                                                    </div>
                                                   
                                            </fieldset>
                                             <h3>Compliance Checklist</h3>
                                            <fieldset class="tab">
                                            <!-- <h3>member</h3> -->

                                            
                                                <div class="p-3">
                                                <div class="">
                                                        
                                                        <h3 class="form-label" > Compliance Checklist(indicate with tick in the Yes/No box).</h3>
                                                    </div>
                                                 
                                                <div class="container inside">
                                                    <div class="full text flexrow">
                                                        <ol style="margin-left: -22px;">
                                                            <li><strong>INTERMEDIARY STATUS</strong></li>
                                                            <p>Has the Representative:</p>
                                                            <p>1.Disclosed his/her full names and designation?</br>
                                                                2.Contact Details?</br>
                                                                3.Disclosed his/her fit and proper status? <label style="margin-left:940px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr>
                                                            </p>
                                                     
                                                            <li><strong>ADVICE</strong></li>
                                                            <p>Has the intermediary disclosed the following information to you:</p>
                                                            <p>1.The name and type of policy,premium,plan,benefits?</br>
                                                                2.The waiting period?</br>
                                                                3.The registered name of the insurer/underwriter? <label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr>
                                                            </p>
                                                            <li><strong>WAITING PERIODS</strong></li>
                                                            <p>Has the intermediary disclosed that your policy has the waiting period:</p>
                                                            <p>1.Immediate family: in the event of the death,other than accidental death of an insured life, a waiting period of six months from the</br>
                                                            inception date of the policy is applicable in respect of the full payment of benefits.?</br>
                                                                2.Extended family: in the event of the death, other than accidental death of an insured life, waiting period of nine months from the</br>
                                                                inception date of the policy is applicable in respect of the full payment benefits ?</br>
                                                                3.Should the insuerd amountbe increased at anytime, a new waiting periods will apply to the increased portion of the isured amount</br> 
                                                                4.Accidental death will be covered after the first premium has been received by Tshitshithe.</br>
                                                                5.Death as a result of suicide is excluded for 24 months from the inception date of cover.</br>
                                                                6.HIV/Aids is included.</br>
                                                                7.If a specific client can provide proof to the satisfaction of Tshitshithe, in their sole discretion, of previous contionuous insurance for</br>
                                                                 atleast six months with another long-term insurer, immediately prior to joining the group scheme, Tshitshithe may waive the applicable waiting</br>
                                                                 period in respect of a client.</br>
                                                                 8.Maximum inception age for the client is 99 years.</br>
                                                                 9.Maximum inception age for the spouse is 99 years.</br>
                                                                 10.Maximum inception age for the extended family member  is 84 years.</br>
                                                                11.Cover is applicable for whole of life-clients enjoy cover as long as premium are paid.
                                                                <label style="margin-left:1020px ! important">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr>
                                                            </p>
                                                            <li><strong>Debit Order</strong></li>
                                                            <p>Has the intermediary disclosed that the debit order wiil be processed on the chosen date by the policy holder or premium payer?</br>
                                                                in the event that the debit order fails on the due date.</p>
                                                            <p>1.Communication will be carried out with the premium payer</br>
                                                                2.If the debit order fails to be processed twice or in two months the policy may elapse and the waiting period may be imposed again.<label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr>
                                                            </p>
                                                            
                                                            <li><strong>PREMIUMS PAYMENT</strong></li>
                                                            <p>Has the intermediary disclosed the following:
                                                                </p>
                                                            <p>1.premiums are paid in advance</br>
                                                                2.If the premium is not recieved from the client,then the insurer or underwriter will not be able to honour any benefits to the clients</br>
                                                                3.If 2 payments are not recieved from the client respectively, the policy will elapse and suspended. the benefits may be forfeited<label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr>
                                                            </p>
                                                            <li><strong>COMPLAINTS PROCEDURE</strong></li>
                                                            <p>Has the intermediary disclosed are complaints procedure:
                                                                </p>
                                                            <p>1.Complaints must disclose interest in policy.</br>
                                                                2.Policy number is required in respect of all complaints.</br>
                                                                3.Identity number of complaint.</br>
                                                                4.Nature of enquiry/complaint must be disclosed.</br>

                                                                Complaince Officer:
                                                                <label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr>
                                                            </p>
                                                            
                                                            <li><strong>CLAIMS PROCEDURE</strong></li>
                                                            <p>Has the intermediary disclosed to you that in the event of death all relevant supporting documents must be submitted to the underwriter</br>
                                                                during the preparation of the burial from the date of death and before the burial of the deceased? Failure to do so will results in the benefits</br>
                                                                    being withhold/forfeited.</p>
                                                             <p>Documents to be submitted include, but are not limited to:</p>       
                                                            <p>1.Proof of Death:</br>
                                                                -Certified copy of original death certificate</br>
                                                                -Copy of the notification of death(BI-1663)
                                                                -Copy of the notification of death signed by the tribal leader if the death occurred at residents</br>
                                                                2.Certified copy of the pricipal member's/Benefciary's/Claimant's identify Document</br>
                                                                3.Certified copy of the deceased's Identity Document with DECEASED stamp</br> 
                                                                4.Proof of Bank details and permission to deposit benefits in banking account</br>
                                                                5.Police stament or copy of postmortem report in case of death as aresult of unnatural causes</br>
                                                                6.Proof of payments for final three months premiums, in respect of cash payments</br>
                                                                7.In the event of aclaim of the full-time student, a letter confirming full-time study from a recognized </br>
                                                                educational institution,together with the last academic report.</br>
                                                                8.A fully completed underwriter form.</br>
                                                                9. Tshitshithe & Bros Funeral undertakes reserve the right to request a medical report.<label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr>
                                                            </p>
                                                            
                                                            <li><strong>RIGHTS RESERVED</strong></li>
                                                            <p>Has the intermediary disclosed to you that the underwriter or Tshitshithe reserves the rights to:</p>
                                                            <p>1.Increase the premium anytime and inform the client thereafter?</br>
                                                                2.Request further documentation or information as it may deem necessary to accurately acces a claim?</br>
                                                                3.Refuse reinstating the policy that continually lapse? <label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr>
                                                            </p>
                                                            
                                                            <li><strong>CLAIMS/FORFEITS</strong></li>
                                                            <p>Has the intermediary disclosed to you that the benefits will be forfeited:</p>
                                                            <p>1.In the event when the deceased is with or is not with Tshitshithe</br>
                                                                -some of the benefit amounts will not be used to add on another benefits,e.g if the clients requires tombstone, they will not be able to</br>
                                                                 use the funds for the coffin to add on the tombstone.</br>
                                                                -Tshitshithe reserves the rights to provide services or any benefits,
                                                                2.For all benefits claims, the claim procedure documents must be presented</br>
                                                                 <label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr>
                                                            </p>
                                                            
                                                            <li><strong>EXCLUSION</strong></li>
                                                            <p>Has the intermediary disclosed to you that the benefits will be forteited if the death is directly or indirectly caused by or attributable to:</p>
                                                            <p>1.Terrorism or war (whether declared or not)</br>
                                                                2.Radioactive  contamination, whether directly or indirectly</br>
                                                                3.Death as a result of participating in illegal activities</br>
                                                                4.Suicide will not be covered during the two years of membership</br>
                                                                5.Divorced spouses at inception of the policy are not covered, and cover for spouses who divorce during the term of the policy will cease immediately on divorce <label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr>
                                                            </p>
                                                            
                                                            <li><strong>POLICY AND MEMBER REPLACEMENT OR MIGRATION</strong></li>
                                                            <p>Has the intermediary disclosed the following to you:</p>
                                                            <p>1.Is this policy application are replacement of the existing policy with any policy from another insurer or underwriter?</br>
                                                                If so, please state the company and policy number........................
                                                                2.Policy members can be replaced as long as the benefits are not paid to the individual.If replaced,the waiting period will apply to the</br>
                                                                individual base on the replacement date.
                                                                <label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr>
                                                            </p>
                                                            
                                                            <li><strong>RETRENCHMENT POLICY</strong></li>
                                                            <p>Has the intermediary disclosed the following to you:</p>
                                                            <p>1.If you select the package add retrenchment on to the policy, the additional cost will be added to your premium</br>
                                                                2.Members will have to produce  retirement documents or proof that they are retrenched for this benefits to apply</br>
                                                                3.The waiting period is 1 year. <label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr>
                                                            </p>
                                                            
                                                            <li><strong>PACKAGE ADD ON BENEFITS</strong></li>
                                                            <p>Has the intermediary disclosed the following to you:</p>
                                                            <p>1.If you select the package add benefits on the policy, the additional cost will be added to your premium</br>
                                                                2.Benefits will apply when the applicable member is deceased</br>
                                                                 <label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr>
                                                            </p>
                                                            
                                                            <li><strong>CASH TOP UP AND R40000.00/R50000.00 BENEFITS</strong></li>
                                                            <p>Has the intermediary disclosed the following to you:</p>
                                                            <p>1.These benefits will yield additional policy application or claim form to be signed </br>
                                                                2.No cash top up for members with R50000.00 funeral policy</br>
                                                                <label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr>
                                                            </p>
                                                            
                                                            <li><strong>NO CLAIM BENEFITS AFTER 5YEARS-8 MONTHSPREMIUM PAYMENT</strong></li>
                                                            <p>Has the intermediary disclosed the following to you:</p>
                                                            <p>1.TThis benefits will be paid on your 6th year Anniversary</br>
                                                                2.For existing members with more than 5 years, 1 year waiting period apply after joining new policy</br>
                                                                3.For existing members with less than 5 years,the current will be carried over but we will add 1 year waiting period on top after joining <label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr>
                                                            </p>
                                                            
                                                            <li><strong>ALL SERVICES OR CASH PAYMENTS ARE RENDERED IN SOUTH AFRICA</strong></li>
                                                            <p>please note that the services and cash payments are rendered in South Africa.</p>
                                                             <label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr>
                                                            </p>
                                                            
                                                            <li><strong>SPOUSE/PARTNER AGE</strong></li>
                                                            <p>The oldest spouse in age must the main member of the policy as all policies are age rated,This also impact upgrades of packages</p>
                                                            <label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr
                                                           
                                                                                                        <hr>
                                                            </p>
                                                            
                                                            <li><strong>VALUE ADDED BENEFITS</strong></li>
                                                            <p>The maximum entry age for value added benefits for new policy and upgrades is 70 years</p>
                                                            <label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr
                                                            
                                                                                                        <hr>
                                                            </p>
                                                            
                                                            <li><strong>DOWNGRADE FROM 1+13 POLICY</strong></li>
                                                            <p>A downgrade from 1+13 plociy after benefits are rendered will result in cancellation of apolicy and an applicable waiting period will apply</p>
                                                             <label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr></p>
                                                            
                                                            <li><strong>SIGNING AND ASSURANCE</strong></li>
                                                            <p>Are you content with the advice that you have received before signing?</p>
                                                             <label style="margin-left:910px">YES</label><input type="checkbox" id="test6" value="no" ng-model="isFull">
                                                                                                            NO<input type="checkbox" id="test6" value="yes" ng-model="isFull">
                                                                                                        <hr>
                                                            </p>
                                                            
                                                            <li><strong>DECLARATION BY PROPOSER/ PREMIUM PAYER</strong></li>
                                                            <p>I declare to the best of my knowledge that the partculars given are true and corrent. I understand and I agree that any misrepresentation</br>
                                                                in this application will invalidate any benefits under this policy .The insurer and underwriter shall not be liable for any benefits</br>
                                                                rendered until it has accepted the first premium. I understand that I will not be covered if I don't pay the premiums are paid in advance.</br>
                                                                 I know and understand the contents of this declaration and I have no objection it to be on my conscience</p>
                                                                
                                                            </p>
                                                        </ol>
                                                    </div>
                                                    <hr>
                                                  
                                                    <div class="half text flexrow">
                                                        <label for="advisor-date">Date</label>
                                                        <input type="date"value="<?php echo $today; ?>" name="advisor-date" id="advisor-date">
                                                    </div>
                                                  
                                                    <div class="half text flexrow">
                                                        <label for="advisor-memfullname">Member full name</label>
                                                        <input type="text" name="advisor-memfullname" id="advisor-memfullname">
                                                    </div>
                                                   
                                                    <div class="full text flexrow">
                                                    <input type="checkbox" class="form-check-input me-2" id="customCheck1">
                                                    <label class="form-label" name="terms" for="customCheck1" >
                                                            <p>
                                                            I agree
                                                            <input type="checkbox" name="popi" id="popi" style="width: 2%;vertical-align: middle;margin-bottom: 5px;" onchange="consentcheck()"></p>
                                                            </label>                                        
                                                    </div>
                                                </div>
                                                                                        <!-- <button  type="submit" class="btn btn-success waves-effect waves-light">FINAL </button> -->
                                         
                                                                                        <div style="width: 100%;">
                                                        <div style="width: 100%;">
                                                          <button type="button" id="prevBtn" class="prev blue" onclick="nextPrev(-1)" style="display: inline; float: left;">Previous</button>
                                                          <button type="button" id="nextBtn" class="nxt blue" onclick="nextPrev(1)" style="display: inline;">Next</button>
                                                          <button type="submit" id="submitBtn" class="submit blue" style="display: inline;">Submit</button>
                                                        </div>
                                                    </div>

                                                    <script>

                                                        const form = document.getElementById('wizard-validation-form');
                                                        const prevBtn = document.getElementById('prevBtn');
                                                        const nextBtn = document.getElementById('nextBtn');
                                                        const submitBtn = document.getElementById('submitBtn');
                                                        let currentTab = 0;

                                                        function showTab(n) {
                                                            const sections = form.getElementsByTagName('section');

                                                            for (let i = 0; i < sections.length; i++) {
                                                                sections[i].style.display = 'none';
                                                            }
                                                            sections[currentTab].style.display = 'block';

                                                            const columnElements = document.getElementsByClassName('process');
                                                            for (let i = 0; i < columnElements.length; i++) {
                                                                columnElements[i].style.backgroundColor = '#fff';
                                                                columnElements[i].style.color = '#000';
                                                            }

                                                            columnElements[currentTab].style.backgroundColor = '#3d74f1';
                                                            columnElements[currentTab].style.color = '#fff';

                                                            if (currentTab === 0) {
                                                                prevBtn.style.display = 'none';
                                                            } else {
                                                                prevBtn.style.display = 'block';
                                                            }

                                                            if (currentTab === sections.length - 1) {
                                                                nextBtn.style.display = 'none';

                                                            } else {
                                                                nextBtn.style.display = 'block';
                                                            }

                                                            if (currentTab !== sections.length - 1) {
                                                                submitBtn.style.display = 'none';

                                                            } else {
                                                                submitBtn.style.display = 'block';
                                                            }
                                                        }

                                                        function nextPrev(n) {
                                                            currentTab += n;
                                                            showTab(currentTab);
                                                        }

                                                        showTab(currentTab);

                                                    </script>
                                            <!-- <div class="tab" id="finalstepTab">
                                                <div style="overflow:auto;">
                                                    <div style="float:right;">
                                                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">submit</button>
                                                    
                                                    </div>
                                                </div>
                                            </div> -->
                                            
                                          
                                        </div>
                                        
        
                                                </div>

                                                <div class="actions clearfix">
                                                <ul role="menu" aria-label="Pagination">
                                                    <div class="disabled" aria-disabled="true">
                                                        <a href="#previous" role="menuitem">Previous</a>
                                                    </div>
                                                    <div aria-hidden="false" aria-disabled="false">
                                                        <a href="#next" role="menuitem">Next</a>                                                       
                                                    </div>
                                                    <div><a href="#submit" role="menuitem"> </a>
                                                </div>
                                                </ul>
                                            </div>


                                                </div> 
                                                <!-- <div class="tab" id="finalstepTab">
                                                <div style="overflow:auto;">
                                                    <div style="float:right;">
                                                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                                    <a href="#next" role="menuitem">Next</a>
                                                    </div>
                                                </div>
                                            </div> -->


                                           
                                                
                                            </fieldset>
                                            <!-- <div class="tab" id="finalstepTab">
                                                <div style="overflow:auto;">
                                                    <div style="float:right;">
                                                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                                    </div>
                                                </div>
                                            </div> -->
                                            
                                        </form>
                                    </div>

                                    <script>
var currentTab = 0; 
showTab(currentTab); 

function showTab(n) {
  .
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
 
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("form-horizontal").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

<style>
    #form-horizontal {
 
}
.tab {
  display: inline;
}



/* nextprev css  */
.wizard>.actions>ul {
    display: inline-block;
    text-align: right
}

.wizard>.actions>ul>li {
    display: block;
    margin: 0 .5em
}

.wizard>.actions a,
.wizard>.actions a:active,
.wizard>.actions a:hover {
    background-color: #67a8e4;
    border-radius: 4px;
    padding: 8px 15px;
    color: #fff;
    display:block;
}

.wizard>.actions .disabled a,
.wizard>.actions .disabled a:active,
.wizard>.actions .disabled a:hover {
    opacity: .65;
    background-color: #67a8e4;
    color: #fff;
    cursor: not-allowed;
    /* display: */
}

</style>



                                        <script>

                                            // Get all the fieldsets in the form
const fieldsets = document.querySelectorAll('fieldset');
// Get all the "next" buttons
const nextBtns = document.querySelectorAll('.nextBtn');
// Get all the "previous" buttons
const prevBtns = document.querySelectorAll('.prevBtn');
// Set the current step to 0 (the first step)
let currentStep = 0;

// Hide all the fieldsets except for the first one
for (let i = 1; i < fieldsets.length; i++) {
  fieldsets[i].style.display = 'none';
}

// Add click event listeners to the "next" buttons
for (let i = 0; i < nextBtns.length; i++) {
  nextBtns[i].addEventListener('click', () => {
    // Hide the current step
    fieldsets[currentStep].style.display = 'none';
    // Increase the current step by 1
    currentStep++;
    // Show the next step
    fieldsets[currentStep].style.display = 'block';
  });
}

// Add click event listeners to the "previous" buttons
for (let i = 0; i < prevBtns.length; i++) {
  prevBtns[i].addEventListener('click', () => {
    // Hide the current step
    fieldsets[currentStep].style.display = 'none';
    // Decrease the current step by 1
    currentStep--;
    // Show the previous step
    fieldsets[currentStep].style.display = 'block';
  });
}

                                        </script>
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

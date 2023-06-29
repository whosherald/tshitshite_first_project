@extends('Admin.layout')
@section('admin.content')


        <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Justify Tabs</h4>
                                        <p class="card-title-desc">Use the tab JavaScript plugin—include
                                            it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code>
                                            file—to extend our navigational tabs and pills to create tabbable panes
                                            of local content, even via dropdown menus.</p>

                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills nav-justified" role="tablist">
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#home-1" role="tab">
                                                    <span class="d-none d-md-block">Home</span><span class="d-block d-md-none"><i class="mdi mdi-home-variant h5"></i></span>
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab">
                                                    <span class="d-none d-md-block">Profile</span><span class="d-block d-md-none"><i class="mdi mdi-account h5"></i></span>
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-bs-toggle="tab" href="#messages-1" role="tab">
                                                    <span class="d-none d-md-block">Messages</span><span class="d-block d-md-none"><i class="mdi mdi-email h5"></i></span>
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-bs-toggle="tab" href="#settings-1" role="tab">
                                                    <span class="d-none d-md-block">Settings</span><span class="d-block d-md-none"><i class="mdi mdi-cog h5"></i></span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                                <fieldset>
                                                    <div class="row">
                                                    
                                                    </div>
                                                    <div class="row">
                                                    
                                                        <div>
                                                            <hr class="line1">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                    <div class="card-tittle" style="background-color:#67a8e4; height:50px; align:center !important; margin-bottom:20px;">
                                                    <h4 style="margin-top:10px !important; margin-left:10px !important;"> MEMBER</h4>
                                                    </div>

                                            
                                                    <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">Last Name</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtCityBilling" name="policy_number" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">Street Address</label>
                                                                <div class="col-lg-9">
                                                                    <input id="txtCityBilling" name="txtCityBilling" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">First Name</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="policy_number" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">Town or City</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="policy_number" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">ID Number</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="policy_number" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">Province</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="policy_number" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">Date of Application</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="policy_number" type="date" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">Code</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="policy_number" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="row mb-3">
                                                                    <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Tell Number</label>
                                                                    <div class="col-lg-9">
                                                                    <input id="txtCityBilling" name="policy_number" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Cell Number</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="txtCityBilling" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    
                                                        
                                                    </div>
                                                    

                                                    
                            
                                                </fieldset>
                                            
                                                <div class="card">
                                                    <div class="card-body">
                                                    
                                                        <h4 class="card-title">Claims Logged</h4>
                                                        <div class="row g-3" style="margin-top:10px !important" >
                                                        
                                                    
                                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                                            <thead>
                                                            <tr>
                                                                <th>Last Name</th>
                                                                <th>First Name</th>
                                                                <th>Tel Number</th>
                                                                <th>deceased ID Number</th>
                                                                <th>Date Of Application</th>
                                                                <th>Actions</th>
                                                                
                                                                
                                                            </tr>
                                                            </thead>


                                                            <tbody>
                                                            <tr>
                                                                <td>herald</td>
                                                                <td>ngobeni</td>
                                                                <td>0605000546</td>
                                                                <td>61</td>
                                                                <td>19908 -09 </td>
                                                                <td>
                                                                <i class=" mdi mdi-pencil-box-outline display-6 "></i>
                                                                <i class=" mdi  mdi-checkbox-multiple-marked-circle display-6 "></i>
                                                                <i class=" mdi  mdi-gmail display-6 "></i>
                                                            
                                                                </td>
                                                            </tr>
                                                            
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                
                                             </div>
                                            </div>
                                            <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                                            <fieldset>
                                                <div class="row">
                                                  
                                                </div>
                                                <div class="row">
                                                 
                                                    <div>
                                                        <hr class="line1">
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                <div class="card-tittle" style="background-color:#67a8e4; height:50px; align:center !important; margin-bottom:20px;">
                                                <h4 style="margin-top:10px !important; margin-left:10px !important;"> MEMBER</h4>
                                                 </div>

                                        
                                                <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Last Name</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="policy_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Street Address</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="txtCityBilling" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">First Name</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="policy_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Town or City</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="policy_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">ID Number</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="policy_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Province</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="policy_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Date of Application</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="policy_number" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Code</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="policy_number" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row mb-3">
                                                                <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Tell Number</label>
                                                                <div class="col-lg-9">
                                                                <input id="txtCityBilling" name="policy_number" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-md-6">
                                                        <div class="row mb-3">
                                                            <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Cell Number</label>
                                                            <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="txtCityBilling" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                   
                                                    
                                                </div>
                                                

                                                  
                        
                                            </fieldset>
                                            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                        </div>
                                        <h4 class="card-title">Claims Logged</h4>
                                        <div class="row g-3" style="margin-top:10px !important" >
                                        <div class="col-md-3"  style="margin-top:10px !important">
                                            <label for="validationCustom04" class="form-label">DATE FROM</label>
                                            <input id="txtNameCard" name="ext_tittle" type="date" class="form-control">
                                            </div>
                                            <div class="col-md-3"  style="margin-top:10px !important" >
                                            <label for="validationCustom04" class="form-label">DATE TO</label>
                                            <input id="txtNameCard" name="ext_tittle" type="date" class="form-control">
                                            </div>
                                            <div class="col-md-3"  style="margin-top:10px !important" >
                                            <label for="validationCustom04" class="form-label">STATUS</label>
                                                 <select class="form-select" id="validationCustom04" required>
                                                    <option selected disabled value="">Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                    
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                            <tr>
                                                <th>Claim NO</th>
                                                <th>Member NO</th>
                                                <th>Claim Date</th>
                                                <th>Claim Notes</th>
                                                <th>Cause of Death</th>
                                                <th>Claimant</th>
                                                <th>Contact</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            <tr>
                                                <td>1244</td>
                                                <td>9908295726082</td>
                                                <td>Mulaudzi Ni</td>
                                                <td>61</td>
                                                <td>Thohoyandou</td>
                                                <td>Active</td>
                                                <td>Active</td>
                                                <td>Active</td>
                                                
                                                <td>
                                                <i class=" mdi mdi-pencil-box-outline display-6 "></i>
                                                <i class=" mdi  mdi-checkbox-multiple-marked-circle display-6 "></i>
                                                <i class=" mdi  mdi-gmail display-6 "></i>
                                               
                                                </td>
                                            </tr>
                                            
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                                            

                                            </div>
                                            <div class="tab-pane p-3" id="messages-1" role="tabpanel">
                                                <p class="mb-0">
                                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                    sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                    farm-to-table readymade. Messenger bag gentrify pitchfork
                                                    tattooed craft beer, iphone skateboard locavore carles etsy
                                                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                    Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                    mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                                                    retro mlkshk vice blog. Scenester cred you probably haven't
                                                    heard of them, vinyl craft beer blog stumptown. Pitchfork
                                                    sustainable tofu synth chambray yr.
                                                </p>
                                            </div>
                                            <div class="tab-pane p-3" id="settings-1" role="tabpanel">
                                                <p class="mb-0">
                                                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                    art party before they sold out master cleanse gluten-free squid
                                                    scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                    art party locavore wolf cliche high life echo park Austin. Cred
                                                    vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                    farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                                    mustache readymade thundercats keffiyeh craft beer marfa
                                                    ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                                                    vegan.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Admiria.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->


@endsection
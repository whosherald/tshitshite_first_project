@extends('Admin.layout')
@section('admin.content')
 <!-- Start right Content here -->
            <!-- ============================================================== -->
            <?php
                    $NTU=DB::table('policy_details')
                    ->where('policy_status','=','NTU')                           
                    ->count();

                    $trial=DB::table('policy_details')
                    ->where('policy_status','=','On Trial')        
                    ->count();

                    $Active=DB::table('policy_details')
                    ->where('policy_status','=','Active')        
                    ->count();

                    $Archieve=DB::table('policy_details')
                    ->where('policy_status','=','Archieve')       
                    ->count();

                    $lapsed=DB::table('policy_details')
                    ->where('policy_status','=','Lapsed')      
                    ->count();

                    $deceased=DB::table('policy_details')
                    ->where('policy_status','=','Deceased')        
                    ->count();

                    $cancelled=DB::table('policy_details')
                    ->where('policy_status','=','cancelled')        
                    ->count();

                    $NotDefined=DB::table('policy_details')
                    ->where('policy_status','=','Not Defined')        
                    ->count();
             
            ?>
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                     @if(Session::has('success'))
                        <div class="card-alert card gradient-45deg-green-teal">
                            <div class="card-content white-text">
                                
                            
                            
                            <button type="button" class="btn btn-success waves-effect waves-light" data-dismiss="alert" aria-label="Close">
                                
                            <span aria-hidden="true">
                                <strong>Well done!</strong>  {{ Session::get('success') }}
                               ×</span>
                            </button>
                        </div>

                    @endif
                    
                    <style>
                                .mdi mdi-email-outline{
                                    hieght: 70px;
                                }
                                .bg-purple {
                                        background-color: #ed5565!important;
                                    }
                                    .bg-brown {
                                        background-color: #ed5565!important;
                                    }
                                    .bg-blue-grey {
                                        background-color: #ed5565!important;
                                    }
                                    .text-purple {
                                        color: #fff!important;
                                    }
                                    .text-blue-grey {
                                        color: #fff!important;
                                    }
                                    .text-brown {
                                        color: #fff!important;
                                    }
                                    .text-muted {
                                        color: #fff!important;
                                    }
                                    body {
                                        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
                                        font-size: 14px;
                                        line-height: 1.42857143;
                                        color: #333;
                                        background-color: #fff;
                                    }
                                    .mini-stat-icon {
                                    width: 50px;
                                    height: 50px;
                                    display: inline-block;
                                    line-height: 80px;
                                    text-align: left;
                                    font-size: 4em;
                                    border-radius: 50%;
                                    color: #fff;
                                   
                                    

                                }
                                .card {
                                    position: relative;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-orient: vertical;
                                    -webkit-box-direction: normal;
                                    -ms-flex-direction: column;
                                    flex-direction: column;
                                    min-width: 15px;
                                    word-wrap: break-word;
                                    background-color: #fff;
                                    background-clip: border-box;
                                    border: 1px solid #eee;
                                    border-radius: .25rem;
                                    margin-left:-5px
                                }
                                .mdi mdi-bell{
                                    margin-left:-210px;
                                }
                                .mdi mdi-email-outline{
                                    margin-left:-25px;
                                }
                                

                                
                            </style>

                      

                        <div class="row">
                                <div class="col-4"> 
                                    <div class="card-body1" style="background-color:#ed5565;height:80px;border-radius:10px 10px 10px 10px;box-shadow: 2px 5px 10px #888888; !important;">
                                        <div class="mini-stat">
                                            <span class="mini-stat-icon bg-purple me-0 float-end"><i class="mdi mdi-email-outline"style="margin-left:-25px"></i></span>
                                            <div class="mini-stat-info">
                                                <span class="counter text-purple" style="margin-left:20px">0</span>
                                                
                                            </div>
                                            <p class=" mb-0 mt-4 text-muted" style="color:#fffff;margin-left:20px;display:flex">SMS Credits: R0 </p>
                                        </div>
                                    </div>
                                </div> <!--End col -->


                            
                                <div class="col-4">
                                    <div class="card-body2"style="background-color:#ed5565;height:80px;border-radius:10px 10px 10px 10px;box-shadow: 2px 5px 10px #888888; !important;">
                                        <div class="mini-stat">
                                            <span class="mini-stat-icon bg-blue-grey me-0 float-end"><i class="mdi mdi-bell "style="margin-left:-25px;margin-top:60px"></i></span>
                                            <div class="mini-stat-info">
                                                <span class="counter text-blue-grey" style="hieght:60px;width:40px;margin-left:20px">0</span>
                                                <p class="text-muted mb-0 mt-4 s"style="margin-left:20px;display:flex">Outstanding Payments:0 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End col -->


                            <div class="col-4">
                                    <div class="card-body3"style="background-color:#ed5565;height:80px;border-radius:10px 10px 10px 10px;box-shadow: 2px 5px 10px #888888; !important;">
                                        <div class="mini-stat">
                                            <span class="mini-stat-icon bg-brown me-0 float-end" ><i class="mdi mdi-trophy"style="margin-left:-25px"></i></span>
                                            <div class="mini-stat-info">
                                                <span class="counter text-brown" style="margin-left:20px">0</span>
                                                
                                            </div>
                                            <p class="text-muted mb-0 mt-4"style="margin-left:20px;display:flex">Premium collected: 0 </p>
                                        </div>
                                    </div>
                                </div>
                           <!--end col -->
                        </div> <!-- end row-->

                        

<!-- chart css related -->
                                <style>

                               

                                    
                                    body, table, input, select, textarea {

                                    }


                                    .graph {
                                        margin-bottom:1em;
                                    font:normal 100%/150% arial,helvetica,sans-serif;
                                    }

                                    .graph caption {
                                        font:bold 150%/120% arial,helvetica,sans-serif;
                                        padding-bottom:0.33em;
                                    }

                                    .graph tbody th {
                                        text-align:right;
                                    }
                                    @media screen {
                                        
                                    }

                                    @supports (display:grid) {

                                        @media (min-width:32em) {

                                            .graph {
                                                display:block;
                                        width:600px;
                                        height:300px;
                                            }

                                            .graph caption {
                                                display:block;
                                            }

                                            .graph thead {
                                                display:none;
                                            }

                                            .graph tbody {
                                                position:relative;
                                                display:grid;
                                                grid-template-columns:repeat(auto-fit, minmax(2em, 1fr));
                                                column-gap:2.5%;
                                                align-items:end;
                                                height:100%;
                                                margin:3em 0 1em 2.8em;
                                                padding:0 1em;
                                                border-bottom:2px solid rgba(0,0,0,0.5);
                                                background:repeating-linear-gradient(
                                                    180deg,
                                                    rgba(170,170,170,0.7) 0,
                                                    rgba(170,170,170,0.7) 1px,
                                                    transparent 1px,
                                                    transparent 20%
                                                );
                                            }

                                            .graph tbody:before,
                                            .graph tbody:after {
                                                position:absolute;
                                                left:-3.2em;
                                                width:2.8em;
                                                text-align:right;
                                                font:bold 80%/120% arial,helvetica,sans-serif;
                                            }

                                            .graph tbody:before {
                                                content:"100%";
                                                top:-0.6em;
                                            }

                                            .graph tbody:after {
                                                content:"0%";
                                                bottom:-0.6em;
                                            }

                                            .graph tbody:middle {
                                                content:"50%";
                                                bottom:-0.6em;
                                            }

                                            .graph tr {
                                                position:relative;
                                                display:block;
                                            }

                                            .graph tr:hover {
                                                z-index:999;
                                            }

                                            .graph th,
                                            .graph td {
                                                display:block;
                                                text-align:center;
                                            }

                                            .graph tbody th {
                                                position:absolute;
                                                top:-3em;
                                                left:0;
                                                width:100%;
                                                font-weight:normal;
                                                text-align:center;
                                                white-space:nowrap;
                                                text-indent:0;
                                                transform:rotate(-45deg);
                                            }

                                            .graph tbody th:after {
                                                content:"";
                                            }

                                            .graph td {
                                                width:100%;
                                                height:100%;
                                                background:#F63;
                                                /* border-radius:0.5em 0.5em 0 0; */
                                                transition:background 0.5s;
                                            }

                                            .graph tr:hover td {
                                                opacity:0.7;
                                            }

                                            .graph td span {
                                                overflow:hidden;
                                                position:absolute;
                                                left:50%;
                                                top:50%;
                                                width:0;
                                                padding:0.5em 0;
                                                margin:-1em 0 0;
                                                font:normal 85%/120% arial,helvetica,sans-serif;
                                    /* 			background:white; */
                                    /* 			box-shadow:0 0 0.25em rgba(0,0,0,0.6); */
                                                font-weight:bold;
                                                opacity:0;
                                                transition:opacity 0.5s;
                                        color:white;
                                            }

                                            .toggleGraph:checked + table td span,
                                            .graph tr:hover td span {
                                                width:4em;
                                                margin-left:-2em; /* 1/2 the declared width */
                                                opacity:1;
                                            }



                                        


                                        } /* min-width:32em */

                                    } /* grid only */
                                </style>

                <!-- chart related -->

                         <div class="row">
                            <div class="col-xl-9">
                                <div class="row">
                                    <div class="col-md-9 monthly-earning-wid">
                                        <div class="card"style="height: 450px;margin-top:15px;margin-left:-12px;width:620px;background-color:#eee;box-shadow: 2px 5px 10px #888888;">
                                            <div class="card-body"style="height: 400px;margin-top:15px;margin-left:-10px;width:580px">
                                            <table class="graph">
                                                <caption>new policies for the last 6 months</caption>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Item</th>
                                                        <th scope="col">Percent</th>
                                                    </tr>
                                                </thead><tbody>
                                                    <tr style="height:85%">
                                                        <th scope="row">June</th>
                                                        <td><span>85%</span></td>
                                                    </tr>
                                                    <tr style="height:23%">
                                                        <th scope="row">July</th>
                                                        <td><span>23%</span></td>
                                                    </tr>
                                                    <tr style="height:7%">
                                                        <th scope="row">August</th>
                                                        <td><span>7%</span></td>
                                                    </tr>
                                                    <tr style="height:38%">
                                                        <th scope="row">September</th>
                                                        <td><span>38%</span></td>
                                                    </tr>
                                                    <tr style="height:35%">
                                                        <th scope="row">October</th>
                                                        <td><span>35%</span></td>
                                                    </tr>
                                                    <tr style="height:30%">
                                                        <th scope="row">November</th>
                                                        <td><span>30%</span></td>
                                                    </tr>
                                                    <tr style="height:5%">
                                                        <th scope="row">December</th>
                                                        <td><span>5%</span></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>

                                                
                                            </div>
                                        </div>
                                    </div>
<!--                                     
                                </div>

                            </div>  -->




                        <!-- <div class="row">
                            <div class="col-xl-9">
                                <div class="row">
                                    <div class="col-md-9 monthly-earning-wid">
                                        <div class="card" style="height: 480px;">
                                            <div class="card-body">
                                                <h4 class="card-title">New Policy</h4>

                                                <div class="text-center">
                                                    <div class="btn-group mt-4" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-secondary">Day</button>
                                                        <button type="button" class="btn btn-secondary">Month</button>
                                                        <button type="button" class="btn btn-secondary">Year</button>
                                                    </div>
                                                </div>
                                                <div id="combine-chart" dir="ltr"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div> -->
                                    
                            <div class="col-xl-3">
                                <!-- <div class="card"style="height: 450px;margin-top:15px;margin-left:10px;width:620px"> -->
                                    <div class="card-body">
                                        <div id="piechart_3d" style="width: 800px; height: 500px;margin-left:-60px"></div>
                                            <script type="text/javascript">
        // Load google charts

                                                    google.charts.load("current", {packages:["corechart"]});
                                                google.charts.setOnLoadCallback(drawChart);
                                                function drawChart() {
                                                    var data = google.visualization.arrayToDataTable([
                                                    ['policy', 'Hours per Day'],
                                                    
                                                    ['NTU',     1],
                                                    ['On Trial',      2],
                                                    ['Active',  2],
                                                    ['Lapsed', 2],
                                                    ['Deleted',   4],
                                                    ['Deceased',   3],
                                                    ['Not Defined',  1 ]
                                                    ]);

                                                    var options = {
                                                    title: 'Total Policies',
                                                    is3D: true,
                                                    };

                                                    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                                                    chart.draw(data, options);
                                                }
                                            </script>

                                        </div>
                                    </div>
                                <!-- </div> -->



                                
                        </div>

                        
                        
                        <div class="row">
                            <div class="col-xl-9 herald">
                                <div class="row-month">
                                    <div class="col-md-9 monthly-earning-wid">
                                    <div class="carda"style="height: 450px;margin-top:15px;margin-left:-5px;width:620px;background-color:#eee;box-shadow: 2px 5px 10px #888888;">
                                        <div class="card-body"style="height: 400px;margin-top:15px;margin-left:-1px;width:580px">
                                            <table class="graph">
                                                <caption>premium collected for the last 6 months</caption>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Item</th>
                                                        <th scope="col">Percent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr style="height:25%">
                                                        <th scope="row">June</th>
                                                        <td><span>25%</span></td>
                                                    </tr>
                                                    <tr style="height:13%">
                                                        <th scope="row">July</th>
                                                        <td><span>13%</span></td>
                                                    </tr>
                                                    <tr style="height:7%">
                                                        <th scope="row">August</th>
                                                        <td><span>7%</span></td>
                                                    </tr>
                                                    <tr style="height:58%">
                                                        <th scope="row">September</th>
                                                        <td><span>38%</span></td>
                                                    </tr>
                                                    <tr style="height:8%">
                                                        <th scope="row">October</th>
                                                        <td><span>8%</span></td>
                                                    </tr>
                                                    <tr style="height:50%">
                                                        <th scope="row">November</th>
                                                        <td><span>50%</span></td>
                                                    </tr>
                                                    <tr style="height: 53px;%">
                                                        <th scope="row">December</th>
                                                        <td><span>53%</span></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>

                                                
                                        </div>
                                    </div>
                                        



                        <div class="row">
                            <div id="holecards" class="col-3"style="margin-left:680px;margin-top:-460px"> 
                                <div class="card-body1" style="background-color:#c9c9c9;height:80px;border-radius:10px 10px 10px 10px;box-shadow: 2px 5px 10px #888888; !important;">
                                    <div class="text-center">
                                        <div dir="ltr" class="a">
                                            <input class="knob" data-width="80" data-height="80" data-linecap=round
                                                data-fgColor="#3366cc" value={{$NTU}} data-skin="tron" data-angleOffset="180"
                                                data-readOnly=true data-thickness=".1">
                                        </div>
                                        
                                            <a href="{{('/ntu')}}" class="btn btn-sm text-white mt-4"style="background-color:#3366cc">View All NTU</a>
                                    </div>                                
                                        
                                            
                                </div>
                            </div> <!--End col -->


                            
                            <div class="col-3"style="margin-left:830px;margin-top:-460px">
                                <div class="card-body2"style="background-color:#c9c9c9;height:80px;border-radius:10px 10px 10px 10px;box-shadow: 2px 5px 10px #888888; !important;">
                                    <div class="text-center">
                                        <div dir="ltr" class="b">
                                            <input class="knob" data-width="80" data-height="80" data-linecap=round
                                                data-fgColor="#ff9900" value={{$Archieve}} data-skin="tron" data-angleOffset="180"
                                                    data-readOnly=true data-thickness=".1">
                                        </div>
                                        
                                            <a href="{{('/active')}}" class="btn btn-sm text-white mt-4"style="background-color:#ff9900">View All Active</a>
                                    </div>                               
                                        
                                                                        
                                </div>
                            </div> <!-- End col -->


                            <div class="col-3"style="margin-left:980px;margin-top:-460px">
                                <div class="card-body3"style="background-color:#c9c9c9;height:80px;border-radius:10px 10px 10px 10px;box-shadow: 2px 5px 10px #888888; !important;">
                                    <div class="text-center">
                                        <div dir="ltr" class="c">
                                            <input class="knob" data-width="80" data-height="80" data-linecap=round
                                                data-fgColor="#0099c6" value={{$deceased}} data-skin="tron" data-angleOffset="180"
                                                data-readOnly=true data-thickness=".1">
                                        </div>
                                        
                                            <a href="{{('/deceased-card')}}" class="btn btn-sm text-white mt-4"style="background-color:#0099c6">View All Deceased</a>
                                    </div>                              
                                        
                                                                        
                                </div>
                            </div>
                            <div class="col-3"style="margin-left:1130px;margin-top:-460px">
                                <div class="card-body3"style="background-color:#c9c9c9;height:80px;border-radius:10px 10px 10px 10px;box-shadow: 2px 5px 10px #888888; !important;">
                                    <div class="text-center">
                                        <div dir="ltr" class="d">
                                            <input class="knob" data-width="80" data-height="80" data-linecap=round
                                                data-fgColor="#109618" value={{$lapsed}} data-skin="tron" data-angleOffset="180"
                                                data-readOnly=true data-thickness=".1">
                                        </div>
                                        
                                            <a href="{{('/lapsed')}}" class="btn btn-sm text-white mt-4"style="background-color:#109618">View All Lapsed</a>
                                    </div>                                
                                </div>    
                            </div>                                
                                    
                                
                            <div class="col-3"style="margin-left:680px;margin-top:-300px">
                                <div class="card-body3"style="background-color:#c9c9c9;height:80px;border-radius:10px 10px 10px 10px;box-shadow: 2px 5px 10px #888888; !important;">
                                    <div class="text-center">
                                       <div dir="ltr" class="e">
                                            <input class="knob" data-width="80" data-height="80" data-linecap=round
                                                data-fgColor="#dc3912" value={{$trial}} data-skin="tron" data-angleOffset="180"
                                                data-readOnly=true data-thickness=".1">
                                        </div>
                                        
                                            <a href="{{('/on-trial')}}" class="btn btn-sm text-white mt-4"style="background-color:#dc3912">View All On Trial</a>
                                    </div>                               
                                    
                                                                        
                                </div>
                            </div>
                            <div class="col-3"style="margin-left:830px;margin-top:-300px">
                                <div class="card-body3"style="background-color:#c9c9c9;height:80px;border-radius:10px 10px 10px 10px;box-shadow: 2px 5px 10px #888888; !important;">
                                    <div class="text-center">
                                        <div dir="ltr" class="f">
                                            <input class="knob" data-width="80" data-height="80" data-linecap=round
                                            data-fgColor="#990099" value={{$cancelled}} data-skin="tron" data-angleOffset="180"
                                            data-readOnly=true data-thickness=".1">
                                        </div>
                                        
                                            <a href="{{('/cancelled')}}" class="btn btn-sm text-white mt-4"style="background-color:#990099">View All Deleted </a>
                                    </div>                           
                                </div>
                                                                        
                            </div>


                                <div class="col-3"style="margin-left:980px;margin-top:-300px">
                                    <div class="card-body3"style="background-color:#c9c9c9;height:80px;border-radius:10px 10px 10px 10px;box-shadow: 2px 5px 10px #888888; !important;">
                                        <div class="text-center">
                                            <div dir="ltr" class="g">
                                                <input class="knob" data-width="80" data-height="80" data-linecap=round
                                                    data-fgColor="#dd4477" value={{$NotDefined}} data-skin="tron" data-angleOffset="180"
                                                    data-readOnly=true data-thickness=".1">
                                            </div>
                                        
                                                <a href="notdefined" class="btn btn-sm text-white mt-4"style="background-color:#dd4477">View All Not Defined</a>
                                        </div>                           
                                    </div>
                                                                        
                                </div>
                        </div>

                                <!-- <div class="col-3"style="margin-left:1140px;margin-top:-300px">
                                    <div class="card-body3"style="background-color:#c9c9c9;height:80px;border-radius:10px 10px 10px 10px;box-shadow: 2px 5px 10px #888888; !important;">
                                        <div class="text-center">
                                            <div dir="ltr">
                                                <input class="knob" data-width="80" data-height="80" data-linecap=round
                                                    data-fgColor="#990099" value="66" data-skin="tron" data-angleOffset="180"
                                                    data-readOnly=true data-thickness=".1">
                                            </div>
                                        
                                                <a href="#" class="btn btn-sm text-white mt-4"style="background-color:#109618">View All Lapsed</a>
                                        </div>                           
                                    </div>
                                                                        
                                </div> -->
                                
                           <!--end col -->
                         <!-- end row-->

                                        
                                         <!-- End of bar chart -->


                                         <!-- <style>
                                            .recent-info{
                                                display:grid;
                                                grid-template-columns:repeat(3,1fr);
                                                gap:1.6rem;
                                            }
                                         </style> -->
                                         


                                         
                                            
                                        
                                    


                                   <!-- monthly table -->

                        






                                            <style>
                                                 .card-table{position:relative;
                                                            display:grid;
                                                            grid-template-columns:repeat(auto-fit, minmax(2em, 1fr));
                                                 }
                                            </style>
                                    
                                                   
                                                            <!-- <div class="table" style:="position:relative;display:grid;grid-template-columns:repeat(auto-fit, minmax(2em, 1fr))">
                                                                <div class="card"style:="position:relative;display:grid;grid-template-columns:repeat(auto-fit, minmax(2em, 1fr));column-gap:2.5%;">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">NTU</h4>
                                        
                                                                        <div class="text-center">
                                                                            <div dir="ltr">
                                                                                <input class="knob" data-width="80" data-height="80" data-linecap=round
                                                                                    data-fgColor="#3366cc" value="80" data-skin="tron" data-angleOffset="180"
                                                                                    data-readOnly=true data-thickness=".1">
                                                                            </div>
                                        
                                                                            <a href="#" class="btn btn-sm text-white mt-4"style="background-color:#3366cc">View All NTU</a>
                                                                            
                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            
                                        
                                                          
                                                                <div class="card"style:="position:relative;display:grid;grid-template-columns:repeat(auto-fit, minmax(2em, 1fr));column-gap:2.5%;">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">ACTIVE</h4>
                                        
                                                                        <div class="text-center">
                                                                            <div dir="ltr">
                                                                                <input class="knob" data-width="80" data-height="80" data-linecap=round
                                                                                    data-fgColor="#ff9900" value="68" data-skin="tron" data-angleOffset="180"
                                                                                    data-readOnly=true data-thickness=".1">
                                                                            </div>
                                        
                                                                            <a href="#" class="btn btn-sm text-white mt-4"style="background-color:#ff9900">View All Active</a>
                                                                            
                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            
                                        
                                                            
                                                                <div class="card"style:="position:relative;display:grid;grid-template-columns:repeat(auto-fit, minmax(2em, 1fr));column-gap:2.5%;">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">DECEASED</h4>
                                        
                                                                        <div class="text-center">
                                                                            <div dir="ltr">
                                                                                <input class="knob" data-width="80" data-height="80" data-linecap=round
                                                                                    data-fgColor="#0099c6" value="39" data-skin="tron" data-angleOffset="180"
                                                                                    data-readOnly=true data-thickness=".1">
                                                                            </div>
                                        
                                                                            <a href="#" class="btn btn-sm text-white mt-4"style="background-color:#0099c6">View All Deceased</a>
                                                                            
                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            
                                        
                                                            
                                                                <div class="card"style:="position:relative;display:grid;grid-template-columns:repeat(auto-fit, minmax(2em, 1fr));column-gap:2.5%;">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">LAPSED</h4>
                                        
                                                                        <div class="text-center">
                                                                            <div dir="ltr">
                                                                                <input class="knob" data-width="80" data-height="80" data-linecap=round
                                                                                    data-fgColor="#109618" value="95" data-skin="tron" data-angleOffset="180"
                                                                                    data-readOnly=true data-thickness=".1">
                                                                            </div>
                                        
                                                                            <a href="#" class="btn btn-sm text-white mt-4"style="background-color:#109618">View All Lapsed</a>
                                                                            
                                    
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                    
                        -->




                                    
                                    <!-- <div class="recent-info">
                                                <h2> Monthly Stats</h2>
                                                <table class="table table-secondary table-hover;striped table-width" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead  class="table-head">
                                                        <tr>
                                                                                                                  
                                                            <th>NTU</th>
                                                            <th>On Trial</th>
                                                            <th>Archieve</th>
                                                            <th>Lapsed</th>
                                                            <th>Deceased</th>
                                                            <th>Deleted</th>
                                                            <th>Not Defined</th>
                                                            
                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                {{$NTU}}
                                                            </td>
                                                            <td>
                                                                {{$trial}}
                                                            </td>
                                                            <td>
                                                                {{$Archieve}}
                                                            </td>
                                                            <td>
                                                                {{$lapsed}}
                                                            </td>
                                                            <td>
                                                               {{$deceased}}
                                                            </td>
                                                            <td>
                                                                {{$cancelled}}
                                                            </td>
                                                            <td>
                                                                {{$NotDefined}}
                                                            </td>
                                                        </tr>
                                                       
                                                   
                                                    </tbody>
                                                </table>
                                            </div> -->
                                </div>
                            </div>
                        </div>        
                        <!-- end row -->


                        <!-- <div class="row">
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Recent Stock</h4>

                                        <div class="text-center">
                                            <div dir="ltr">
                                                <input class="knob" data-width="120" data-height="120" data-linecap=round
                                                    data-fgColor="#ffbb44" value="80" data-skin="tron" data-angleOffset="180"
                                                    data-readOnly=true data-thickness=".1">
                                            </div>

                                            <a href="#" class="btn btn-sm btn-warning text-white mt-4">View All Data</a>
                                            <ul class="list-inline row mt-4 clearfix">
                                                <li class="col-6">
                                                    <p class="mb-1 font-size-18 fw-bold">7,541</p>
                                                    <p class="mb-0">Mobile Phones</p>
                                                </li>
                                                <li class="col-6">
                                                    <p class="mb-1 font-size-18 fw-bold">125</p>
                                                    <p class="mb-0">Desktops</p>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Purchase Order</h4>

                                        <div class="text-center">
                                            <div dir="ltr">
                                                <input class="knob" data-width="120" data-height="120" data-linecap=round
                                                    data-fgColor="#4ac18e" value="68" data-skin="tron" data-angleOffset="180"
                                                    data-readOnly=true data-thickness=".1">
                                            </div>

                                            <a href="#" class="btn btn-sm btn-success mt-4">View All Data</a>
                                            <ul class="list-inline row mt-4 clearfix">
                                                <li class="col-6">
                                                    <p class="mb-1 font-size-18 fw-bold">2,541</p>
                                                    <p class="mb-0">Mobile Phones</p>
                                                </li>
                                                <li class="col-6">
                                                    <p class="mb-1 font-size-18 fw-bold">874</p>
                                                    <p class="mb-0">Desktops</p>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Shipped Orders</h4>

                                        <div class="text-center">
                                            <div dir="ltr">
                                                <input class="knob" data-width="120" data-height="120" data-linecap=round
                                                    data-fgColor="#8d6e63" value="39" data-skin="tron" data-angleOffset="180"
                                                    data-readOnly=true data-thickness=".1">
                                            </div>

                                            <a href="#" class="btn btn-sm btn-brown mt-4">View All Data</a>
                                            <ul class="list-inline row mt-4 clearfix">
                                                <li class="col-6">
                                                    <p class="mb-1 font-size-18 fw-bold">1,154</p>
                                                    <p class="mb-0">Mobile Phones</p>
                                                </li>
                                                <li class="col-6">
                                                    <p class="mb-1 font-size-18 fw-bold">89</p>
                                                    <p class="mb-0">Desktops</p>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Cancelled Orders</h4>

                                        <div class="text-center">
                                            <div dir="ltr">
                                                <input class="knob" data-width="120" data-height="120" data-linecap=round
                                                    data-fgColor="#90a4ae" value="95" data-skin="tron" data-angleOffset="180"
                                                    data-readOnly=true data-thickness=".1">
                                            </div>

                                            <a href="#" class="btn btn-sm btn-blue-grey mt-4">View All Data</a>
                                            <ul class="list-inline row mt-4 clearfix">
                                                <li class="col-6">
                                                    <p class="mb-1 font-size-18 fw-bold">95</p>
                                                    <p class="mb-0">Mobile Phones</p>
                                                </li>
                                                <li class="col-6">
                                                    <p class="mb-1 font-size-18 fw-bold">25</p>
                                                    <p class="mb-0">Desktops</p>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> -->
                        <!-- end row -->

                       
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

               
            </div>
            <!-- end main content-->
@endsection
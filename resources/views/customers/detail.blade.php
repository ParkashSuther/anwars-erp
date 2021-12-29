<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Avant</title>
     @include('layouts.header')
    
<link rel='stylesheet' type='text/css' href='../assets/plugins/datatables/dataTables.css' /> 
    <link rel='stylesheet' type='text/css' href='../assets/plugins/codeprettifier/prettify.css' /> 
    <link rel='stylesheet' type='text/css' href='../assets/plugins/form-toggle/toggles.css' /> 
<!-- <script type="text/javascript" src="assets/js/less.js"></script> -->
    
</head>

<body class="">

    @include('sweetalert::alert')
       @include('layouts.navbar')

    <div id="page-container">
        <!-- BEGIN SIDEBAR -->
        @include('layouts/aside_left')

        <!-- BEGIN RIGHTBAR -->
        <div id="page-rightbar">

            <div id="chatarea">
                <div class="chatuser">
                    <span class="pull-right">Jane Smith</span>
                    <a id="hidechatbtn" class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
                <div class="chathistory">
                    <div class="chatmsg">
                        <p>Hey! How's it going?</p>
                        <span class="timestamp">1:20:42 PM</span>
                    </div>
                    <div class="chatmsg sent">
                        <p>Not bad... i guess. What about you? Haven't gotten any updates from you in a long time.</p>
                        <span class="timestamp">1:20:46 PM</span>
                    </div>
                    <div class="chatmsg">
                        <p>Yeah! I've been a bit busy lately. I'll get back to you soon enough.</p>
                        <span class="timestamp">1:20:54 PM</span>
                    </div>
                    <div class="chatmsg sent">
                        <p>Alright, take care then.</p>
                        <span class="timestamp">1:21:01 PM</span>
                    </div>
                </div>
                <div class="chatinput">
                    <textarea name="" rows="2"></textarea>
                </div>
            </div>

            <div id="widgetarea">
                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#accsummary"><h4>Account Summary</h4></a>
                    </div>
                    <div class="widget-body collapse in" id="accsummary">
                        <div class="widget-block" style="background: #7ccc2e; margin-top:10px;">
                            <div class="pull-left">
                                <small>Current Balance</small>
                                <h5>$71,182</h5>
                            </div>
                            <div class="pull-right"><div id="currentbalance"></div></div>
                        </div>
                        <div class="widget-block" style="background: #595f69;">
                            <div class="pull-left">
                                <small>Account Type</small>
                                <h5>Business Plan A</h5>
                            </div>
                            <div class="pull-right">
                                <small class="text-right">Monthly</small>
                                <h5>$19<small>.99</small></h5>
                            </div>
                        </div>
                        <span class="more"><a href="#">Upgrade Account</a></span>
                    </div>
                </div>


                <div id="chatbar" class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#chatbody"><h4>Online Contacts <small>(5)</small></h4></a>
                    </div>
                    <div class="widget-body collapse in" id="chatbody">
                        <ul class="chat-users">
                            <li data-stats="online"><a href="javascript:;"><img src="../assets/demo/avatar/potter.png" alt=""><span>Jeremy Potter</span></a></li>
                            <li data-stats="online"><a href="javascript:;"><img src="../assets/demo/avatar/tennant.png" alt=""><span>David Tennant</span></a></li>
                            <li data-stats="online"><a href="javascript:;"><img src="../assets/demo/avatar/johansson.png" alt=""><span>Anna Johansson</span></a></li>
                            <li data-stats="busy"><a href="javascript:;"><img src="../assets/demo/avatar/jackson.png" alt=""><span>Eric Jackson</span></a></li>
                            <li data-stats="away"><a href="javascript:;"><img src="../assets/demo/avatar/jobs.png" alt=""><span>Howard Jobs</span></a></li>
                        </ul>
                        <span class="more"><a href="#">See all</a></span>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#taskbody"><h4>Pending Tasks <small>(5)</small></h4></a>
                    </div>
                    <div class="widget-body collapse in" id="taskbody">
                        <div class="contextual-progress" style="margin-top:10px;">
                            <div class="clearfix">
                                <div class="progress-title">Backend Development</div>
                                <div class="progress-percentage"><span class="label label-info">Today</span> 25%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" style="width: 25%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Bug Fix</div>
                                <div class="progress-percentage"><span class="label label-primary">Tomorrow</span> 17%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-primary" style="width: 17%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Javascript Code</div>
                                <div class="progress-percentage">70%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Preparing Documentation</div>
                                <div class="progress-percentage">6%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-danger" style="width: 6%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">App Development</div>
                                <div class="progress-percentage">20%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-orange" style="width: 20%"></div>
                            </div>
                        </div>
                        
                        <span class="more"><a href="ui-progressbars.htm">View all Pending</a></span>
                    </div>
                </div>

 

                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#storagespace"><h4>Storage Space</h4></a>
                    </div>
                    <div class="widget-body collapse in" id="storagespace">
                        <div class="clearfix" style="margin-bottom: 5px;margin-top:10px;">
                            <div class="progress-title pull-left">1.31 GB of 1.50 GB used</div>
                            <div class="progress-percentage pull-right">87.3%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 50%"></div>
                            <div class="progress-bar progress-bar-warning" style="width: 25%"></div>
                            <div class="progress-bar progress-bar-danger" style="width: 12.3%"></div>
                        </div>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#serverstatus"><h4>Server Status</h4></a>
                    </div>
                    <div class="widget-body collapse in" id="serverstatus">
                        <div class="clearfix" style="padding: 10px 24px;">
                            <div class="pull-left">
                                <div class="easypiechart" id="serverload" data-percent="67">
                                        <span class="percent"></span>
                                </div>
                                <label for="serverload">Load</label>
                            </div>
                            <div class="pull-right">
                                <div class="easypiechart" id="ramusage" data-percent="20.6">
                                    <span class="percent"></span>
                                </div>
                                <label for="ramusage">RAM: 422MB</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END RIGHTBAR -->
               <!-- END RIGHTBAR -->
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="">Customer</a></li>
                <li>Customer Details</li>
                <li class="active">{{$customer->c_firstname}}</li>
            </ol>

            <h1>Customer Details</h1>
            <div class="options">
                    <div class="btn-toolbar">
                        <div class="btn-group hidden-xs">
                            <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-sm"> Export as  </span><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Text File (*.txt)</a></li>
                                <li><a href="#">Excel File (*.xlsx)</a></li>
                                <li><a href="#">PDF File (*.pdf)</a></li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-default"><i class="fa fa-cog"></i></a>
                    </div>
                </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-midnightblue">
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="panel panel-midnightblue">
                                        <div class="panel-heading">
                                            Personal Detail
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                        <table cellspacing="0" border="0" class="table table-striped">
                                            
                                            <tbody>
                                                <tr>
                                                    <td>First Name</td>
                                                    <td>{{$customer->c_prefix}} {{$customer->c_firstname}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Last Name</td>
                                                    <td>{{$customer->c_lastname}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Company Name</td>
                                                    <td>{{$customer->c_company}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Color</td>
                                                    <td>{{$customer->c_color}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel panel-midnightblue">
                                        <div class="panel-heading">
                                            Contact Detail
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                        <table cellspacing="0" border="0" class="table table-striped">
                                            
                                            <tbody> 
                                                <tr>
                                                    <td>Email</td>
                                                    <td>{{$customer->c_email}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Phone Number</td>
                                                    <td>{{$customer->c_phone}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Whatsapp Number</td>
                                                    <td>{{$customer->c_whatsapp}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td>
                                                        @if($customer->c_status ==1)         
                                                            Active       
                                                        @else
                                                            Block       
                                                        @endif
                                                    </td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                             <div class="row">
                              <div class="col-md-12">
                                    <div class="panel panel-sky">
                                        <div class="panel-heading">
                                            <h4>Addresses</h4>
                                            <div class="options">   
                                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                                <a href="javascript:;"><i class="fa fa-wrench"></i></a>
                                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                                            </div>
                                        </div>
                                        <div class="panel-body collapse in">
                                        <table cellpadding="0" cellspacing="0" border="0" class="table   table-bordered datatables" id="">
                                            <thead>
                                                <tr>
                                                    <th>Location Name</th>
                                                    <th>Address Name</th>
                                                    <th>Company Name</th>
                                                    <th>Phone 1</th>
                                                    <th>Phone 2</th>
                                                    <th>Address 1</th>
                                                    <th>Address 2</th>
                                                    <th>City</th>
                                                    <th>Zip Code</th>
                                                    <th>Country</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($addresses as $address)
                                                    <tr class="odd gradeX">
                                                        <td>{{$address->ca_location_name}}</td>
                                                        <td>{{$address->ca_prefix}} {{$address->ca_firstname}} {{$address->ca_lastname}}</td>
                                                        <td>{{$address->ca_company}}</td>
                                                       <td>{{$address->ca_phone1}}</td>
                                                       <td class="center">{{$address->ca_phone2}}</td>
                                                       <td class="center">{{$address->ca_address1}}</td>
                                                       <td class="center">{{$address->ca_address2}}</td>
                                                       <td class="center">{{$address->ca_city}}</td>
                                                       <td class="center">{{$address->ca_zip}}</td>
                                                       <td class="center">{{$address->ca_country}}</td>
                                                       <td class="center">
                                                           <a href="/customers/delete/cid={{$address->c_id}}&aid={{$address->ca_id}}">Delete</a>
                                                       </td>
                                                    </tr>
                                                @endforeach
                                                 
                                            </tbody>

                                        </table>
                                        <div class="text-right">
                                            <a data-toggle="modal" href="#myModal" class="btn btn-primary">Add Address</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                    <div class="panel panel-sky">
                                        <div class="panel-heading">
                                            <h4>Recent Orders</h4>
                                            <div class="options">   
                                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                                <a href="javascript:;"><i class="fa fa-wrench"></i></a>
                                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                                            </div>
                                        </div>
                                        <div class="panel-body collapse in">
                                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="">
                                            <thead>
                                                <tr>
                                                    <th>Order Id</th>
                                                    <th>Product Name</th>
                                                    <th>Vendor Name</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>1234</td>
                                                    <td>
                                                        <a href="#">
                                                            Product Name
                                                        </a>
                                                    </td>
                                                       <td>
                                                           <a href="#">
                                                               ABC Vendor
                                                           </a>
                                                       </td>
                                                       <td class="center">2</td>
                                                       <td class="center">PKR 3,400</td>
                                                       <td class="center">Active</td>
                                                       <td class="center">
                                                           <a href="#">Detail</a>
                                                       </td>
                                                   </tr>
                                                   
                                                   <tr class="odd gradeX">
                                                    <td>1234</td>
                                                    <td>
                                                        <a href="#">
                                                            Product Name
                                                        </a>
                                                    </td>
                                                       <td>
                                                           <a href="#">
                                                               ABC Vendor
                                                           </a>
                                                       </td>
                                                       <td class="center">521</td>
                                                       <td class="center">PKR 8,36,400</td>
                                                       <td class="center">Active</td>
                                                       <td class="center">
                                                           <a href="#">Detail</a>
                                                       </td>
                                                   </tr>
                                                
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
            



        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

        <!-- page-content -->


<!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form method="POST" class="form-horizontal">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$customer->c_id}}">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Add Address</h4>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Prefix</label>
                                                        <div class="col-sm-6">
                                                            <select class="form-control" name="ca_prefix" id="source">
                                                                <option value="Mr.">Mr</option>
                                                                <option value="Mrs.">Mrs</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">First Name</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" name="ca_firstname" placeholder="Enter Location Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Last Name</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" name="ca_lastname" placeholder="Enter Location Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Company</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="ca_company" class="form-control" placeholder="Company">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Phone 1</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="ca_phone1" class="form-control mask" data-inputmask="'mask':'+99 999 9999999'">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Phone 2</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="ca_phone2" class="form-control mask" data-inputmask="'mask':'+99 999 9999999'">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Address 1</label>
                                                        <div class="col-sm-6">
                                                            <!-- <input type="text" class="form-control"> -->
                                                            <textarea name="ca_address1" style="width: 100% ;height: 50px" placeholder="Enter Address"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Address 2</label>
                                                        <div class="col-sm-6">
                                                            <textarea name="ca_address2" style="width: 100%;height: 50px" placeholder="Enter Address "></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">City</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" name="ca_city" id="customer_city" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Zip Code</label>
                                                        <div class="col-sm-6">
                                                            <input name="ca_zip" type="text" class="form-control" placeholder="Zip Code">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Country</label>
                                                        <div class="col-sm-6">
                                                            <input name="ca_country" type="text" class="form-control" style="width:100% !important;" placeholder="Country" id="countries">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                             
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div><!-- /.modal-content --></form>
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->



@include('layouts.scripts')    


</div> <!-- page-container -->

@include('layouts.footer')

<script type='text/javascript' src='../assets/plugins/datatables/jquery.dataTables.min.js'></script> 
<script type='text/javascript' src='../assets/plugins/datatables/dataTables.bootstrap.js'></script> 
<script type='text/javascript' src='../assets/demo/demo-datatables.js'></script>  
<script type='text/javascript' src='../assets/demo/demo-modals.js'></script> 
<script type='text/javascript' src='../assets/plugins/form-inputmask/jquery.inputmask.bundle.min.js'></script> 
<script type='text/javascript' src='../assets/demo/demo-mask.js'></script> 

<script>
    $(function() {
        
        $('#customer_city').typeahead({
          customer_city: 'customer_city',
          prefetch: 'http://localhost:8000/api/city',
          limit: 20
        });
        $('#countries').typeahead({
        customer_company: 'countries',
        prefetch: 'http://localhost:8000/api/countries',
        limit: 20
        });
         

    })
    </script>
     
</body>
</html>
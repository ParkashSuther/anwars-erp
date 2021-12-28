<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Avant</title>
     @include('layouts.header')
    
     <link rel='stylesheet' type='text/css' href='assets/plugins/datatables/dataTables.css' /> 
<link rel='stylesheet' type='text/css' href='assets/plugins/codeprettifier/prettify.css' /> 
<link rel='stylesheet' type='text/css' href='assets/plugins/form-toggle/toggles.css' /> 
<!-- <script type="text/javascript" src="assets/js/less.js"></script> -->
</head>

<body class="">


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
                            <li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/potter.png" alt=""><span>Jeremy Potter</span></a></li>
                            <li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/tennant.png" alt=""><span>David Tennant</span></a></li>
                            <li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/johansson.png" alt=""><span>Anna Johansson</span></a></li>
                            <li data-stats="busy"><a href="javascript:;"><img src="assets/demo/avatar/jackson.png" alt=""><span>Eric Jackson</span></a></li>
                            <li data-stats="away"><a href="javascript:;"><img src="assets/demo/avatar/jobs.png" alt=""><span>Howard Jobs</span></a></li>
                            <!--li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/watson.png" alt=""><span>Annie Watson</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/doyle.png" alt=""><span>Alan Doyle</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/corbett.png" alt=""><span>Simon Corbett</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/paton.png" alt=""><span>Polly Paton</span></a></li-->
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
                <li><a href="index.htm">Product Detail</a></li>
                <li>Extras</li>
                <li class="active">User Profile</li>
            </ol>

            <h1>Vender Details</h1>
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
                                    <img src="assets/demo/avatar/johansson.png" alt="" class="pull-left" style="margin: 0 20px 20px 0">
                                    <div class="table-responsive">
                                        <table class="table table-condensed">
                                            <h3><strong> Vender Name</strong></h3>
                                            <!-- <thead>
                                                <tr>
                                                    <th width="50%"></th>
                                                    <th width="50%"></th>
                                                </tr>
                                            </thead> -->
                                            <tbody>
                                                <tr>
                                                    <td>Web</td>
                                                    <td><a href="#">www.johndoe.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td><a href="">doe@lime.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone</td>
                                                    <td>(123)-342-5412</td>
                                                </tr>
                                                <tr>
                                                    <td>Position</td>
                                                    <td>Designer</td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td>Member</td>
                                                </tr>
                                                <tr>
                                                    <td>Social</td>
                                                    <td>
                                                        <a href="#" class="btn btn-xs"><i class="fa fa-skype"></i></a>
                                                        <a href="#" class="btn btn-xs"><i class="fa fa-facebook"></i></a>
                                                        <a href="#" class="btn btn-xs"><i class="fa fa-twitter"></i></a>
                                                        <a href="#" class="btn btn-xs"><i class="fa fa-dribbble"></i></a>
                                                        <a href="#" class="btn btn-xs"><i class="fa fa-tumblr"></i></a>
                                                        <a href="#" class="btn btn-xs"><i class="fa fa-linkedin"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3>Description</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.
                                    </p>
                                    <p>
                                        Dsperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque. 
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                             <div class="col-md-12">
                                   <div class="panel panel-sky">
                                       <div class="panel-heading">
                                           <h4>Orders</h4>
                                           <div class="options">   
                                               <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                               <a href="javascript:;"><i class="fa fa-wrench"></i></a>
                                               <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                                           </div>
                                       </div>
                                       <div class="panel-body collapse in">
                                       <table id="example" class="display" cellspacing="0" width="100%">
                                           <thead>
                                               <tr>
                                                   
                                                   <th>Last Order Id</th>
                                                   <th>Order Name</th>
                                                   <th>Start Date</th>
                                                   <th>Expire Date</th>
                                                   <th>Status</th>
                                                   <th>Action</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                 
                                                   <td>Row 1 Data 2</td>
                                                   <td>Row 1 Data 2</td>
                                                   <td>Row 1 Data 2</td>
                                                   <td>Row 1 Data 2</td>
                                                   <td><span class="badge badge-success">Compeleted</span></td>
                                                   <td><a href="#">Detail</a></td>
                                               </tr>
                                                <tr>
                                                  
                                                   <td>Row 1 Data 2</td>
                                                   <td>Row 1 Data 2</td>
                                                   <td>Row 1 Data 2</td>
                                                   <td>Row 1 Data 2</td>
                                                   <td><span class="badge badge-warning">Pending</span></td>
                                                   <td><a href="#">Detail</a></td>
                                               </tr> <tr>
                                                   
                                                   <td>Row 1 Data 2</td>
                                                   <td>Row 1 Data 2</td>
                                                   <td>Row 1 Data 2</td>
                                                   <td>Row 1 Data 2</td>
                                                   <td><span class="badge badge-danger">Cancel</span></td>
                                                   <td><a href="#">Detail</a></td>
                                               </tr> <tr>
                                                  
                                                   <td>Row 1 Data 2</td>
                                                   <td>Row 1 Data 2</td>
                                                   <td>Row 1 Data 2</td>
                                                   <td>Row 1 Data 2</td>
                                                   <td><span class="badge badge-success">Compeleted</span></td>
                                                   <td><a href="#">Detail</a></td>
                                               </tr>
                                               
                                           </tbody>
                                       </table>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="row">
                               <div class="col-md-12">
                                   <div class="panel panel-sky">
                                           <div class="panel-heading">
                                               <h4>File</h4>
                                               <div class="options">   
                                                   <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                                   <a href="javascript:;"><i class="fa fa-wrench"></i></a>
                                                   <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                                               </div>
                                           </div>
                                           <div class="panel-body collapse in">
                                           <table id="files_panel" class="display" cellspacing="0" width="100%">
                                               <thead>
                                                   <tr>
                                                       
                                                       <th>File Type</th>
                                                       <th>File Id</th>
                                                       <th>File Name</th>
                                                       <th>File Size</th>
                                                       <th>Description</th>
                                                       <th>Added By</th>
                                                       <th>Date</th>
                                                       <th>Action</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <tr>
                                                     
                                                       <td><img src="../assets/img/word.png" width="20"> .doc</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Kailash</td>
                                                       <td><a href="#"><i class="fa fa-trash-o" ></i>
                                                           <i class="fa fa-pencil-square">
                                                       </a></td>
                                                   </tr>
                                                    <tr>
                                                      
                                                       <td><img src="../assets/img/pdf.png" width="20"> .pdf</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Kailash</td>
                                                      <td><a href="#"><i class="fa fa-trash-o"></i>
                                                           <i class="fa fa-pencil-square">
                                                       </a></td>
                                                          
                                                       </td>
                                                   </tr> <tr>
                                                       
                                                       <td><img src="../assets/img/excel.ico" width="20"> .exl</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Parkash</td>
                                                       <td><a href="#"><i class="fa fa-trash-o"></i>
                                                           <i class="fa fa-pencil-square">
                                                       </a></td>
                                                   </tr> <tr>
                                                      
                                                       <td><img src="../assets/img/winrar.jpg" width="22"> .zip</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Row 1 Data 2</td>
                                                       <td>Parkash</td>
                                                       <td><a href="#"><i class="fa fa-trash-o"></i>
                                                           <i class="fa fa-pencil-square">
                                                       </a></td>
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

@include('layouts.scripts')    
<script type='text/javascript' src='assets/plugins/datatables/jquery.dataTables.min.js'></script> 
<script type='text/javascript' src='assets/plugins/datatables/dataTables.bootstrap.js'></script> 
<script type='text/javascript' src='assets/demo/demo-datatables.js'></script> 

</div> <!-- page-container -->


@include('layouts.footer')
<script type="text/javascript">
        $(document).ready(function() {
    $('#files_panel').DataTable();
} );
    </script>  


</body>
</html>
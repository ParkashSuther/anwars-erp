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

            
        </div>
        <!-- END RIGHTBAR -->
        <div id="page-content">
            <div id='wrap'>
                <div id="page-heading">
                    <ol class="breadcrumb">
                        <li class='active'><a href="index.htm">Vendors</a></li>
                    </ol>

                    <h1>Vendors</h1>
                    <div class="options">
                        <div class="btn-toolbar">
                            <button class="btn btn-default" id="daterangepicker2">
                                <i class="fa fa-calendar-o"></i> 
                                <span class="hidden-xs hidden-sm">December 9, 2013 - January 8, 2014</span> <b class="caret"></b>
                            </button>
                            <div class="btn-group hidden-xs">
                                <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-xs hidden-sm hidden-md"> Export as</span> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Text File (*.txt)</a></li>
                                    <li><a href="#">Excel File (*.xlsx)</a></li>
                                    <li><a href="#">PDF File (*.pdf)</a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-default hidden-xs"><i class="fa fa-cog"></i></a>
                        </div>
                    </div>
                </div>


                <div class="container">
                      
                   
                      <div class="row">
              <div class="col-lg-12">
                    <div class="panel panel-sky">
                        <div class="panel-heading">
                            <h4>Vendors</h4>
                            <div class="options">   
                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="javascript:;"><i class="fa fa-wrench"></i></a>
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>
                        <div class="panel-body collapse in">
                            <table id="editable"  cellpadding="0" width="100%" cellspacing="0" border="0" class="table table-striped table-bordered datatables">
                                <thead>
                                    <tr>
                                    <th>Vendor Id</th>
                                    <th>Vendor Name</th>
                                    <th>Phone Number </th>
                                    <th>Whatsapp Number</th>
                                    <th>Company Name</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ali</td>
                                        <td>034862525</td>
                                        <td>03402622552</td>
                                        <td>Analytics</td>
                                        <td>Karachi</td>
                                        <td>Karachi</td>
                                        <td><span class="badge badge-danger">Block</span></td>
                                        <td><a href="/vendors/detail">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Ahmed</td>
                                        <td>034322525</td>
                                        <td>0342622552</td>
                                        <td>Dev</td>
                                        <td>East Karachi</td>
                                        <td>Karachi</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td><a href="/vendors/detail">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Ali</td>
                                        <td>034862525</td>
                                        <td>03402622552</td>
                                        <td>Analytics</td>
                                        <td>Karachi</td>
                                        <td>Karachi</td>
                                        <td><span class="badge badge-danger">Block</span></td>
                                        <td><a href="/vendors/detail">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Ali</td>
                                        <td>034862525</td>
                                        <td>03402622552</td>
                                        <td>Analytics</td>
                                        <td>Karachi</td>
                                        <td>Karachi</td>
                                        <td><span class="badge badge-danger">Block</span></td>
                                        <td><a href="/vendors/detail">Detail</a></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                </div> <!-- container -->
            </div> <!--wrap -->
        </div> <!-- page-content -->

@include('layouts.scripts')    
<script type='text/javascript' src='assets/plugins/datatables/jquery.dataTables.min.js'></script> 
<script type='text/javascript' src='assets/plugins/datatables/dataTables.bootstrap.js'></script> 
<script type='text/javascript' src='assets/demo/demo-datatables.js'></script> 

</div> <!-- page-container -->

<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/jquery-1.10.2.min.js"%3E%3C/script%3E'))</script>
<script type="text/javascript">!window.jQuery.ui && document.write(unescape('%3Cscript src="assets/js/jqueryui-1.10.3.min.js'))</script>
-->
@include('layouts.footer')


</body>
</html>
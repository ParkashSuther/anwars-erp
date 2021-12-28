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

            <h1>Product Details</h1>
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
                                            <h3><strong> Product Name</strong></h3>
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
                                    <div class="tab-container tab-success">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#home1" data-toggle="tab">Timeline</a></li>
                                            <li class=""><a href="#profile1" data-toggle="tab">Assigned Projects</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active clearfix" id="home1">
                                                <div class="col-md-12">
                                                    <h4 class="timeline-month"><span>November</span> <span>2013</span></h4>
                                                    <ul class="timeline">
                                                        <li class="timeline-orange">
                                                            <div class="timeline-icon"><i class="fa fa-camera"></i></div>
                                                            <div class="timeline-body">
                                                                <div class="timeline-header">
                                                                    <span class="author">Posted by <a href="#">David Tennant</a></span>
                                                                    <span class="date">Monday, November 21, 2013</span>
                                                                </div>
                                                                <div class="timeline-content">
                                                                    <h3>Consectetur Adipisicing Elit</h3>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, officiis, molestiae, deserunt asperiores architecto ut vel repudiandae dolore inventore nesciunt necessitatibus doloribus ratione facere consectetur suscipit!</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="timeline-warning">
                                                            <div class="timeline-icon"><i class="fa fa-pencil"></i></div>
                                                            <div class="timeline-body">
                                                                <div class="timeline-header">
                                                                    <span class="author">Posted by <a href="#">David Tennant</a></span>
                                                                    <span class="date">Monday, November 21, 2013</span>
                                                                </div>
                                                                <div class="timeline-content">
                                                                    <h3>Consectetur Adipisicing Elit</h3>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, officiis, molestiae, deserunt asperiores architecto ut vel repudiandae dolore inventore nesciunt necessitatibus doloribus ratione facere consectetur suscipit!</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-12">
                                                    <h4 class="timeline-month"><span>December</span> <span>2013</span></h4>
                                                    <ul class="timeline">
                                                        <li class="timeline-success">
                                                            <div class="timeline-icon"><i class="fa fa-video-camera"></i></div>
                                                            <div class="timeline-body">
                                                                <div class="timeline-header">
                                                                    <span class="author">Posted by <a href="#">David Tennant</a></span>
                                                                    <span class="date">Monday, December 21, 2013</span>
                                                                </div>
                                                                <div class="timeline-content">
                                                                    <h3>Consectetur Adipisicing Elit</h3>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, officiis, molestiae, deserunt asperiores architecto ut vel repudiandae dolore inventore nesciunt necessitatibus doloribus ratione facere consectetur suscipit!</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="timeline-midnightblue">
                                                            <div class="timeline-icon"><i class="fa fa-group"></i></div>
                                                            <div class="timeline-body">
                                                                <div class="timeline-header">
                                                                    <span class="author">Posted by <a href="#">David Tennant</a></span>
                                                                    <span class="date">Thursday, December 12, 2013</span>
                                                                </div>
                                                                <div class="timeline-content">
                                                                    <h3>Consectetur Adipisicing Elit</h3>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, officiis, molestiae, deserunt asperiores architecto ut vel repudiandae dolore inventore nesciunt necessitatibus doloribus ratione facere consectetur suscipit!</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                            <div class="tab-pane" id="profile1">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th width="5%">#</th>
                                                                <th width="35%">Project Title</th>
                                                                <th width="35%">Due Date</th>
                                                                <th width="25%">Progress</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Lorem ipsum</td>
                                                                <td>Nov 5, 2013</td>                                                                
                                                                <td>
                                                                    <div class="progress progress-striped" style="margin:5px 0 0">
                                                                        <div class="progress-bar progress-bar-info" style="width: 30%;"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Dignissimos voluptas</td>
                                                                <td>Nov 10, 2013</td>                                                               
                                                                <td>
                                                                    <div class="progress progress-striped" style="margin:5px 0 0">
                                                                        <div class="progress-bar progress-bar-danger" style="width: 55%;"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Tenetur ex ea dignissimos</td>
                                                                <td>Nov 11, 2013</td>                                                               
                                                                <td>
                                                                    <div class="progress progress-striped" style="margin:5px 0 0">
                                                                        <div class="progress-bar progress-bar-success" style="width: 35%;"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Quo dolorem maxime</td>
                                                                <td>Nov 21, 2013</td>                                                               
                                                                <td>
                                                                    <div class="progress progress-striped" style="margin:5px 0 0">
                                                                        <div class="progress-bar progress-bar-primary" style="width: 20%;"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>Dsperiores</td>
                                                                <td>Nov 17, 2013</td>                                                               
                                                                <td>
                                                                    <div class="progress progress-striped" style="margin:5px 0 0">
                                                                        <div class="progress-bar progress-bar-inverse" style="width: 70%;"></div>
                                                                    </div>
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

<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/jquery-1.10.2.min.js"%3E%3C/script%3E'))</script>
<script type="text/javascript">!window.jQuery.ui && document.write(unescape('%3Cscript src="assets/js/jqueryui-1.10.3.min.js'))</script>
-->
@include('layouts.footer')


</body>
</html>
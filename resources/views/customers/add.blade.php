<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Avant</title>
     @include('layouts.header')
    
     <link rel='stylesheet' type='text/css' href='../assets/plugins/datatables/dataTables.css' /> 
<link rel='stylesheet' type='text/css' href='../assets/plugins/codeprettifier/prettify.css' /> 
<link rel='stylesheet' type='text/css' href='../assets/plugins/form-toggle/toggles.css' /> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" />
<!-- <script type="text/javascript" src="assets/js/less.js"></script> -->
</head>
<style type="text/css">
    .iti--allow-dropdown{
        width: 100%;
    }
    .twitter-typeahead{
        width: 100%;
    }
</style>
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
                            <li data-stats="online"><a href="javascript:;"><img src="../assets/demo/avatar/potter.png" alt=""><span>Jeremy Potter</span></a></li>
                            <li data-stats="online"><a href="javascript:;"><img src="../assets/demo/avatar/tennant.png" alt=""><span>David Tennant</span></a></li>
                            <li data-stats="online"><a href="javascript:;"><img src="../assets/demo/avatar/johansson.png" alt=""><span>Anna Johansson</span></a></li>
                            <li data-stats="busy"><a href="javascript:;"><img src="../assets/demo/avatar/jackson.png" alt=""><span>Eric Jackson</span></a></li>
                            <li data-stats="away"><a href="javascript:;"><img src="../assets/demo/avatar/jobs.png" alt=""><span>Howard Jobs</span></a></li>
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
        <div id="page-content">
            <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.htm">Dashboard</a></li>
                <li>Extras</li>
                <li class="active">Sign Up</li>
            </ol>

            <h1>Add New Customer</h1>
            
        </div>
        <div class="container">
           
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-midnightblue">
                       
                        <div class="panel-body">
                         <form method="post" class="form-horizontal">
                            @csrf
                         <div class="row">
                                
                          <div class="col-sm-12">

                               <div class="col-md-6">
                                  
                                    <div class="panel panel-midnightblue">
                                        <div class="panel-heading">
                                            Personal Detail 
                                        </div>
                                        <div class="panel-body">
                                            
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">First Name</label>
                                    <div class="col-sm-2">
                                          <select class="form-control" name="prefix" id="source">
                                                <option value="Mr.">Mr</option>
                                                <option value="Mrs.">Mrs</option>
                                          </select>
                                      </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="first_name" placeholder="Enter First Name">
                                    </div>
                                 </div> 
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Last Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control"  name="last_name" placeholder="Enter Last Name">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Email Address</label>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email Address">
                                    </div>
                                 </div>
                                  <div class="form-group">
                                            <label class="col-sm-3 control-label">Phone Number</label>
                                             
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control mask" name="phone_number" data-inputmask="'mask':'+99 999 9999999'">
                                            </div>
                                 </div>
                                 <div class="form-group">
                                            <label class="col-sm-3 control-label">Whatsapp Number</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control mask" name="whatsapp_number" data-inputmask="'mask':'+99 999 9999999'">
                                            </div>
                                 </div>
                                 <div class="form-group">
                                            <label class="col-sm-3 control-label">Company Name </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="company_name" placeholder="Enter Company Name">
                                            </div>
                                 </div>
                                 <div class="form-group">
                                            <label class="col-sm-3 control-label">Company Short</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="compnay_short_name" placeholder="Enter company Short Name">
                                            </div>
                                 </div>
                                 <div class="form-group">
                                            <label class="col-sm-3 control-label">Color</label>
                                            <div class="col-sm-6">
                                                <input type="color" class="form-control" name="color" >
                                            </div>
                                 </div>
                                 <div class="form-group">
                                            <label class="col-sm-3 control-label">Location Name</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="location_name" placeholder="Enter Location Name">
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                       
                                 </div>

                               <div class="col-md-6">
                                   
                                    <div class="panel panel-midnightblue">
                                        <div class="panel-heading">Address</div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                            <label class="col-sm-3 control-label">Customer Address Prefix</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="ca_prefix" id="source">
                                                <option value="Mr.">Mr</option>
                                                <option value="Mrs.">Mrs</option>
                                          </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Customer Address First Name</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="ca_firstname" placeholder="Enter Location Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Customer Address Last Name</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="ca_lastname" placeholder="Enter Location Name">
                                            </div>
                                        </div>
                                            <div class="form-group">
                                            <label class="col-sm-3 control-label">Address 1</label>
                                            <div class="col-sm-6">
                                                 
                                                <textarea style="width: 100% ;height: 85px" name="ca_address1" placeholder="Enter Address"></textarea>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label"> Phone 1</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control mask"  name="ca_phone1" data-inputmask="'mask':'+99 999 9999999'">
                                            </div>
                                         </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Address 2</label>
                                            <div class="col-sm-6">
                                                <textarea style="width: 100%;height: 80px"  name="ca_address2" placeholder="Enter Address "></textarea>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label"> Phone 2</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control"  name="ca_phone2" id="phone" />         </div>
                                 </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">City</label>
                                    <div class="col-sm-6">
                                         <!-- <input type="text" name="customer_city" id="customer_city" placeholder="Customer City" class="form-control"> -->
                                        <input type="text" class="form-control"  name="ca_city" id="customer_city" />
                                    </div>
                                     </div>
                                
                                  <div class="form-group">
                                            <label class="col-sm-3 control-label">Zip Code</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="Enter City Zip Code"  name="ca_zip">
                                            </div>
                                 </div>
                                  <div class="form-group">
                                     <label class="col-sm-3 control-label">Country</label>
                                     <div class="col-sm-6">
                                         <input type="text" class="form-control"  name="ca_country" id="customer_city" />
                                     </div>
                                 </div>
                                        </div>
                                    </div>
                               </div>
                            
                            </div>

                        </div> 
                                
                             <div class="col-md-12">
                                   <div class="text-right">
                                      <button class="btn-default btn">Reset</button>
                                      <button type="submit" class="btn-midnightblue btn">Add Customer</button>
                                  </div>
                            </div>
                       </form>
                       
                    
                    </div>
                </div>
                </div>
 
            </div> 

          </div> <!--wrap -->
        </div> <!-- page-content -->

@include('layouts.scripts')    
<script type='text/javascript' src='../assets/plugins/datatables/jquery.dataTables.min.js'></script> 
<script type='text/javascript' src='../assets/plugins/datatables/dataTables.bootstrap.js'></script> 
<script type='text/javascript' src='../assets/demo/demo-datatables.js'></script> 

</div> <!-- page-container -->

<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/jquery-1.10.2.min.js"%3E%3C/script%3E'))</script>
<script type="text/javascript">!window.jQuery.ui && document.write(unescape('%3Cscript src="assets/js/jqueryui-1.10.3.min.js'))</script>
-->
@include('layouts.footer')

<script type='text/javascript' src='../assets/plugins/form-inputmask/jquery.inputmask.bundle.min.js'></script> 
<script type='text/javascript' src='../assets/demo/demo-mask.js'></script> 
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js"></script>
    
<script type='text/javascript' src='http://demo.h3techs.com/accounts/assets/plugins/form-typeahead/typeahead.min.js'></script> 
  <script>
    var input = document.querySelector("#phone");
    intlTelInput(input, {
      initialCountry: "auto",
      geoIpLookup: function (success, failure) {
        $.get("https://ipinfo.io", function () { }, "jsonp").always(function (resp) {
          var countryCode = (resp && resp.country) ? resp.country : "us";
          success(countryCode);
        });
      },
    });
  </script>
  <script>
$(function() {
    
    $('#customer_city').typeahead({
      customer_city: 'customer_city',
      prefetch: 'http://localhost:8000/api/city',
      limit: 20
    });
     
})
</script>
 <script>
    $(document).ready(function() {
        // bind parsley to the form
        $("#validate-form").parsley();
        // on form submit
        $("#validate-form").submit(function() {
            // validate form with parsley.
            $(this).parsley().validate();

            // if this form is valid
            if ($(this).parsley().isValid()) {
                // show alert message
                //alert('no client side errors!');
                $('input[type=submit]', this).attr('disabled', 'disabled');
            }
        });
    });
</script>
</body>
</html>
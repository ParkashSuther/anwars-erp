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
                     <div class="col-md-12">
                         <div class="panel panel-indigo">
                             <div class="panel-heading">
                                 <h4>Inline Data Tables editing</h4>
                                 <div class="options">   
                                     <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                     <a href="javascript:;"><i class="fa fa-wrench"></i></a>
                                     <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                                 </div>
                             </div>
                             <div class="panel-body collapse in">
                                 <div class="alert alert-info">
                                     Click on any field to edit the data! Make sure to do your mojo in the backend to actually save the data.
                                     <button type="button" class="close" data-dismiss="alert">&times;</button>
                                 </div>
                                 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="editable">
                                     <thead>
                                         <tr>
                                             <th>Rendering engine</th>
                                             <th>Browser</th>
                                             <th>Platform(s)</th>
                                             <th>Engine version</th>
                                             <th>CSS grade</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr class="odd gradeX">
                                             <td>Trident</td>
                                             <td>Internet
                                                 Explorer 4.0
                                             </td>
                                             <td>Win 95+</td>
                                             <td class="center"> 4</td>
                                             <td class="center">X</td>
                                         </tr>
                                         <tr class="even gradeC">
                                             <td>Trident</td>
                                             <td>Internet
                                                 Explorer 5.0
                                             </td>
                                             <td>Win 95+</td>
                                             <td class="center">5</td>
                                             <td class="center">C</td>
                                         </tr>
                                         <tr class="odd gradeA">
                                             <td>Trident</td>
                                             <td>Internet
                                                 Explorer 5.5
                                             </td>
                                             <td>Win 95+</td>
                                             <td class="center">5.5</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="even gradeA">
                                             <td>Trident</td>
                                             <td>Internet
                                                 Explorer 6
                                             </td>
                                             <td>Win 98+</td>
                                             <td class="center">6</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="odd gradeA">
                                             <td>Trident</td>
                                             <td>Internet Explorer 7</td>
                                             <td>Win XP SP2+</td>
                                             <td class="center">7</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="even gradeA">
                                             <td>Trident</td>
                                             <td>AOL browser (AOL desktop)</td>
                                             <td>Win XP</td>
                                             <td class="center">6</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Firefox 1.0</td>
                                             <td>Win 98+ / OSX.2+</td>
                                             <td class="center">1.7</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Firefox 1.5</td>
                                             <td>Win 98+ / OSX.2+</td>
                                             <td class="center">1.8</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Firefox 2.0</td>
                                             <td>Win 98+ / OSX.2+</td>
                                             <td class="center">1.8</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Firefox 3.0</td>
                                             <td>Win 2k+ / OSX.3+</td>
                                             <td class="center">1.9</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Camino 1.0</td>
                                             <td>OSX.2+</td>
                                             <td class="center">1.8</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Camino 1.5</td>
                                             <td>OSX.3+</td>
                                             <td class="center">1.8</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Netscape 7.2</td>
                                             <td>Win 95+ / Mac OS 8.6-9.2</td>
                                             <td class="center">1.7</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Netscape Browser 8</td>
                                             <td>Win 98SE+</td>
                                             <td class="center">1.7</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Netscape Navigator 9</td>
                                             <td>Win 98+ / OSX.2+</td>
                                             <td class="center">1.8</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Mozilla 1.0</td>
                                             <td>Win 95+ / OSX.1+</td>
                                             <td class="center">1</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Mozilla 1.1</td>
                                             <td>Win 95+ / OSX.1+</td>
                                             <td class="center">1.1</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Mozilla 1.2</td>
                                             <td>Win 95+ / OSX.1+</td>
                                             <td class="center">1.2</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Mozilla 1.3</td>
                                             <td>Win 95+ / OSX.1+</td>
                                             <td class="center">1.3</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Mozilla 1.4</td>
                                             <td>Win 95+ / OSX.1+</td>
                                             <td class="center">1.4</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Mozilla 1.5</td>
                                             <td>Win 95+ / OSX.1+</td>
                                             <td class="center">1.5</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Mozilla 1.6</td>
                                             <td>Win 95+ / OSX.1+</td>
                                             <td class="center">1.6</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Mozilla 1.7</td>
                                             <td>Win 98+ / OSX.1+</td>
                                             <td class="center">1.7</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Mozilla 1.8</td>
                                             <td>Win 98+ / OSX.1+</td>
                                             <td class="center">1.8</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Seamonkey 1.1</td>
                                             <td>Win 98+ / OSX.2+</td>
                                             <td class="center">1.8</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Gecko</td>
                                             <td>Epiphany 2.20</td>
                                             <td>Gnome</td>
                                             <td class="center">1.8</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Webkit</td>
                                             <td>Safari 1.2</td>
                                             <td>OSX.3</td>
                                             <td class="center">125.5</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Webkit</td>
                                             <td>Safari 1.3</td>
                                             <td>OSX.3</td>
                                             <td class="center">312.8</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Webkit</td>
                                             <td>Safari 2.0</td>
                                             <td>OSX.4+</td>
                                             <td class="center">419.3</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Webkit</td>
                                             <td>Safari 3.0</td>
                                             <td>OSX.4+</td>
                                             <td class="center">522.1</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Webkit</td>
                                             <td>OmniWeb 5.5</td>
                                             <td>OSX.4+</td>
                                             <td class="center">420</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Webkit</td>
                                             <td>iPod Touch / iPhone</td>
                                             <td>iPod</td>
                                             <td class="center">420.1</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Webkit</td>
                                             <td>S60</td>
                                             <td>S60</td>
                                             <td class="center">413</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Presto</td>
                                             <td>Opera 7.0</td>
                                             <td>Win 95+ / OSX.1+</td>
                                             <td class="center">-</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Presto</td>
                                             <td>Opera 7.5</td>
                                             <td>Win 95+ / OSX.2+</td>
                                             <td class="center">-</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeC">
                                             <td>KHTML</td>
                                             <td>Konqureror 3.1</td>
                                             <td>KDE 3.1</td>
                                             <td class="center">3.1</td>
                                             <td class="center">C</td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td>Tasman</td>
                                             <td>Internet Explorer 4.5</td>
                                             <td>Mac OS 8-9</td>
                                             <td class="center">-</td>
                                             <td class="center">X</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Misc</td>
                                             <td>NetFront 3.1</td>
                                             <td>Embedded devices</td>
                                             <td class="center">-</td>
                                             <td class="center">C</td>
                                         </tr>
                                         <tr class="gradeA">
                                             <td>Misc</td>
                                             <td>NetFront 3.4</td>
                                             <td>Embedded devices</td>
                                             <td class="center">-</td>
                                             <td class="center">A</td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td>Misc</td>
                                             <td>Dillo 0.8</td>
                                             <td>Embedded devices</td>
                                             <td class="center">-</td>
                                             <td class="center">X</td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td>Misc</td>
                                             <td>Links</td>
                                             <td>Text only</td>
                                             <td class="center">-</td>
                                             <td class="center">X</td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td>Misc</td>
                                             <td>Lynx</td>
                                             <td>Text only</td>
                                             <td class="center">-</td>
                                             <td class="center">X</td>
                                         </tr>
                                         <tr class="gradeC">
                                             <td>Misc</td>
                                             <td>IE Mobile</td>
                                             <td>Windows Mobile 6</td>
                                             <td class="center">-</td>
                                             <td class="center">C</td>
                                         </tr>
                                         <tr class="gradeC">
                                             <td>Misc</td>
                                             <td>PSP browser</td>
                                             <td>PSP</td>
                                             <td class="center">-</td>
                                             <td class="center">C</td>
                                         </tr>
                                         <tr class="gradeU">
                                             <td>Other browsers</td>
                                             <td>All others</td>
                                             <td>-</td>
                                             <td class="center">-</td>
                                             <td class="center">U</td>
                                         </tr>
                                     </tbody>
                                 </table><!--end table-->
                             </div>
                         </div>
                     </div>
                 </div>

             

             </div>    
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
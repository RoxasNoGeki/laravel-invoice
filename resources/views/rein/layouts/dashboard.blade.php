<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{url('/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="{{url('/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet"/>
    <!-- iCheck -->
    <link href="{{url('/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{url('/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{url('/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{url('/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{url('/vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{url('/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="{{url('/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{route('dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                </div>

                <div class="clearfix"></div>

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('form')}}">General Form</a></li>
                                    <li><a href="{{route('advance')}}">Advanced Components</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-desktop"></i> UI Elements <span
                                        class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('invoice')}}">Invoice</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                John Doe
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
    @yield('content')

    <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{url('/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{url('/vendors/nprogress/nprogress.js')}}"></script>
<!-- jQuery custom content scroller -->
<script src="{{url('/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{url('/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{url('/vendors/iCheck/icheck.min.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{url('/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{url('/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap-wysiwyg -->
<script src="{{url('/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
<script src="{{url('/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
<script src="{{url('/vendors/google-code-prettify/src/prettify.js')}}"></script>
<!-- jQuery Tags Input -->
<script src="{{url('/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
<!-- Switchery -->
<script src="{{url('/vendors/switchery/dist/switchery.min.js')}}"></script>
<!-- Select2 -->
<script src="{{url('/vendors/select2/dist/js/select2.full.min.js')}}"></script>
<!-- Parsley -->
<script src="{{url('/vendors/parsleyjs/dist/parsley.min.js')}}"></script>
<!-- Autosize -->
<script src="{{url('/vendors/autosize/dist/autosize.min.js')}}"></script>
<!-- jQuery autocomplete -->
<script src="{{url('/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
<!-- starrr -->
<script src="{{url('/vendors/starrr/dist/starrr.js')}}"></script>
<!-- jquery.inputmask -->
<script src="{{url('/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>



<!-- Custom Theme Scripts -->
<script src="{{url('/build/js/custom.min.js')}}"></script>
<!-- Initialize datetimepicker -->
<script>
    $('#myDatepicker').datetimepicker();

    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });

    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });

    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();

    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });

    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });

    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>



</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('masterassets/images/favicon.ico')}}">
        <!-- App title -->
        <title>Admin | @yield('title')</title>

           <!-- DataTables -->
           <link href="{{asset('masterassets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
           <link href="{{asset('masterassets/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
           <link href="{{asset('masterassets/plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
           <link href="{{asset('masterassets/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
           <link href="{{asset('masterassets/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
           <link href="{{asset('masterassets/plugins/datatables/dataTables.colVis.css')}}" rel="stylesheet" type="text/css"/>
           <link href="{{asset('masterassets/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
           <link href="{{asset('masterassets/plugins/datatables/fixedColumns.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
   

        <!-- App css -->
        <link href="{{asset('masterassets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('masterassets/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('masterassets/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('masterassets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('masterassets/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('masterassets/css/menu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('masterassets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{asset('masterassets/plugins/switchery/switchery.min.css')}}">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{asset('masterassets/js/modernizr.min.js')}}"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="{{ route('admin.dashboard') }}" class="logo"><span>Barter<span>List</span></span><i class="mdi mdi-layers"></i></a>
                    <!-- Image logo -->
                    <!--<a href="index.html" class="logo">-->
                        <!--<span>-->
                            <!--<img src="assets/images/logo.png" alt="" height="30">-->
                        <!--</span>-->
                        <!--<i>-->
                            <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
                        <!--</i>-->
                    <!--</a>-->
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            {{-- <li class="dropdown hidden-xs">
                                <a data-toggle="dropdown" class="dropdown-toggle menu-item" href="#" aria-expanded="false">English
                                    <span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Italian</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li> --}}
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <span class="badge up bg-success">4</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                    <li>
                                        <h5>Notifications</h5>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-info">
                                                <i class="mdi mdi-account"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">New Signup</span>
                                                <span class="time">5 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-danger">
                                                <i class="mdi mdi-comment"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">New Message received</span>
                                                <span class="time">1 day ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-warning">
                                                <i class="mdi mdi-settings"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="all-msgs text-center">
                                        <p class="m-0"><a href="#">See all Notification</a></p>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-email"></i>
                                    <span class="badge up bg-danger">8</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                    <li>
                                        <h5>Messages</h5>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-2.jpg" alt="">
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">Patricia Beach</span>
                                                <span class="desc">There are new settings available</span>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-3.jpg" alt="">
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">Connie Lucas</span>
                                                <span class="desc">There are new settings available</span>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-4.jpg" alt="">
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">Margaret Becker</span>
                                                <span class="desc">There are new settings available</span>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="all-msgs text-center">
                                        <p class="m-0"><a href="#">See all Messages</a></p>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>{{ Auth::user()->name }}</h5>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                    <li><a  href="{{ route('admin.logout') }}"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="menu-title">Navigation</li>

                            <li>
                                <a href="{{ route('admin.dashboard') }}" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span> </a>
                                {{-- <ul class="list-unstyled">
                                    <li><a href="index.html">Dashboard 1</a></li>
                                    <li><a href="dashboard_2.html">Dashboard 2</a></li>
                                </ul> --}}
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account"></i> <span> User </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('useraccounts') }}">View Users</a></li>
                                    <li><a href="{{ route('adminaccounts') }}">Admin User</a></li>
                                </ul>
                            </li>


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-heart-outline"></i><span> Report </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="icons-glyphicons.html">Glyphicons</a></li>
                                    <li><a href="icons-colored.html">Colored Icons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="dashboard_2.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Profile </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-settings"></i> <span> Settings </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('category') }}">Category Setup</a></li>
                                    <li><a href="{{ route('service') }}">Service Type Setup</a></li>
                                    <li><a href="{{ route('shipping') }}">Shipping Type Setup</a></li>
                                    <li><a href="{{ route('tradestatus') }}">Trade Status Setup</a></li>
                                    <li><a href="{{ route('tradetype') }}">Trade Type Setup</a></li>
                                    <li><a href="{{ route('gender') }}">Gender Setup</a></li>
                                   
                                    {{-- <li><a href="{{ route('maritalstatus') }}">Marital Status Setup</a></li> --}}
                                   
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-book"></i> <span> Documentation </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('admin.documentation') }}">Admin FAQ</a></li>
                                    <li><a href="{{ route('user.documentation') }}">User FAQ</a></li>                                   
                                </ul>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">@yield('pagename') </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="barterlist.org">@yield('pagename')</a>
                                        </li>
                                        <li class="active">
                                            @yield('pagename')
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
                        @yield('content')


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    © BarterList | {{ date('l, F d, Y') }}
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('masterassets/js/jquery.min.js')}}"></script>
        <script src="{{asset('masterassets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('masterassets/js/detect.js')}}"></script>
        <script src="{{asset('masterassets/js/fastclick.js')}}"></script>
        <script src="{{asset('masterassets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('masterassets/js/waves.js')}}"></script>
        <script src="{{asset('masterassets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('masterassets/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('masterassets/plugins/switchery/switchery.min.js')}}"></script>
        <script src="{{asset('masterassets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('masterassets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
        <script src="{{asset('masterassets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('masterassets/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
        <script src="{{asset('masterassets/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('masterassets/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('masterassets/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('masterassets/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('masterassets/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('masterassets/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
        <script src="{{asset('masterassets/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('masterassets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('masterassets/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
        <script src="{{asset('masterassets/plugins/datatables/dataTables.scroller.min.js')}}"></script>
        <script src="{{asset('masterassets/plugins/datatables/dataTables.colVis.js')}}"></script>
        <script src="{{asset('masterassets/plugins/datatables/dataTables.fixedColumns.min.js')}}"></script>

        <script src="{{asset('masterassets/pages/jquery.datatables.init.js')}}"></script>

          <!-- Counter js  -->
          <script src="{{asset('masterassets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
          <script src="{{asset('masterassets/plugins/counterup/jquery.counterup.min.js')}}"></script>
  
          <!-- Flot chart js -->
          <script src="{{asset('masterassets/plugins/flot-chart/jquery.flot.min.js')}}"></script>
          <script src="{{asset('masterassets/plugins/flot-chart/jquery.flot.time.js')}}"></script>
          <script src="{{asset('masterassets/plugins/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
          <script src="{{asset('masterassets/plugins/flot-chart/jquery.flot.resize.js')}}"></script>
          <script src="{{asset('masterassets/plugins/flot-chart/jquery.flot.pie.js')}}"></script>
          <script src="{{asset('masterassets/plugins/flot-chart/jquery.flot.selection.js')}}"></script>
          <script src="{{asset('masterassets/plugins/flot-chart/jquery.flot.crosshair.js')}}"></script>
  
          <script src="{{asset('masterassets/plugins/moment/moment.js')}}"></script>
          <script src="{{asset('masterassets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

          <script src="{{asset('masterassets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
          <script src="{{asset('masterassets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
  
          
        <script src="{{asset('masterassets/pages/jquery.dashboard_2.js')}}"></script>

        

        <!-- App js -->
        <script src="{{asset('masterassets/js/jquery.core.js')}}"></script>
        <script src="{{asset('masterassets/js/jquery.app.js')}}"></script>

        @yield('script')

        <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "../plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();

        </script>

    </body>
</html>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PN INFOSYS ADMIN DASHBOARD vikas</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ URL::to('/') }}/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{URL::to('/admin_dashboard') }}">PN INFOSYS ADMIN</a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{URL::to('/admin_dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <!-- /.menu-title -->
                    <li class="active">
                        <a href="{{URL::to('/allstudent') }}"> <i class="menu-icon fa fa-dashboard"></i>All Students</a>
                    </li>
                     <li class="active">
                        <a href="{{URL::to('/addstudents') }}"> <i class="menu-icon fa fa-dashboard"></i>Add Students</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Students Information</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{URL::to('/tutionfee') }}">Tution Fee</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="{{URL::to('/result') }}">Result</a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Course</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="{{URL::to('/be') }}">BE</a></li>
                            <li><i class="fa fa-table"></i><a href="{{URL::to('/it') }}">IT</a></li>
                            <li><i class="fa fa-table"></i><a href="{{URL::to('/cs') }}">CSE</a></li>
                            <li><i class="fa fa-table"></i><a href="{{URL::to('/ec') }}">EC</a></li>
                            <li><i class="fa fa-table"></i><a href="{{URL::to('/ee') }}">EE</a></li>
                            <li><i class="fa fa-table"></i><a href="{{URL::to('/mca') }}">MCA</a></li>
                             <li><i class="fa fa-table"></i><a href="{{URL::to('/bca') }}">BCA</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Teacher</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{URL::to('/allteacher') }}">All Teacher</a></li>
                            </li>
                        </ul>
                    </li>

                    <!--  -->
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        

                        </div>
                    </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{URL::to('/viewprofile') }}"><i class="fa fa-user"></i> My Profile</a>

                            

                            <a class="nav-link" href="{{URL::to('/setting') }}"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="{{URL::to('/logout') }}"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
               
                    @yield('content')
                </div>
            </div>


            
            <!--/.col-->

            
            <!--/.col-->


            <!--/.col-->


            
            <!--/.col-->


           

                    </footer>
                </section>
            </div>


        

            
            


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{ URL::to('/') }}/vendors/jquery/dist/jquery.min.js"></script>
    <script src="{{ URL::to('/') }}/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{ URL::to('/') }}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/main.js"></script>


    <script src="{{ URL::to('/') }}/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/dashboard.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/widgets.js"></script>
    <script src="{{ URL::to('/') }}/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="{{ URL::to('/') }}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="{{ URL::to('/') }}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>


    <script src="{{ URL::to('/') }}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::to('/') }}/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ URL::to('/') }}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ URL::to('/') }}/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ URL::to('/') }}/vendors/jszip/dist/jszip.min.js"></script>
    <script src="{{ URL::to('/') }}/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ URL::to('/') }}/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="{{ URL::to('/') }}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ URL::to('/') }}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ URL::to('/') }}/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/init-scripts/data-table/datatables-init.js"></script>
   <script  src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js'></script>


    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

    <script>
        $(document).on("click","#delete", function(e){
        e.preventdefault();
        var link = $(this).attr("href");
        bootbox.confirm("Are you want to delete!!", function(confirmed){

            if (confirmed){
                window.location.href =link;

            };

        });
    });



       
        



    </script>

</body>

</html>

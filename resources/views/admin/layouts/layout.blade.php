<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('asset')); ?>/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?php echo e(asset('asset')); ?>/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo (asset('asset')); ?>/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo (asset('asset')); ?>/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo (asset('asset')); ?>/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo (asset('asset')); ?>/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo (asset('asset')); ?>/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo (asset('asset')); ?>/admin/plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo (asset('asset')); ?>/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo (asset('asset')); ?>/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo (asset('asset')); ?>/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('asset') }}/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
              <!-- Navbar Search -->
              <!-- Messages Dropdown Menu -->
              <li class="nav-item dropdown" style="display: flex">
                <a class="nav-link" data-toggle="dropdown" href="#">

                        <div class="image" style="text-align:right">
                            <img src="{{ asset('asset') }}/admin/dist/img/user2-160x160.jpg"
                                class="img-circle elevation-2" alt="User Image" width="30%">
                        </div>


                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="min-width: 100px;top: 135%">
                  <a href="{{url('account/logout')}}" class="dropdown-item">
                    <!-- Message Start -->
                   Log out
                    <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>

                </div>
              </li>
              <!-- Notifications Dropdown Menu -->

            </ul>
          </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->


            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('asset') }}/admin/dist/img/user2-160x160.jpg"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block" style="text-transform: uppercase">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                                  with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{url('admin/list_product')}}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Products
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                        </li>
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Product
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{url('/admin/list-product')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product list</p>
                                    </a>
                                </li>

                            </ul>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a href="{{url('/admin/list-service')}}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Services
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('/admin/list-service')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Services</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('/admin/list-product')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Categories of services</p>
                                    </a>
                                </li>
                            </ul>

                        </li> --}}
                        <li class="nav-item">
                            <a href="{{url('/admin/list_publisher')}}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Publisher
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/list_author')}}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Author
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/list_genre')}}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Genre
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/list-gallery')}}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Gallery
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="{{url('/admin/list-banner')}}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Banner
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                        </li>


                        <li class="nav-item">
                            <a href="{{url('/admin/list-review')}}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Review
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/list-contactus')}}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Contact Us
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">


            <!-- Main content -->
            {{-- CONTENT  --}}
            @yield('admin_content')

            {{-- END-CONTENT  --}}
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo e(asset('asset')); ?>/admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo e(asset('asset')); ?>/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo e(asset('asset')); ?>/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo e(asset('asset')); ?>/admin/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo e(asset('asset')); ?>/admin/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo e(asset('asset')); ?>/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo e(asset('asset')); ?>/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo e(asset('asset')); ?>/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo e(asset('asset')); ?>/admin/plugins/moment/moment.min.js"></script>
    <script src="<?php echo e(asset('asset')); ?>/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo e(asset('asset')); ?>/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- Summernote -->
    <script src="<?php echo e(asset('asset')); ?>/admin/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo e(asset('asset')); ?>/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('asset')); ?>/admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo e(asset('asset')); ?>/admin/dist/js/pages/dashboard.js"></script>
    <!-- summernote-  Page specific script -->
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>

    <!-- DataTables  & Plugins -->
    <script src="<?php echo (asset('asset')); ?>/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo (asset('asset')); ?>/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo (asset('asset')); ?>/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo (asset('asset')); ?>/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo (asset('asset')); ?>/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo (asset('asset')); ?>/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo (asset('asset')); ?>/admin/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo (asset('asset')); ?>/admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo (asset('asset')); ?>/admin/plugins/pdfmake/vfs_fonts.js"></script>

    {{-- {{-- <script src="<?php echo (asset('asset')); ?>/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script> --}}
    {{-- <script src="<?php echo (asset('asset')); ?>/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script> --}}
    {{-- <script src="<?php echo (asset('asset')); ?>/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script> --}}

    <!--  DataTables  -  Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,

            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
      <script>
        function preview_images() {
            var total_file = document.getElementById("photo").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_preview').append(`
                <div class='col-md-3'>
                    <img style='width:100%;height:100px' class='img-responsive' src='${URL.createObjectURL(event.target.files[i])}'>
                </div>`);
            }
        }

        function preview_imagess() {
            var total_file = document.getElementById("photos").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_previews').append(`
                <div class='col-md-3'>
                    <img style='width:100%;height:100px' class='img-responsive' src='${URL.createObjectURL(event.target.files[i])}'>
                </div>`);
            }
        }

       

        function resetForm() {
            $("#image_preview").html("");
            return true;
        }
    </script>
    <script>
        $(function() {
            $("#Datepicker").datepicker();
            $("#endDatepicker").datepicker();
        });
    </script>

</body>

</html>

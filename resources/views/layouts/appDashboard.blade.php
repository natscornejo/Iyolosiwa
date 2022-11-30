<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Iyolosiwa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Iyolosiwa dashboard" name="description" />
        <meta content="Natalia Cornejo" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- Lightbox css -->
        <link href="{{ asset('assets/libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            @yield('contentTopBar')

            @yield('contentSideBar')

            <!-- Start Page Content here -->
            @yield('mainContent')


        </div>
        <!-- END wrapper -->

        @yield('contentRightBar')

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

        <!-- Magnific Popup-->
        <script src="{{ asset('assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

        <!-- Tour init js-->
        <script src="{{ asset('assets/js/pages/lightbox.init.js') }} "></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>

        <!-- Responsive Table js -->
        <script src="{{ asset('assets/libs/rwd-table/rwd-table.min.js') }}"></script>

        <!-- Init js -->
        <script src="{{ asset('assets/js/pages/responsive-table.init.js') }}"></script>

        <!-- third party js -->
        <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }} "></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script> 
    </body>
</html>
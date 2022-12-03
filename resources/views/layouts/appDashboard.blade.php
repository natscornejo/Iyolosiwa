<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Iyolosiwa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Iyolosiwa dashboard" name="description" />
        <meta content="Natalia Cornejo" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon ----------------------------------------------------------------->
        <!-- WEB-->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicons/favicon.ico') }}">
        <!-- Apple-->
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicons/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/favicons/apple-touch-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicons/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicons/apple-touch-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicons/apple-touch-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicons/apple-touch-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicons/apple-touch-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicons/apple-touch-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon-180x180.png') }}">
        <!-- Android, Chrome -->
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="194x194" href="{{ asset('assets/images/favicons/favicon-194x194.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/images/favicons/android-chrome-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}">
        <!-- Safari -->
        <link rel="mask-icon" href="{{ asset('assets/images/favicons/safari-pinned-tab.svg') }}" color="#2a7560">
        <meta name="msapplication-TileColor" content="#2a7560">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">
        <meta name="theme-color" content="#2a7560">
        <!-- App favicon ----------------------------------------------------------------->

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

        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>   
    </body>
</html>
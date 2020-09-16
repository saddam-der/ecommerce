<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>


    <!-- Custom fonts for this template-->
    <link href="{{  asset('vendor/fontawesome-free/css/all.min.css')}} " rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.css')}}" rel="stylesheet">

    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.template.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.template.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    {{-- <h1 class="h3 mb-4 text-gray-800">Blank Page</h1> --}}
                    <div>
                        <div class="container">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            @include('admin.template.footer')

            
            <!-- Bootstrap core JavaScript-->
            <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
            <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

            <!-- Core plugin JavaScript-->
            <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

            <!-- Custom scripts for all pages-->
            <script src="{{ asset('js/sb-admin-2.min.js')}}"></script>


            <!-- Page level plugins -->
            <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src="{{ asset('js/demo/datatables-demo.js')}}"></script>

            <script>
                $('.custom-file-input').on('change', function() {
                    let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });
            </script>

</body>

</html>
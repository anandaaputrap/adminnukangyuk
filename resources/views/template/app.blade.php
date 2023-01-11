<!DOCTYPE html>
<html lang="en">

<head>
    @stack('before-style')
    @include('template.head')
    @stack('css')


</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('template.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('template.navbar')
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                        @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>

            <footer class="sticky-footer bg-white">
                @include('template.footer')
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    {{-- <script></script> --}}

    @stack('before-script')
    @include('template.scripct')
    @stack('js')

</body>

</html>
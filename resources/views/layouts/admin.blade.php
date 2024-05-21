<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>MaxDev Photo</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini dark-mode">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        @yield('content')
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">MaxDev</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('images/user.png')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{route('admin.dashboard')}}" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Bosh sahifa
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('admin.users')}}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Foydalanuvchilar
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('admin.category')}}" class="nav-link">
                                <i class="nav-icon fas fa-list"></i>
                                <p>
                                    Kategoriyalar
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('admin.orders')}}" class="nav-link">
                                <i class="nav-icon fas fa-shopping-cart"></i>
                                <p>
                                    Buyurtmalar
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Version 1.0
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; {{date('Y')}} <a href="#">MaxDev</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#reload-page').click(function() {
                location.reload();
            })
            var url = window.location;
            // for sidebar menu entirely but not cover treeview
            $('ul.nav-sidebar a').filter(function() {
                if (this.href) {
                    return this.href == url || url.href.indexOf(this.href) == 0;
                }
            }).addClass('active');

            // for the treeview
            $('ul.nav-treeview a').filter(function() {
                if (this.href) {
                    return this.href == url || url.href.indexOf(this.href) == 0;
                }
            }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');

            // DARK MODE ///
            const toggleButton = $(".toggle-theme");
            const body = $("body");

            // Проверяем localStorage при загрузке страницы
            if (localStorage.getItem("theme") === "dark-mode") {
                body.addClass("dark-mode");
                toggleButton.html('<i class="fas fa-sun"></i>');
            }

            // Обработчик клика по кнопке
            toggleButton.on("click", function () {
                if (body.hasClass("dark-mode")) {
                    body.removeClass("dark-mode");
                    toggleButton.html('<i class="fas fa-moon"></i>');
                    localStorage.removeItem("theme"); // Удаляем сохраненное значение
                } else {
                    body.addClass("dark-mode");
                    toggleButton.html('<i class="fas fa-sun"></i>');
                    localStorage.setItem("theme", "dark-mode"); // Сохраняем выбор пользователя
                }
            });
        })
    </script>
</body>

</html>

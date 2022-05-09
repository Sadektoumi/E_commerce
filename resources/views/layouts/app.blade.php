<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon.png">
    <link href="/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/vendor/chartist/css/chartist.min.css">
    <!-- Datatable -->
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <!-- <img class="logo-abbr" src="/images/logo.png" alt="">
                <img class="logo-compact" src="/images/logo-text.png" alt="">
                <img class="brand-title" src="/images/logo-text.png" alt=""> -->
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->





        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">


                    <li><a class="ai-icon" href="{{route('products')}}" aria-expanded="false">
                            <i class="flaticon-381-controls-3"></i>
                            <span class="nav-text">Produits</span>
                        </a>

                    </li>

                    <li><a class="ai-icon" href="{{route('commande.list')}}" aria-expanded="false">
                            <i class="flaticon-381-notepad"></i>
                            <span class="nav-text">Commande</span>
                        </a>

                    </li>

                    <li><a class="ai-icon" href="{{route('intervention.list')}}" aria-expanded="false">
                        <i class="flaticon-381-notepad"></i>
                        <span class="nav-text">Intervention</span>
                    </a>

                </li>

                <li><a class="ai-icon" href="{{route('users.list')}}" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Users</span>
                </a>

            </li>

                </ul>


            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
        @yield('content')




    </div>

    <!-- Required vendors -->
    <script src="/vendor/global/global.min.js"></script>
    <script src="/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="/js/custom.min.js"></script>
    <script src="/js/deznav-init.js"></script>

    <!-- Datatable -->
    <script src="/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script>
        (function($) {
            var table = $('#example5').DataTable({
                searching: false,
                paging: true,
                select: false,
                //info: false,
                lengthChange: false

            });
            $('#example tbody').on('click', 'tr', function() {
                var data = table.row(this).data();

            });
        })(jQuery);
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('/img/logo.png') }}" rel="icon">
    <title>Sistem Ruang Baca JTI</title>
    <link href="{{ asset('/template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/template/css/ruang-admin.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    @stack('styles')


</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @yield('sidebar')
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                @yield('topbar')
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        @yield('judul')
                    </div>

                    <div class="content">
                        @yield('content')
                    </div>

                    <!-- Modal Logout -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah anda yakin ingin logout?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary"
                                        data-dismiss="modal">Cancel</button>
                                    <a href="{{ route('logout') }}" class="btn btn-outline-danger"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!---Container Fluid-->
            </div>



            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="text-center my-auto">
                        <!-- Tautan dengan ikon Font Awesome -->
                        <a href="#" data-toggle="modal" data-target="#kelompokModal">
                            <i class="fas fa-users mr-2"></i> SIRUCA JTI
                        </a>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

            <div class="modal fade" id="kelompokModal" tabindex="-1" role="dialog"
                aria-labelledby="kelompokModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered align-items-center justify-content-center"
                    role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #6777ef; color: white; text-align: center;">
                            <img src="{{ asset('img/logobiru.png') }}"
                                style="width: 50px; display: block; margin: 0 auto;" alt="Logo Kelompok">
                            <h5 class="modal-title mt-2" id="kelompokModalLabel">KELOMPOK 5 | SIRUCA</h5>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5 class="text-center"><b>Pembagian Tugas</b></h5>
                            <p class="text-center"><strong><i class="fas fa-user-tie"></i> Product Manager:</strong>
                                Ananda Galang Saputra</p>
                            <p class="text-center"><strong><i class="fas fa-chart-line"></i> Analisis:</strong> Catur
                                Wulan Ndari</p>
                            <p class="text-center"><strong><i class="fas fa-paint-brush"></i> Designer:</strong> Galih
                                Wahyu A</p>
                            <p class="text-center"><strong><i class="fas fa-laptop-code"></i> Programmer:</strong></p>
                            <p class="text-center">1. <span style="font-weight: normal;">Haryo Mahendra Jati</span>
                            </p>
                            <p class="text-center">2. <span style="font-weight: normal;">Wisang Garnies</span></p>
                            <p class="text-center"><strong><i class="fas fa-vial"></i> Tester:</strong> Nevi Marita
                                Rimadhani</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>






            <!-- Library Font Awesome -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
                integrity="sha512-5W3m3UJkO7zP6NnaTEbiAwpbS4/Zq0Pr9TkDfVR1l6rBU/Yt4wKVGtvZc/F1Mp0UmKDyQcCRRnLgS2a+GcgP/g=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>




        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <script src="{{ asset('/template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/tempate/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('/template/js/ruang-admin.min.js') }}"></script>
    <script src="{{ asset('/templte/js/demo/chart-area-demo.js') }}"></script>


    @stack('scripts')

    @include('sweetalert::alert')

</body>

</html>

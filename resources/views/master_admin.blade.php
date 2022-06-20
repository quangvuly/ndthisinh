<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> @yield('title') </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="{{ asset('assets_admin/css/styles.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets_admin/css/adminstyle.css') }}" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

  @yield('extraCSS')
</head>

<body class="sb-nav-fixed">

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">PTTrieu-196005048</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    {{-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> --}}
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Danh mục</div>
                            <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="{{route('url.admin.monthi')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                                Môn thi
                            </a>

                            <div class="sb-sidenav-menu-heading">Giám sát</div>
 
                            <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-clock"></i></div>
                                Hàng đợi
                            </a>
                            
                            <div class="sb-sidenav-menu-heading">Model</div>
                            <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-images"></i></div>
                                Xử lý hình ảnh
                            </a>
                            <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-graduation-cap"></i></div>
                                Training model
                            </a>
                        </div>
                    </div>
                     <div class="sb-sidenav-footer">
                        <div class="small">Xin chào:</div>
                        Administrator
                    </div> 
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        @include('layouts.messages')
                        @yield('content')
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2021 - ỨNG DỤNG XÁC MINH THÔNG TIN THÍ SINH TRONG KÌ THI DỰA TRÊN CÔNG NGHỆ NHẬN DIỆN KHUÔN MẶT. 196005048 - Phan Thanh Triều</div>

                        </div>
                    </div>
                </footer>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets_admin/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets_admin/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets_admin/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('assets_admin/js/datatables-simple-demo.js') }}"></script>


   @yield('extraJS')
</body>

</html>
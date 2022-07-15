<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> @yield('title') </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico')}}" />
  <!-- Bootstrap Icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
  <!-- SimpleLightbox plugin CSS-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/css/mystyle.css') }}" rel="stylesheet">

  @yield('extraCSS')
</head>

<body>




<body id="page-top">

  @yield('content')

  <!-- Footer-->
  <footer class="bg-light py-5">
      <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Ứng dụng công nghệ nhận diện khuôn mặt, hỗ trợ dịch vụ công một cửa điện tử. <br>
        CH1801040 - Phan Thanh Triều</div></div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- SimpleLightbox plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
  <!-- Core theme JS-->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/scripts.js')}}"></script>

  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  @yield('extraJS')
   
</body>

</html>
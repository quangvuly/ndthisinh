<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> @yield('title') </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }} " rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }} " rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }} " rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/keypad.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/mystyle.css') }}" rel="stylesheet">

  @yield('extraCSS')
</head>

<body>
  {{-- <div class="w-100 logo-banner-bg">
    <div class="container">
        <div class="row align-items-center logo-banner">
            <div class="col-lg-9 col-md-9">
                
                <div class="logo">
                    <a href="{{ route('url.homepage')}}"><img src="{{ asset('public/assets/img/logo2.png') }}" alt="" style="height: 50px;"></a>
                </div>  
            </div>
         
          </div>
        </div>
    </div>
</div>  --}}
<main id="main">

  <section id="my-content">
    <div class="container-fluid my-card">
      <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8 ">
          <span class="my-title-camera">QUÉT KHUÔN MẶT</span>
            <div style="height:600px">
              <img class="my-camera-box" src="http://localhost:8088/nhan-dang" style="height: 600px;"> 
              {{-- <img class="my-camera-box" src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" style="height: 100%"> --}}
            </div>
        </div>
     
        <div class="col-xl-4 col-lg-4 col-md-4 ">
          <span class="my-title-camera">THÔNG TIN THÍ SINH</span>
          {{-- <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table id="myTable" class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Thứ tự</th>
                  <th scope="col">Họ tên</th>
                  <th scope="col">CMND/CCCD</th>
                  <th scope="col">Thời gian</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1904</th>
                  <td>Ly Quang Vu</td>
                  <td>190404020</td>
                  <td>7:51:42 24-7-2021</td>
                </tr>
                <tr>
                  <th scope="row">1960</th>
                  <td>Phan Thanh Trieu</td>
                  <td>196005048</td>
                  <td>7:49:12 24-7-2021</td>
                </tr>
                <tr>
                  <th scope="row">1950</th>
                  <td>Pham Thi Doan Han</td>
                  <td>195040551</td>
                  <td>7:49:05 24-7-2021</td>
                </tr>
                <tr>
                  <th scope="row">1990</th>
                  <td>Le Van Xuong</td>
                  <td>199056217</td>
                  <td>7:45:22 24-7-2021</td>
                </tr>
                <tr>
                  <th scope="row">1935</th>
                  <td>Tran Huyen An</td>
                  <td>193540021</td>
                  <td>7:42:51 24-7-2021</td>
                </tr>
                <tr>
                  <th scope="row">1941</th>
                  <td>Nguyen Tran Son</td>
                  <td>194105983</td>
                  <td>7:40:33 24-7-2021</td>
                </tr>
                <tr>
                  <th scope="row">1904</th>
                  <td>Ly Quang Vu</td>
                  <td>190404020</td>
                  <td>7:51:42 24-7-2021</td>
                </tr>
                <tr>
                  <th scope="row">1960</th>
                  <td>Phan Thanh Trieu</td>
                  <td>196005048</td>
                  <td>7:49:12 24-7-2021</td>
                </tr>
                <tr>
                  <th scope="row">1950</th>
                  <td>Pham Thi Doan Han</td>
                  <td>195040551</td>
                  <td>7:49:05 24-7-2021</td>
                </tr>
                <tr>
                  <th scope="row">1990</th>
                  <td>Le Van Xuong</td>
                  <td>199056217</td>
                  <td>7:45:22 24-7-2021</td>
                </tr>
                <tr>
                  <th scope="row">1935</th>
                  <td>Tran Huyen An</td>
                  <td>193540021</td>
                  <td>7:42:51 24-7-2021</td>
                </tr>
                <tr>
                  <th scope="row">1941</th>
                  <td>Nguyen Tran Son</td>
                  <td>194105983</td>
                  <td>7:40:33 24-7-2021</td>
                </tr>
                <tr>
                  <th scope="row">1904</th>
                  <td>Ly Quang Vu</td>
                  <td>190404020</td>
                  <td>7:51:42 24-7-2021</td>
                </tr>
                <tr>
                  <th scope="row">1960</th>
                  <td>Phan Thanh Trieu</td>
                  <td>196005048</td>
                  <td>7:49:12 24-7-2021</td>
                </tr>


                </tbody>
            </table>   

          </div> --}}
          <div class="form-group" style="margin-top: 50px">
            <label for=""> * Trường hợp không nhận dạng khuôn mặt được, thí sinh vui lòng nhập mã xác nhận bao gồm 8 ký tự nhận được từ email. </label>



            <div id="pinpad"> 
              <form id="form-keypad">
                <input type="password" id="password"/></br>
                <input type="button" value="1" id="1" class="pinButton calc"/>
                <input type="button" value="2" id="2" class="pinButton calc"/>
                <input type="button" value="3" id="3" class="pinButton calc"/><br>
                <input type="button" value="4" id="4" class="pinButton calc"/>
                <input type="button" value="5" id="5" class="pinButton calc"/>
                <input type="button" value="6" id="6" class="pinButton calc"/><br>
                <input type="button" value="7" id="7" class="pinButton calc"/>
                <input type="button" value="8" id="8" class="pinButton calc"/>
                <input type="button" value="9" id="9" class="pinButton calc"/><br>
                <input type="button" value="clear" id="clear" class="pinButton clear"/>
                <input type="button" value="0" id="0 " class="pinButton calc"/>
                <input type="button" value="enter" id="enter" class="pinButton enter" data-toggle="modal" data-target="#exampleModalCenter"/>
              </form>
            </div>


            {{-- <input type="text" class="form-control" id="code_string" placeholder="Nhập mã 8 ký tự nhận"> --}}

            <!-- Button trigger modal -->
            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" id="sub_code" data-target="#exampleModalCenter">
              Kiểm tra
            </button> --}}

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Kết quả</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div id="insert-status"></div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section> 


  </main><!-- End #main -->


    <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>@2021</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        ỨNG DỤNG XÁC MINH THÔNG TIN THÍ SINH TRONG KÌ THI DỰA TRÊN CÔNG NGHỆ NHẬN DIỆN KHUÔN MẶT.<br>
        196005048 - PHAN THANH TRIỀU
      </div>
    </div>
  </footer><!-- End #footer -->

  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <script>
    $(document).ready(function () {

      const input_value = $("#password");

      //disable input from typing
      $("#password").keypress(function () {
        return false;
      });

      //add password
      $(".calc").click(function () {
        let value = $(this).val();
        field(value);
      });

      function field(value) {
        input_value.val(input_value.val() + value);
      }

      $("#clear").click(function () {
        input_value.val("");
      });

      $("#enter").click(function () {
        code = input_value.val()

        if (code) {
            $.post( "/ma-code",
                {
                    "_token": "{{ csrf_token() }}",
                    code: code,
                    
                },
                function(response) {
                    // location.reload();
                    // toastr.success('Cập nhật thành công')
                    $("#insert-status").html(response.data)
                    // $("#insert-status").replaceWith(response);
                    // console.log(response.data); 
                    // window.location('/place');

                })
        }
        // alert("Your password " + input_value.val() + " added");
      });

    });
  </script>
  @yield('extraJS')
   
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NHẬN DẠNG KHUÔN MẶT</title>
    <link href="{{ asset('assets/img/favicon.png') }} " rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="{{ asset('assets/css/keypad.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/authen.css')}}">
    <link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/mystyle.css') }}" rel="stylesheet">
</head>
<body>
    <section class=" " style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-6">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                    
                    <div class="col-lg-12">
                        <div class="text-center">
                            <img src="{{asset('assets/img/logo3.png')}}" style="width: 100px; padding-top: 15px;padding-bottom: 15px;" alt="logo">
                            <h4 class="mt-1 mb-3 pb-1">NHẬN DẠNG KHUÔN MẶT</h4>
                        </div>
                        <div class="card-body p-md-5 mx-md-4">
                              
                                    {{-- @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    @if(session('success'))
                                        <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div> 
                                    @endif --}}
      
                                    <div class="card-body">             
                                        <img class="my-camera-box" src="http://localhost:8088/nhan-dang" style="width:100%;">    
                                    </div>
 
                        </div>
                        <div class="card-body p-md-5 mx-md-4" style="margin-top: 50px">
                            <div class="form-outline mb-4">
                                <span style="padding-left: 15px; font-size: 18px"> * Trường hợp không nhận dạng khuôn mặt được, thí sinh vui lòng nhập mã xác nhận bao gồm 8 ký tự nhận được từ email. </span>
                            </div>
                
                
                
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
                    
                    <div class="col-lg-12 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                        <h4 class="mb-4">PHAN THANH TRIỀU - 196005048</h4>
                        <p class="small mb-0">ỨNG DỤNG XÁC MINH THÔNG TIN THÍ SINH TRONG KÌ THI DỰA TRÊN CÔNG NGHỆ NHẬN DIỆN KHUÔN MẶT</p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>
</body>

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
</html>

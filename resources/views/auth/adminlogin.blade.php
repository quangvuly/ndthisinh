<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Trang dịch vụ công</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('public/assets/css/authen.css')}}">
</head>
<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="{{asset('public/assets/img/logo3.png')}}" style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">Khu vực Quản trị viên</h4>
                      </div>
      
                      <form method="POST" action="{{ route('adminlogin.custom') }}">
                        @csrf
                        <p>Vui lòng đăng nhập để tiếp tục</p>
      
                        <div class="form-outline mb-4">
                          <input type="email" name="email" id="form2Example11" class="form-control" placeholder="Email"/>
                          {{-- <label class="form-label" for="form2Example11">Email</label> --}}
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" name="password" id="form2Example22" class="form-control" placeholder="Mật khẩu" />
                          {{-- <label class="form-label" for="form2Example22">Mật khẩu</label> --}}
                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Đăng nhập</button>
                          {{-- <a class="text-muted" href="#!">Forgot password?</a> --}}
                        </div>

                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">Dịch vụ công Một cửa điện tử</h4>
                      <p class="small mb-0">Ứng dụng công nghệ nhận diện khuôn mặt vào dịch vụ công một cửa điện tử</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Nhận diện khuôn mặt</title>
    <link href="{{ asset('assets/img/favicon.png') }} " rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/authen.css')}}">
    
</head>
<body>
    <section class="h-100 " style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-6">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-12">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="{{asset('assets/img/logo3.png')}}" style="width: 100px;" alt="logo">
                        <h4 class="mt-1 mb-3 pb-1">Đăng ký tài khoản</h4>

                      </div>
                      
                      <form method="POST" action="{{route('url.update.myregister')}}">
                        @csrf
                        @include('layouts.messages')
                        <div class="form-outline mb-4">
  
                            <label class="my-label"><i class="fas fa-user"></i> Họ </label>
                            <input type="text" name="firstname" class="form-control" placeholder="Vui lòng nhập họ"/>
                          
                        </div>
                        <div class="form-outline mb-4">
  
                          <label class="my-label"><i class="fas fa-user"></i> Tên</label>
                          <input type="text" name="lastname" class="form-control" placeholder="Vui lòng nhập tên "/>
                        
                      </div>
                        <div class="form-outline mb-4">
                            <label class="my-label"><i class="fas fa-envelope"></i> Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Vui lòng nhập email liên hệ"/>
                          </div>


                          <div class="form-outline mb-4">
                            <label class="my-label"><i class="fas fa-key"></i> Mật khẩu</label>
                            <input type="password" name="password" class="form-control" placeholder="Vui lòng nhập mật khẩu" />

                        </div>
                        <div class="form-outline mb-4"> 
                            <label class="my-label"><i class="fas fa-keyboard"></i> Nhập lại mật khẩu</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Vui lòng nhập lại Mật khẩu" />
                          </div>
                          <div class="form-outline mb-4">
                            <label class="my-label"><i class="fas fa-envelope"></i> Ngày sinh</label>
                            <input type="text" name="birthday" class="form-control" placeholder="Vui lòng nhập ngày sinh"/>
                          </div>
                        <div class="form-outline mb-4">
                            <label class="my-label"><i class="fas fa-phone"></i> Điện thoại</label>
                            <input type="text" name="txtDienthoai" class="form-control" placeholder="Vui lòng nhập điện thoại liên hệ" />

                        </div>
                        <div class="form-outline mb-4">
                            <label class="my-label"><i class="fas fa-id-card-alt"></i> Căn cước công dân/CMND</label>
                            <input type="txt" name="txtCMND"  class="form-control" placeholder="Vui lòng số CMND"/>
                        </div>
                        
                       
                        
      
                        <div class="text-center pt-1 mb-3 pb-1">
                          <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 my-submit-btn" type="submit">Đăng ký</button>
                          {{-- <a class="text-muted" href="#!">Forgot password?</a> --}}
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">Đã có tài khoản?</p>
                          <a href="{{route('login')}}" class="a-outline-danger">Đăng nhập</a>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-12 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">PTTrieu-196005048</h4>
                      <p class="small mb-0">Ứng dụng công nghệ nhận diện khuôn mặt xác nhận thông tin thí sinh</p>
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
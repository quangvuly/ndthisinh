<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ghi danh</title>
    <link href="{{ asset('assets/img/favicon.png') }} " rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/authen.css')}}">
    <link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet" />
</head>
<body>
    <section class="h-100 " style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-6">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                    
                    <div class="col-lg-12">
                        <div class="text-center">
                            <img src="{{asset('assets/img/logo3.png')}}" style="width: 100px; padding-top: 15px;padding-bottom: 15px;" alt="logo">
                            <h4 class="mt-1 mb-3 pb-1">Ghi danh</h4>

                            <ul style="display: flex;justify-content: center;" class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        
                                <li style="padding: 0 8px" class="nav-item" role="presentation">
                                    <a style="padding: 0.5rem 2rem;" class="btn btn-primary btn-xl nav-link my-submit active" id="pills-profile-tab" data-toggle="pill" href="#tab-nophs" role="tab" aria-controls="pills-profile" aria-selected="true">1. NỘP HỒ SƠ >></a>
                                </li>
                                <li style="padding: 0 8px" class="nav-item" role="presentation">
                                    <a style="padding: 0.5rem 2rem;" class="btn btn-primary btn-xl nav-link my-submit" id="pills-contact-tab" data-toggle="pill" href="#tab-face" role="tab" aria-controls="pills-contact" aria-selected="false">2. DỮ LIỆU KHUÔN MẶT</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body p-md-5 mx-md-4">

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="tab-nophs" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="card">
                                        @if (count($errors) > 0)
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
                                        @endif
          
                                        <div class="card-body">
                                            <div class="form-outline mb-4">
                                                <label class="my-label"><i class="fas fa-user"></i> Họ & Tên: </label>
                                                <span style="padding-left: 15px; font-size: 18px"> {{$data->userlist[0]->firstname}}  {{$data->userlist[0]->lastname}} </span>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="my-label"><i class="fas fa-envelope"></i> Email: </label>
                                                <span style="padding-left: 15px; font-size: 18px"> {{$data->userlist[0]->email}} </span>              
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="my-label"><i class="fas fa-calendar"></i> Ngày sinh</label>
                                                <span style="padding-left: 15px; font-size: 18px"> {{$data->userlist[0]->birthday}}</span>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="my-label"><i class="fas fa-id-card-alt"></i> Căn cước công dân/CMND</label>
                                                <span style="padding-left: 15px; font-size: 18px"> {{$data->userlist[0]->idcard}}  </span>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="my-label"><i class="fas fa-book"></i> Môn thi</label>
                                                <span style="padding-left: 15px; font-size: 18px"> {{$data->subjectlist[0]->name}}  </span>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="my-label"><i class="fas fa-calendar"></i> Ngày thi</label>
                                                <span style="padding-left: 15px; font-size: 18px"> {{$data->subjectlist[0]->time_exam}}  </span>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <a class="btn btn-primary btn-xl" href="{{route('url.upload_detailexamuser',['id' => $data->id ])}}" style="display: flex;justify-content: center; padding: 0.5rem;">Nhận email & mã code</a>
                                            </div>
                                           
                                        </div>
                    
                                        
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade " id="tab-face" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-8">
                                                    {{-- <img src="http://localhost:8000/dashboard/manage/AddData/{{id}}/{{namecame}}" style="width: 600px;padding: 5px;margin: auto;border: blue solid;">  --}}
                                                    {{-- <img class="my-camera-box" src="http://localhost:8000/them-anh/{{Auth::id()}}" style="width: 100%;">  --}}
                                                    <img class="my-camera-box" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/ba/29/5c/img-worlds-of-adventure.jpg?w=1200&h=-1&s=1" style="width: 100%;">
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div id="app"></div>
                                                    <div id="alert-app"></div>
                                                </div>
                                            </div>
                                            
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<!-- Core theme JS-->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
{{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}
<script src="{{ asset('assets/js/scripts.js')}}"></script>
<script>

    const FULL_DASH_ARRAY = 283;
    const WARNING_THRESHOLD = 10;
    const ALERT_THRESHOLD = 5;
  
    const COLOR_CODES = {
    info: {
        color: "green"
    },
    warning: {
        color: "orange",
        threshold: WARNING_THRESHOLD
    },
    alert: {
        color: "red",
        threshold: ALERT_THRESHOLD
    }
    };
  
    const TIME_LIMIT = 10;
    let timePassed = 0;
    let timeLeft = TIME_LIMIT;
    let timerInterval = null;
    let remainingPathColor = COLOR_CODES.info.color;
  
    document.getElementById("app").innerHTML = `
    <div class="base-timer">
    <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <g class="base-timer__circle">
        <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
        <path
            id="base-timer-path-remaining"
            stroke-dasharray="283"
            class="base-timer__path-remaining ${remainingPathColor}"
            d="
            M 50, 50
            m -45, 0
            a 45,45 0 1,0 90,0
            a 45,45 0 1,0 -90,0
            "
        ></path>
        </g>
    </svg>
    <span id="base-timer-label" class="base-timer__label">${formatTime(
        timeLeft
    )}</span>
    </div>
    `;
  
    $("#pills-contact-tab").click(function() {
        startTimer();
    });
  
  
  
    // function onTimesUp() {
    //     clearInterval(timerInterval);
    //   //   document.getElementById("alert-app").innerHTML = `<div style="padding: 15px;text-align: center; font-size: 17px;color: #ff6a00;">Hoàn tất quá trình. Chuyển hướng đến trang chủ sau 3s</div>`
    //     setTimeout(function(){
    //           alert('Lấy dữ liệu thành công. Bạn sẽ được chuyển đến Trang chủ sau một vài giây.')
    //           window.location.href = "http://localhost:8000";
    //     },1000);
       
    // }
  
    function startTimer() {
    timerInterval = setInterval(() => {
        timePassed = timePassed += 1;
        timeLeft = TIME_LIMIT - timePassed;
        document.getElementById("base-timer-label").innerHTML = formatTime(
        timeLeft
        );
        setCircleDasharray();
        setRemainingPathColor(timeLeft);
  
        if (timeLeft === 0) {
        onTimesUp();
        }
    }, 1000);
    }
  
    function formatTime(time) {
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;
  
    if (seconds < 10) {
        seconds = `0${seconds}`;
    }
  
    return `${minutes}:${seconds}`;
    }
  
    function setRemainingPathColor(timeLeft) {
    const { alert, warning, info } = COLOR_CODES;
    if (timeLeft <= alert.threshold) {
        document
        .getElementById("base-timer-path-remaining")
        .classList.remove(warning.color);
        document
        .getElementById("base-timer-path-remaining")
        .classList.add(alert.color);
    } else if (timeLeft <= warning.threshold) {
        document
        .getElementById("base-timer-path-remaining")
        .classList.remove(info.color);
        document
        .getElementById("base-timer-path-remaining")
        .classList.add(warning.color);
    }
    }
  
    function calculateTimeFraction() {
    const rawTimeFraction = timeLeft / TIME_LIMIT;
    return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
    }
  
    function setCircleDasharray() {
    const circleDasharray = `${(
        calculateTimeFraction() * FULL_DASH_ARRAY
    ).toFixed(0)} 283`;
    document
        .getElementById("base-timer-path-remaining")
        .setAttribute("stroke-dasharray", circleDasharray);
    }
  </script>
  {{-- <script>
    $(document).ready(function () {
      $("#upload-multi-hoso").click(function () {
        code = input_value.val()
        if (code) {
            $.post( "/dichvucong/ma-code",
                {
                    "_token": "{{ csrf_token() }}",
                    code: code,
                },
                function(response) {
                    $("#insert-status").html(response.data)
                })
        }
      });

    });
  </script> --}}
</html>






{{-- @endsection --}}
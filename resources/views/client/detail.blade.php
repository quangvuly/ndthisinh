@extends('master')

@section('title','Trang chủ Dịch vụ công')

@section('content')

<main id="main">

  <section id="my-content">
      <div class="container">
        <nav aria-label="breadcrumb" class="my-bread">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('url.homepage')}}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{route('url.listThutuc')}}">Danh sách thủ tục</a></li>
                <li class="breadcrumb-item"><a href="{{route('url.detailThutuc',['id' => $thutuc->id])}}">{!!$thutuc->tt_name !!}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nộp hồ sơ</li>
            </ol>
          </nav>
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          
          <li class="nav-item" role="presentation">
              <a class="btn nav-link my-submit active" id="pills-profile-tab" data-toggle="pill" href="#tab-nophs" role="tab" aria-controls="pills-profile" aria-selected="true">1. NỘP HỒ SƠ >></a>
          </li>
          <li class="nav-item" role="presentation">
              <a class="btn nav-link my-submit" id="pills-contact-tab" data-toggle="pill" href="#tab-face" role="tab" aria-controls="pills-contact" aria-selected="false">2. DỮ LIỆU KHUÔN MẶT</a>
          </li>
          </ul>
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
                          <form action="{{route('url.upload_detailThutuc', [ 'id' => $thutuc->id])}}" method="POST" enctype="multipart/form-data" id="upload-multi-hoso" >
                            @csrf
                              <div class="form-group">
                                  <span class="my-form-submit-title">Hồ sơ đính kèm</span>
                                    <p> Công dân sao chụp hồ sơ và các giấy tờ liên quan, tải lên bằng cách nhấp vào nút bên dưới.</p>
                                  <input type="file" class="form-control-file" name="filehoso[]" id="fileHoSo" multiple placeholder="Vui lòng tải lên hồ sơ đính kèm" style="padding: 20px 0;">
                                  <small class="form-text text-muted"></small>
                              </div>

  
                              <button type="submit" class="btn" id="subhs" style="padding: 15px;">Nộp hồ sơ</button>
                             
                          </form>
                      </div>

                    
                  </div>
              </div>
              
              <div class="tab-pane fade " id="tab-face" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-lg-8 col-md-8">
                                  {{-- <img src="http://localhost:8000/dashboard/manage/AddData/{{id}}/{{namecame}}" style="width: 600px;padding: 5px;margin: auto;border: blue solid;">  --}}
                                  <img class="my-camera-box" src="http://localhost:8000/them-anh/{{Auth::id()}}" style="width: 100%;"> 
                                 
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
  </section>
  </main>

@endsection


@section('extraJS')
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



  function onTimesUp() {
      clearInterval(timerInterval);
    //   document.getElementById("alert-app").innerHTML = `<div style="padding: 15px;text-align: center; font-size: 17px;color: #ff6a00;">Hoàn tất quá trình. Chuyển hướng đến trang chủ sau 3s</div>`
      setTimeout(function(){
            alert('Lấy dữ liệu thành công. Bạn sẽ được chuyển đến Trang chủ sau một vài giây.')
            window.location.href = "http://localhost/dichvucong";
      },1000);
     
  }

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
<script>
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
@endsection
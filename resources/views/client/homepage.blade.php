    @extends('master')

    @section('title','Trang chủ Hệ thống nhận diện thí sinh')

    @section('extraCSS')
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">

    @section('content')

    

      <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">123213213 - PTTrieu</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="#">Tổng quan</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">Môn thi</a></li>
                <li class="nav-item"><a class="nav-link" href="#service">Đăng ký</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">Lựa chọn ngành học cho tương lai</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5"> Cung cấp các khóa đào tạo công nghệ chuyên sâu như Ảo hóa và Điện toán đám mây, Bảo mật thông tin, Big Data. Hỗ trợ thi lấy chứng chỉ quốc tế cho học viên</p>
                <a class="btn btn-primary btn-xl" href="#about">Danh sách môn</a>
            </div>
        </div>
    </div>
</header>
<!-- About-->
<section class="page-section" id="about">
    <div class="container-fluid px-10 px-lg-10">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-primary mt-0">DANH SÁCH CÁC MÔN THI</h2>
                <hr class="divider divider-light" />
                {{-- <p class="text-white-75 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p> --}}
                
                    
                <table id="myTable" class="table table-striped" style="vertical-align: middle;">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên môn</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Số lượng</th>
                        {{-- <th scope="col">Đã đăng ký</th> --}}
                        <th scope="col">Ngày thi</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($monthi as $item)
                        
                    <tr>
                        <td style="padding: 20px;">{{$loop->iteration}}</td>
                        <td style="padding: 20px;">{{$item->name}} </td>
                        <td style="padding: 20px;">{{$item->descript}}</td>
                        <td style="padding: 20px;">{{$item->total}}</td>
                        {{-- <td>{{$item->total}}</td> --}}
                        <td style="width:150px; padding: 20px">{{$item->time_exam}}</td>
                        <td style="padding: 20px;"><a href="##"><button class="btn btn-primary" style="width: 100px;">Đăng ký</button></a></td>
                    </tr> 
                        
                    
                    @endforeach
                    
                    </tbody>
                </table>
                 
                {{-- <a class="btn btn-light btn-xl" href="#services">Get Started!</a> --}}
            </div>
        </div>
    </div>
</section>

<!-- Contact-->
{{-- <section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Let's Get In Touch!</h2>
                <hr class="divider" />
                <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">Full name</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">Email address</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                        <label for="phone">Phone number</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Message</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <i class="bi-phone fs-2 mb-3 text-muted"></i>
                <div>+1 (555) 123-4567</div>
            </div>
        </div>
    </div>
</section> --}}

    @endsection


    @section('extraJS')

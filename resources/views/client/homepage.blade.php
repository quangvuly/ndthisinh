    @extends('master')

    @section('title','Trang chủ Hệ thống nhận diện thí sinh')

    @section('extraCSS')
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">

    @section('content')

    

      <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">196005048 - PTTrieu</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="#">Tổng quan</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">Môn thi</a></li>
                @if (Auth::check()) 
                {{-- <div class="dropdown"> --}}
                  {{-- <button class="btn head-btn1 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> --}}
                    <li class="nav-item"><a class="nav-link" href="{{route('signout')}}">Xin chào {{Auth::user()->firstname}}</a> </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Đăng nhập</a>  </li>
                @endif

                {{-- <li class="nav-item"><a class="nav-link" href="#service">{{Auth::user()->firstname}}</a></li> --}}
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
                        <td style="padding: 20px;"><a href="{{route('url.detailexamuser',['id' => $item->id])}}"><button class="btn btn-primary" style="width: 150px;">Đăng ký</button></a></td>
                    </tr> 
                        
                    
                    @endforeach
                    
                    </tbody>
                </table>
                 
            </div>
        </div>
    </div>
</section>


    @endsection


    @section('extraJS')

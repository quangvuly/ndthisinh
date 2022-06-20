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
              <li class="breadcrumb-item active" aria-current="page">{!!$thutuc->tt_name !!}</li>
            </ol>
        </nav>
        {!!$thutuc->tt_chitiet !!}
        <div>
            <a class="btn btn-primary" href="{{ route('url.upload_viewThutuc',[ 'id' => $thutuc->id])}}"> Nộp hồ sơ</a>
            
        </div>
        
      </div>
      
  </section>
  </main>

@endsection


@section('extraJS')

@endsection
@extends('master')

@section('title','Trang chủ Dịch vụ công')

@section('extraCSS')
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')


<main id="main">

  <section id="my-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3">
          <span class="my-title">TRA CỨU</span>
          
          <div>
            <form method="POST" action=" {{ route('url.SearchlistThutuc') }}">
              @csrf
              <span class="my-title-form">Lĩnh vực</span>
              <div class="select-form">
                <div class="select-itms">
                    <input type="text" class="input-form my-input-form-search" name="txtLinhvuc" id="" placeholder="Vui lòng nhập thông tin">
                    
                </div>
              </div>
              <div class="hero__caption" style="width: 80%;">
                <span>* Nhập số biên nhận mà bạn nhận được từ hệ thống hoặc
                    cơ quan chức năng sau khi đăng ký hồ sơ thành công và chọn cơ quan chức năng đã tiếp nhận hồ sơ</span>
              </div>
              {{-- <span class="my-title-form">Đơn vị thực hiện</span>
              <div class="select-form">
                <div class="select-itms">
                    <select class="my-select" name="select" id="select2">
                      <option value="">Vui lòng chọn</option>
                      @foreach ($donvi as $item)
                      <option value="{{$item->id}}">{{$item->dv_name}}</option>
                      @endforeach
                    </select>
                </div>
              </div>  
              <span class="my-title-form">Mức độ</span>
              <div class="select-form">
                <div class="select-itms">
                    <select class="my-select" name="select" id="select3">
                        <option value="">Vui lòng chọn</option>
                        <option value="1">Mức độ 1</option>
                        <option value="2">Mức độ 2</option>
                        <option value="3">Mức độ 3</option>
                        <option value="4">Mức độ 4</option>
                    </select>
                </div>
              </div> --}}
              <div class="search-form">
                <button type="submit" class="btn head-btn1 my-search-btn">TRA CỨU</button>
              </div>	
            </form>	
          </div>

        </div>
        <div class="col-xl-9 col-lg-9 col-md-9">
          <span class="my-title">DANH SÁCH DỊCH VỤ</span>
          <table id="myTable" class="table table-striped">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Thủ tục hành chính</th>
                <th scope="col">Lĩnh vực</th>
                <th scope="col">Đơn vị thực hiện</th>
                <th scope="col">Mức độ</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($thutuc as $item)
                
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td><a href="{{ route('url.detailThutuc',['id' => $item->id]) }} ">{{$item->tt_name}}</a> </td>
                <td>{{$item->linhvuc->lv_name}}</td>
                <td>
                  @foreach ($donvi as $dv)
                    @if ($dv->id == $item->linhvuc->donvi_id)
                    {{$dv->dv_name}}
                    @endif
                  @endforeach
                </td>
                <td>{{$item->tt_level}}</td>
              </tr> 
               
              
              @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </section>  
  

  </main><!-- End #main -->
@endsection

@section('extraJS')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  });
</script>
@endsection






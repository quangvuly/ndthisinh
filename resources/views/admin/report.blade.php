@extends('master_admin')

@section('title', 'Trang Theo dõi xử lý nhận hồ sơ')
    
@section('extraCSS')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Thống kê số liệu</h1>
    <div class="row">
        <div class="col-xl-10 col-md-10">
            {{-- <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Tổng số Thủ tục: {{$tong}}</li>
            </ol> --}}
        </div>
        <div class="col-xl-2 col-md-2" style="text-align: right">
            {{-- <a class="btn my-btn" href="{{route('url.admin.createthutuc')}}">Thêm mới</a> --}}
            
        </div>
    </div>

    <div class="card mt-5 mb-5 my-card">
        <div class="card-body">
            <form method="POST" action="{{route('url.admin.report_search')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label-filter"> <i class="fas fa-calendar-alt"></i> Từ</label>
                        <div id="datepicker-from" class="input-group date" data-date-format="mm-dd-yyyy">
                            <input class="form-control" name="txtFromdate" type="text" readonly />
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label-filter"> <i class="fas fa-calendar-alt"></i> Đến</label>
                        <div id="datepicker-to" class="input-group date" data-date-format="mm-dd-yyyy">
                            <input class="form-control" name="txtTodate" type="text" readonly />
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-4">
                            <label class="form-label-filter"> <i class="fas fa-check-double"></i> Trạng thái </label>
                            <select class="form-control" name="sltStatus" >
                                <option value="3">Hoàn Thành</option>
                                <option value="2">Chờ nhận hồ sơ</option>
                                <option value="1">Đang xử lý</option>
                                <option value="0">Hoàn trả</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-outline mb-4">
                            <label class="form-label-filter" style="color: white"> Thực thi</label>
                            <button type="submit" class="btn btn-primary my-submit-btn form-control"><i class="fas fa-filter"></i> Lọc</a>
                            {{-- <a href="{{route('url.admin.report_search')}}" class="btn btn-primary my-submit-btn form-control"><i class="fas fa-filter"></i> Lọc</a> --}}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-outline mb-4">
                            <label class="form-label-filter" style="color: white"> Thực thi</label>
                            <a href="{{route('url.admin.report')}}" class="btn btn-warning my-submit-btn form-control"><i class="fas fa-filter"></i> Tất cả</a>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
        

    <div class="card mb-4 my-card">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Bảng thống kê
        </div>
        <div class="card-body">

            <table class="table table-striped my-table" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Thứ tự</th>
                        <th>Người nộp</th>
                        <th>Điện thoại</th>
                        <th>Thủ tục</th>
                        <th>Nộp ngày</th>
                        <th>Cập nhật ngày</th>
                        <th>Trạng thái</th>
                        <th>Tác vụ</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->usersubmit[0]->name}}</td>
                        <td>{{$item->usersubmit[0]->phone}}</td>
                        <td>{{$item->thutuc[0]->tt_name}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        @switch($item->nhs_status)
                            @case(0)
                                <td style="color: red"> Hoàn trả </td>
                                @break
                            @case(1)
                                <td style="color: black">Đang xử lý </td>
                                @break   
                            @case(2)
                                <td style="color: rgb(76, 2, 146)">Xử lý xong, chờ nhận hồ sơ </td>
                                @break        
                            @case(3)
                                <td style="color: blue">Đang chờ nhận hồ sơ </td>
                                @break
                            @case(4)
                                <td style="color: green">Hoàn thành </td>
                                @break

                        @endswitch
                        <td><a href="{{route('url.admin.processHS',['id' => $item->id])}}">Xem </a></td>
                    </tr>
                    
                    @endforeach
                    
                    
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection

@section('extraJS')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<script>

    // var todayDate = new Date('2021-03-05');

    // // var startDate = new Date(todayDate.getDate() - 7);
    // console.log(todayDate.getDate()-7);
    $("#datepicker-from").datepicker({ 
        autoclose: true, 
        todayHighlight: true,
        format: 'yyyy-mm-dd',
    }).datepicker('setDate', '2021-09-01');
    
    $("#datepicker-to").datepicker({ 
        autoclose: true, 
        todayHighlight: true,
        format: 'yyyy-mm-dd',
    }).datepicker('update', new Date());
</script>
@endsection

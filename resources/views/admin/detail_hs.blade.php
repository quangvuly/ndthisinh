@extends('master_admin')

@section('title', 'Trang Theo dõi xử lý nhận hồ sơ')
    
@section('extraCSS')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Chi tiết hồ sơ</h1>
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

    <div class="card mb-4 my-card">
        <div class="card-body">

            <table class="table table-striped my-table" >
                    <tr>
                        <th>Tên hồ sơ</th>
                        <td>{{$data->thutuc[0]->tt_name}}</td>       
                    </tr>
                    <tr>
                        <th>Người nộp</th>
                        <td>{{$data->usersubmit[0]->name}}</td>
                    </tr>
                    <tr>
                        <th>Điện thoại</th>
                        <td>{{$data->usersubmit[0]->phone}}</td>
                    </tr>

                    <tr>
                        <th>Thời gian nộp</th>
                        <td>{{$data->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Cập nhật mới nhất</th>
                        <td>{{$data->updated_at}}</td>
                    </tr>
                    <tr>
                        <th>Trạng thái</th>
                        @switch($data->nhs_status)
                            @case(0)
                                <td style="color: red"> Hoàn trả </td>
                                @break
                            @case(1)
                                <td style="color: black">Đang xử lý </td>
                                @break         
                            @case(2)
                               <td style="color: blue">Chờ nhận hồ sơ </td>
                                @break
                            @case(3)
                                <td style="color: green">Hoàn thành </td>
                                @break

                        @endswitch
                    </tr>
                    <tr>
                        <th>Hồ sơ đính dạng</th>
                        <td>
                        @foreach ($files as $item)
                            @switch($item->getExtension())
                                @case('pdf')
                                    <a href="{{ asset('public/upload/'.$user_id.'/'.$thutuc_id.'/'.$item->getFilename())}}"> <img class="my-icon-attach" src="{{asset('public/assets_admin/assets/img/pdf.png')}}" alt="{{$item->getFilename()}}" srcset=""></a>
                                    @break
                                @case('doc')
                                    <a href="{{ asset('public/upload/'.$user_id.'/'.$thutuc_id.'/'.$item->getFilename())}}"> <img class="my-icon-attach" src="{{asset('public/assets_admin/assets/img/docx.png')}}" alt="{{$item->getFilename()}}" srcset=""></a>
                                    @break
                                @case('docx')
                                <a href="{{ asset('public/upload/'.$user_id.'/'.$thutuc_id.'/'.$item->getFilename())}}"> <img class="my-icon-attach" src="{{asset('public/assets_admin/assets/img/docx.png')}}" alt="{{$item->getFilename()}}" srcset=""></a>
                                    @break
                                @default
                                    <a href="{{ asset('public/upload/'.$user_id.'/'.$thutuc_id.'/'.$item->getFilename())}}"> {{$item->getFilename()}}</a>
                            @endswitch
                        @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Ghi chú</th>
                        <td>{{$data->nhs_note}}</td>
                    </tr>
                    
            </table>

        </div>
    </div>

    <div class="card mt-5 mb-5 my-card">
        <div class="card-body">
            <form method="POST" action="{{route('url.admin.update_processHS',['id'=> $data->id])}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    
                    <div class="col-md-3">
                        <label class="form-label-filter" >  <i class="fas fa-check-double"></i> Xác nhận</label>
                        <div class="form-outline mb-4">
                            <button type="submit" name="action" value="subXuly" class="btn btn-warning" style="width: 80%"><i class="fas fa-exclamation"></i> Tạm hoãn</button>
                        </div>
                        <div class="form-outline mb-4">
                            <button type="submit" name="action" value="subHople" class="btn btn-primary" style="width: 80%"><i class="fas fa-check"></i> Hợp lệ</button>
                        </div>
                        <div class="form-outline mb-4">
                            <button type="submit" name="action" value="subHoanthanh" class="btn btn-success" style="width: 80%"><i class="fas fa-check"></i> Hoàn thành</button>
                        </div>
                        <div class="form-outline mb-4">
                            <button type="submit" name="action" value="subHoantra" class="btn btn-danger" style="width: 80%"><i class="fas fa-times"></i> Hoàn trả</button>
                        </div>
                        
                    </div>
                    <div class="col-md-9">
                        <label class="form-label-filter"> <i class="fas fa-comment-alt"></i> Cập nhật Ghi chú </label>
                        <textarea name="txtNote" class="form-control" cols="30" rows="9"> {{old('txtNote',$data->nhs_note)}}</textarea>
                        {{-- <input class="form-control" name="txtNote" type="text" placeholder="Cập nhật ghi chú mới nếu có" /> --}}
                        
                    </div>
                </div>
                
            </form>
        </div>
    </div>

    
        
</div>
@endsection

@section('extraJS')
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
</script> --}}
@endsection

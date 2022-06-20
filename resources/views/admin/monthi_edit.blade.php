@extends('master_admin')

@section('title', 'Trang Quản lý thông tin')
    
@section('extraCSS')
<link href="{{ asset('assets_admin/datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" />

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Quản lý Môn thi</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Chỉnh sửa môn thi </li> 
        {{-- {{$tong}} --}}
    </ol>
    
    <div class="card mb-4">
        <div class="card-body"> 
            <form method="POST" action="{{route('url.admin.updatemonthi',['id' => $monthi->id])}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-xl-4 col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">Tên Môn thi</label>
                            <input type="text" class="form-control" name="txtTenmonthi" placeholder="Vui lòng nhập tên Môn thi" value="{{old('txtTenmonthi',$monthi->name)}}">
                          </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">Địa điểm thi</label>
                            <input type="text" class="form-control" name="txtDiadiem" placeholder="Vui lòng nhập Địa điểm thi" value="{{old('txtDiadiem',$monthi->location)}}">
                          </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">Số lượng thí sinh</label>
                            <input type="text" class="form-control" name="txtSoluong" placeholder="Vui lòng nhập Số lượng thí sinh" value="{{old('txtSoluong',$monthi->total)}}">
                          </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="mb-3">
                            <label  class="form-label">Thời gian thi</label>
                            <input type="text" class="form-control" name="txtTimeexam" value="{{old('txtTimeexam',$monthi->time_exam)}}">
                          </div>
                    </div>

                    <div class="col-xl-8 col-md-8">
                        <div class="mb-3">
                            <label  class="form-label">Mô tả môn thi</label>
                            <textarea class="form-control" name="txtDescript" id="" cols="30" rows="1"> {{old('txtDescript',$monthi->descript)}} </textarea> 
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
              </form>
        </div>
    </div>
</div>
@endsection

@section('extraJS')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('assets_admin/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script>
$('#ngayExam').datepicker({
    format: 'mm/dd/yyyy'
});
</script>

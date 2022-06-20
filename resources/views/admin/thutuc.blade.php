@extends('master_admin')

@section('title', 'Trang Quản lý thông tin')
    

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Quản lý Thủ tục</h1>
    <div class="row">
        <div class="col-xl-10 col-md-10">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Tổng số Thủ tục: {{$tong}}</li>
            </ol>
        </div>
        <div class="col-xl-2 col-md-2" style="text-align: right">
            <a class="btn my-btn" href="{{route('url.admin.createthutuc')}}">Thêm mới</a>
            
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Bảng thống kê
        </div>
        <div class="card-body">
            <table class="table table-striped" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Thứ tự</th>
                        <th>Tên Thủ tục</th>
                        <th>Thuộc Lĩnh vực</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($thutuc as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->tt_name}}</td>
                        <td>{{$item->linhvuc->lv_name}}</td>
                        <td>
                            <a href="{{route('url.admin.editthutuc',['id' => $item->id])}}"><i class="fas fa-pen"></i></a>
                            <a href=""><i class="fas fa-recycle"></i></a>
                        </td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

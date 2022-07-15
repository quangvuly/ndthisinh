@extends('master_admin')

@section('title', 'Trang Quản lý thông tin')
    

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Quản lý Thí sinh</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Danh sách Thí sinh thi môn: <strong> {{$monthi->name}} </strong></li> 
    </ol>
    <ol class="breadcrumb mb-4">

        <li class="breadcrumb-item active">Số lượng còn trống: <strong> {{$solai}} </strong></li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-body">
            <table class="table table-striped" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Thứ tự</th>
                        <th>Họ</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Ngày sinh</th>
                        <th>CMND/CCCD</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($thisinh as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->firstname}}</td>
                        <td>{{$item->lastname}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->birthday}}</td>
                        <td>{{$item->idcard}}</td>
                        {{-- <td>
                            <a style="padding-left: 5px" href=""><i class="fas fa-pen"></i> </a>
                            <a style="padding-left: 5px" href=""><i class="fas fa-user"></i> </a>
                            <a style="padding-left: 5px" href=""><i class="fas fa-trash"></i> </a>
                        </td> --}}
                    </tr>
                    @endforeach
                    
                   
                </tbody>
            </table>
            {{-- <a href="{{route('url.admin.createmonthi')}}"><button class="btn btn-primary"> Tạo mới </button></a> --}}
        </div>
        
    </div>
</div>
@endsection

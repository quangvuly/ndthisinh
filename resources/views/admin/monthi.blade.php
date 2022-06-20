@extends('master_admin')

@section('title', 'Trang Quản lý thông tin')
    

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Quản lý Môn thi</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Tổng số Môn thi: </li> 
        {{-- {{$tong}} --}}
    </ol>
    
    <div class="card mb-4">
        <div class="card-body">
            <table class="table table-striped" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Thứ tự</th>
                        <th>Môn thi</th>
                        <th>Mô tả</th>
                        <th>Số lượng</th>
                        <th>Ngày thi</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($monthi as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->descript}}</td>
                        <td>{{$item->total}}</td>
                        <td>{{$item->time_exam}}</td>
                        <td>
                            <a href="{{route('url.admin.editmonthi',['id' => $item->id])}}" style="padding-left: 5px" href=""><i class="fas fa-pen"></i> </a>
                            <a href="{{route('url.admin.thisinh',['id' => $item->id])}}" style="padding-left: 5px"><i class="fas fa-user"></i> </a>
                            <a href="{{route('url.admin.deletemonthi',['id' => $item->id])}}" style="padding-left: 5px" ><i class="fas fa-trash"></i> </a>
                       
                        </td>
                    </tr>
                    @endforeach
                    
                   
                </tbody>
            </table>
            <a href="{{route('url.admin.createmonthi')}}"><button class="btn btn-primary"> Tạo mới </button></a>
        </div>
        
    </div>
</div>
@endsection

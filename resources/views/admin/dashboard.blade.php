@extends('master_admin')

@section('title', 'Trang Quản lý thông tin')
    

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-6 col-md-12">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body" style="">Tổng số thí sinh: {{$tongthisinh}} </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link"></a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="card bg-success text-white mb-4">
                <div class="card-body" style=""> Tổng số môn thi: {{$tong}} </div>  
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{route('url.admin.monthi')}}">Chi tiết</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Bảng thống kê
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Thứ tự</th>
                                <th>Họ Tên</th>
                                <th>CMND/CCCD</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Thứ tự</th>
                                <th>Họ Tên</th>
                                <th>CMND/CCCD</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($thisinh as $item)
                                @if ($item->id == 1)
                                    @continue
                                @endif
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->lastname . ' '. $item->firstname }}</td>
                                    <td>{{$item->idcard}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Bảng thống kê
                </div>
                <div class="card-body">
                    <table id="datatablesSimple1">
                        <thead>
                            <tr>
                                <th>Thứ tự</th>
                                <th>Môn thi</th>
                                <th>Số lượng</th>
                                <th>Ngày thi</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Thứ tự</th>
                                <th>Môn thi</th>
                                <th>Số lượng</th>
                                <th>Ngày thi</th>
                                <th>Thao tác</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($monthi as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->total}}</td>
                                <td>{{$item->time_exam}}</td>
                                <td>
                                    <a href="{{route('url.admin.editmonthi',['id' => $item->id])}}" style="padding-left: 5px" href=""><i class="fas fa-pen"></i> </a>
                                    <a href="{{route('url.admin.thisinh',['id' => $item->id])}}" style="padding-left: 5px"><i class="fas fa-user"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

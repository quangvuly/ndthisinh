@extends('master_admin')

@section('title', 'Trang Theo dõi xử lý nhận hồ sơ')
    

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Quản lý Thủ tục</h1>
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
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Bảng thống kê
        </div>
        <div class="card-body">
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>Họ tên</th>
                        <th>Điện thoại</th>
                        <th>Thủ tục</th>
                        <th>Ngày nộp</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                   
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('extraJS')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{asset('public/assets_admin/js/jquery-dateformat.min.js')}}"></script>
<script type="text/javascript">     
    $( document ).ready(function() {
    var shortDateFormat = 'dd/MM/yyyy';
    setInterval(function(){
            $.getJSON('/dichvucong/admin/update-schedule',
                    function (data) {
                        var json = data['data'];
                        //  console.log(json);
                        var tr;
                        $('#myTable tbody').html("");
                        for (var i = 0; i < json.length; i++) {
        
                            tr = $('<tr/>');
                            tr.append("<td>" + json[i].usersubmit[0].name + "</td>");
                            tr.append("<td>" + json[i].usersubmit[0].phone + "</td>");
                            tr.append("<td>" + json[i].thutuc[0].tt_name + "</td>");
                            tr.append("<td>" + $.format.date(json[i].created_at, "dd/MM/yyyy") + "</td>");
                            tr.append("<td> Chờ nhận hồ sơ </td>");
                            $('#myTable tbody').append(tr);
                        }
                    });
    },1000);
    });
</script>    
@endsection

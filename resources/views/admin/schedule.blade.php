@extends('master_admin')

@section('title', 'Trang Theo dõi xử lý nhận hồ sơ')
    

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Giám sát ra vào</h1>
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
                        <th>Họ</th>
                        <th>Tên</th>
                        <th>CMND/CCCD</th>
                        <th>Môn thi</th>
                        <th>Phòng thi</th>
                        <th>Ngày thi</th>
                        <th>Thời gian nhận diện</th>
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
<script src="{{asset('assets_admin/js/jquery-dateformat.min.js')}}"></script>
<script type="text/javascript">     
    $( document ).ready(function() {
    var shortDateFormat = 'dd/MM/yyyy';
    setInterval(function(){
            $.getJSON('update-schedule',
                    function (data) {
                        var json = data['data'];
                        //  console.log(json);
                        var tr;
                        $('#myTable tbody').html("");
                        for (var i = 0; i < json.length; i++) {
        
                            tr = $('<tr/>');
                            tr.append("<td>" + json[i].userlist[0].firstname + "</td>");
                            tr.append("<td>" + json[i].userlist[0].lastname + "</td>");
                            tr.append("<td>" + json[i].userlist[0].idcard + "</td>");
                            tr.append("<td>" + json[i].subjectlist[0].name + "</td>");
                            tr.append("<td>" + json[i].subjectlist[0].location + "</td>");
                            tr.append("<td>" + $.format.date(json[i].subjectlist[0].time_exam, "dd/MM/yyyy") + "</td>");
                            tr.append("<td>" + $.format.date(json[i].updated_at, "dd/MM/yyyy") + "</td>");
                            $('#myTable tbody').append(tr);
                        }
                    });
    },5000);
    });
</script>    
@endsection

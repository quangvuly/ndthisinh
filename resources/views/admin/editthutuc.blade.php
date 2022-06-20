@extends('master_admin')

@section('title', 'Trang Quản lý thông tin')
    

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Quản lý Thủ tục</h1>
    <div class="row">
        <div class="col-xl-10 col-md-10">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Chỉnh sửa Thủ tục</li>
            </ol>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <form method="POST" action="{{route('url.admin.updatethutuc',['id' => $currentThutuc->id])}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xl-5 col-md-5">
                        <div class="mb-3">
                            <label  class="form-label">Tên thủ tục</label>
                            <input type="text" class="form-control" name="txtTenThutuc" placeholder="Vui lòng nhập tên Thủ tục" value="{{old('txtTenThutuc',$currentThutuc->tt_name)}}">
                          </div>
                    </div>
                    <div class="col-xl-5 col-md-5">
                        <div class="mb-3">
                            <label class="form-label">Thuộc lĩnh vực</label>
                            <select class="form-select" name="sltLinhvuc" id=""> 
                                <option value="">Vui lòng chọn lĩnh vực</option>
                                @foreach ($linhvuc as $item)
                                @if ($item->id == $currentThutuc->linhvuc_id)
                                    <option value="{{$item->id}}" selected>{{$item->lv_name}}</option>
                                @else
                                <option value="{{$item->id}}">{{$item->lv_name}}</option>
                                @endif
                                @endforeach
                            </select>
                          </div>
                    </div>
                    <div class="col-xl-2 col-md-2">
                        <div class="mb-3">
                            <label class="form-label">Mức độ</label>
                            <select class="form-select" name="sltMucdo" id="">
                                @for ($i = 1; $i < 5; $i++)
                                    @if ($currentThutuc->tt_level == $i)
                                        <option value="{{$i}}" selected>{{$i}}</option>
                                    @else
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endif
                                @endfor
                            </select>
                          </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Chi tiết nội dung</label>
                    <textarea name="tarThutuc" id="" cols="30" rows="20">
                        {!!$currentThutuc->tt_chitiet!!}

                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection

@section('extraJS')
<script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
<script>
    CKEDITOR.editorConfig = function( config ) {
	config.toolbar = [
		{ name: 'document', items: [ 'Source', '-', 'Save', 'NewPage', 'ExportPdf', 'Preview', 'Print', '-', 'Templates' ] },
		{ name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
		{ name: 'editing', items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
		{ name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
		'/',
		{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat' ] },
		{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
		{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
		{ name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
		'/',
		{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
		{ name: 'colors', items: [ 'TextColor', 'BGColor' ] },
		{ name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
		{ name: 'about', items: [ 'About' ] }
	];
};
    CKEDITOR.replace( 'tarThutuc' );
</script>
@endsection
@extends('admin.template.master')
@section('title')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('transport-list')}}">Phương tiện</a></li>
                <li class="breadcrumb-item active">Cập nhật phương tiện</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')

<div class="row">
    <div class="col-12 text-center">
        <h4 class="text-secondary"><b class="text-primary">Cập nhật phương tiện:</b> {{$transportList->transport_name}}</h4>
    </div>
</div>
<div class="col-12">
    <form action="{{route('update-transport', ['id'=>$transportList->transport_id])}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="transName">Tên phương tiện:</label>
            <input type="text" autocomplete="off" value="{{$transportList->transport_name}}" name="transName"class="form-control" id="transportName">
            <label for="transBrand">Thương hiệu:</label>
            <input type="text" autocomplete="off" value="{{$transportList->transport_brand}}" name="transBrand"class="form-control" id="transportBegin">
            <label for="transColor">Màu sắc:</label>
            <input type="text" autocomplete="off" value="{{$transportList->transport_color}}" name="transColor"class="form-control" id="transportEnd" >
        </div>
        <div class="float-right">
            <button type="submit" class="btn btn-primary mt-3">Cập nhật</button>
            <button onclick="goBack()" class="btn btn-secondary mt-3">Quay lại</button>
        </div>
    </div>
</form>
</div> 
@endsection
<script>
    function goBack() {
        window.history.back();
    }
</script>
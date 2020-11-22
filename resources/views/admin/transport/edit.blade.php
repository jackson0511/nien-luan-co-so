@extends('admin.template.master')
@section('title')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h4 class="m-0 text-dark">Phương tiện di chuyển</h4>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')

<div class="row">
    <div class="col-12 text-center">
        <h4>Cập nhật phương tiện: {{$transportList->transport_name}}</h4>
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
        <div class="row">
            <div class="col-10"></div>
            <div class="col-2S">
                <button type="submit" class="btn btn-primary mt-3">Cập nhật</button>
                <button onclick="goBack()" class="btn btn-secondary mt-3">Quay lại</button>
            </div>
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
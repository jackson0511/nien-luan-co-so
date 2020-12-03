@extends('admin.template.master')
@section('title')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('tour-type-list')}}">Loại tour</a></li>
                    <li class="breadcrumb-item active">Cập nhật loại tour</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <h4 class="text-secondary"><b class="text-primary">Cập nhật loại tour:</b> {{$tourType->tour_type_name}}</h4>
        </div>
    </div>
        <div class="col-/12">
            <form action="{{route('update-type', ['id'=>$tourType->tour_type_id])}}" method="POST">
                @csrf
                <div class="form-group">
                <label for="typeName">Tên loại tour:</label>
                <input type="text" autocomplete="off" value="{{$tourType->tour_type_name}}" name="typeName"class="form-control" id="typeName" aria-describedby="typeNameHelp" placeholder="Nhập tên loại...">
                </div>
                <div class="float-right">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                <button onclick="goBack()" class="btn btn-secondary">Quay lại</button>
                </div>
            </form>
        </div>
    </div>   
@endsection
<script>
    function goBack() {
        window.history.back();
    }
</script>
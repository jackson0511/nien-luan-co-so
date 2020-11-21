@extends('admin.template.master')
@section('title')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Loại tour</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('content')

    <div class="row">
        <div class="col-12 text-center">
            <h4>Cập nhật loại tour: {{$tourType->tour_type_name}}</h4>
        </div>
    </div>
        <div class="col-/12">
            <form action="{{route('update-type', ['id'=>$tourType->tour_type_id])}}" method="POST">
                @csrf
                <div class="form-group">
                <label for="typeName">Tên loại tour:</label>
                <input type="text" autocomplete="off" value="{{$tourType->tour_type_name}}" name="typeName"class="form-control" id="typeName" aria-describedby="typeNameHelp" placeholder="Nhập tên loại...">
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>   

@endsection
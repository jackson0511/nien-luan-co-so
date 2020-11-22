@extends('admin.template.master')
@section('content')
<div class="row">

    <div class="col-12 text-center">
        <h4><b>Add Tour</b></h4>
        @if (Session::has('alert-del-pr'))
        <p style="color:green" class="text-center">
            {{Session::get('alert-del-pr')}}
        </p>
        @endif 
        @if (Session::has('alert-del-pr-error'))
        <p style="color:red" class="text-center">
            {{Session::get('alert-del-pr-error')}}
        </p>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form action="{{route('add-tour')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="tourName">Tour Name</label>
                <input type="text" name="tourName"class="form-control" id="tenSanPham"  placeholder="Nhập tên tour..." required>
            </div>
            <div class="form-group">
                <label for="tourPrice">Tour Price</label>
                <input type="text" name="tourPrice" class="form-control">
            </div>
            <div class="form-group">
                <label for="tourStatus">Tour Status</label>
                <textarea name="tourStatus" class="form-control" class="summernote" cols="46" rows="10" placeholder="Nhập mô tả sản phẩm"></textarea>
            </div>
            <div class="form-group">
                <label for="startLoc">Departure Location</label>
                <input type="text" class="form-control" name="startLoc" placeholder="Nhập số lượng">
            </div>
            <div class="form-group">
                <label for="endLoc">Arriving Location</label>
                <input type="text" class="form-control" name="endLoc" placeholder="Nhập giá">
            </div>
            <div class="form-group">
                <label for="timeBegin">Departure Day</label>
                <input type="date" class="form-control" name="timeBegin" placeholder="Nhập giá">
            </div>
            <div class="form-group">
                <label for="timeEnd">Leaving Day</label>
                <input type="date" class="form-control" name="timeEnd" placeholder="Nhập giá">
            </div>
            <div class="form-group">
                <label for="tourPhoto">Picture</label>
                <input type="file" name="tourPhoto"class="form-control" >
            </div>
            <div class="form-group">
                <label for="tourType">Tour Type</label>
                <select name="tourType" class="form-control" id="">
                    @foreach ($tourTypeList as $item)
                    <option value="{{$item->tour_type_id}}">{{$item->tour_type_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="promo">Promotion</label>
                <select name="promo" class="form-control" id="">
                    @foreach ($promo as $item)
                    <option value="{{$item->promo_id}}">{{$item->promo_name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</div>
@endsection
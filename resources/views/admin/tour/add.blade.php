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
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="tenSanPham">Tour Name</label>
                <input type="text" name="tenSanPham"class="form-control" id="tenSanPham"  placeholder="Nhập tên sản phẩm..." required>
            </div>
            <div class="form-group">
                <label for="tenLoai">Tour Price</label>
                <select name="tenLoai" id="tenLoai" class="form-control">
                    <option value=""></option>
                </select>
            </div>
            <div class="form-group">
                <label for="moTaSP">Tour Status</label>
                <textarea name="moTaSP" class="form-control" class="summernote" cols="46" rows="10" placeholder="Nhập mô tả sản phẩm"></textarea>
            </div>
            <div class="form-group">
                <label for="hinhSanPham">Departure Location</label>
                <input type="file" name="hinhSanPham"class="form-control" >
            </div>
            <div class="form-group">
                <label for="soLuong">Arriving Location</label><br>
                <input type="text" class="form-control" name="soLuong" placeholder="Nhập số lượng">
            </div>
            <div class="form-group">
                <label for="giaSanPham">Departure Day</label><br>
                <input type="text" class="form-control" name="giaSanPham" placeholder="Nhập giá">
            </div>
            <div class="form-group">
                <label for="giaSanPham">Leaving Day</label><br>
                <input type="text" class="form-control" name="giaSanPham" placeholder="Nhập giá">
            </div>
            <div class="form-group">
                <label for="giaSanPham">Picture</label><br>
                <input type="text" class="form-control" name="giaSanPham" placeholder="Nhập giá">
            </div>
            <div class="form-group">
                <label for="giaSanPham">Tour Type</label><br>
                <input type="text" class="form-control" name="giaSanPham" placeholder="Nhập giá">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</div>
@endsection
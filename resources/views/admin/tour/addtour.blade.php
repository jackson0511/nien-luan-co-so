@extends('admin.template.master')
@section('content')
<div class="row">

    <div class="col-4 text-center">
        <h4>Add Tour</h4>
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
    <div class="col-3">
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="tenSanPham">Tên Sản Phẩm</label>
                <input type="text" name="tenSanPham"class="form-control" id="tenSanPham"  placeholder="Nhập tên sản phẩm..." required>
            </div>
            <div class="form-group">
                <label for="tenLoai">Loại Sản Phẩm</label>
                <select name="tenLoai" id="tenLoai" class="form-control">
                    <option value=""></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="moTaSP">Mô Tả Sản Phẩm</label>
                <textarea name="moTaSP" class="form-control" id="summernote" cols="46" rows="10" placeholder="Nhập mô tả sản phẩm"></textarea>
            </div>
            <div class="form-group">
                <label for="hinhSanPham">Hình Sản Phẩm</label>
                <input type="file" name="hinhSanPham"class="form-control" >
            </div>
            <div class="form-group">
                <label for="soLuong">Số lượng</label><br>
                <input type="text" class="form-control" name="soLuong" placeholder="Nhập số lượng">
            </div>
            <div class="form-group">
                <label for="giaSanPham">Giá</label><br>
                <input type="text" class="form-control" name="giaSanPham" placeholder="Nhập giá">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</div>
@endsection
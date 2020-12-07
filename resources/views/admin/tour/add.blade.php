@extends('admin.template.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header mt-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('tour-list')}}">Tour</a></li>
                        <li class="breadcrumb-item active">Thêm tour</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="row">
        <div class="col-12 text-center mb-3">
            <h3 class="text-primary"><b>Thêm tour</b></h3>
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
    <form action="{{route('add-tour')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="tourName">Tên tour:</label>
                    <input type="text" name="tourName"class="form-control" id="tenSanPham"  placeholder="Nhập tên tour..." required>
                </div>
                <div class="form-group">
                    <label for="tourPrice">Giá tour:</label>
                    <input type="text" name="tourPrice" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tourSeat">Số ghế:</label>
                    <input type="text" name="tourSeat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tourAvatar">Ảnh bìa:</label>
                    <input type="file" name="tourAvatar" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tourPhoto">Ảnh tour:</label>
                    <input type="file" name="tourPhoto" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tourProgram">Chương trình tour:</label>
                    <textarea name="tourProgram" class="form-control" id="summernote" cols="46" rows="10" placeholder="Nhập chương trình tour..."></textarea>
                </div>
            </div>
            
            {{-- <div class="form-group">
                <label for="promo">Promotion</label>
                <select name="promo" class="form-control" id="">
                    @foreach ($promo as $item)
                    <option value="{{$item->promo_id}}">{{$item->promo_name}}</option>
                    @endforeach
                </select>
            </div> --}}
            
            <div class="col-6">
                <div class="form-group">
                    <label for="startLoc">Địa điểm khời hành:</label>
                    <input type="text" class="form-control" name="startLoc">
                </div>
                <div class="form-group">
                    <label for="endLoc">Địa điểm đến:</label>
                    <input type="text" class="form-control" name="endLoc">
                </div>
                <div class="form-group">
                    <label for="timeBegin">Ngày khởi hành:</label>
                    <input type="date" class="form-control" name="timeBegin">
                </div>
                <div class="form-group">
                    <label for="timeEnd">Ngày kết thúc:</label>
                    <input type="date" class="form-control" name="timeEnd">
                </div>
                <div class="form-group">
                    <label for="tourType">Loại tour:</label>
                    <select name="tourType" class="form-control" id="">
                        @foreach ($tourTypeList as $item)
                        <option value="{{$item->tour_type_id}}">{{$item->tour_type_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tourPolicies">Chính sách tour:</label>
                    <textarea name="tourPolicies" class="form-control" id="summernote1" cols="46" rows="10" placeholder="Nhập chính sách tour..."></textarea>
                </div>
            </div>
            <div class="col-11"></div>
            <div class="col-1">
                <button type="submit" class="btn btn-primary">Thêm</button>
            </div>
        </div>
    </form>
</div>
@endsection
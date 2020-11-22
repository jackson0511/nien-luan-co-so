@extends('admin.template.master')
@section('title')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Chương trình khuyến mãi</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')

<div class="row">
    <div class="col-12 text-center">
        <h4>Cập nhật chương trình khuyến mãi: {{$promoList->promo_name}}</h4>
    </div>
</div>
<div class="col-12">
    <form action="{{route('update-promo', ['id'=>$promoList->promo_id])}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="promoName">Tên chương trình khuyến mãi:</label>
            <input type="text" autocomplete="off" value="{{$promoList->promo_name}}" name="promoName"class="form-control" id="promoName">
                <label for="promoBegin">Ngày bắt đầu:</label>
                <input type="date" autocomplete="off" value="{{$promoList->promo_begin}}" name="promoBegin"class="form-control" id="promoBegin">
                <label for="promoEnd">Ngày kết thúc:</label>
                <input type="date" autocomplete="off" value="{{$promoList->promo_end}}" name="promoEnd"class="form-control" id="promoEnd" >
        </div>
            <label for="promoDisc">Chi tiết chương trình khuyến mãi:</label>
            <textarea name="promoDisc" class="form-control" id="summernote" cols="46" rows="7">{{$promoList->promo_detail}}</textarea>
            <button type="submit" class="btn btn-primary mt-3">Cập nhật</button>
            <button onclick="goBack()" class="btn btn-secondary mt-3">Quay lại</button>
        </div>
    </form>
</div> 
@endsection
<script>
	function goBack() {
		window.history.back();
	}
</script>
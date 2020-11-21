@extends('admin.template.master')
@section('content')
<div class="row">
	<div class="col-12 text-center">
		<h4>Chi tiết chương trình khuyến mãi: {{$promoList->promo_name}}</h4>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<p><b>Tên chương trình khuyến mãi:</b> {{$promoList->promo_name}}</p><br>
		<p><b>Ngày bắt đầu:</b> {{$promoList->promo_begin}}</p><br>
		<p><b>Ngày kết thúc:</b> {{$promoList->promo_end}}</p><br>
		<p><b>Chi tiết chương trình khuyến mãi:</b> {!!$promoList->promo_detail!!}</p>
		<div class="row">
			<div class="col-9"></div>
			<div class="col-3">
				<a href="{{route('detail-promo',['id'=>$promoList->promo_id])}}"class="btn btn-primary">Chi tiết</a>
				<a href="{{route('edit-promo',['id'=>$promoList->promo_id])}}"class="btn btn-success">Sửa</a>
				<button onclick="goBack()" class="btn btn-secondary">Quay lại</button>
			</div>
		</div>
	</div>
</div>
<script>
	function goBack() {
		window.history.back();
	}
</script>
@endsection
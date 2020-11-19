@extends('admin.template.master')
@section('content')
<div class="row">
	<div class="col-12 text-center">
		<h4>Detail of promotion: {{$promoList->promo_name}}</h4>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<p><b>Promotion Name:</b> {{$promoList->promo_name}}</p><br>
		<p><b>Promotion Begin Date:</b> {{$promoList->promo_begin}}</p><br>
		<p><b>Promotion Expired Date:</b> {{$promoList->promo_end}}</p><br>
		<p><b>Promotion Description:</b> {!!$promoList->promo_detail!!}</p>
		<div class="row">
			<div class="col-9"></div>
			<div class="col-3">
				<a href="{{route('detail-promo',['id'=>$promoList->promo_id])}}"class="btn btn-primary">Detail</a>
				<a href="{{route('edit-promo',['id'=>$promoList->promo_id])}}"class="btn btn-success">Edit</a>
				<button onclick="goBack()" class="btn btn-secondary">Back</button>
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
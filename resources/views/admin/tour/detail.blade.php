@extends('admin.template.master')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header mt-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-2">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('tour-list')}}">Tour</a></li>
					<li class="breadcrumb-item active">Chi tiết tour</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="row">
	<div class="col-12 text-center">
		<h4 class="text-secondary"><b class="text-primary">Chi tiết Tour:</b> {{$tourList->tour_name}}</h4>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<p><b>Tên tour:</b> {{$tourList->tour_name}}</p><br>
		<p><b>Giá tour:</b> {{$tourList->tour_price}}</p><br>
		<p><b>Hình tour:</b><br>
            @if($tourList->tour_picture == null)
            {{'Không có ảnh'}}
            @else 
            <img src="{{asset('tourPhoto')}}/{{$tourList->tour_picture}}" style="width:100px; height:100px" > 
            @endif<br>
		<p><b>Avatar tour:</b><br>
            @if($tourList->tour_avatar == null)
            {{'Không có ảnh'}}
            @else 
            <img src="{{asset('tourAvatar')}}/{{$tourList->tour_avatar}}" style="width:100px; height:100px" > 
            @endif<br>
		<p><b>Địa điểm xuất phát:</b> {{$tourList->tour_start_location}}</p><br>
		<p><b>Địa điểm đến:</b> {{$tourList->tour_end_location}}</p><br>
		<p><b>Ngày đi:</b> {{$tourList->tour_begin}}</p><br>
		<p><b>Ngày về:</b> {{$tourList->tour_end}}</p><br>
		{{-- <p><b>Trạng thái tour:</b> {{$tourList->tour_status}}</p> --}}
		<p><b>Loại tour:</b> {{$tourList->tour_type_name}}</p>
		{{-- <p><b>Khuyến mãi:</b> {{$tourList->promo_id}}</p> --}}
		<div class="row">
			<div class="col-9"></div>
			<div class="col-3">
				<a href="{{route('detail-tour',['id'=>$tourList->tour_id])}}"class="btn btn-primary">Chi tiết</a>
				<a href="{{route('edit-tour',['id'=>$tourList->tour_id])}}"class="btn btn-success">Sửa</a>
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
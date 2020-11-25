@extends('admin.template.master')
@section('title')
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1 class="m-0 text-dark">Tour</h1>
		</div><!-- /.col -->
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<a class="btn btn-primary" href="{{route('create-tour')}}">+ Thêm Tour</a>
			</ol>
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')

<div class="row">
	<div class="col-12 text-center mb-2">
		<h2><b>Danh sách tour</b></h2>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<form action="{{route('search-type')}}" method="GET">
			<input type="text" placeholder="Tìm kiếm..." class="col-10 ml-4" name="keyWord">
			<button type="submit" class="btn btn-primary">Tìm kiếm</button>
		</form>
		<table class="table mt-3">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">ID</th> 
					<th scope="col">Tên tour</th>
					<th scope="col">Loại tour</th>
					<th scope="col">Hình ảnh</th>
					<th scope="col">Giá</th>
					<th scope="col">Thao tác</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach ($tourList as $item)
				<tr>
					<th>{{$i++}}</th>
					<th>{{$item->tour_id}}</th>
					<td>{{$item->tour_name}}</td>
					<td>{{$item->tour_type_id}}</td>
					<td>
						@if($item->tour_avatar == null)
						{{'Không có ảnh'}}
						@else 
						<img src="{{asset('tourPhoto')}}/{{$item->tour_avatar}}" style="width:100px; height:100px" > 
                        @endif
					</td>
					<td>{{$item->tour_price}}</td>
					<td>
						<a href="{{route('detail-tour',['id'=>$item->tour_id])}}"class="btn btn-primary">Chi Tiết</a>
						<a href="{{route('edit-tour',['id'=>$item->tour_id])}}"class="btn btn-success">Sửa</a>
						<a href="{{route('delete-tour',['id'=>$item->tour_id])}}"class="btn btn-danger"onClick='return xoa()'>Xóa</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>   
<script>
	function xoa(){
		const a = confirm("Bạn có muốn xóa sản phẩm này không?");
		if(a==true){
			return true;
		}
		return false;
	}
</script>
@endsection
@extends('admin.template.master')
@section('title')
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1 class="m-0 text-dark">Tour</h1>
		</div><!-- /.col -->
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<a class="btn btn-primary" href="{{route('create-tour')}}">+ Add Tour</a>
			</ol>
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')

<div class="row">
	<div class="col-12 text-center mb-2">
		<h2><b>Tour List</b></h2>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">ID</th> 
					<th scope="col">Tour Name</th>
					<th scope="col">Tour Type</th>
					<th scope="col">Picture</th>
					<th scope="col">Price</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				<tr>
					@foreach ($tourList as $item)
					<th>{{$i++}}</th>
					<th>id tour</th>
					<td>ten tour</td>
					<td>ten loai tour</td>
					<td>
						{{-- @if($item->sp_hinh == null)
						{{'Không có ảnh'}}
						@else 
						<img src="{{asset('hinhanhsanpham')}}/{{$item->sp_hinh}}" style="width:100px; height:100px" > 
                        @endif --}}
                        hinh
					</td>
					<td>gia tour</td>
					<td>
						<a href="{{route('detail-tour',['id'=>$item->tour_id])}}"class="btn btn-primary">Chi Tiết</a>
						<a href="#"class="btn btn-success">Sửa</a>
						<a href="#"class="btn btn-danger"onClick='return xoa()'>Xóa</a>
					</td>
					@endforeach
				</tr>
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
@extends('admin.template.master')
@section('title')
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-4">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('tour-type-list')}}">Loại tour</a></li>
				<li class="breadcrumb-item active">Danh sách loại tour</li>
			</ol>
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="row">
	<div class="col-9 text-center mb-2">
		<h2 class="text-primary"><b>Danh sách loại tour</b></h2>
	</div>
	<div class="col-3 text-center">
		<h4 class="text-info">Thêm loại tour</h4>
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
	<div class="col-9">
		<form action="{{route('search-type')}}" method="GET">
			<input type="text" placeholder="Tìm kiếm..." class="col-10 ml-4" name="keyWord">
			<button type="submit" class="btn btn-primary">Tìm kiếm</button>
		</form>
		<table class="table mt-3">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">ID</th> 
					<th scope="col">Tên loại tour</th>
					<th scope="col">Thao tác</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach ($tourTypeList as $item)
				<tr>
					<th>{{$i++}}</th>
					<th>{{$item->tour_type_id}}</th>
					<td>{{$item->tour_type_name}}</td>
					<td>
						<a href="{{route('edit-type',['id'=>$item->tour_type_id])}}"class="btn btn-success">Sửa</a>
						<a href="{{route('delete-type',['id'=>$item->tour_type_id])}}"class="btn btn-danger"onClick='return delete()'>Xóa</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="col-3">
		<form action="{{route('add-tour-type')}}" method="POST">
			@csrf
			<div class="form-group">
				<label for="typeName">Tên loại tour</label>
				<input type="text" name="typeName"class="form-control" id="typeName"  placeholder="Nhập loại tour..." required>
			</div>
			<button type="submit" class="btn btn-primary">Thêm</button>
		</form>
	</div>
</div>   

<script>
	function delete(){
		const a = confirm("Bạn có chắc là muốn xóa chứ?");
		if(a==true){
			return true;
		}
		return false;
	}
</script>
@endsection
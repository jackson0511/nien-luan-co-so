@extends('admin.template.master')
@section('title')
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('transport-list')}}">Phương tiện</a></li>
                <li class="breadcrumb-item active">Cập nhật phương tiện</li>
            </ol>
        </div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')

<div class="row">
	<div class="col-9 text-center mb-2">
		<h2 class="text-secondary"><b class="text-primary">Danh sách phương tiện</b></h2>
	</div>
	<div class="col-3 text-center mb-2">
		<h2 class="text-info">Thêm phương tiện</h2>
	</div>
</div>

<div class="row">
	<div class="col-9">
		<form action="{{route('search-transport')}}" method="GET">
            <input type="text" placeholder="Tìm kiếm..." class="col-10 ml-4" name="keyWord">
            <button type="submit" class="btn btn-primary">Tìm</button>
        </form>
		<table class="table mt-3">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">ID</th> 
					<th scope="col">Tên phương tiện</th>
					<th scope="col">Thương hiệu</th>
					<th scope="col">Màu sắc</th>
					<th scope="col">Thao tác</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach ($transportList as $item)
				<tr>
					<th>{{$i++}}</th>
					<th>{{$item->transport_id}}</th>
					<td>{{$item->transport_name}}</td>
					<td>{{$item->transport_brand}}</td>
					<td>{{$item->transport_color}}</td>
					<td>
						<a href="{{route('edit-transport',['id'=>$item->transport_id])}}"class="btn btn-success">Sửa</a>
						<a href="{{route('delete-transport',['id'=>$item->transport_id])}}"class="btn btn-danger"onClick='return del()'>Xóa</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="col-3">
		<form action="{{route('add-transport')}}" method="POST">
			@csrf
			<div class="form-group">
				<label for="transName">Tên phương tiện:</label>
				<input type="text" name="transName" class="form-control" id="transName"  placeholder="Nhập tên phương tiện..." required>
				<label for="transBrand">Thương hiệu:</label>
				<input type="text" class="form-control" name="transBrand" id="transBrand" placeholder="Nhập tên thương hiệu...">
				<label for="transColor">Màu sắc:</label>
				<input type="text" class="form-control" name="transColor" id="transColor" placeholder="Nhập màu...">
			</div>
			<div class="form-group text-right">
				<button type="submit" class="btn btn-primary">Thêm</button>
			</div>
		</form>
	</div>
</div>   
<script>
	function del(){
		const a = confirm("Bạn có chắc là muốn xóa chứ?");
		if(a==true){
			return true;
		}
		return false;
	}
</script>
@endsection
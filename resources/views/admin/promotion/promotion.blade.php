@extends('admin.template.master')
@section('title')
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-5">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('tour-list')}}">Chương trình khuyến mãi</a></li>
				<li class="breadcrumb-item active">Danh sách chương trình khuyến mãi</li>
			</ol>
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')

<div class="row">
	<div class="col-7 text-center mb-2">
		<h2 class="text-secondary"><b class="text-primary">Danh sách chương trình khuyến mãi</b></h2>
	</div>
	<div class="col-5 text-center mb-2">
		<h2 class="text-info">Thêm chương trình khuyến mãi</h2>
	</div>
</div>

<div class="row">
	<div class="col-7">
		<form action="{{route('search-promo')}}" method="GET">
            <input type="text" placeholder="Tìm kiếm..." class="col-10 ml-4" name="keyWord">
            <button type="submit" class="btn btn-primary">Tìm</button>
        </form>
		<table class="table mt-3">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">ID</th> 
					<th scope="col">Tên chương trình khuyến mãi</th>
					<th scope="col">Thao tác</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach ($promoList as $item)
				<tr>
					<th>{{$i++}}</th>
					<th>{{$item->promo_id}}</th>
					<td>{{$item->promo_name}}</td>
					<td>
						<a href="{{route('detail-promo',['id'=>$item->promo_id])}}"class="btn btn-primary">Chi tiết</a>
						<a href="{{route('edit-promo',['id'=>$item->promo_id])}}"class="btn btn-success">Sửa</a>
						<a href="{{route('delete-promo',['id'=>$item->promo_id])}}"class="btn btn-danger"onClick='return del()'>Xóa</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="col-5">
		<form action="{{route('add-promo')}}" method="POST">
			@csrf
			<div class="form-group">
				<label for="promoName">Tên chương trình khuyến mãi:</label>
				<input type="text" name="promoName"class="form-control" id="promoName"  placeholder="Nhập tên chương trình khuyến mãi..." required>
				<label for="promoBegin">Ngày bắt đầu:</label>
				<input type="date" class="form-control" name="promoBegin" id="promoBegin">
				<label for="promoEnd">Ngày kết thúc:</label>
				<input type="date" class="form-control" name="promoEnd" id="promoEnd">
				<label for="promoDisc">Chi tiết chương trình khuyến mãi:</label>
				<textarea name="promoDisc" class="form-control" class="summernote" cols="46" rows="7" placeholder="Nhập chi tiết chương trình khuyến mãi..."></textarea>
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
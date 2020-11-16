@extends('admin.template.master')
@section('title')
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1 class="m-0 text-dark">Tour Type</h1>
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="row">
	<div class="col-9 text-center mb-2">
		<h2><b>Tour Type List</b></h2>
	</div>
	<div class="col-3 text-center">
		<h4>Add Tour Type</h4>
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
			<input type="text" placeholder="Search..." class="col-10 ml-4" name="keyWord">
			<button type="submit" class="btn btn-primary">Search</button>
		</form>
		<table class="table mt-3">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">ID</th> 
					<th scope="col">Tour Type Name</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($tourTypeList as $item)
				@php $i=1 @endphp
				<tr>
					<th>{{$i++}}</th>
					<th>{{$item->tour_type_id}}</th>
					<td>{{$item->tour_type_name}}</td>
					<td>
						<a href="{{route('edit-type',['id'=>$item->tour_type_id])}}"class="btn btn-success">Edit</a>
						<a href="{{route('delete-type',['id'=>$item->tour_type_id])}}"class="btn btn-danger"onClick='return delete()'>Delete</a>
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
				<label for="typeName">Tour Type Name</label>
				<input type="text" name="typeName"class="form-control" id="typeName"  placeholder="Enter type name..." required>
			</div>
			<button type="submit" class="btn btn-primary">Add</button>
		</form>
	</div>
</div>   

<script>
	function delete(){
		const a = confirm("Are you sure to delete this?");
		if(a==true){
			return true;
		}
		return false;
	}
</script>
@endsection
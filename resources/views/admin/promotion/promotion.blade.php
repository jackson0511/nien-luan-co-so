@extends('admin.template.master')
@section('title')
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1 class="m-0 text-dark">Promotion</h1>
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')

<div class="row">
	<div class="col-8 text-center mb-2">
		<h2><b>Promotion List</b></h2>
	</div>
	<div class="col-4 text-center mb-2">
		<h2>Add Promotion</h2>
	</div>
</div>

<div class="row">
	<div class="col-8">
		<form action="{{route('search-promo')}}" method="GET">
            <input type="text" placeholder="Search..." class="col-10 ml-4" name="keyWord">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
		<table class="table mt-3">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">ID</th> 
					<th scope="col">Promotion Name</th>
					<th scope="col">Action</th>
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
						<a href="{{route('detail-promo',['id'=>$item->promo_id])}}"class="btn btn-primary">Detail</a>
						<a href="{{route('edit-promo',['id'=>$item->promo_id])}}"class="btn btn-success">Edit</a>
						<a href="{{route('delete-promo',['id'=>$item->promo_id])}}"class="btn btn-danger"onClick='return del()'>Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="col-4">
		<form action="{{route('add-promo')}}" method="POST">
			@csrf
			<div class="form-group">
				<label for="promoName">Promotion Name</label>
				<input type="text" name="promoName"class="form-control" id="promoName"  placeholder="Enter promotion name..." required>
				<label for="promoBegion">Promotion Begin Date</label><br>
				<input type="date" class="col-12" name="promoBegin" id="promoBegin"><br>
				<label for="promoBegion">Promotion Expired Date</label><br>
				<input type="date" class="col-12" name="promoEnd" id="promoEnd">
				<label for="promoDisc">Promotion Description</label>
				<textarea name="promoDisc" class="form-control" class="summernote" cols="46" rows="10" placeholder="Enter promotion discription"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Add</button>
		</form>
	</div>
</div>   
<script>
	function del(){
		const a = confirm("Are you sure?");
		if(a==true){
			return true;
		}
		return false;
	}
</script>
@endsection
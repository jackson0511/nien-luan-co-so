@extends('admin.template.master')
@section('content')
<div class="row">
    <div class="col-9 text-center">
        <h4>Detail of promotion: {{$promoList->promo_name}}</h4>
    </div>
    <div class="col-3 text-center">
        <h4>Add Promotion</h4>
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
        <table class="table">
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
				<tr>
					<th>{{$i++}}</th>
					<th>{{$promoList->promo_id}}</th>
					<td>{{$promoList->promo_name}}</td>
					<td>
						<a href="{{route('detail-promo',['id'=>$promoList->promo_id])}}"class="btn btn-primary">Detail</a>
						<a href="{{route('edit-promo',['id'=>$promoList->promo_id])}}"class="btn btn-success">Edit</a>
						<a href="{{route('delete-promo',['id'=>$promoList->promo_id])}}"class="btn btn-danger"onClick='return del()'>Delete</a>
					</td>
				</tr>
			</tbody>
		</table>
    </div>
    <div class="col-3">
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
				<textarea name="promoDisc" class="form-control" id="summernote" cols="46" rows="10" placeholder="Enter promotion discription"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Add</button>
		</form>
	</div>
</div>
@endsection
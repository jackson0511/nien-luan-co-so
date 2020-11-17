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
    <div class="col-9 text-center">
        <h4>Promotion list by keyword: {{$keyWord}}</h4>
        @if (Session::has('alert-del'))
        <p style="color:green" class="text-center">
            {{Session::get('alert-del')}}
        </p>
        @endif 
        @if (Session::has('alert-del-error'))
        <p style="color:red" class="text-center">
            {{Session::get('alert-del-error')}}
        </p>
        @endif
        @if (Session::has('alert-update'))
        <p style="color:green" class="text-center">
            {{Session::get('alert-update')}}
        </p>
        @endif 
        @if (Session::has('alert-update-error'))
        <p style="color:red" class="text-center">
            {{Session::get('alert-update-error')}}
        </p>
        @endif
    </div>
    <div class="col-3 text-center">
        <h4>Add Promotion</h4>
        @if (Session::has('alert'))
        <p style="color:green" class="text-center">
            {{Session::get('alert')}}
        </p>
        @endif 
        @if (Session::has('alert-error'))
        <p style="color:red" class="text-center">
            {{Session::get('alert-error')}}
        </p>
        @endif  
    </div>
</div>

<div class="row">
    <div class="col-9">
        <form action="{{route('search-promo')}}" method="GET">
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
                @foreach ($search as $item)
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
				<textarea name="promoDisc" class="form-control" id="summernote" cols="46" rows="10" placeholder="Enter promotion discription"></textarea>
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
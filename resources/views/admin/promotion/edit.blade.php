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
    <div class="col-12 text-center">
        <h4>Update Promotion: {{$promoList->promo_name}}</h4>
    </div>
</div>
<div class="col-/12">
    <form action="{{route('update-promo', ['id'=>$promoList->promo_id])}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="promoName">Promotion Name:</label>
            <input type="text" autocomplete="off" value="{{$promoList->promo_name}}" name="promoName"class="form-control" id="typeName" aria-describedby="typeNameHelp" placeholder="Enter Type Name...">
            <label for="promoName">Promotion Start Date:</label>
            <input type="date" autocomplete="off" value="{{$promoList->promo_begin}}" name="promoBegin"class="form-control" id="typeName" aria-describedby="typeNameHelp" placeholder="Enter Type Name...">
            <label for="promoName">Promotion Expired Date:</label>
            <input type="text" autocomplete="off" value="{{$promoList->promo_end}}" name="promoEnd"class="form-control" id="typeName" aria-describedby="typeNameHelp" placeholder="Enter Type Name...">
            <label for="promoDisc">Promotion Description</label>
            <textarea name="promoDisc" class="form-control" id="summernote" cols="46" rows="10">{{$promoList->promo_detail}}</textarea>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div> 
@endsection
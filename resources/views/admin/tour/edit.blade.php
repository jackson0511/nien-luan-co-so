@extends('admin.template.master')
@section('content')
<div class="row">
    
    <div class="col-12 text-center">
        <h4><b>Cập nhật tour:</b> {{$tourList->tour_name}}</h4>
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
    <div class="col-12">
        <form action="{{route('update-tour',['id'=>$tourList->tour_id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="tourName">Tour Name</label>
                <input type="text" name="tourName"class="form-control" required value="{{$tourList->tour_name}}">
            </div>
            <div class="form-group">
                <label for="tourPrice">Tour Price</label>
                <input type="text" name="tourPrice" class="form-control" value="{{$tourList->tour_price}}">
            </div>
            <div class="form-group">
                <label for="tourStatus">Tour Status</label>
                <input type="text" name="tourStatus" class="form-control" value="{{$tourList->tour_status}}">
            </div>
            <div class="form-group">
                <label for="startLoc">Departure Location</label>
                <input type="text" class="form-control" name="startLoc" value="{{$tourList->tour_start_location}}">
            </div>
            <div class="form-group">
                <label for="endLoc">Arriving Location</label>
                <input type="text" class="form-control" name="endLoc"value="{{$tourList->tour_end_location}}">
            </div>
            <div class="form-group">
                <label for="timeBegin">Departure Day</label>
                <input type="date" class="form-control" name="timeBegin" value="{{$tourList->tour_begin}}">
            </div>
            <div class="form-group">
                <label for="timeEnd">Leaving Day</label>
                <input type="date" class="form-control" name="timeEnd" value="{{$tourList->tour_end}}">
            </div>
            <div class="form-group">
                <label for="tourPhoto">Picture</label>
                <div>
                    @if($tourList->tour_picture == null)
                    {{'Không có ảnh'}}
                    @else 
                    <img src="{{asset('tourPhoto')}}/{{$tourList->tour_picture}}" style="width:100px; height:100px" > 
                    @endif
                </div>
                <input type="file" name="tourPhoto" class="form-control mt-3" >
            </div>
            <div class="form-group">
                <label for="tourType">Tour Type</label>
                <select name="tourType" class="form-control" id="">
                    @foreach ($tourTypeList as $item)
                    <option value="{{$item->tour_type_id}}">{{$item->tour_type_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="promo">Promotion</label>
                <select name="promo" class="form-control" id="">
                    @foreach ($promo as $item)
                    <option value="{{$item->promo_id}}">{{$item->promo_name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>
@endsection
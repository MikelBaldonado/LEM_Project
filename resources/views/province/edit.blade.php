@extends('layouts.navbar');

@section('content');

<section>
    <h1>Edit Record</h1>
   
        <form action="/province/{{$province->province_id}}" method='post'>
            {!! csrf_field() !!}
            @method('PATCH')
            <input type="text" disabled="true" class='form-control shadow' name = "province_id" value="{{$province->province_id}}"  style="border:#368D96 solid 1px;">
            <input type="text" placeholder="Province" class="form-control shadow" name="province_description" value="{{$province->province_description}}"  style="border:#368D96 solid 1px;">
            <br>                   
            <input type="submit" class="btn btn-primary" value="Update">
        </form>
        
</section>

@endsection

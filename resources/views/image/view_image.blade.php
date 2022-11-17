@extends('layouts.navbar')

@section('content')

<div class="d-flex">
    <div class="p-2 flex-grow-1"> <h1>Set of Images</h1></div>
    <div class="p-2">
        <!-- Button trigger modal -->
        <a href="/add-image" 
            class="btn btn-primary" >                   
            Add New Image
        </a>
    </div>
    <div class="p-2">
        <input type="search" class="form-control" placeholder="Search...">
    </div>
</div>
<div class="row d-flex px-2">
    @foreach ($imageData as $item)
    <div class="col-md-4 card p-5">
        <p>{{$item->id}}</p>
        <img src="{{'image/'. $item->images}}" width="150px">
        {{$item->images}}
    </div>
{{-- {{$imageData->Links()}}; --}}
@endforeach
</div>


@endsection
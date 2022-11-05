@extends('layouts.app')

@section('content')
<h1>Set of Images</h1>
@foreach ($imageData as $item)
    <div class="card p-5">
        <p>{{$item->id}}</p>
        <img src="{{'Image/'. $item->images}}" width="150px">
    </div>

@endforeach

@endsection
@extends('layouts.app')

@section('content')
<h1>Add Image</h1>
<div class="card p-5">
    <form action="{{route('image.store')}}" method="POST" enctype="multipart/form-data">
    {{-- <form action="{{route('image.show')}}" method="post" enctype="multipart/form-data"> --}}
    @csrf

    {{-- <input type="file" class="form-control" name="image_filename" id="image_filename"> --}}
    <input type="file" class="form-control" name="images" id="images">
    <input type="submit" class="btn btn-primary" value="Add Image">
    </form>
</div>

@endsection
@extends('layouts.app')

@section('content')
    <div>
        <h1>Create Form</h1>
        <form action="/HomeProperties/" method="post">
            {!! csrf_field() !!}
            <label>Property Type</label>
            <input type="text" class="form-control shadow" name="propertyType">
            <br>
            <label>Property Description</label>
            <input type="text" class="form-control shadow" name="propertyDescription">
            <br>
            <label>Property Location</label>
            <input type="text" class="form-control shadow" name="propertyLocation">
            <br>
            <label>Property Price</label>
            <input type="text" class="form-control shadow" name="propertyPrice">
            <br>
            <input type="submit" class="btn btn-dark" value="Create HomeProperties">

        </form>
    </div>
@endsection
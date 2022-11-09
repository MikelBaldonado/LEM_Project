@extends('layouts.app')
@section('content')
<br>
    <div class="container bg-light shadow">
        <h3>Properties List in Home page</h3>
        <a class="btn btn-dark" href="/HomeProperties/create">Create New Property</a>
        <br>
        @foreach ($HomeProperties as $item)
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Propert Type</th>
                    <th scope="col">Property Location</th>
                    <th scope="col">Property Price</th>
                    <th scope="col">Property Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->propertyType}}</td>
                    <td>{{$item->propertyLocation}}</td>
                    <td>{{$item->propertyPrice}}</td>
                    <td>{{$item->propertyDescription}}</td>
                </tr>
            </tbody>
        </table>
        <br>
    @endforeach
    <div>
        {{$HomeProperties->links()}}
    </div>
    <br>
</div>

    <br>
    
@endsection
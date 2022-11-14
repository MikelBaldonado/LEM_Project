<title>Property List</title>
<link href="{{asset('css/createowner.css')}}" rel="stylesheet">

@extends('layouts.navbar')
@section('content')
 <body>

  <div class="d-flex">
      <div class="p-2 flex-grow-1"> <h1>Property List</h1></div>
      <div class="p-2">
          <!-- Button trigger modal -->
          <a href="/propertylist/create" 
              class="btn btn-primary" >                   
              Add New Property
          </a>
      </div>
      <div class="p-2">
          <input type="search" class="form-control" placeholder="Search...">
      </div>
  </div>

  <section>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">#</th>
      <th scope="col">Name of Property</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Lot Area</th>
      <th scope="col">Floor Area</th>
      <th scope="col">Province</th>
      <th scope="col">City/Municipality</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($properties as $item )

      <tr>
        {{-- <td style="background-image: url({{'Image/'. $item->images}}); size:fit-content"></td> --}}
        <td><img src="{{'Image/'. $item->images}}" Class="" style="height:100px; width:100px"></td>
        <td>{{$item->property_id}}</td>
        <td>{{$item->property_title}}</td>
        <td>{{$item->property_description}}</td>
        <td>{{$item->property_price}}</td>
        <td>{{$item->floor_area}}</td>
        <td>{{$item->lot_area}}</td>
        <td>{{$item->province_description}}</td>
        <td>{{$item->city_mun_description}}</td>
        <td>
            <a href="/propertylist/{{$item->property_id}}/edit" class="btn b" style="width:100px;">Edit</a>
            <form action="/propertylist/{{$item->property_id}}" method='post'>
              {{method_field('DELETE')}}
              {!! csrf_field() !!}
              <input type="submit" value="Delete" class="btn" style="width:100px;">
            </form>
        </td>
      </tr>


    {{-- <div class='card p-5'>
        <h2>{{$item->contactName}}</h2>
        <hr>
        <p>Contact Number: {{$item->contactNum}} </p>
        <p>Address: {{$item->address}} </p>
        <a href="/contact/{{$item->id}}" class="btn btn-primary">Click here for more information</a>
    </div>
    <br> --}}
    @endforeach



      {{-- @foreach($properties as $property) --}}
      {{-- @for ($i = 0; $i < 9; $i++)
      <tr>
          <td>{{$i}}</td>
          <td>Description</td>
          <td>100</td>
          <td>Province</td>
          <td>City</td>
          <td>100sqm</td>
          <td>50sqm</td>
          <td>
              <a href="#" class="btn btn-sm btn-warning">Edit</a>
              <a href="#" class="btn btn-sm btn-danger">Delete</a>
          </td>
      </tr>
      @endfor --}}
      {{-- @endforeach --}}
   
  </tbody>
</table>

</section>
        
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>  

 </body>
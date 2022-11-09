<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Province</th>
      <th scope="col">City/Municipality</th>
      <th scope="col">Lot Area</th>
      <th scope="col">Floor Area</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($properties as $item )

      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->property_description}}</td>
        <td>{{$item->property_price}}</td>
        <td>{{$item->province_id}}</td>
        <td>{{$item->city_mun_id}}</td>
        <td>{{$item->floor_area}}</td>
        <td>{{$item->lot_area}}</td>
        <td>
            <a href="/properties/{{$item->id}}/edit" class="btn btn-warning" style="width:100px;">Edit</a>
            <form action="/properties/{{$item->id}}" method='post'>
              {{method_field('DELETE')}}
              {!! csrf_field() !!}
              <input type="submit" value="Delete" class='btn btn-danger' style="width:100px;">
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


@extends('layouts.navbar')
@section('content')

<section class="pt-2">
    {{-- <h1 class="text-align-center">Update <span  style="background-color:#14537d; color:white; border-radius:5px">    {{"$properties->property_title"}}</span> Property</h1> --}}
    <div class="d-flex flex-column align-text-center">
        <h1 style="text-align: center">Update <span  style="background-color:#14537d; color:white; border-radius:5px">{{"$properties->property_title"}}</span> Property</h1>
        </div>
    {{-- {{"$property->property_title"}} --}}
    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New Record</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> --}}
            <div class="container col-md-6 justify-content align-content-center align-text-center" style=" height:auto; border:solid 1px antiquewhite;">
                <form action="/propertylist/{{$properties->property_id}}" method="post">
                    {{-- @csrf --}}
                    {!! csrf_field() !!}
                    @method('PATCH')
                    {{-- <input name="_method" type="hidden" value="PATCH"> --}}
                    <input type="hidden" class="form-control" name = "property_id" value="{{$properties->property_id}}">
                    <div class="row col-md-12 py-1" style="border: solid 1px; border-color:lightgray; border-radius:5px">
                        <div class="col-md-3 b"> <b>Property Title:</b>
                        </div>
                        <input class="col-md-9" style="border: none" type="text" placeholder="Property Title" class="form-control" name="property_title" value="{{$properties->property_title}}">
                    </div>
                    <br>
                    <div class="row col-md-12 py-1" style="border: solid 1px; border-color:lightgray; border-radius:5px">
                        <div class="col-md-3"> <b>Property Description:</b>
                        </div>
                        <input class="col-md-9" style="border: none" type="text" placeholder="Property Description (Ex. Located in the heart of Makati, this condo is fully furnished and ready for occupancy. Five Bedrooms + Four Toilet & Baths + Kitchen + Dining + Living Area + Balcony.)" class="form-control" name="property_description" style="overflow-y: scroll" value="{{$properties->property_description}}">
                    </div>
                    <br>
                    <div class="row col-md-12 py-1" style="border: solid 1px; border-color:lightgray; border-radius:5px">
                        <div class="col-md-3"> <b>Floor Area (SQM):</b>
                        </div>
                        <input class="col-md-9" style="border: none" type="text" placeholder="Floor Area (SQM)" class="form-control" name="floor_area" value="{{$properties->floor_area}}">
                    </div>
                    <br>
                    <div class="row col-md-12 py-1" style="border: solid 1px; border-color:lightgray; border-radius:5px">
                        <div class="col-md-3"> <b>Lot Area (SQM):</b>
                        </div>
                        <input class="col-md-9" style="border: none" type="text" placeholder="Lot Area (SQM)" class="form-control" name="lot_area" value="{{$properties->lot_area}}">
                    </div>
                    <br>
                    <div class="row col-md-12 py-1" style="border: solid 1px; border-color:lightgray; border-radius:5px">
                        <div class="col-md-3"> <b>Province ID:</b>
                        </div>
                        <input class="col-md-9" style="border: none" type="text" placeholder="Province ID" class="form-control" name="property_province_id" value="
                        {{$properties->property_province_id}}">
                    </div>
                    <br>
                    <div class="row col-md-12 py-1" style="border: solid 1px; border-color:lightgray; border-radius:5px">
                        <div class="col-md-3"> <b>City or Municipality:</b>
                        </div>
                        <input class="col-md-9" style="border: none" type="text" placeholder="City/Municipality ID" class="form-control" name="city_mun_id" value="{{$properties->city_mun_id}}">
                    </div>
                    <br>
                    <div class="row col-md-12 py-1" style="border: solid 1px; border-color:lightgray; border-radius:5px">
                        <div class="col-md-3"> <b>Price:</b>
                        </div>
                        <input class="col-md-9" style="border: none" type="text" placeholder="Price (PHP)" class="form-control" name="property_price" value="{{$properties->property_price}}">
                    </div>
                    <br>
                    <div class="row col-md-12 py-1" style="border: solid 1px; border-color:lightgray; border-radius:5px">
                        <div class="col-md-3"> <b>Owner ID:</b>
                        </div>
                        <input class="col-md-9" style="border: none" type="text" placeholder="Owner ID" class="form-control" name="owner_id" value="{{$properties->owner_id}}">
                    </div>
                    <br>
                    <div class="row col-md-12 py-1" style="border: solid 1px; border-color:lightgray; border-radius:5px">
                        <div class="col-md-3"> <b>Property Type ID:</b>
                        </div>
                        <input class="col-md-9" style="border: none" type="text" placeholder="Property Type ID" class="form-control" name="property_type_id" value="{{$properties->property_type_id}}">
                    </div>
                    <br>
                    <div class="row col-md-12 py-1" style="border: solid 1px; border-color:lightgray; border-radius:5px">
                        <div class="col-md-3"> <b>Default Image ID:</b>
                        </div>
                        <input class="col-md-9" style="border: none" type="text" placeholder="Property Image ID" class="form-control" name="property_image_id" value="{{$properties->property_image_id}}">
                    </div>
                    {{-- <input type="hidden" name="created_at" value="{{$properties->created_at}}">
                    <br>
                    <input type="hidden" name="updated_at" value="{{$properties->updated_at}}"> --}}
                    <br>
                    
                    {{-- <input type="text" placeholder="Properties Description" class="form-control" name="property_description" value="{{$properties->property_description}}">
                    <br>
                    <input type="text" placeholder="Province" class="form-control" name="province_id" value="{{$properties->province_id}}">
                    <br>
                    <input type="text" placeholder="City/Municipality" class="form-control" name="citymun_id" value="{{$properties->citymun_id}}">
                    <br>
                    <input type="text" placeholder="Floor Area" class="form-control" name="floor_area" value="{{$properties->floor_area}}">
                    <br>
                    <input type="text" placeholder="Lot Area" class="form-control" name="lot_area" value="{{$properties->lot_area}}"> --}}
                    <input type="submit" class="btn btn-primary" value="Update">
                </form>
            </div>
            {{-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div> --}}
</section>




@endsection
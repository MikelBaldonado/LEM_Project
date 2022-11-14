@extends('layouts.navbar')
@section('content')

<section>
    <h1>Edit Record</h1>
    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New Record</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> --}}
                <form action="/propertylist/{{$properties->property_id}}" method='post'>
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <input type="hidden" class='form-control' name = "property_id" value="{{$properties->property_id}}">
                    <input type="text" placeholder="Property Title" class="form-control" name="property_title" value="{{$properties->property_title}}">
                    <br>
                    <input type="text" rows="" placeholder="Property Description (Ex. Located in the heart of Makati, this condo is fully furnished and ready for occupancy. Five Bedrooms + Four Toilet & Baths + Kitchen + Dining + Living Area + Balcony.)" class="form-control" name="property_description" style="overflow-y: scroll" value="{{$properties->property_description}}">
                    <br>
                    <input type="text" placeholder="Floor Area (SQM)" class="form-control" name="floor_area" value="{{$properties->floor_area}}">
                    <br>
                    <input type="text" placeholder="Lot Area (SQM)" class="form-control" name="lot_area" value="{{$properties->lot_area}}">
                    <br>
                    <input type="text" placeholder="Province ID" class="form-control" name="property_province_id" value="{{$properties->property_province_id}}">
                    <br>
                    <input type="text" placeholder="City/Municipality ID" class="form-control" name="city_mun_id" value="{{$properties->city_mun_id}}">
                    <br>
                    <input type="text" placeholder="Price (PHP)" class="form-control" name="property_price" value="{{$properties->property_price}}">
                    <br>
                    <input type="text" placeholder="Owner ID" class="form-control" name="owner_id" value="{{$properties->owner_id}}">
                    <br>
                    <input type="text" placeholder="Property Type ID" class="form-control" name="property_type_id" value="{{$properties->property_type_id}}">
                    <br>
                    <input type="hidden" placeholder="Property Image ID" class="form-control" name="property_image_id" value="{{$properties->property_image_id}}">
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
            {{-- </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div> --}}
</section>




@endsection
@extends('layouts.navbar')
@section('content')

<section class="d-flex flex-column align-items-center" >
    <div class="d-flex flex-column align-text-center">
    <h1 style="text-align: center">Create New Property </h1>
    <h6 style="text-align: center"><i>(Please confirm this is not a duplicate of a property that you may have created earlier)</i></h6>
    </div>
    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New Record</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> --}}
    <div class="container col-md-6 justify-content align-content-center align-text-center" style=" height:auto; border:solid 1px antiquewhite;">
        <form action="/propertylist" method='post'>
            {!! csrf_field() !!}
            <input type="text" placeholder="Property Title" class="form-control" name="property_title">
            <br>
            <textarea type="text" rows="2" placeholder="Property Description (Ex. Located in the heart of Makati, this condo is fully furnished and ready for occupancy. Five Bedrooms + Four Toilet & Baths + Kitchen + Dining + Living Area + Balcony.)" class="form-control" name="property_description" style="overflow-y: scroll"></textarea>
            <br>
            <input type="text" placeholder="Floor Area (SQM)" class="form-control" name="floor_area">
            <br>
            <input type="text" placeholder="Lot Area (SQM)" class="form-control" name="lot_area">
            <br>
            <input type="text" placeholder="Province ID" class="form-control" name="property_province_id">
            <br>
            <input type="text" placeholder="City/Municipality ID" class="form-control" name="city_mun_id">
            <br>
            <input type="text" placeholder="Price (PHP)" class="form-control" name="property_price">
            <br>
            <input type="text" placeholder="Owner ID" class="form-control" name="owner_id">
            <br>
            <input type="text" placeholder="Property Type ID" class="form-control" name="property_type_id">
            <br>
            <input type="hidden" placeholder="Property Image ID" class="form-control" name="property_image_id">
            {{-- <br> --}}
            <div class="row d-flex text-center" >
                <input type="submit" class="btn btn-primary"  value="Save">
            </div>
            
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
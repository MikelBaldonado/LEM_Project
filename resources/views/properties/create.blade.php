@extends('layouts.navbar')
@section('content')

<section>
    <h1>Create New Record</h1>
    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New Record</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> --}}
                <form action="/properties" method='post'>
                    {!! csrf_field() !!}
                    <input type="text" placeholder="Properties Description" class="form-control" name="property_description">
                    <br>
                    <input type="text" placeholder="Province" class="form-control" name="province_id">
                    <br>
                    <input type="text" placeholder="City/Municipality" class="form-control" name="citymun_id">
                    <br>
                    <input type="text" placeholder="Floor Area" class="form-control" name="floor_area">
                    <br>
                    <input type="text" placeholder="Lot Area" class="form-control" name="lot_area">
                    <input type="submit" class="btn btn-primary" value="Save">
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
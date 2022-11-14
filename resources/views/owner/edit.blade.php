@extends('layouts.navbar')
@section('content')

<section>
    <h1>Edit Owner's Info</h1>
    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New Record</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> --}}
                <form action="/owner/{{$owner->owner_id}}" method='post'>
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <input type="hidden" class='form-control' name = "owner_id" value="{{$owner->owner_id}}">
                    <input type="text" placeholder="First Name" class="form-control shadow" style="border:#368D96 solid 1px;"name="owner_fname" value="{{$owner->owner_fname}}">
                    <br>
                    <input type="text" placeholder="Last Name" class="form-control shadow" style="border:#368D96 solid 1px;"name="owner_lname" value="{{$owner->owner_lname}}">
                    <br>
                    <input type="text" placeholder="Address" class="form-control shadow" style="border:#368D96 solid 1px;"name="address" value="{{$owner->owner_address}}">
                    <br>
                    <input type="text" placeholder="Contact Number" class="form-control shadow" style="border:#368D96 solid 1px;" name="owner_contact_number" value="{{$owner->owner_contact_number}}">
                    <br>
                    <input type="hidden" placeholder="User ID" class="form-control shadow" style="border:#368D96 solid 1px;" name="user_id" value="{{$owner->user_id}}">
                    <br>
                   
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

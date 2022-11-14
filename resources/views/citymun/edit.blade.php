<link href="{{asset('css/register.css')}}" rel="stylesheet">
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
                <form action="/citymun/{{$citymun->city_mun_id}}" method='post'>
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <input type="hidden" class='form-control shadow' name = "id" value="{{$citymun->city_mun_id}}"  style="border:#368D96 solid 1px;">
                    <input type="text" placeholder="City or Municipality" class="form-control shadow" name="city_mun_description" value="{{$citymun->city_mun_description}}"  style="border:#368D96 solid 1px;">
                    <br>
                    <input type="hidden" class="form-control shadow" name="province_id" value="{{$citymun->province_id}}"  style="border:#368D96 solid 1px;">
                    <br>
                    
                    {{-- <input type="text" placeholder="Contact Number" class="form-control" name="contact" value="{{$owner->contact}}">
                    <br> --}}
                   
                    <input type="submit" class="btn" value="Update">
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
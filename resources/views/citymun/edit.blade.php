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
                <form action="/citymun/{{$citymun->id}}" method='post'>
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <input type="hidden" class='form-control' name = "id" value="{{$citymun->id}}">
                    <input type="text" placeholder="Full Name" class="form-control" name="citymun_description" value="{{$citymun->citymun_description}}">
                    <br>
                    
                    {{-- <input type="text" placeholder="Contact Number" class="form-control" name="contact" value="{{$owner->contact}}">
                    <br> --}}
                   
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
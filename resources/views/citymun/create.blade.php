
<link href="{{asset('css/register.css')}}" rel="stylesheet">
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
                <form action="/citymun" method='post'>
                    {!! csrf_field() !!}


                    <select name="province" >
                        @foreach ($province as $item )
                            <option value="{{$province->province_description}}">{{$province->province_description}}</option>   
                        @endforeach                    
                    </select>
                    

                    <input type="text" placeholder="City/Municipality" class="form-control shadow" name="citymun_description" style="border:#368D96 solid 1px;">
                    <br>
                    
                    
                    <input type="submit" class="btn" value="Save">
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
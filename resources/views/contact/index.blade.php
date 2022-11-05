@extends('layouts.app')

@section('content')

    <div id="contact">
        <div class="contactItem">
            <img src="{{'assets/' . 'for_buy.jpg' }}" width="100%" height="95%">
        </div>

        <div class="contactItem">
            <h1>Contact Us</h1>
            <hr>
            <div class="card p5">
                <div class="card-body">
                    <form action="{{ url('sendMail') }}" method="POST">
                        {{ csrf_field() }}
                        {{-- <label for="">Name:</label> --}}
                        <input type="text" placeholder="Name" class="form-control" name="name">
                        <br>
                        {{-- <label for="">Email:</label> --}}
                        <input type="text" placeholder="Email" class="form-control" name="email">
                        <br>
                        {{-- <label for="">Subject:</label> --}}
                        <input type="text" placeholder="Subject" class="form-control" name="subject">
                        <br>
                        {{-- <label for="">Message:</label> --}}
                        <textarea type="text" placeholder="Message" rows="5" class="form-control" name="msg"></textarea>
                        <br>
                        <input type="submit" value="Send Message" class="btn btn-primary w-100" name="sendmail">
                    </form>
                </div>
            </div>
        </div>

  
     
@endsection



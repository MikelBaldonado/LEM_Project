<title>Contact</title>
  <link href="{{asset('/css/Contact copy.css')}}" rel="stylesheet">
@extends('layouts.app')

@section('content')
<section id="contact">
    <div class="row d-flex flex-row flex-wrap">
        <div class="col-md-4 first">
            {{-- <img src="{{'assets/' . 'for_buy.jpg' }}" width="100%" height="95%"> --}}
        </div>

        <div class="col-md-4">
            <div class="container">
                <h1>Contact Us</h1>
            <hr>
            {{-- <div class="card p5"> --}}
               
                    <form action="{{ url('sendMail') }}" method="POST">
                        {{ csrf_field() }}
                        {{-- <label for="">Name:</label> --}}
                        <input type="text" placeholder="Name" class="form-control shadow" style="border:#368D96 solid 1px" name="name">
                        <br>
                        {{-- <label for="">Email:</label> --}}
                        <input type="text" placeholder="Email" class="form-control shadow" style="border:#368D96 solid 1px" name="email">
                        <br>
                        {{-- <label for="">Subject:</label> --}}
                        <input type="text" placeholder="Subject" class="form-control shadow" style="border:#368D96 solid 1px" name="subject">
                        <br>
                        {{-- <label for="">Message:</label> --}}
                        <textarea type="text" placeholder="Message" rows="5" class="form-control shadow" style="border:#368D96 solid 1px" name="msg"></textarea>
                        <br>
                        <input type="submit" value="Send Message" class="btn w-100" name="sendmail">
                    </form>
                </div>
            </div>

            <div class="col-md-4">
                <div class="text">
                    <h1>Get in Touch!</h1>
                    <p>
                    We are happy to serve you at all times! Thanks to our " <b>Customer First</b>
                    " service policy. Your success is our success.  We really appreciate if you can send us your details for our records to ensure we don't miss your query.  Your data will be handled  with utmost privacy according to Republic Act 10173, known as the Data Privacy Act of 2012, and will be used only for the purpose it is intended for.
                    </p>
                    <p>        
                    For urgent needs, you may call our Sales directly to address your inquiry or you can chat with our customer representative
                    </p>

                    <div className="googlemap" style="border:#368D96 solid 1px">       
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62997.314665386555!2d123.24978223618496!3d9.303807004026414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ab6f392de360b7%3A0x2d6945df4760769!2sDumaguete%20City%2C%20Negros%20Oriental!5e0!3m2!1sen!2sph!4v1662435553847!5m2!1sen!2sph" width="100%" height="450" style="border:0;margin-left:auto; margin-right:auto;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
                    </div>
                </div>
                </div>
        </div>
</section>
  
     
@endsection



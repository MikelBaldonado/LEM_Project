@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="card">
        <div class="card-body">
          <div class="col-md-8">
            <!-- form -->
            <div class="card">
              <h3 class="card-header info-color white-text text-center py-4">
                <strong> Sending and Email with SENDGRID in PHP</strong>
              </h3>
              <div class="card-body px-lg-5 pt-o">
                <form action="{{ url('sendMail') }}" method="POST" class="text-center" style="color: #757575">
                    {{ csrf_field() }}
                  <div class="md-form">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Name"
                      name="name"
                    />
                  </div>
                  <div class="md-form">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Email"
                      name="email"
                    />
                  </div>
                  <div class="md-form">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Subject"
                      name="subject"
                    />
                  </div>
                  <div class="md-form">
                    <textarea
                      type="text"
                      name="msg"
                      rows="5"
                      cols="70"
                      placeholder="Message"
                    ></textarea>
                  </div>

                  <button
                    class="btn btn-info btn-block"
                    type="submit"
                    name="sendmail"
                  >
                    Send
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection



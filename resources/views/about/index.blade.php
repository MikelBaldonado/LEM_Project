<head>
    <title>About</title>
    <link href="{{asset('/css/about.css')}}" rel="stylesheet">
  
  </head>
   @extends('layouts.app')
      
  @section('content')
  {{-- 
  <section id="img-bg">
  </section> --}}
  <section id="about">
      <div class="row d-flex flex-row flex-wrap">
        <div class="col-md-4" style="height: auto">
          
          {{-- <img src="/assets/torresur_hero2.jpg" alt="property image" style="size:fit-content overflow:hide"> --}}
          <div class="row d-flex flex-row flex-wrap justify-content-center pb-2 text-center">
            {{-- <div class="col-md-4 verticalSpace"> --}}
              <div></div>
              <div class="card" style="width:350px; "> <!--style="border-radius: 15px;"Style has to be applied directly here to take effect-->
                  <div class="image1"><img src="/assets/torresur_hero2.jpg" alt=""></div>
                  {{-- <div class="image2"><img src="/assets/LomejaneBabao.jpg" alt=""></div> --}}
                  <div class="xmainText">
                      <h3>Lomejane Babao</h3>
                      <p>Team Lead, Fullstack Web Dev</p>
                  </div>
  
              </div>
            {{-- </div> --}}
              {{-- <div class="col-md-4 verticalSpace"> --}}
                <div class="card" style="width:350px; "> <!--style="border-radius: 15px;"Style has to be applied directly here to take effect-->
                    <div class="image1"><img src="/assets/torresur_hero2.jpg" alt=""></div>
                    <div class="image2"><img src="/assets/Me.jpg" alt=""></div>
                    <div class="xmainText">
                        <h3>Enerio Balungcas</h3>
                        <p>Team Member, Fullstack Web Dev</p>
                    </div>
                </div>
                {{-- </div> --}}
                {{-- <div class="col-md-4 verticalSpace"> --}}
                  <div class="card" style="width:350px; "> <!--style="border-radius: 15px;"Style has to be applied directly here to take effect-->
                      <div class="image1"><img src="/assets/torresur_hero2.jpg" alt=""></div>
                      <div class="image2"><img src="/assets/User.png" alt=""></div>
                      <div class="xmainText">
                          <h3>Michael Baldonado</h3>
                          <p>Team Member, Fullstack Web Dev</p>
                      </div>
      
                  </div>
              {{-- </div> --}}
            </div>
          </div>
  
        <div class="col-md-8">
          <br>
          <div class="text" style="padding-right: 20px">
            <h2>About Our Company</h2>
            <p class="word-wrap">
              LEM Properties was founded in late 2022 by a triumvirate, consisting of Michael from Luzon, Enerio from Visayas and Lomejane from Mindanao, who have the passion in helping customers in the property sector regardless if they are a seller or a buyer. <br/> <br/>As a seller, you don't have to worry about your property not getting sold as our brokers are actively pursuing to find propective buyers. <br/> <br/>As a buyer, rest assured you don't get trapped into a bad deal as we provide legal services, if you need one, during the negotiation process until the deal is consummated.
            </p>
         
          
            <div class="OurVision">
              <h2>Our Vision</h2>
              <p class="word-wrap">
                To be one of the most favored property management company in the Philippine.
              </p>
            </div>
  
            <div class="OurMission">
              <h2>Our Mission</h2>
              <p class="word-wrap">
               Develop this website in consideration with customers from different demographics and regions in mind.
  
              Increase the customer base thru digital marketing and thru mass-media ads.
              </p>
            </div>
          </div>
        </div>
      </div> 
  </section>
  @endsection
<head>
    <title>About</title>
    <link href="{{asset('/css/about.css')}}" rel="stylesheet">
  
  </head>
   @extends('layouts.app')
      
  @section('content')
  
  <section id="img-bg">
    {{-- <div class="image1"><img src="/assets/best3.jpg" alt=""></div> --}}
  </section>
  <section id="about" style="padding: 15px;">
      <div class="row d-flex flex-row flex-wrap">
        <div class="col-md-4" style="height: auto">
          
          {{-- <img src="/assets/torresur_hero2.jpg" alt="property image" style="size:fit-content overflow:hide"> --}}
          <div class="row d-flex flex-row flex-wrap justify-content-center pb-2 text-center">
            {{-- <div class="col-md-4 verticalSpace"> --}}
              {{-- <div></div> --}}
              <div class="" style="width:350px; "> <!--style="border-radius: 15px;"Style has to be applied directly here to take effect-->
                  <div class="image1"><img src="/assets/CommonwealthRes.jpg" alt=""></div>
                      <div class="image2"><img src="/assets/Michael.jpg" alt=""></div>
                      <div class="xmainText">
                          <h3>Michael Baldonado</h3>
                          <p>Team Member, Fullstack Web Dev</p>
                      </div>
  
              </div>
            {{-- </div> --}}
              {{-- <div class="col-md-4 verticalSpace"> --}}
                <div class="" style="width:350px; "> <!--style="border-radius: 15px;"Style has to be applied directly here to take effect-->
                    <div class="image1"><img src="/assets/torresur_hero2.jpg" alt=""></div>
                    <div class="image2"><img src="/assets/Me.jpg" alt=""></div>
                    <div class="xmainText">
                        <h3>Enerio Balungcas</h3>
                        <p>Team Member, Fullstack Web Dev</p>
                    </div>
                </div>
         
                {{-- </div> --}}
                {{-- <div class="col-md-4 verticalSpace"> --}}
                  <div class="" style="width:350px; "> <!--style="border-radius: 15px;"Style has to be applied directly here to take effect-->
                    <div class="image1"><img src="/assets/house1.jpg" alt=""></div>
                    <div class="image2"><img src="/assets/lomejane.png" alt="Lomejane Babao"></div>
                    <div class="xmainText">
                        <h3>Lomejane Babao</h3>
                        <p>Team Lead, Fullstack Web Dev</p>
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
  <section>
    <div id="bground">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#368D96" fill-opacity="0.11" d="M0,192L0,96L40,96L40,224L80,224L80,224L120,224L120,256L160,256L160,320L200,320L200,160L240,160L240,320L280,320L280,160L320,160L320,192L360,192L360,160L400,160L400,192L440,192L440,128L480,128L480,128L520,128L520,32L560,32L560,256L600,256L600,128L640,128L640,224L680,224L680,128L720,128L720,192L760,192L760,288L800,288L800,128L840,128L840,128L880,128L880,320L920,320L920,256L960,256L960,288L1000,288L1000,96L1040,96L1040,320L1080,320L1080,288L1120,288L1120,256L1160,256L1160,0L1200,0L1200,192L1240,192L1240,128L1280,128L1280,96L1320,96L1320,224L1360,224L1360,96L1400,96L1400,64L1440,64L1440,320L1400,320L1400,320L1360,320L1360,320L1320,320L1320,320L1280,320L1280,320L1240,320L1240,320L1200,320L1200,320L1160,320L1160,320L1120,320L1120,320L1080,320L1080,320L1040,320L1040,320L1000,320L1000,320L960,320L960,320L920,320L920,320L880,320L880,320L840,320L840,320L800,320L800,320L760,320L760,320L720,320L720,320L680,320L680,320L640,320L640,320L600,320L600,320L560,320L560,320L520,320L520,320L480,320L480,320L440,320L440,320L400,320L400,320L360,320L360,320L320,320L320,320L280,320L280,320L240,320L240,320L200,320L200,320L160,320L160,320L120,320L120,320L80,320L80,320L40,320L40,320L0,320L0,320Z"></path></svg>
    </div>
  </section>
  @endsection
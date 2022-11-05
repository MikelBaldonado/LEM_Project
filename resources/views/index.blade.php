@extends('layouts.app')

    @section('content')
    
        <main>
          {{-- HOME --}}
        <section id="Home" style="
          min-height: 65vh;
          background-color: #09141d;">
            <div class="container">
              <!-- Stack the columns on mobile by making one full-width and the other half-width -->
              <div class="row d-flex flex-row flex-wrap">
                <div class="col-md-6 d-flex justify-content-center">
                  <div class="card" style="padding-top:60px; height: 450px;
                  width: 500px; background-color:#09141d">
                    <h3 style="  font-size: 46px; color: #fff; font-family: 'Poppins', sans-serif;">
                    The best platform <br>to Buy and Sell properties</h3> <br>
                    <p style="font-size: 25px; color: white; font-family: 'Roboto Condensed', sans-serif;">
                    See properties that might <br> pique your interests</p>
                    <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width:10rem; height: 3rem; background-color:#368D96; border:none; border-radius: 8px; text-style: none;"> <a href="#Grid-Places">Explore</a></button>
                   
                  </div>   
                </div>
              
                <div class="col-md-6 d-flex justify-content-center" style="max-height: 450px;
                -max-width: 600px;">
                  <div class="card" style=background-color:#09141d>
                    <img style=" margin-top: 3%;
                    height: auto;
                    width: 600x;
                    border: solid black 3px;
                    border-top-left-radius: 190%;
                    border-top-right-radius: 190%;
                    border-bottom-left-radius: 0;" src="/assets/HouseHero.jpg" alt="House Property">
                  </div>
                </div>
              </div>
            </div>
        </section>
        {{-- SEARCH FILTER --}}

        <section class="Search-Filter" style="min-height: 15vh; padding: 30px; background-color: #368D96;">
          {{-- <div class="container">
            <div class="row">
              <div class="col mb-2 d-flex justify-content-center">
                <div class="input-group mb-3">
                  <label class="input-group-text" for="inputGroupSelect01" style="height: 4rem; min-width: 6rem; font-size: 1.2rem;">Location</label>
                  <select class="form-select" id="inputGroupSelect01" style="font-size: 1.2rem;">
                    <option selected>Select..</option>
                    <option value="1">Luzon</option>
                    <option value="2">Visayas</option>
                    <option value="3">Mindanao</option>
                  </select>
                </div>
              </div>

              <div class="col mb-2 d-flex justify-content-center">
                <div class="input-group mb-3">
                  <label class="input-group-text" for="inputGroupSelect01" style="height: 4rem; font-size: 1.2rem;">Property:</label>
                  <select class="form-select" id="inputGroupSelect01" style="font-size: 1.2rem;">
                    <option selected>Type...</option>
                    <option value="1">Apartment</option>
                    <option value="2">Condominium</option>
                    <option value="3">House and Lot</option>
                  </select>
                </div>
              </div>

              <div class="col mb-2 d-flex justify-content-center">
                <div class="input-group mb-3">
                  <label class="input-group-text" for="inputGroupSelect01" style="height: 4rem; font-size: 1.2rem;">Estimated</label>
                  <select class="form-select" id="inputGroupSelect01" style="font-size: 1.2rem;">
                   <option selected>Price...</option>
                    <option value="1">1-5M</option>
                    <option value="2">6-10M</option>
                    <option value="3">11M and up</option>
                  </select>
                </div>
              </div>

              <div class="col" style="padding: 7px;">
                <button class="btn btn-dark btn-lg" style="padding-bottom: 10px;">Search</button>
              </div>
            </div>    
          </div> --}}
          {{-- Updated --}}

          <form action="/searchhomeproperties" method="get" enctype="multipart/form-data" class="xbg-warning">
            @csrf
            <p class="row xbg-success p-2 mx-2 d-flex flex-row flex-wrap text-align-center justify-content-center align-items-center">
            
              <select class="btn bg-light" name="province" id="province" value="province" onchange =`href="/filterprovince/"` style="width:200px; margin-right: 10px; margin-left: 10px; margin-bottom:5px; border: solid blue; border-radius:15px">
              <option value="">Select Province</option>
              @foreach($province as $item)
                <option value="{{($item->province_id)}}">{{(Str::title($item->province_description))}}</option>
                {{-- <option value={{($item->province_description)}}>{{(Str::title($item->province_description))}}</option> --}}
                {{-- {{(Str::title($item->province_description))}} --}}
              @endforeach;
            </select>

            <select class="btn bg-light" name="price" id="price" value="price" style="width:200px; margin-right: 10px; margin-left: 10px; margin-bottom:5px; border: solid blue; border-radius:15px">
              <option value="">Select Price Range</option>
              <option value="20,000,000.00">20,000,000.00 and above</option>
              <option value="10,000,000.00">10,000,000.00 - 19,999,999.99</option>
              <option value="9,999,999.99">9,999,999.99 and below</option>
            </select>
            
            <button class="btn filterButtonSubmit" type="submit" style="width:200px; margin-right:10px; margin-left: 10px; margin-bottom:5px; border: solid blue;  border-radius:15px; background-color:skyblue; color: blue; transform:scale(1:1.03)" ><b>Submit</b></button>

             <a class="btn filterButtonReset" type="Reset"  style="width:200px; margin-right:10px; margin-left: 10px; margin-bottom:5px; border: solid blue;  border-radius:15px; background-color:#FE9C8F; texts-decoration: none; color:red" href="/"><b>Reset</b></a>
          </form>

        </section>
        <section id="discover d-flex justify-content-center" style="background-color: #FAD9C1">
          <br><br>
          <h3 class="text-center">All Over The Philippines</h3>
          <br> 
          <br>
          <div class="container">
            {{-- <div class="row">
              <div class="col mb-2 d-flex justify-content-center">
                <div class="card shadow" style="width: 20rem;">
                  <img class="card-img-top" src="/assets/Room4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Create a new journey while experiencing the rich and diverse culture of Dumaguete City.</p>
                    <h6>Location: 123 Riza St. Dumaguete City</h6>
                    <h6>No. of Bedrooms: 2 Only</h6>
                    <h6>Price: ₱ 10,000 Monthly </h6>
                    <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">Contact Agent</button>
                    <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">See Details</button>
                  </div>
                </div>
              </div>
              <div class="col mb-2 d-flex justify-content-center">
                <div class="card shadow" style="width: 20rem;">
                  <img class="card-img-top" src="/assets/Room4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Create a new journey while experiencing the rich and diverse culture of Dumaguete City.</p>
                    <h6>Location: 123 Riza St. Dumaguete City</h6>
                    <h6>No. of Bedrooms: 2 Only</h6>
                    <h6>Price: ₱ 10,000 Monthly </h6>
                    <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">Contact Agent</button>
                    <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">See Details</button>
                  </div>
                </div>
              </div>

              <div class="col mb-2 d-flex justify-content-center">
                <div class="card shadow" style="width: 20rem;">
                  <img class="card-img-top" src="/assets/Room4.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Create a new journey while experiencing the rich and diverse culture of Dumaguete City.</p>
                    <h6>Location: 123 Riza St. Dumaguete City</h6>
                    <h6>No. of Bedrooms: 2 Only</h6>
                    <h6>Price: ₱ 10,000 Monthly </h6>
                    <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">Contact Agent</button>
                    <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">See Details</button>
                  </div>
                </div>
              </div>
            </div>
            <br> <br> 
              <div class="container">
                <div class="row">
                  <div class="col mb-2 d-flex justify-content-center">
                    <div class="card shadow" style="width: 20rem;">
                      <img class="card-img-top" src="/assets/Room4.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">Create a new journey while experiencing the rich and diverse culture of Dumaguete City.</p>
                        <h6>Location: 123 Riza St. Dumaguete City</h6>
                        <h6>No. of Bedrooms: 2 Only</h6>
                        <h6>Price: ₱ 10,000 Monthly </h6>
                        <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">Contact Agent</button>
                        <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">See Details</button>
                      </div>
                    </div>
                  </div>
                  <div class="col mb-2 d-flex justify-content-center">
                    <div class="card shadow" style="width: 20rem;">
                      <img class="card-img-top" src="/assets/Room4.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">Create a new journey while experiencing the rich and diverse culture of Dumaguete City.</p>
                        <h6>Location: 123 Riza St. Dumaguete City</h6>
                        <h6>No. of Bedrooms: 2 Only</h6>
                        <h6>Price: ₱ 10,000 Monthly </h6>
                        <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">Contact Agent</button>
                    <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">See Details</button>
                      </div>
                    </div>
                  </div>
    
                  <div class="col mb-2 d-flex justify-content-center">
                    <div class="card shadow" style="width: 20rem;">
                      <img class="card-img-top" src="/assets/Room4.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">Create a new journey while experiencing the rich and diverse culture of Dumaguete City.</p>
                        <h6>Location: 123 Riza St. Dumaguete City</h6>
                        <h6>No. of Bedrooms: 2 Only</h6>
                        <h6>Price: ₱ 10,000 Monthly </h6>
                        <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">Contact Agent</button>
                        <button type="button" class="btn-lg" style="font-family:'Poppins', sans-serif; width: 8.5rem; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">See Details</button>
                      </div>
                    </div>
                  </div>
                </div> --}}
            {{--  --}}

            <div Class="propertiesList " >
              @foreach ($properties as $item)
                  <div Class="propertiesItem">
                    <div class="" style="background-image: url({{'Image/'. $item->images}})"> 
                    {{-- <img src="{{'Image/'. $item->images}}" Class="w-100" style="size:vmax">                       {{$item->property_image_id}} --}}
                   </div>
                      <div Class="card-body">
                          <h3 style="height:65px">{{$item->property_title}}</h3>
                          <p>Price:{{number_format($item->property_price, 2)}}</p>
                          {{-- {Number(Item.price).toLocaleString('en-US')} --}}
                          <p>Location: {{$item->city_mun_description}}, {{$item->province_description}}</p>
                          {{-- <p>Details: {{$item->property_description}}</p> --}}
                          <br>
                      </div>
                      <div Class="card-footer" style="height: auto">
                          <!-- Button trigger modal -->
                          <button type="button" class="pl-2 pr-2 w-50 button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:floralwhite; background-color:black; border-radius: 10px " >
                          <b>DETAILS</b>
                          </Button>
                      </div>
                  </div>
                <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>{{$item->property_title}}</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="size:fit-content">
                          <div Class="modalBody">
                            <div class="container" style="background-image: url({{'Image/'. $item->images}}); height: 325px; width:300px"> 
                            {{-- <img src="url({{'Image/' . $item->images}})" Class="w-100" style="size:vmax; border-radius:5px">                       {{$item->property_image_id}} --}}
                           </div>
                           <br>
                            <div Class="" style="font-size: 14pt" style="height: 325px; width:300px">
                                {{-- <h3 style="height:60px">{{$item->property_title}}</h3> --}}
                                <h3 style="height:60px">Ref. No.: {{$item->property_id}}</h3>
                                <p>Price:{{number_format($item->property_price, 2)}}</p>
                                <p>Location: {{$item->city_mun_description}}, {{$item->province_description}}</p>
                                <p>  {{$item->property_description}}</p>
                                
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" href="/contact">Inquire</button>
                        </div>
                      </div>
                    </div>
                  </div>  
  
              @endforeach
            </div>
          {{--  --}}
          </div>
          <br>
        </section>
        <section id="Grid-Places" style="  min-height: 50vh;">
          <br> <br>
          <div class="container">
            <h3 class="text-center">Discover Awesome Properties</h3>
            <br> <br>

            <div class="row">

              <div class="col mb-2 d-flex justify-content-center">
                <img class="shadow lg p-1" src="/assets/DiningArea.jpg" style="width: 240px; min-height: 28vh; border-top-left-radius: 15px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;" alt="Dining Area">
              </div>

              <div class="col mb-2 d-flex justify-content-center">
                <img class="shadow lg p-1" src="/assets/a.jpg" style="width: 240px; min-height: 28vh; border-top-left-radius: 15px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;" alt="Dining Area">
              </div>
              <div class="col mb-2 d-flex justify-content-center">
                <img class="shadow lg p-1" src="/assets/property1.jpg" style="width: 240px; min-height: 28vh; border-top-right-radius: 15px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;" alt="Dining Area">
              </div>
              <div class="col mb-2 d-flex justify-content-center">
                <img class="shadow lg p-1" src="/assets/Bathroom.jpg" style="width: 240px; min-height: 28vh; border-top-right-radius: 15px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;" alt="Dining Area">
              </div> 
            </div>
          </div>
      </section>
          {{-- GRID PLACES --}}
          {{-- <section id="Grid-Places" style="  min-height: 50vh;">
            <br> <br>
            <div class="container">
              <h3 class="text-center">Discover Awesome Properties</h3>
              <br> <br>

              <div class="row">

                <div class="col mb-2 d-flex justify-content-center">
                  <img class="shadow lg p-1" src="/assets/DiningArea.jpg" style="width: 240px; min-height: 28vh; border-top-left-radius: 15px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;" alt="Dining Area">
                </div>

                <div class="col mb-2 d-flex justify-content-center">
                  <img class="shadow lg p-1" src="/assets/a.jpg" style="width: 240px; min-height: 28vh; border-top-left-radius: 15px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;" alt="Dining Area">
                </div>
                <div class="col mb-2 d-flex justify-content-center">
                  <img class="shadow lg p-1" src="/assets/property1.jpg" style="width: 240px; min-height: 28vh; border-top-right-radius: 15px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;" alt="Dining Area">
                </div>
                <div class="col mb-2 d-flex justify-content-center">
                  <img class="shadow lg p-1" src="/assets/Bathroom.jpg" style="width: 240px; min-height: 28vh; border-top-right-radius: 15px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;" alt="Dining Area">
                </div> 
              </div>
            </div>
        </section> --}}
      
        {{-- DISCOVER --}}
      
        
        {{-- RECENT --}}
        {{-- <section id="recent">
          <div class="row d-flex flex-row recent-property-container">
              <div class="recent-image">
                  <img src="/assets/HouseEmoji.png" alt="house emoji" class="recent-image">
                  <h3>Recent Listing</h3>
              </div>
              
              <div class="grid-container1">
                  <div class="grid-item1">
                      <img src="/assets/condo.jpg" alt="">
                      <div class="overlay">
                          <p>123BZ Rizal St. Makati City</p>
                          <p>3 Storey House with 5 bedrooms</p>
                          <p>15,000 to 20,000 per month</p>
                          <button>Buy Now</button>
                      </div>
                  </div>
                  <div class="grid-item2">
                      <img src="/assets/apartment.jpg" alt="">
                      <div class="overlay">
                          <p>123BZ Rizal St. Makati City</p>
                          <p>3 Storey House with 5 bedrooms</p>
                          <p>15,000 to 20,000 per month</p>
                          <button>Buy Now</button>
                      </div>
                  </div>
                  <div class="grid-item2">
                      <img src="/assets/house.jpg" alt="">
                      <div class="overlay">
                          <p>123BZ Rizal St. Makati City</p>
                          <p>3 Storey House with 5 bedrooms</p>
                          <p>15,000 to 20,000 per month</p>
                          <button>Buy Now</button>
                      </div>
                  </div>
              </div> <br> <br>

              <div class="grid-container2">
                  <div class="grid-item1">
                      <img src="/assets/condo 2.jpg" alt="">
                      <div class="overlay">
                          <p>123BZ Rizal St. Makati City</p>
                          <p>3 Storey House with 5 bedrooms</p>
                          <p>15,000 to 20,000 per month</p>
                          <button>Buy Now</button>
                      </div>
                  </div>
                  <div class="grid-item2">
                      <img src="/assets/apartment2.jpg" alt="">
                      <div class="overlay">
                          <p>123BZ Rizal St. Makati City</p>
                          <p>3 Storey House with 5 bedrooms</p>
                           <p>15,000 to 20,000 per month</p>
                          <button>Buy Now</button>

                      </div>
                  </div>
                  <div class="grid-item2">
                      <img src="/assets/house2.jpg" alt="">
                      <div class="overlay">
                          <p>123BZ Rizal St. Makati City</p>
                          <p>3 Storey House with 5 bedrooms</p>
                          <p>15,000 to 20,000 per month</p>
                          <button>Buy Now</button>
                      </div>
                  </div>
              </div> 
          </div> --}}
          <section id="recent">
          {{-- //Flex row layout --}}
          <div class=" row recent-image d-flex flex-row justify-content-center align-items-center ">
            {{--    --}}
             {{-- <img src="/assets/HouseEmoji.png" alt="house emoji" class="recent-image "> --}}
            <h3 style="display:flex; justify-content:start" ><img src="/assets/HouseEmoji.png" alt="house emoji" class="recent-image">  Recent Listing</h3>
        </div>
        <div class="container " style="margin-left:auto; margin-right:auto" > 
          {{-- d-flex justify-content-around align-contents-center text-align-center align-items-center --}}
          <div class="row d-flex flex-row flex-wrap justify-content-around align-items-center text-align-center" >
            <!--Below, inserted height property to have uniform height for all images and cards-->
            <div class="col-md-4">
                <div class="card my-5 mx-10" style="height: 470px; width:300px; overflow:hidden; border-radius: 5px">
                    <!--inserted overflow property-->
                    <img src="/assets/condo.jpg" class="card-img-top" alt="Missing Image" style="height:250px; width:300px">
                    {{-- <div class="card-header text-center bg-warning"> <span style="color:red; font-weight: bolder;">This is Card Header</span></div> --}}
                    <div class="card-body overlay">
                      <p>123BZ Rizal St. Makati City</p>
                      <p>3 Storey House with 5 bedrooms</p>
                      <p>15,000 to 20,000 per month</p>
                      <button class="btn "> Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-5 mx-10" style="height: 470px; width:300px; overflow:hidden; border-radius: 5px">
                    <!--inserted overflow property-->
                    <img src="/assets/apartment.jpg" class="card-img-top" alt="Missing Image" style="height:250px; width:300px">
                    {{-- <div class="card-header text-center bg-warning"> <span style="color:red; font-weight: bolder;">This is Card Header</span></div> --}}
                    <div class="card-body overlay">
                      <p>123BZ Rizal St. Makati City</p>
                      <p>3 Storey House with 5 bedrooms</p>
                      <p>15,000 to 20,000 per month</p>
                      <button class="btn "> Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-5 mx-10" style="height: 470px; width:300px; overflow:hidden; border-radius: 5px">
                    <!--inserted overflow property-->
                    <img src="/assets/house.jpg" class="card-img-top" alt="Missing Image" style="height:250px; width:300px">
                    {{-- <div class="card-header text-center bg-warning"> <span style="color:red; font-weight: bolder;">This is Card Header</span></div> --}}
                    <div class="card-body overlay">
                      <p>123BZ Rizal St. Makati City</p>
                      <p>3 Storey House with 5 bedrooms</p>
                      <p>15,000 to 20,000 per month</p>
                      <button class="btn "> Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-5 mx-10" style="height: 470px; width:300px; overflow:hidden; border-radius: 5px">
                    <!--inserted overflow property-->
                    <img src="/assets/condo 2.jpg" class="card-img-top" alt="Missing Image" style="height:250px; width:300px">
                    {{-- <div class="card-header text-center bg-warning"> <span style="color:red; font-weight: bolder;">This is Card Header</span></div> --}}
                    <div class="card-body overlay">
                      <p>123BZ Rizal St. Makati City</p>
                      <p>3 Storey House with 5 bedrooms</p>
                      <p>15,000 to 20,000 per month</p>
                      <button class="btn "> Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-5 mx-10" style="height: 470px; width:300px; overflow:hidden; border-radius: 5px">
                    <!--inserted overflow property-->
                    <img src="/assets/apartment2.jpg" class="card-img-top" alt="Missing Image" style="height:250px; width:300px">
                    {{-- <div class="card-header text-center bg-warning"> <span style="color:red; font-weight: bolder;">This is Card Header</span></div> --}}
                    <div class="card-body overlay">
                      <p>123BZ Rizal St. Makati City</p>
                      <p>3 Storey House with 5 bedrooms</p>
                      <p>15,000 to 20,000 per month</p>
                      <button class="btn "> Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-5 mx-10" style="height: 470px; width:300px; overflow:hidden; border-radius: 5px">
                    <!--inserted overflow property-->
                    <img src="/assets/house2.jpg" class="card-img-top" alt="Missing Image" style="height:250px; width:300px">
                    {{-- <div class="card-header text-center bg-warning"> <span style="color:red; font-weight: bolder;">This is Card Header</span></div> --}}
                    <div class="card-body overlay">
                      <p>123BZ Rizal St. Makati City</p>
                      <p>3 Storey House with 5 bedrooms</p>
                      <p>15,000 to 20,000 per month</p>
                      <button class="btn "> Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card my-5 mx-10" style="height: 470px; width:300px; overflow:hidden; border-radius: 5px">
                    <!--inserted overflow property-->
                    <img src="/assets/house.jpg" class="card-img-top" alt="Missing Image" style="height:250px; width:300px">
                    {{-- <div class="card-header text-center bg-warning"> <span style="color:red; font-weight: bolder;">This is Card Header</span></div> --}}
                    <div class="card-body overlay">
                      <p>123BZ Rizal St. Makati City</p>
                      <p>3 Storey House with 5 bedrooms</p>
                      <p>15,000 to 20,000 per month</p>
                      <button class="btn "> Buy Now</button>
                    </div>
                </div>
            </div>

            

            </div>
          </div>
          </div>
        </section>
        {{--  --}}
      </main>

    <div>
      @endsection
    {{-- </div> --}}
    
 {{-- </body> 
 </html> --}}
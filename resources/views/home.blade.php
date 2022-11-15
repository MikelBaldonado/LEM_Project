@extends('layouts.navbar')
@section('content')
<br>
    <h1 class="text-center">Welcome to our Gallery <Span style="text-transform:capitalize; color:#368D96">{{ Auth::user()->name }}</Span>!</h1>
    {{-- {{ Auth::user()->name }} --}}
    <br>
    <div class="container row d-flex align-item-center" style="margin-left:auto; margin-right:auto; max-width:1400px; max-height:600px; background-color:#368D96">
  <!--       Carousel of my Hobbies -->
  
  <div id="carouselSlide" class="carousel slide " data-bs-ride="carousel" > 
    <div class="carousel-indicators" >
        <button data-bs-target="#carouselSlide" data-bs-slide-to="0" class="active"></button>
        <button data-bs-target="#carouselSlide" data-bs-slide-to="1"></button>
        <button data-bs-target="#carouselSlide" data-bs-slide-to="2"></button>
        <button data-bs-target="#carouselSlide" data-bs-slide-to="3"></button>
        <button data-bs-target="#carouselSlide" data-bs-slide-to="4"></button>
        <button data-bs-target="#carouselSlide" data-bs-slide-to="5"></button>
        <button data-bs-target="#carouselSlide" data-bs-slide-to="6"></button>
        <button data-bs-target="#carouselSlide" data-bs-slide-to="7"></button>
        <button data-bs-target="#carouselSlide" data-bs-slide-to="8"></button>
        <button data-bs-target="#carouselSlide" data-bs-slide-to="9"></button>
        <button data-bs-target="#carouselSlide" data-bs-slide-to="10"></button>
        <button data-bs-target="#carouselSlide" data-bs-slide-to="11"></button>
        <button data-bs-target="#carouselSlide" data-bs-slide-to="12"></button>
        <button data-bs-target="#carouselSlide" data-bs-slide-to="13"></button>
        <button data-bs-target="#carouselSlide" data-bs-slide-to="14"></button>
        <button data-bs-target="#carouselSlide" data-bs-slide-to="15"></button>

    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/assets/3torre_hero.JPG" class="d-block w-100" style="max-width:1400px; max-height:600px">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-light" style="font-weight: bolder;"> Torre Hero Residence</h1>
                                   
                <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Put Text Here</button> -->
            </div>
        </div>
        <div class="carousel-item ">
            <img src="/assets/Ayala-West.JPG" class="d-block w-100" style="max-width:1400px; max-height:600px">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-light" style="font-weight: bolder;"> Ayala West</h1>
                                   
                <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Put Text Here</button> -->
            </div>
        </div>
        <div class="carousel-item ">
            <img src="/assets/Apartment.JPG" class="d-block w-100" style="max-width:1400px; max-height:600px">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-light" style="font-weight: bolder;"> Modern Apartments</h1>
                                   
                <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Put Text Here</button> -->
            </div>
        </div>
        <div class="carousel-item ">
            <img src="/assets/AyalaResidences.JPG" class="d-block w-100" style="max-width:1400px; max-height:600px">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-light" style="font-weight: bolder;"> Ayala Residences</h1>
                                   
                <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Put Text Here</button> -->
            </div>
        </div>
        <div class="carousel-item ">
            <img src="/assets/CommonwealthRes.JPG" class="d-block w-100" style="max-width:1400px; max-height:600px">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-light" style="font-weight: bolder;"> Commonwealth Residences</h1>
                                   
                <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Put Text Here</button> -->
            </div>
        </div>
        <div class="carousel-item ">
            <img src="/assets/condo.JPG" class="d-block w-100" style="max-width:1400px; max-height:600px">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-light" style="font-weight: bolder;"> Sunrise Condominium</h1>
                                   
                <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Put Text Here</button> -->
            </div>
        </div>
        <div class="carousel-item ">
            <img src="/assets/DiningArea.JPG" class="d-block w-100" style="max-width:1400px; max-height:600px">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-light" style="font-weight: bolder;"> Enerio Apartments</h1>
                                   
                <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Put Text Here</button> -->
            </div>
        </div>
        <div class="carousel-item ">
            <img src="/assets/dusit_residence_hero.JPG" class="d-block w-100" style="max-width:1400px; max-height:600px">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-light" style="font-weight: bolder;"> Dusit Residence Hero</h1>
                                   
                <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Put Text Here</button> -->
            </div>
        </div>
        <div class="carousel-item ">
            <img src="/assets/for_buy.JPG" class="d-block w-100" style="max-width:1400px; max-height:600px">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-light" style="font-weight: bolder;"> Enerio Balungcas Apartments</h1>
                                   
                <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Put Text Here</button> -->
            </div>
        </div>
        <div class="carousel-item ">
            <img src="/assets/for_rent.JPG" class="d-block w-100" style="max-width:1400px; max-height:600px">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-light" style="font-weight: bolder;"> Michael Baldonado Apartments</h1>
                                   
                <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Put Text Here</button> -->
            </div>
        </div>
        <div class="carousel-item ">
            <img src="/assets/for_sell.JPG" class="d-block w-100" style="max-width:1400px; max-height:600px">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-light" style="font-weight: bolder;"> Lomejane Babao Apartments</h1>
                                   
                <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Put Text Here</button> -->
            </div>
        </div>
        <div class="carousel-item ">
            <img src="/assets/House.JPG" class="d-block w-100" style="max-width:1400px; max-height:600px">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-light" style="font-weight: bolder;"> Candello Houses</h1>
                                   
                <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Put Text Here</button> -->
            </div>
        </div>
        <div class="carousel-item ">
            <img src="/assets/MangoCondo.JPG" class="d-block w-100" style="max-width:1400px; max-height:600px">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-light" style="font-weight: bolder;"> Mango Condominium</h1>
                                   
                <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Put Text Here</button> -->
            </div>
        </div>
        <div class="carousel-item ">
            <img src="/assets/Lomejane.PNG" class="d-block w-100" style="max-width:600px; max-height:600px; margin-left:auto; margin-right:auto">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-light" style="font-weight: bolder;"> Project Lead, Fullstack Web Developer</h1>
                                   
                <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Put Text Here</button> -->
            </div>
        </div>
        <div class="carousel-item ">
            <img src="/assets/Michael.JPG" class="d-block w-100" style="max-width:600px; max-height:600px; margin-left:auto; margin-right:auto">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-light" style="font-weight: bolder;"> Project Member, Fullstack Web Developer</h1>
                                   
                <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Put Text Here</button> -->
            </div>
        </div>
        <div class="carousel-item align-item-center">
            <img src="/assets/enerio1.JPG" class="d-block w-100 " style="max-width:600px; max-height:600px; margin-left:auto; margin-right:auto">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-light" style="font-weight: bolder;"> Project Member, Fullstack Web Developer</h1>
                                   
                <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Put Text Here</button> -->
            </div>
        </div>
        
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <!-- Previous  -->
    <button class="carousel-control-next" type="button" data-bs-target="#carouselSlide" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
    </button>
      <!--Next-->
</div>
<!--End of Carousel-->
    </div>
@endsection

{{-- @foreach ($imageData as $item)
    <div class="card p-5">
        <p>{{$item->id}}</p>
        <img src="{{'Image/'. $item->images}}" width="150px">
    </div>

@endforeach --}}
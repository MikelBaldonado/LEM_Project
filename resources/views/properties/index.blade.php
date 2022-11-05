{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> --}}
    {{-- <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
    crossorigin="anonymous"
    /> --}}
    {{-- <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous"> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    {{-- <link  href="{{asset('build/assets/app.css')}}" rel="stylesheet">
    <link href="{{secure_asset('build/assets/app.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{secure_asset('build/assets/properties.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{asset('css/properties.css')}}" rel="stylesheet">

    <script src="{{secure_asset('build/assets/app.css')}}"></script> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> --}}
{{-- </head>
</head> --}}


@extends ('layouts.app')

@section('content')


{{-- <body style="background-color: #FAD9C1"> --}}

<div class="container-fluid justify-content-center align-items-center pt-2" style="margin-left:auto; margin-right:auto ">
    <h1 class="justify-content-center align-items-center" style="font-family: cursive; nfont-size:60px; text-align: center">Search Properties</h1>
    <div class="row p-2 mx-2 d-flex flex-row flex-wrap text-align-center justify-content-center align-items-center xbg-primary" style="justify-content: center; align-items:center; text-align:center" >

    <form action="/searchproperties" method="get" enctype="multipart/form-data" class="xbg-warning">
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
      <select class="btn bg-light" name="citymun" id="citymun" value="citymun" style="width:200px; margin-right:10px; margin-left: 10px; margin-bottom:5px; border: solid blue;  border-radius:15px">
        <option value="">Select City/Municipality</option>
        @foreach($citymunicipality as $item)
          {{-- <option value="CEBU CITY">{{(Str::title($item->city_mun_description))}}</option> --}}
          <option type="text" value={{($item->city_mun_id)}}>{{(Str::title($item->city_mun_description))}}</option>
        @endforeach;
      </select>
      <select class="btn bg-light" name="price" id="price" value="price" style="width:200px; margin-right: 10px; margin-left: 10px; margin-bottom:5px; border: solid blue; border-radius:15px">
        <option value="">Select Price Range</option>
        <option value="20,000,000.00">20,000,000.00 and above</option>
        <option value="10,000,000.00">10,000,000.00 - 19,999,999.99</option>
        <option value="9,999,999.99">9,999,999.99 and below</option>
      </select>
      <button class="btn filterButtonSubmit" type="submit" style="width:200px; margin-right:10px; margin-left: 10px; margin-bottom:5px; border: solid blue;  border-radius:15px; background-color:skyblue; color: blue; transform:scale(1:1.03)" ><b>Submit</b></button>

        <a class="btn filterButtonReset" type="Reset"  style="width:200px; margin-right:10px; margin-left: 10px; margin-bottom:5px; border: solid blue;  border-radius:15px; background-color:#FE9C8F; texts-decoration: none; color:red" href="/properties"><b>Reset</b></a>
      
      </p>
    </form>
</div>   
<div>
    <div Class="row">
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
                        <button type="submit" class="btn btn-primary" href="/contact/">Inquire</button>
                      </div>
                    </div>
                  </div>
                </div>  

            @endforeach
          </div>
    </div>
  </div>

</div>
    {{-- {{$properties}}; --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> --}}
{{-- </body> --}}
@endsection
{{-- </html> --}}











{{-- @extends('layouts.navbar')
@section('content')
    @include('properties/properties')
@endsection
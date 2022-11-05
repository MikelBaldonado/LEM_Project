@extends('layouts.app')

@section('content')
   
<body style="background-color: #FAD9C1">
    
    <div Class="container-fluid justify-content-center align-items-center pt-2" style="margin-left:auto; margin-right:auto ">
        <h1 Class="justify-content-center align-items-center" style="font-family: cursive; nfont-size:60px; text-align: center">Search Properties</h1>
        <div Class="row p-2 mx-2 d-flex flex-row flex-wrap text-align-center justify-content-center align-items-center xbg-primary" style="justify-content: center; align-items:center; text-align:center" >
            <form action="" method="">
            <p>
            <select class="btn bg-light" name="province" id="province" style="width:200px; margin-right: 10px; margin-bottom:5px; border: solid blue; border-radius:15px">
                <option value="All">Select Province</option>            
                <option value="NEGROS ORIENTAL">Negros Oriental</option>
                <option value="Misamis Oriental">Misamis Oriental</option>
            </select>
            <select class="btn bg-light" name="city" id="city_municipality" value="Try" style="width:200px; margin-right:10px; margin-bottom:5px; border: solid blue;  border-radius:15px">
                <option value="All">Select City/Municipality</option>
                <option value="Cebu City">Cebu City</option>
                <option value="Dumaguete City">Dumaguete City</option>
                <option value="Cagayan De Oro City">Cagayan De Oro City</option>
            </select>
            <button class="btn" type="submit" style="width:200px; border: solid blue;  border-radius:15px; background-color:#FE9C8F">Submit</button>
            </p>
            </form>
        </div>
        <br/>    
    </div>

    

    <div class="row">
        <div class="propertiesList">
            @for ($i = 0; $i < 9; $i++)
            <div class="propertiesItem">
                <div class="card" style="width: 18rem;">
                    <img src="{{'../assets/' . 'for_buy.jpg' }}" class="card-img-top" alt="..." height="200px">
                    <div class="card-body">
                      <h4 class="card-title">Properties</h4>
                      <p class="card-text">Properties Description:</p>
                      <p class="card-text">Location:</p>
                      <p class="card-text">Price:</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    <div class="card-footer">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:black; border-radius: 10px " >
                            <b>DETAILS</b>
                        </Button>
                    </div>
                  </div>
            </div>
            @endfor
        </div>  
    </div>
        

    
    </body>


@endsection
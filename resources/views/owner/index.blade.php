<title>List Of Owners</title>
<link href="{{asset('css/createowner.css')}}" rel="stylesheet">
@extends('layouts.navbar')

@section('content')
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','Default Value')}}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      </head>
    <body>
      
        <div class="d-flex">
            <div class="p-2 flex-grow-1"> <h1>List of Owners</h1></div>
            <div class="p-2">
                <!-- Button trigger modal -->
                <a href="/owner/create" 
                    class="btn btn-primary" >                   
                    New Record
                </a>
            </div>
            <div class="p-2">
                <input type="text" class="form-control shadow" placeholder="Search..." style="border:#368D96 solid 1px;">
            </div>
        </div>

        <section>

            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
              
                  @foreach ($owner as $item )
              
                    <tr>
                      <td>{{$item->owner_id}}</td>
                      <td>{{$item->owner_fname}}  {{$item->owner_lname}}</td>
                      <td>{{$item->owner_address}}</td>
                      <td>{{$item->owner_contact_number}}</td>
                      <td>{{$item->user_id}}</td>
                      <td>
                          <a href="/owner/{{$item->owner_id}}/edit" class="btn b" style="width:100px;">Edit</a>
                          <form action="/owner/{{$item->owner_id}}" method='post'>
                            {{method_field('DELETE')}}
                            {!! csrf_field() !!}
                            <input type="submit" value="Delete" class='btn' style="width:100px;">
                          </form>
                      </td>
                    </tr>
              
                  @endforeach
              
              
                </tbody>
              </table>

        </section>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>  
    </body>
</html>
@endsection
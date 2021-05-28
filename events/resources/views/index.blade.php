<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Events</title>
</head>
<body>
    <div class="container">
      <div class="row p-5">
        <div class="col-10">
          <h1> Events</h1>
        </div>
        <div class="col-2">
          
          <a href="{{URL::route('create') }}" class="btn btn-success">Create</a>
        </div>
        <div class="col-12">
          <form action="">
              <input type="search" name="search" class="form-controls" required>

              <input type="radio" name="by" value="title" required>Title
              <input type="radio" name="by" value="location" required>Location  
              <input type="radio" name="by" value="description" required>Description
              <button>Search</button>
          </form>
          <br>
          <form action="">
              <input type="date" name="date1" class="form-controls" required>  
              <input type="date" name="date2" class="form-controls" required>
              <button>Search by Date</button>
          </form>
          <br>
          <form action="">
              <input type="number" name="number1" class="form-controls" required>  
              <input type="number" name="number2" class="form-controls" required>
              <button>Search by Price</button>
          </form>
    </div>
    </div>
        <div class="col-12 mt-5">
        <table class="table">
            <thead>
              <tr>
               
                <th scope="col">Title</th>
                <th scope="col">Location</th>
                <th scope="col">Date</th>
                <th scope="col">Description</th>
                <th scope="col">Entrance_fee</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                <tr>
                    
                    <th scope="row">{{$d->title}}</th>
                    <th scope="row">{{$d->location}}</th>
                    <th scope="row">{{$d->date}}</th>
                    <th scope="row">{{$d->description}}</th>
                    <th scope="row">{{$d->entrance_fee}}</th>
                    <th scope="row">
                      <a href="{{URL::route('update',$d->id)}}"  class="btn btn-success btn-sm">Update</a>
                      <a href="{{URL::route('delete',$d->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </th>
                  </tr>
                @endforeach
             
            </tbody>
          </table>
          <div>
        </div>
      </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
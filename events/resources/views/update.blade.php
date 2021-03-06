<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Create Events</title>
</head>
<body>

<div class="container">
    <div class="row p-5">
        <div class="col-10">
          <h1>Update Events</h1>
        </div>
        <div class="col-2">
            <a href="\" class="btn btn-success">Cancel</a>
        </div>
        <div class="col-12 mt-5">
          <form action="{{URL::route('update.save',$data->id)}}" method="post">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{$data->title}}"required>
            </div>
            <div class="mb-3">
                <label class="form-label">Location</label>
                <input type="text" class="form-control" name="location" value="{{$data->location}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Date</label>
                <input type="date" class="form-control" name="date" value="{{$data->date}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description" value="{{$data->description}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Entrance fee</label>
                <input type="number" class="form-control" name="entrance_fee"  value="{{$data->entrance_fee}}" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-success">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
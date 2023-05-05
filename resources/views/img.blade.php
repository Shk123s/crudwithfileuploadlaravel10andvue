<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>uploadhere</title>
</head>

<body>
<div class="container mt-3">
    <h2>Image Upload here!</h2>
<form action="{{route("img.store")}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="name" id="title" class="form-control" required>
     </div>
     <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="imgpath" id="image" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Upload</button>
</form>
</div>
<div class="container mt-3">
    <h2>Uploaded Images</h2>
    @foreach ($show as $image )

    <div class="card">
        <img src="{{Storage::url($image->imgpath)}}" alt="nhi h" srcset="">

        <div class="card-body">
          <h5 class="card-tittle">
              {{$image->name}}
          </h5>
        </div>
      </div>
    @endforeach
</div>
</body>
</html>


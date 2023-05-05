<!doctype html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>Vue JS CRUD Operations in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
   <style>
    #btn{
        display: flex;
        float: right;
        margin-right: 2%;
        border: 2px solid rgb(0, 0, 0);
        border-radius: 10px;
    }
   </style>
</head>
<body>

    <div id="app">
        <div class="container mt-3">
            <form action="{{route("data.store")}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input name="name" type="name" class="form-control" id="exampleInputPassword1">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Process</label>
                  <input name="process" type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>

        <h1 class="text-center"> Hello Bacccho </h1>
      <div class="container">
        <form action="" method="Post">
            @csrf
                <a href="{{route('data.clear')}}" type="button" class="btn btn-success ml-1 mb-1" id="btn">Reset </a></td>
            </form>
        <table class="table">
            <thead>
              <tr class="table-primary">
                <th scope="col">NO.</th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">PROCESS</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($value  as $values)
                <tr class="table-primary">


                    <td class="table-primary">{{$values->id}}</td>
                    <td class="table-primary">{{$values->Name}}</td>
                    <td class="table-primary">{{$values->Email}}</td>
                    <td class="table-primary">{{$values->PROCESS}}</td>
                    <td class="table-primary">{{$values->created_at}}</td>
                    <td class="table-primary">{{$values->updated_at}}</td>
                    <td class="table-primary">



                            <a class="btn btn-info" href="#edit{{$values->id}}" data-bs-toggle="modal" >Edit</a>


                            @method('DELETE')

                            <a class="btn btn-danger" href="{{ route('data.delete',$values->id) }}">Delete</a>
                            @include('edit') </td>

                    </tr>
                    @endforeach




            </tbody>
          </table>
      </div>
          {{-- {{$values->Links() }} --}}
    </div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').modal('focus')
})
</script>
</body>
</html>

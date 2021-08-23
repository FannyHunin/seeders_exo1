<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <h1>Seeders SHOW</h1>
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">{{$dataPersonne->name}}</li>
              <li class="list-group-item">{{$dataPersonne->age}}</li>
              <li class="list-group-item">{{$dataPersonne->email}}</li>
              <li class="list-group-item">{{$dataPersonne->phone}}</li>
              <li class="list-group-item">
                  <form action="{{route('delete', $dataPersonne->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                      <button type="submit" class="btn btn-danger">DELETE</button>
                      <a href="{{route('edit', $dataPersonne->id)}}" class="btn btn-success">EDIT</a>
                  </form>
              </li>

            </ul>
          </div>
    </div>

</body>
</html>
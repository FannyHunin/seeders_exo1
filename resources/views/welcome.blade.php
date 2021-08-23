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
        <h1>Seeders</h1>
        <section>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name : </th>
                    <th scope="col">Age :</th>
                    <th scope="col">Phone :</th>
                    <th scope="col">Email :</th>
                    <th scope="col">Show :</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $item)
                  <tr>
                    <th scope="row">{{$item->name}}</th>
                    <td>{{$item->age}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->email}}</td>
                    <td><a href="{{route('show', $item->id)}}" class="btn btn-info">SHOW</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

              <form action="{{route('deleteAll')}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DESTROY ALL HUMANS</button>
              </form>

        </section>
    </div>

</body>
</html>
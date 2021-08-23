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
        <h1>Seeders EDIT</h1>

        <form action="{{route('update', $dataPersonne->id)}}" method="POST">
            @csrf
            @method('PUT')
            Name :<input type="text" value="{{$dataPersonne->name}}" name="name">
            Age :<input type="number" value="{{$dataPersonne->age}}" name="age">
            Phone :<input type="text" value="{{$dataPersonne->phone}}" name="phone">
            Email :<input type="email" value="{{$dataPersonne->email}}" name="email">
            <button type="submit" class="btn btn-info">SUBMIT</button>
        </form>
    </div>

</body>
</html>
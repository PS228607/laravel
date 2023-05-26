<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bands</title>
</head>
<body>
    <a href="{{route('bands.create')}}">Maak een nieuwe band aan</a>
    <h2>De top favoriete bands van mij!!</h2>
    <ul>
        @foreach($bands as $band)
        <form action="{{ route('bands.destroy', $band->id)}}" method="post">
            @csrf
            @method('DELETE')
            <li>{{$band->name}}</li>
            <button type="submit">Verwijder</button>
        </form>
        @endforeach
    </ul>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>
</head>
<body>
    <a href="{{route('albums.create')}}">Maak een nieuwe album aan</a>
    <h2>De top favoriete albums van mij!!</h2>
    <ul>
        @foreach($albums as $album)
        <form action="{{ route('albums.destroy', $album->id) }}" method="post">
            @csrf
            @method('DELETE')
            <li>{{$album->name}}</li>
            <button type="submit">Verwijder</button>
        </form>
        @endforeach
    </ul>
</body>
</html>
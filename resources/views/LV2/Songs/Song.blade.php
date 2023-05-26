<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Songs</title>
</head>
<body>
    <a href="{{route('songs.create')}}">Maak een nieuwe song aan</a>
    <h2>De top favoriete liedjes van mij!!</h2>
    <ul>
        @foreach($songs as $song)
            <form action="{{ route('songs.destroy', $song->id) }}" method="POST">
                @csrf
                @method('DELETE') 
                <li>{{$song->title}}</li>
                <button type="submit">Verwijder</button>
            </form>
        @endforeach
    </ul>
    <br>
</body>
</html>
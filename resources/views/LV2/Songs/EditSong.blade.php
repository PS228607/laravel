<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditSong</title>
</head>
<body>
    <h2>Pas de song aan</h2>

    <form action="{{ route('songs.update', $song->id) }}" method="POST">
        @csrf   
        @method('PUT')

        <label>Title:</label>
        <input id="title" type="text" name="title" value="{{$song->title}}"></input>
        <label>Singer</label>
        <input id="singer" type="text" name="singer" value="{{$song->singer}}"></input>
        <br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
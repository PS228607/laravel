<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditAlbum</title>
</head>
<body>
    <h2>Pas de album aan</h2>

    <form action="{{ route('albums.update', $album->id) }}" method="post">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" id="name" name="name" value="{{$album->name}}">
        <label>Year:</label>
        <input type="text" id="year" name="year" value="{{$album->year}}">
        <label>Times Sold:</label>
        <input type="text" id="times_sold" name="times_sold" value="{{$album->times_sold}}">
        <br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
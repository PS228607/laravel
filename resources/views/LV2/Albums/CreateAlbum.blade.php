<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateAlbum</title>
</head>
<body>
<h2>Maak een nieuwe song aan</h2>
    <br>
    <form action="{{ route('albums.store') }}" method="post">
        @csrf
        <label>Name:</label>
        <input type="text" id="name" name="name">

        <label>Year:</label>
        <input type="text" id="year" name="year">

        <label>Times Sold:</label>
        <input type="text" id="times_sold" name="times_sold">

        <button type="submit">Opslaan</button>
    </form>
</body>
</html>
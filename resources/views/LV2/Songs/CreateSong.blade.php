<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreatSong</title>
</head>
<body>
    <h2>Maak een nieuwe song aan</h2>
    <br>
    <form action="{{ route('songs.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" id="title" name="title">

        <label>Singer:</label>
        <input type="text" id="singer" name="singer">
        
        <button type="submit">Opslaan</button>
    </form> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>
</head>
<body>
    <h1>Informatie m.b.t. albums: {{$album->name}}</h1>
    <ul>
        <li>Name: {{$album->name}}</li>
        <li>Year: {{$album->year}}</li>
        <li>Times sold: {{$album->times_sold}}</li>
    </ul>

    <h1>Informatie van de band die bij {{$album->name}} hoort:</h1>
    <ul>
        <li>Name: {{$album->band->name}}</li>
        <li>Genre: {{$album->band->genre}}</li>
    </ul>

    <h1>Informatie van de song die in {{$album->name}} zitten</h1>
    <ul>
        <li>Title: {{$album->album_song->songs->title}}</li>
    </ul>
</body>
</html>
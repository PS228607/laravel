<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bands</title>
</head>
<body>
    <h1>Informatie m.b.t. bands: {{$band->name}}</h1>
    <ul>
        <li>Name: {{$band->name}}</li>
        <li>genre: {{$band->genre}}</li>
        <li>founded: {{$band->founded}}</li>
        <li>Active till: {{$band->active_at}}</li>
    </ul>

    <h1>Informatie van de albums die bij de bands horen:</h1>
    <ul>
        @foreach($band->albums as $album)
        <li>Name: {{$album->name}}</li>
        <li>year: {{$album->year}}</li>
        <li>Times sold: {{$album->times_sold}}</li>
        <br>
        @endforeach
    </ul>
</body>
</html>
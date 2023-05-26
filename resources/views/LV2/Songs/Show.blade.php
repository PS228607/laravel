<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Songs</title>
</head>
<body>  
    <h1> Informatie m.b.t. song: {{$song->title}}</h1>
    <ul>
    <li>Title: {{$song->title}}</li>
    <li>Singer: {{$song->singer}}</li>
    <li>Aangemaakt op: {{$song->created_at}}</li>
    <li>Geüpdated op: {{$song->updated_at}}</li>
    </ul>
</body>
</html>
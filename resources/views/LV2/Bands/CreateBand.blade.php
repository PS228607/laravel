<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateBand</title>
</head>
<body>
    <h2>Maak een nieuwe band aan</h2>
    <br>
    <form action="{{ route('bands.store')}}" method="post">
        @csrf
        <label>Name:</label>
        <input type="text" id="name" name="name">

        <label>Genre:</label>
        <input type="text" id="genre" name="genre">

        <label>Founded:</label>
        <input type="text" id="founded" name="founded">

        <label>Active till:</label>
        <input type="text" id="active_till" name="active_till">

        <button type="submit">Opslaan</button>
    </form>
</body>
</html>

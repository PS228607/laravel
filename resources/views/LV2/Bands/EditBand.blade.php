<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditBand</title>
</head>
<body>
<h2>Pas de band aan</h2>

<form action="{{ route('bands.update', $band->id) }}" method="POST">
    @csrf   
    @method('PUT')

    <label>Name:</label>
    <input type="text" id="name" name="name" value="{{$band->name}}">

    <label>Genre:</label>
    <input type="text" id="genre" name="genre" value="{{$band->genre}}">

    <label>Founded:</label>
    <input type="text" id="founded" name="founded" value="{{$band->founded}}">

    <label>Active till:</label>
    <input type="text" id="active_till" name="active_till" value="{{$band->active_till}}">

    <button type="submit">Opslaan</button>
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista ADMIN</title>
</head>
<body>
    <h1>BENVINGUT/DA ADMIN</h1>
    <div class="enlaces">
        <a href="{{ route('centres') }}">CENTRES</a>
        <a href="{{ route('professorat') }}">PROFESSORAT</a>
        <a href="{{ route('alumnat') }}">ALUMNAT</a>
    </div>
    <a href="{{ route('signin') }}">Log out</a>
</body>
</html>
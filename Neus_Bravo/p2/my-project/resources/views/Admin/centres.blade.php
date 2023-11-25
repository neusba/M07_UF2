<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centres</title>
</head>
<body>
    <h1>LLISTA DE CENTRES</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>ADRESS</th>
                <th>CP</th>
                <th>CITY</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($centres as $centre)
            <tr>
                <td>{{$centre['ID']}}</td>
                <td>{{$centre['NAME']}}</td>
                <td>{{$centre['ADDRESS']}}</td>
                <td>{{$centre['CP']}}</td>
                <td>{{$centre['CITY']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <a href="{{ route('admin') }}">Vista ADMIN</a>
</body>
</html>
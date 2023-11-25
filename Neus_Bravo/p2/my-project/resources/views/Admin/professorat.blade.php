<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professorat</title>
</head>
<body>
    <h1>LLISTA DE PROFESSORS</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>SURNAME</th>
                <th>ROL</th>
                <th>EMAIL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profes as $profe)
            <tr>
                <td>{{$profe['ID']}}</td>
                <td>{{$profe['NAME']}}</td>
                <td>{{$profe['SURNAME']}}</td>
                <td>{{$profe['ROL']}}</td>
                <td>{{$profe['EMAIL']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('admin') }}">Vista ADMIN</a>

</body>
</html>
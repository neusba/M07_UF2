<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnat</title>
</head>
<body>
    <h1>LLISTA D'ALUMNES</h1>
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
            @foreach ($alumnes as $alumne)
            <tr>
                <td>{{$alumne['ID']}}</td>
                <td>{{$alumne['NAME']}}</td>
                <td>{{$alumne['SURNAME']}}</td>
                <td>{{$alumne['ROL']}}</td>
                <td>{{$alumne['EMAIL']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('admin') }}">Vista ADMIN</a>

</body>
</html>
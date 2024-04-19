<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toernooien Beheren</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Toernooien Beheren</h1>

    <ul>
        @foreach($tournaments as $tournament)
            <li>{{ $tournament->name }}</li>
        @endforeach
    </ul>

    {{ $tournaments->links() }}

</body>
</html>

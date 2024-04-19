<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams Beheren</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Teams Beheren</h1>

    <ul>
        @foreach($teams as $team)
            <li>{{ $team->name }}</li>
        @endforeach
    </ul>

    {{ $teams->links() }}

</body>
</html>

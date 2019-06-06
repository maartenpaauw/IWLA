<html>
<head>
    <title>Stats</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<div id="app">
    @foreach($users as $user)
        <h1>{{ $user->name }}</h1>
        <p>Aantal clicks: {{ $user->clicks()->count() }}</p>
        <p>Verdiende medailles: {{ $user->will_earn_medals ? 'ja' : 'nee' }}</p>
    @endforeach
</div>

<script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>

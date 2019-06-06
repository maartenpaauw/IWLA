<html>
    <head>
        <title>{{ $user->name }}</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>

    <body>
        <div id="app">
            <div class="container">
                <app-button :user="{{ $user }}"></app-button>
                <app-medals :user="{{ $user }}" v-if="{{ (int) $user->will_earn_medals }}"></app-medals>
            </div>
        </div>

        <script src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>

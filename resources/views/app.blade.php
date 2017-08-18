<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="container-fluid">
            <div id="app">
                <template v-if="isAuthenticated">
                    <navigation></navigation>
                    <cat-index></cat-index>
                </template>
                <template v-else>
                    <login></login>
                </template>
            </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>

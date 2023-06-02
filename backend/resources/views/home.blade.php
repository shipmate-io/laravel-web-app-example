<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Shipmate Demo Application</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="p-8">
        <h1 class="text-5xl leading-12 font-bold tracking-tight">
            Shipmate Demo Application
        </h1>
        <p class="text-xl mt-8">
            The application is built using a client-server architecture. The frontend is a server-side-rendered
            <a href="https://nuxt.com" target="_blank" class="underline">Nuxt.js</a> service
            that talks to the REST API of the backend, which is built in
            <a href="https://laravel.com" target="_blank" class="underline">Laravel</a>.
        </p>
        <h2 class="mt-8 text-2xl font-bold tracking-tight leading-tight">
            Endpoints
        </h2>
        <ul class="mt-6 space-y-4">
            <li>
                GET /
            </li>
            <li>
                POST /log
            </li>
            <li>
                GET /api/users?n=30
            </li>
            <li>
                GET /api/fibonacci?n=30
            </li>
        </ul>
    </body>
</html>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/styles.css')
</head>

<body>
    <header>
    </header>

        @section('content')
        @show 

</body>

</html>
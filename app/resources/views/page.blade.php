<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <h1>{{ }}</h1>
        <nav>
            <ul>
                <li><a href="{{ @route('home') }}"></a></li>
                <li><a href=""></a></li>
            </ul>
        </nav>
    </header>
    @section('content')

    Main content

    @show
</body>

</html>
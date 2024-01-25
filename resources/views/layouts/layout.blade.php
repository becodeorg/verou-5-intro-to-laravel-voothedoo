<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
</head>

<body>
    <header>
        <a href="{{ route('home') }}">HomePage</a>
        <a href="{{ route('page1') }}">Page1</a>
        <a href="{{ route('page2') }}">Page2</a>
        <a href="{{ route('greet') }}">Greet</a>
        <a href="{{ route('form') }}">FormPage</a>
        <a href="{{ route('users') }}">All Users</a>
        <h1>Here Is the Logo</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, autem!</p>
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        <h3>This is the Footer</h3>
        <p>Lorem ipsum dolor sit amet.</p>
    </footer>
</body>

</html>

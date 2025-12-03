<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>

<body>
    <nav>
        <a href="/">HOME</a>
        <a href="/posts">POST</a>
        <a href="/about">ABOUT</a>
    </nav>

    <main>
        {{ $slot }}
        
    </main>
</body>

</html>
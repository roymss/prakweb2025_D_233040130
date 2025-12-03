<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar Post</title>
</head>
<body>
    <h1>Daftar Post</h1>

    @foreach ($post as $pos)
        <article>
            <h2><a href="/post/{{ $pos->slug }}">{{ $pos->title }}</a></h2>
            <p>{{ $pos->excerpt }}</p>
        </article>
    
    @endforeach
</body>
</html>
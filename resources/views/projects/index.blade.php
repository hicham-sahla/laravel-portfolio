<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body>
    <section>
        <div class="container">
            @foreach ($ooProjects as $oProject )
            <article>
                <h1><a href="{{ $oProject->slug }}">{{ $oProject->title }}</a></h1>
                <p>{{ $oProject->content }}</p>
                <img src="{{ $oProject->image }}}" alt="">
            </article>
            @endforeach
        </div>
    </section>
    <section>
        <h2>Voeg een nieuw project toe</h2>
    </section>
</body>

</html>
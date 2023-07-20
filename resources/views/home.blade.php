<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>First Laravel Exercise</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col mt-4">
                    <h1>{{ $title }}</h1>
                    <h3>{{ $text }}</h3>
                    <h4>{{ $text2 }}</h4>
                </div>
            </div>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>{{$post->title}}</h1>
        <small>Written on {{$post->created_at}}</small>
        <div>
            {{$post->body}}
        </div>
    </div>
</body>
</html>
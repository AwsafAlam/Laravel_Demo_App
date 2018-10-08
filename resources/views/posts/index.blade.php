<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Laravel App</title>
</head>
<body>
    <h1>Post</h1>
    <div class="container">

    @if (count($posts) > 0 )
        @foreach ($posts as $post)
            <div class="well">
            <h3><a href="/posts/{{$post->id}}"> {{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @endif
    </div>
</body>
</html>
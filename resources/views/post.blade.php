<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>
    <h1>Form Request</h1>
    <form action="{{ route('posts.store')}}" method="post">
        @csrf
        <label for="title">
            <span>Title</span>
            <input type="text" name="title" id="title">
        </label>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

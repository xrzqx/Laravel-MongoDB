<!DOCTYPE html>
<html>
<head>
   <title>MyBlog</title>
</head>
<body>
   <h1>{{$post->title ?? 'None'}}</h1>
   <div>{{$post->body ?? 'None'}}</div>
</body>
</html>
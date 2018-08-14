<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Article form</h1>
    <form action="/admin/article" method="post">
        {{csrf_field()}}
        Title : <input type="text" name="title"><br>
        Content : <input type="text" name="content"><br>
        Image : <input type="text" name="image"><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
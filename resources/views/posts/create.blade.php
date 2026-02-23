<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create</h1>
    <form action="/posts" method="post">
        @csrf
        <div>
            <label for="title" >Virsrakst</label><br>
            <input type="text" name="title" id="title"><br>
        </div>
        <div>
            <label for="content" >Saturs</label><br>
            <textarea name="content" id="content"></textarea><br>
        </div>
        <div>
            <input type="submit" value="Izveidot">
        </div>
    </form>
</body>
</html>
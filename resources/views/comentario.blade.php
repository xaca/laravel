<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='/comentario' method='post'>
        {{ csrf_field() }}
        <input type="text" name="autor">
        <input type='text' name='comentario'>
        <button type='submit'>Enviar</button>
    </form>
</body>
</html>
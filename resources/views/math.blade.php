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
<h1>Tính Tổng 2 số</h1>
<form action="/caculation" method="post">
    @csrf
    <input type="number" name="num1" placeholder="Number 01">
    <input type="number" name="num2" placeholder="Number 02">
    <button type="submit">=</button>
</form>
</body>
</html>

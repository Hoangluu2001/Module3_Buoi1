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
<h2><b> Google Dich Mini</b></h2>
<form method="post">
    @csrf
    <input type="text" name="search" placeholder="Nhập từ cần dịch">
    <button type="submit"> Dịch sang tiếng việt </button>
</form>
</body>
</html>

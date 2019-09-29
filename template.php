<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
</head>
<body>
    <ul>
        <li><a href="/">Main</a></li>
        <li><a href="/main/contacts">Contacts</a></li>
        <li><a href="/main/about">About</a></li>
    </ul>

<?php
    include $viewFile;
?>


</body>

</html>

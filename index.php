<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <form action="welcome.php" method="post" class="form-group" enctype="multiple/dataform">
        <div class="row">
            <input type="text" class="form-control" name="name">
        </div>
        <div class="row">
            <input type="text" class="form-control" name="name">
        </div>
        <div class="row">
            <input type="file" class="form-control" name="name">
        </div>

        <button class="btn">Send<button>
    </form>
</body>

</html>

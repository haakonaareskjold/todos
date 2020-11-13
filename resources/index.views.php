
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body style="text-align: center; list-style-position: inside">
<h1>Submit your todos</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" name="task" value="" autofocus>
        <input type="hidden" name="token" value="<?=$_SESSION['token']; ?>">
    <input type="submit" name="submit">
</form>
<br>
<hr>
<h1>To-do list</h1>
</body>
</html>
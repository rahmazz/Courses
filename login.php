<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&family=Fira+Sans&family=Jomhuria&family=Open+Sans:ital@1&family=PT+Serif:wght@700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico+One&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&family=Fira+Sans&family=Jomhuria&family=Open+Sans:ital@1&display=swap"
        rel="stylesheet">



</head>

<body>
    <form method="post" action="services.php">
        <fieldset>
            <legend>Login</legend>
            <label>UserName</label><br>
            <input type="text" required placeholder="Enter Username" size="50px" autofocus maxlength="15" name="un"><br>
            <label>password</label><br>
            <input type="password" required placeholder="Enter password" size="50px" range maxlength="15"
                name="pas1"><br>
            <input type="checkbox" checked id="check">
            <label for="check" class="check">Remember me</label>
            <a href="#"> forget password</a><br>
            <button name="submit">submit</button>
        </fieldset>

    </form>
</body>

</html>
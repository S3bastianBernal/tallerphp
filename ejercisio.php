<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>

    <form action="ejercisio.php" method="post">
       <label>Login User</label>
        <label >User</label>
        <input type="text" name="usuario">
        <label>Passwor</label>
        <input type="password" name="contraseña"> 
        <input type="submit" value="Login">
    </form>

    
    
     
    
</body>
</html>

<?php
    $new_user = $_POST["user"];
    $new_password = $_POST["password"];
    $user = $_POST["usuario"];
    $password = $_POST["contraseña"];
    if ($user == "luis" && $password == "1234") {
        $url = "http://localhost/SkylAb-143/tallerphp/notas.php";
        header("Location: ". $url);
        
    }
?>
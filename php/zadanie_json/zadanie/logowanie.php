<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <div>
        <a href="index.php">Strona główna</a>
        <a href="logowanie.php">Logowanie</a>
        <a href="panel.php">panel administracyjny</a>
    </div>
    
    <h1>Autoryzacja</h1>

    
  
    <?php
        if($_SERVER['REQUEST_METHOD']=== 'POST'){
            if(isset($_POST["wyloguj"])){
                session_unset();
                session_destroy();
            }
            if(isset($_POST["submi"])){
                if($_POST['login']==='admin' && $_POST['pass']==='tyłek123'){
                    $_SESSION["login_status"]=$_POST["login"];
                    echo "jestes zalogowany";
                }
                else{
                    echo '<p>Login lub hasło są niepoprawne</p>';
                }
            }
        }
       
    ?>
    <form method="post">
        <?php
        if(isset($_SESSION["login_status"]) && $_SESSION["login_status"])
        {
            ?>
            <p>jestes zalogowany jako <?=$_SESSION["login_status"]?></p>
            <br>
            <input  type="submit" id="wyloguj" name="wyloguj" value="wyloguj" >
            <label for="wyloguj"></label>
            <?php
        }
        else{
            ?>
            <a>login:</a> <input  type="text" id="log" name="login" value="" placeholder="wpisz login">
            <label for="log"></label>
            <br>
            <a>hasło:</a> <input  type="password" id="pas" name="pass" value="" placeholder="wpisz hasło">
            <label for="pas"></label>
            <br>
            <input  type="submit" id="sub" name="submi" value="Zaloguj" >
            <label for="sub"></label>
            <?php
        }
        ?>
        
    </form>
</body>
</html>
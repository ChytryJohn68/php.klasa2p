<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <fieldset>
            <form>
            <?php
                //if(!empty())
            


            foreach(range("a","z") as $litera){
                ?>
                
                <input <?= $checked ?> type="checkbox" id="litera" name="litera">
                <label for="litera"></label>
                <?php
            }
            
            ?>
            <input type="submit" name="wyslij" value="Wyślij to">
            </form> 
        </fieldset>
</body>
</html>
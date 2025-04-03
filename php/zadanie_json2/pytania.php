<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>SITE</title>
</head>
<body>

<?php
$json='{"response_code":0,"results":[{"type":"multiple","difficulty":"hard","category":"Entertainment: Japanese Anime &amp; Manga","question":"In the anime Initial D, how does Takumi Fujiwara describe a drift?","correct_answer":"&#039;. . . the front tires slide so the car won&#039;t face the inside&#039;","incorrect_answers":["&#039;. . . the wheels lose traction, making the car slide sideways&#039;","&#039;. . . the car oversteers through a curve, causing it to turn faster&#039;","&#039;. . . you turn a lot&#039;"]}]}';

//$json=file_get_contents($response);
if($json){
    $dane=json_decode($json , true);
    if($dane['response_code']==0){
        $difficulty = $dane['results'][0]['difficulty'];
        $category = $dane['results'][0]['category'];
        $question = $dane['results'][0]['question'];
        $correct_answer = $dane['results'][0]['correct_answer'];
        $answer = $dane['results'][0]['incorrect_answers'];
        $answer[] = $correct_answer;
        shuffle($answer);
        $_SESSION['difficulty']=$difficulty;
        $_SESSION['category']=$category;
        $_SESSION['question']=$question;
        $_SESSION['correct_answer']=$correct_answer;
    }
    
}
?>
    <form action="odpowiedzi.php" method="post">
        <h1>Prosty quiz z php<h1>
        <h3>Pytanie: <?=$question?></h3>
        <?php
            foreach($answer as $as){
        ?>
            <input type="radio" name="anser" id="anser<?=$as?>" value="<?=$as?>" required>
            <label for="anser<?=$as?>"><?=$as?></label>
        <?php
            }
        ?>
        <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
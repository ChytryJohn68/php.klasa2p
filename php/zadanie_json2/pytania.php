<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAAAAAAC+AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8AAAAAAAAA/wAAAAAAAAAAAAAA/wAAAP8AAAD/AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAAAAAAAP8AAAAAAAAAAAAAAP8AAAD/AAAA/wAAAP8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wAAAAAAAAD/AAAAAAAAAP8AAAAAAAAA/wAAAP8AAAD/AAAA/wAAAFQAAAAAAAAAAAAAAAAAAAD/AAAAFwAAAAAAAAAAAAAA/wAAAP8AAAD/AAAAAAAAAAAAAAAAAAAA/wAAAP8AAAD/AAAAAAAAAAAAAAAAAAAA/wAAAAAAAAD/AAAA/wAAAP8AAAD/AAAA/wAAAAAAAAAAAAAA/wAAAP8AAAD/AAAA/wAAAAAAAAAAAAAA/wAAAP8AAAD/AAAA/wAAAP8AAAAAAAAA/wAAAP8AAAAAAAAA/wAAAAAAAAD/AAAA/wAAAP8AAAD/AAAAAAAAAP8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wAAAP8AAAD/AAAAAAAAAP8AAAD/AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8AAAD/AAAA/wAAAAAAAAAAAAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//8AAP//AAD3/wAA/P8AAOgfAADLDwAAywcAAIqHAAC44wAAoMMAAAShAAA8EQAA/hkAAP+AAAD/8AAA//8AAA==" rel="icon" type="image/x-icon">
    <title>SITE</title>
</head>

<body>

    <?php
    $json = '{"response_code":0,"results":[{"type":"multiple","difficulty":"hard","category":"Entertainment: Japanese Anime &amp; Manga","question":"In the anime Initial D, how does Takumi Fujiwara describe a drift?","correct_answer":"&#039;. . . the front tires slide so the car won&#039;t face the inside&#039;","incorrect_answers":["&#039;. . . the wheels lose traction, making the car slide sideways&#039;","&#039;. . . the car oversteers through a curve, causing it to turn faster&#039;","&#039;. . . you turn a lot&#039;"]}]}';

    //$json=file_get_contents($response);
    if ($json) {
        $dane = json_decode($json, true);
        if ($dane['response_code'] == 0) {
            $difficulty = $dane['results'][0]['difficulty'];
            $category = $dane['results'][0]['category'];
            $question = $dane['results'][0]['question'];
            $correct_answer = $dane['results'][0]['correct_answer'];
            $answer = $dane['results'][0]['incorrect_answers'];
            $answer[] = $correct_answer;
            shuffle($answer);
            $_SESSION['difficulty'] = $difficulty;
            $_SESSION['category'] = $category;
            $_SESSION['question'] = $question;
            $_SESSION['correct_answer'] = $correct_answer;
        }
    }
    ?>
    <div class="tekst">
        <form action="odpowiedzi.php" method="post">
            <h1>Prosty quiz z php</h1>
                <h4>Poziom: <?= $difficulty ?></h4>
                <h4>Kategoria: <?= $category ?></h4>
                    <h2>Pytanie: <?= $question ?></h2>
                    <?php
                    foreach ($answer as $as) {
                        ?>
                        <input type="radio" name="answer" id="answer<?= $as ?>" value="<?=htmlspecialchars($as)?>" required >
                        <label for="answer<?= $as ?>"><?= $as ?></label>
                        <br>
                        <?php
                    }
                    ?>
                    <br>
                    <div class="cent">
                    <input class="wid" type="submit" value="Prześlij odpowiedź">
                    </div>
                    
        </form>
    </div>
</body>

</html>

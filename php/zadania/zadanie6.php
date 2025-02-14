<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SORTING</title>
    <style>
        table{
            border-collapse: collapse;
        }
        th,td{
            border:1px, dotted, black;
            padding: 3px;
        }
    </style>
</head>
<body>
    <?php
        $filmy=array(
            "Skazani na Shawshank"=> "dramat",
            "Nietykalni"=> "biograficzny",
            "Władca Pierścieni: Powrót króla"=> "fantasy",
            "Pulp Fiction"=> "gangsterski",
            "Siedem"=> "kryminał",
            "Podziemny krąg"=> "thriller",
            "Django"=> "western",
            "Król Lew"=> "animacja",
            "Avengers: Wojna bez granic"=> "akcja",
            "Dobry, zły i brzydki"=> "western"
        );
        ?>
        <br>
        <caption>Sortowanie rosnąco wedlug wartosci[asort]</caption>
        <br>
        <table>
            <?php
                asort($filmy);
                    echo"<th>";
                    echo "Klucz";
                    echo"</th>";
                    echo"<th>";
                    echo "Wartość";
                    echo"</th>";
                    echo"<tr>";
                foreach ($filmy as $key => $val) {
                    echo"<td>";
                    echo $key;
                    echo"</td>";
                    echo"<td>";
                    echo $val;
                    echo"</td>";
                    echo"<tr>";
                }

            ?>
        </table>
        <br>
        <caption>Sortowanie rosnaco wedlug kluczy[ksort]</caption>
        <br>
        <table>
            <?php
                ksort($filmy);
                    echo"<th>";
                    echo "Klucz";
                    echo"</th>";
                    echo"<th>";
                    echo "Wartość";
                    echo"</th>";
                    echo"<tr>";
                foreach ($filmy as $key => $val) {
                    echo"<td>";
                    echo $key;
                    echo"</td>";
                    echo"<td>";
                    echo $val;
                    echo"</td>";
                    echo"<tr>";
                }
            ?>
        </table>
        <br>
        <caption>Sortowanie malejaco wedlug wartosci[arsort]</caption>
        <br>
        <table>
            <?php
                arsort($filmy);
                    echo"<th>";
                    echo "Klucz";
                    echo"</th>";
                    echo"<th>";
                    echo "Wartość";
                    echo"</th>";
                    echo"<tr>";
                foreach ($filmy as $key => $val) {
                    echo"<td>";
                    echo $key;
                    echo"</td>";
                    echo"<td>";
                    echo $val;
                    echo"</td>";
                    echo"<tr>";
                }
            ?>
        </table>
        <br>
        <caption>Sortowanie malejaco wedlug kluczy[krsort]</caption>
        <br>
        <table>
            
            <?php
                krsort($filmy);
                    echo"<th>";
                    echo "Klucz";
                    echo"</th>";
                    echo"<th>";
                    echo "Wartość";
                    echo"</th>";
                    echo"<tr>";
                foreach ($filmy as $key => $val) {
                    echo"<td>";
                    echo $key;
                    echo"</td>";
                    echo"<td>";
                    echo $val;
                    echo"</td>";
                    echo"<tr>";
                }
            ?>
        </table>
        <br><br><br>
        <caption>Sortowanie malejaco wedlug kluczy[krsort](inny sposob w kodzie)</caption>
        <br>
        <table>
            
            <?php
                krsort($filmy);
                    print_r("<th>"."Klucz"."</th>"."<th>"."Wartosc"."</th>"."<tr>");
                foreach ($filmy as $key => $val) {
                    print_r("<td>".$key."</td>"."<td>".$val."</td>"."<tr>");
                }
            ?>
        </table>
</body>
</html>
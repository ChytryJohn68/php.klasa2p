    <h1>Tabela czytelnicy</h1>
    <br>
    <?php
        $query="SELECT * from czytelnicy;";
        $result=mysqli_query($conn,$query);
        if ($result->num_rows > 0) {
            ?>
            <table>
                <tr>
                    <th>Nr_czytelnika</th>
                    <th>Nazwisko</th>
                    <th>Imie</th>
                    <th>Data_ur</th>
                    <th>Ulica</th>
                    <th>Kod</th>
                    <th>miasto</th>
                    <th>data_zapisania</th>
                    <th>data_skreslenia</th>
                    <th>Nr_legitymacji</th>
                    <th>funkcja</th>
                    <th>plec</th>
                </tr>
<?php
            while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?=$row["Nr_czytelnika"]?></td>
                    <td><?=$row["Nazwisko"]?></td>
                    <td><?=$row["Imie"]?></td>
                    <td><?=$row["Data_ur"]?></td>
                    <td><?=$row["Ulica"]?></td>
                    <td><?=$row["Kod"]?></td>
                    <td><?=$row["Miasto"]?></td>
                    <td><?=$row["Data_zapisania"]?></td>
                    <td><?=$row["Data_skreslenia"]?></td>
                    <td><?=$row["Nr_legitymacji"]?></td>
                    <td><?=$row["Funkcja"]?></td>
                    <td><?=$row["Plec"]?></td>
                </tr>
                <?php
            }
            ?></table>
            <?php
          } else {
            echo "0 results";
          }
    ?>

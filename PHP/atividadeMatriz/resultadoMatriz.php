<table Border="1">
    <thead>
        <tr>
            <?php
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];

            if($valor1 > 50){
                echo "Seu Cocudo digite um valor menor que 50!!!!";
            }else{

            for ($j=1; $j <= $valor1; $j++) { 

                echo "<th>","$j", " ","</th>";

            }
        }
            ?>
        </tr>
    </thead>

    <tbody>

        <?php
        if($valor2 > 50){
            echo "Seu Cocudo digite um valor menor que 50!!!!";
        }else{
        for ($i=1; $i <= $valor2; $i++) { 

            for ($j=1; $j <= $valor2; $j++) { 

                echo "<td>","$j","X","$i", " ","</td>";

            }
            echo "<tr></tr>";
        }
    }
        ?>

    </tbody>

    </table>
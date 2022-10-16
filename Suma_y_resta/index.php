<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<!-- //Addition and substraction of two numbers-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Programa en PHP para sumar y restar dos números</title>
    </head>
    <body>
        <form method="post">
            <table border="0">
                <tr>
                    <td> <input type="text" name="num1" value="" 
                        placeholder="Ingresa el valor de a"/> <!-- El usuario coloca el primer número que sumará o el minuendo -->
                    </td>
                </tr>
                <tr>
                    <td> 
                        <input type="text" name="num2" value="" 
                        placeholder="Ingresa el valor de b" /><!-- El usuario coloca el valor del segundo sumando o del sustraendo -->
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"/>
                    </td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_POST['submit']))
            {
                $a = $_POST['num1'];
                $b = $_POST['num2'];
                $sum = $a + $b;  //Suma de dos números
                $diff = $a - $b; //Resta de dos números
                echo "Suma =".$sum;
                echo " Resta =".$diff;
                return 0;
            }
        ?>
    </body>
</html>
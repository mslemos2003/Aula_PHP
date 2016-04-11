<html>
    <form>
        <br><br><br><br>
        Digite o primeiro numero: 
        <input type="number" name="numero1">
        <br><br>
        Digite o segundo numero: 
        <input type="number" name="numero2">
        <input type="submit" value="Enviar">
        <br>

    </form>

</html>

<?php
$num1 = htmlspecialchars($_GET['numero1']);
$num2 = htmlspecialchars($_GET['numero2']);
$result = $num1 + $num2;
$result1 = $result + 8;
$result2 = $result - 5;

//echo "<script>alert($result)</script>";
echo ('<br>');
echo ('<br>'), "Resultado soma: ", $result ,('<br>');
if ($result > 20):
    echo ('<br>'), "2ªetapa:", ('<br>'), "Resultado maior do que 20: ", $result1;
else:
    if ($result2 < 0):
        echo ('<br>'), "2ªetapa:", ('<br>'), "Resultado é um valor negativo";
    else:
        if ($result2 <= 20):

            echo ('<br>'), "Resultado menor ou igual: ", $result2;
        endif;
    endif;
endif;
?>
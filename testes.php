<html>
    <form>
        <br><br><br><br>
        Digite o primeiro numero: 
        <input type="number" name="numero1">
        <br><br>
        
    </form>

</html>

<?php
$num = 1;
$num1 = 1;
$resultado = 0;
$resultado1 = 0;

$num2 = htmlspecialchars($_GET['numero1']);

while ($num <= $num2) {
    if (( ($num % 2 ) == 0) && ($num > 10 && $num < 60)) {
        $resultado += $num;
        print $num . "-";
    }
    $num++;
}
while ($num1 <= $num2) {
    if (( ($num1 % 2 ) != 0) && ($num1 > 10 && $num1 < 60)) {
        $resultado1 += $num1;
      //  print $num1 . "-";
    }
    $num1++;
}
$total = $resultado + $resultado1;
echo "<br> Total: " . $total;
?>
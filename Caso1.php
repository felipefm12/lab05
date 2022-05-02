<html>
    <head>
        <title>
            Caso 1
        </title>
</head>
<body>
    <form method="get" action="">
        Venta total del mes <br><input type="text" name="v1"><br>
        Cantidad de hijos <br><input type="text" name="v2"><br>
        <br><input type="submit" value="Calcular"><br>
</form>
<?php
if(isset($_GET['v1']))
$imp=$_GET['v1'];
if(isset($_GET['v2']))
$hij =$_GET['v2'];
if(isset($imp) && isset($hij)){
$com = 0.075 * $imp;
$bon = 50 * $hij;
$sue_bru = 600 + $com + $bon;
$des = 0.11 * $sue_bru;
$sue_net = $sue_bru - $des;
echo "Comision: " .$com."<br>";
echo "Bonificacion: " .$bon."<br>";
echo "Sueldo Bruto: " .$sue_bru."<br>";
echo "Descuento: " .$des."<br>";
echo "Sueldo Neto: " .$sue_net."<br>";
}
?>
</body>
    </html>
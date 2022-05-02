<html>
    <head>
        <title>
            Caso 2
        </title>
</head>
<body>
    <form method="get" action="">
        Precio de la gaseosa <br><input type="text" name="v1"><br>
        Cantidad de unidades <br><input type="text" name="v2"><br>
        <br><input type="submit" value="Calcular"><br>
</form>
<?php
if(isset($_GET['v1']))
$pre=$_GET['v1'];
if(isset($_GET['v2']))
$uni =$_GET['v2'];
if(isset($pre) && isset($uni)){
$imp_com = $pre - (0.05 * $pre);
$imp_des = 0.07 * $imp_com;
$imp_pagar = $imp_com - $imp_des;
$nue_pre = $imp_com - $imp_des;
$obs = 2 * $uni;
echo "Compra: " .$imp_com."<br>";
echo "Descuento: " .$imp_des."<br>";
echo "Pago: " .$imp_pagar."<br>";
echo "Precio: " .$nue_pre."<br>";
echo "Caramelos: " .$obs."<br>";
}
?>
</body>
    </html>
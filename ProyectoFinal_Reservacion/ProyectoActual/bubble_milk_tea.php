<?php
$vBubbleMilkTeaCant = $_POST['Bubble_milk_cantidad'];

include('config.php');
$sql="insert into BebidasDelPedido values(1, ".$vBubbleMilkTeaCant.", 80.00)";
//echo $sql;
$parametros=array ("UID"=>$USER, "PWD"=>$PASS, "Database"=> $BD);
$con = sqlsrv_connect($HOST,$parametros);
if($con==true){
    $trans = sqlsrv_query($con,$sql);
    if($trans==true){
        echo "<script>

        window.location='drinks.html';

        </script>";
    }
}
else{
    echo "Ya bailamos compadre' :c";
    die(print_r( sqlsrv_errors(),true));
}
?>
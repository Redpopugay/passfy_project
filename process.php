<?php
header("Content-type: text/html; charset=utf-8");
include_once 'database.php';
$sucess = "";

if(isset($_POST['save']))
{   
    $weight = $_POST['weight'];
    $volume  = $_POST['volume'];
    $telfrom  = $_POST['telfrom'];
    $namefrom      = $_POST['namefrom'];
    $addressfrom      = $_POST['addressfrom'];
    $telto = $_POST['telto'];
    $nameto = $_POST['nameto'];
    $addressto = $_POST['addressto'];
    $deliverymethod = $_POST['deliverymethod'];
    $deliverypartner = $_POST['deliverypartner'];
    $totalcheckout = $_POST['totalcheckout'];
    $lenght_parcel = $_POST['lenght_parcel'];
    $width_parcel = $_POST['width_parcel'];
    $height_parcel = $_POST['height_parcel'];
    $from_city = $_POST['from_city'];
    $to_city = $_POST['to_city'];
    $type_parcel = $_POST['type_parcel'];
    $trek = $_POST['trek'];

    $sql        = "INSERT INTO employee (weight,volume,telfrom,namefrom,addressfrom,telto,nameto,addressto,deliverymethod,deliverypartner,totalcheckout,lenght_parcel,width_parcel,height_parcel,from_city,to_city,type_parcel,trek)
    VALUES ('$weight','$volume','$telfrom','$namefrom','$addressfrom','$telto','$nameto','$addressto','$deliverymethod','$deliverypartner','$totalcheckout','$lenght_parcel','$width_parcel','$height_parcel','$from_city','$to_city','$type_parcel','$trek')";
    
    if (mysqli_query($conn, $sql))
    {
        $sucess = "Внесение данных прошло успешно."; 
    }
    else
    {
   echo "Ошибка: " . $sql . "
    " . mysqli_error($conn);
   }
    mysqli_close($conn);
}
?>
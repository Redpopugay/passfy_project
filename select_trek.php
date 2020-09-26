<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Отследить</title>
</head>

<body>
<?php
include_once 'database.php';

$trek = trim($_REQUEST['trek']);
$addressfrom = trim($_REQUEST['addressfrom']);
$whereis = trim($_REQUEST['whereis']);
$typepass = trim($_REQUEST['typepass']);
$weight = trim($_REQUEST['weight']);
$namefrom = trim($_REQUEST['namefrom']);
$nameto = trim($_REQUEST['nameto']);

$sql = mysqli_query($link, 'SELECT `ID`, `trek`, `addressfrom`, `whereis`, `typepass`, `weight`, `namefrom`, `nameto` FROM `employee`');
while ($result = mysqli_fetch_array($sql)) {
  echo "{$result['trek']}: {$result['addressfrom']}: {$result['whereis']}: {$result['typepass']}: {$result['namefrom']}: {$result['nameto']}: ";
}

?>
</body>
</html>
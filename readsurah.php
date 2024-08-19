<?php
if (isset($_POST["snum"])) {
$snumber= $_POST["snum"];
$response=file_get_contents("http://api.alquran.cloud/v1/surah/$snumber/ar.alafasy");
$response=json_decode($response,true);
// print_r($response);
$Quran=$response["data"]["ayahs"];
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            direction:rtl;
        }
    </style>
</head>
<body>
    
<?php
foreach ($Quran as  $value) {
    echo'<p>'.$value["text"].'</p>';
    echo'<audio controls  src="'.$value["audio"].'"></audio>';    
}
?>

</body>
</html>
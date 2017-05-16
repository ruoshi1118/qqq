<?php
$randomNumber = rand(0, 100);

var_dump($randomNumber);

if($randomNumber <= 50) {
    echo "五秒後前往 google.com<br>";
    header("refresh:5;url=https://google.com");
    die();
} else {
    echo "五秒後前往 yahoo.com<br>";
    header("refresh:5;url=https://yahoo.com");
    die();
}
?>

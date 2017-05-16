<?php
$randomNumber = rand(0, 9);

var_dump($randomNumber);

if($randomNumber < 5) {
    echo "3 秒後前往 google.com<br>";
    header("refresh:3;url=https://google.com");
    die();
} else {
    echo "3 秒後前往 yahoo.com<br>";
    header("refresh:3;url=https://yahoo.com");
    die();
}
?>
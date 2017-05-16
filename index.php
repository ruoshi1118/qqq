<?php
$randomNumber = rand(0, 100);

if($randomNumber <= 50) {
    echo "五秒後前往 google.com<br>";
    header("refresh:5;url=google.com");
    die();
} else {
    echo "五秒後前往 yahoo.com<br>";
    header("refresh:5;url=yahoo.com");
    die();
}
?>

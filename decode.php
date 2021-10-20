<?php

if (isset($_POST['decode'])) {
    $input = $_POST['decode'];
    $output = base64_decode($input);
    echo $output;
}


?>

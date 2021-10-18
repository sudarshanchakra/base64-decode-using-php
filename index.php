<?php
$output="";
if (isset($_POST['decode'])) {
    $input = $_POST['decode'];
    $output = base64_decode($input);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="js/ajaxcall.js"></script>

    <title>Base64 Decoder</title>
</head>
<body>
    <h1>Base64 Decoder</h1>
    <form action="index.php" class="decode_form" method="post">
        <input id="decode_input" type="text" name="decode" class="decode_input" placeholder="Enter Your Text"/>
        <button type="submit" id="decode_button" class="decode_button">Decode</button>
    </form>
    <textarea cols="30" id="decode_output" class="decode_output" rows="10"><?php echo $output;?></textarea>

</body>
</html>

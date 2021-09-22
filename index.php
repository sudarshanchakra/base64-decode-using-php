<?php if(isset($_POST['text'])){$input = $_POST['text']; $output = base64_decode($input);} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="decode.php" method="post">
        <input type="text" name="text" placeholder="Enter Your Text"/>
        <button type="submit">Decode</button>
    </form>
    <h3><?php if(isset($output)){echo $output;} ?></h3>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['text'])) {
        $input = $_POST['text'];
        $output = base64_decode($input);
    }
}

function safelyOutput($data) {
    return htmlentities($data, ENT_QUOTES, 'UTF-8');
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
    <title>Base64 Decoder</title>
</head>
<body>
    <h1 style="text-align: center;">Base64 Decoder</h1>
    <form action="decode.php" class="decode_form" method="post">
        <input type="text" name="text" class="decode_input" placeholder="Enter Your Text" value="<?php echo isset($_POST['text']) ? safelyOutput($_POST['text']) : ''; ?>"/>
        <button type="submit" class="decode_button">Decode</button>
    </form>
    <textarea id="" cols="30" class="decode_output" rows="10" ><?php echo isset($output) ? safelyOutput($output) : ''; ?></textarea>
</body>
</html>

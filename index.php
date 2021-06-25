<?php 
    $text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, pariatur quibusdam? Neque praesentium ipsa officia necessitatibus reiciendis. Eveniet, eius ex.";

    $word = $_GET["word"];

    $filteredText = str_replace($word, "***", $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <p><?php $text ?></p>
    <p><?php echo $filteredText?></p>
    <p>Il testo è lungo <?php echo strlen($filteredText)?> caratteri</p>
    <p>La parola è <?php echo $word?></p>

</body>
</html>
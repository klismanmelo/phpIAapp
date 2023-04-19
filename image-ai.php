<?php

    require __DIR__ . '/vendor/autoload.php';

    use Orhanerday\OpenAi\OpenAi;

    $open_ai_key = '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';
    $open_ai = new OpenAi($open_ai_key);

    $promptImg = $_POST['promptImg'];


    $complete = $open_ai->image([
        "prompt" => $promptImg ,
        "n" => 1,
        "size" => "256x256",
        "response_format" => "url",
    ]);
     
     
     $image = json_decode($complete, true);
     $image = $image["data"][0]["url"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Aqui está a imagem</h1>
        <img src="<?= $image?>"/>
    </div>
</body>
</html>


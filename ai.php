<?php

    require __DIR__ . '/vendor/autoload.php';

    use Orhanerday\OpenAi\OpenAi;

    $open_ai_key = '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';
    $open_ai = new OpenAi($open_ai_key);

    $prompt = $_POST['prompt'];

    $chat = $open_ai->chat([
        'model' => 'gpt-3.5-turbo',
        'messages' => [
            [
                "role" => "system",
                "content" => $prompt
            ],
        ],
        'temperature' => 1.0,
        'max_tokens' => 150,
        'frequency_penalty' => 0,
        'presence_penalty' => 0,
     ]);
     
     
    //  var_dump($chat);
     $d = json_decode($chat);
     $d = ($d->choices[0]->message->content);


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
        <?php echo $d ?>
    </div>
</body>
</html>
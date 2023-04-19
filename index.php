<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat AI app</title>
</head>
<body>
    <div>
        <form action="ai.php" method="post">
            <h1>Gerar texto a partir de uma palavra!</h1>
            <div>
                <input type="text" name="prompt">
            </div>
            <div>
                <input type="submit" name="gerar" value="submit" placeholder="shoe/burger/etc">
            </div>
        </form>
    </div>
    <hr>
    <div>
        <form action="image-ai.php" method="post">
        <h1>Gerar uma imagem a partir de uma palavra!</h1>
            <div>
                <input type="text" name="promptImg">
            </div>
            <div>
                <input type="submit" name="gerarImg" value="submit" placeholder="shoe/burger/etc">
            </div>            
        </form>
    </div>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   

    if (isset($minhaVar))
        echo "A variável está definida (primeiro IF)";

    $minhaVar == "Kauã";
    if (isset($minhaVar))
        echo "A variável está definida (segundo IF)";
    
    ?>
    
</body>
</html>
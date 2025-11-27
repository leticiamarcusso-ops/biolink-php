<?php

$nome = "Leticia";
$bio = "linda e legal";
$imagem = "https://i.pinimg.com/736x/8c/d8/24/8cd824b3db17994bf9cdbdb8f1191d9f.jpg";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biolink de <?php echo $nome; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <img src="<?php echo $imagem; ?>" alt="Foto de perfil" class="avatar">

         <h1> <?php echo $nome; ?> </h1>
        <p> <?php echo $bio; ?> </p>

        <div class="lista-links"></div>
    </div>

    
</body>
</html>
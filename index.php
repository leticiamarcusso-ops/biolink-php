<?php

$nome = "Leticia";
$bio = "linda e legal";
$imagem = "https://i.pinimg.com/736x/8c/d8/24/8cd824b3db17994bf9cdbdb8f1191d9f.jpg";
 $links = [
        "Instagram" => "https://instagram.com/leticia.magre",
        "WhatsApp"  => "https://wa.me/17991795250",
        "Meu Jogo Favorito" => "https://www.playpkxd.com/",
        "Música do Momento" => "https://www.youtube.com/watch?v=lV2plyhSRBU&list=RDlV2plyhSRBU&start_radio"
 ];

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

        <div class="lista-links">
             <?php
            foreach ($links as $texto => $url) {
                $classe_extra = "";

                if ($texto == "Instagram") {
                    $classe_extra = "destaque";
                     }

                echo "<a href='$url' class='btn $classe_extra' target='_blank'>
                        $texto
                      </a>";
            }
            ?>
        </div>
    </div>

    
</body>
</html>
<?php
    include_once ('backend.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="shortcut icon" href="img/signos.ico" />
        <link rel="stylesheet" href="css/style.css">
        <title>Signo: <?php echo $signo; ?></title>
    </head>
    <body>
        <div class="content">
            <div class="title-signos">
                    <img class="logo-signo" src="<?php echo $logo;?>">
                    <h4 style="opacity:0.8">Nascidos entre</h4>
                    <div style="display:-webkit-inline-box;">
                        <p class="data-inicio"><?php echo $DI;?></p>&nbsp-&nbsp      
                        <p class="data-fim"><?php echo $DF;?></p>
                    </div>                   
                    <h1 class="nome-signo">HORÓSCOPO DE <?php echo $signo;?></h1>                                    
                </div>
                <div class="textos" style="background-color: <?php echo $color;?>">
                    <h3>CARACTERÍSTICAS</h3>
                    <p class="paragrafo1">&nbsp&nbsp&nbsp&nbsp<?php echo $PR1;?></p>
                    <p class="paragrafo2">&nbsp&nbsp&nbsp&nbsp<?php echo $PR2;?></p>
                    <p class="paragrafo3">&nbsp&nbsp&nbsp&nbsp<?php echo $PR3;?></p>
                    <div class="voltar p-4 col-5">
                        <a href="index.html" class="btn btn-danger" type="button">Página Inicial</a>
                    </div>
                </div>
        </div>  
        <div class="content-form" style="width: 100%;"> </div>         
        <script src="js/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            config = {
                enableTime: false,
                dateFormat: "d-m",
            }
            flatpickr("input[type=datetime-local]", config);
        </script>     
    </body>
</html>
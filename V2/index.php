<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>PortoFolio V2</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=home" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/app/styles/global.css">
</head>
<body>  
    <img src="/app/img/circle.png" class="rouge_one" width="170">
    <img src="/app/img/circle.png" class="rouge_two" width="170">
    <button id="slideDownBtn">Slide Down</button>
    <button id="slideUpBtn">Slide Up</button>
 
        <div class="auto">
            <main>
               <?php require 'header.php'; ?>

               <div id="content" class="hidden">
                    <div class="right_Heyjesuis">
                        <p><u>Hello, je suis</u></p>
                        <section class="animation">
                            <div class="first"><div style="color:#F48D11">Yenice Fatih</div></div>
                            <div class="second"><div style="color:#B70D53">Développeur Web.</div></div> 
                        </section> 
                        <center><a href="#my__about"><button class="btn__project" id="plusSurMoi">PLUS SUR MOI </button></a></center>
                    </div>
                    <div style="position: relative; top:-98px">
                        <img src="/app/img/fatih.png" id="hover" class="hover">
                        <img src="/app/img/fatih_remove.png" style="display:none;" id="hover_deux" class="hover_deux">
                    </div>
                </div>
                
            </main>
        </div> 

    <br>

   <script src="/app/js/global.js"></script>
</body>
</html>
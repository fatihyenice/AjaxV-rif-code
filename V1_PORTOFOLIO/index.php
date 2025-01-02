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
    <link rel="stylesheet" href="/app/styles/global.css">
</head>
<body> 
    
   <?php require 'menu.php'; ?>
   <?php require 'menu_mobile.php'; ?>

    <section id="homee">
        <div class="big_backgroundHome">
            <div class="big_filtreHome"></div>

            <header>
                <h1 class="logo">Fatih</h1>
                <h2 id="disp__texting__dicto">Aucun de nous sait, ce que nous savons ensemble !</h2>
            </header>
                <div class="title_milieuHome">
                    <h2 style="font-size:50px; color: #fff;">Hello, je suis <br><br><br><h1 style="color:#fff">YENICE Fatih</h1></h2> 
                </div>
                <center><a href="#my__about"><button class="btn__project">À PROPOS DE MOI</button></a></center> 
        </div>
    </section>
     
    <section id="my__about">
        <div class="grid">
                <div class="boite_gauche"> 
                <h3>Apprendre à me connaître</h3>
                <hr>
                <p style="color: grey; text-decoration: none !important;">Depuis mon plus jeune âge, j'ai été captivé par le <strong>monde du développement web</strong>. La possibilité de créer des expériences uniques et interactives en ligne a toujours suscité ma curiosité et alimenté ma passion pour la technologie.
                </br> </br>
                Cependant, confronté aux défis de la vie quotidienne et désireux d'acquérir une certaine indépendance financière, j'ai choisi de travailler dans divers petits boulots dès mon plus jeune âge. Ces expériences m'ont permis d'apprendre la valeur du travail acharné, de la persévérance et de la gestion des priorités.

                Malgré ces détours, ma passion pour le développement web n'a jamais faibli. Aujourd'hui, je saisis l'opportunité de <strong>suivre ma formation en développement web</strong>. Cette décision reflète mon engagement indéfectible à poursuivre mes rêves, peu importe les obstacles rencontrés en cours de route.
                
                </br></br>
                <strong>À travers chaque ligne de code que j'écris, je cherche à apporter ma contribution au monde du web et à inspirer les autres par mon dévouement  et ma détermination</strong>.</p>
            
                </div>

                <div class="boite_milieu"></div>

                <div class="boite_droite">
                    <div class="avatar" onclick="openZoom()">
                        <a href="#">
                            <center><img src="/app/img/fatih.png"/></center>
                        </a>
                    </div> 
                </div>
            </div> 
    </section>
    <br>
    <section id="realisations">
        <div id="langage_used">
            <h2 style="text-align:left; text-indent: 20px; color:#a0854c">Technologies maitrisés</h2>
            <hr><br>

            <div class="flex_class">
                <span>
                    <img id="filter" src="/app/img/html.png" width="140"><br>
                    90%
                </span>
                <span>
                    <img id="filter" src="/app/img/css.png" width="140"><br>
                    90%
                </span>
                <span>
                    <img id="filter" src="/app/img/js.png" width="140"><br>
                    60%
                </span>
                <span>
                    <img id="filter" src="/app/img/php.png" width="259"><br>
                    60%
                </span>
                <span>
                    <img src="/app/img/symfony.png" width="115"><br>
                    20%
                </span>
            </div>
        </div> 

        <div class="grid_real">
                <div class="realbox"> 
                    <h2>Mes réalisations</h2> 
                    
                    <div class="picture_construction">
                        <div id="filtre_white">
                        <span class="noneReal">Aucune réalisation pour l'instant</span>
                        </div>
                    </div> 
                </div>  
    </section>

    <section id="contact">
        <div class="grid_contact">

            <div class="box_contact_gauche">
                <h2 style="text-align:left; text-indent: 20px; color:#a0854c">Me contacter</h2> 
                    <legend>Formulaire</legend>
                    
                    <form method="POST" class="formulaire__contact"> 
                        <label class="label">Votre prénom: </label><input type="text" id="contact_name" name="contact[name]" required="required" class="input" placeholder="Fatih" />
                        <label class="label">Votre nom:  </label><input type="text" id="contact_lastname" name="contact[lastname]" required="required" class="input" placeholder="Fatih" />  
                        <label class="label">Votre adresse mail: </label><input type="email" id="contact_mail" name="contact[mail]" required="required" class="input" placeholder="azerty@exemple.com" /> 
                        <label class="label">La raison: </label><textarea id="contact_raison" name="contact[raison]" required="required" class="textarea" placeholder="Pour quel raison ?"></textarea> 
                        <button type="reset" id="contact_cancel" name="contact[cancel]" class="cancel__clean">Effacer</button>
                        <button type="submit" id="contact_submit" name="contact[submit]" class="submit__validate">Envoyer</button> 
                        <input type="hidden" id="contact__token" name="contact[_token]" value="068a2.RPZmkI06_8a5QbWE7c0Uzunj6AfROZscbFAtEqzSgqM.G4dL8coPjqTMbPn9hJdMr7yA0UClct92LxFKZ_-z1O0FxhTyz2-qgswg-A" /> 
                    </form> 
            </div>
            
                <div class="box_contact_droite">
                    <h2>Mes coordonnées</h2> 

                    <a href="mailto:fatih.ydev@gmail.com" id="mailto_m_mail">
                        <div class="coor_style">
                            fatih.ydev@gmail.com</a> <svg xmlns="http://www.w3.org/2000/svg" height="30px" style="float:right;" viewBox="0 -960 960 960" width="30px" fill="#A0854C"><path d="m720-160-56-56 63-64H560v-80h167l-63-64 56-56 160 160-160 160ZM160-280q-33 0-56.5-23.5T80-360v-400q0-33 23.5-56.5T160-840h520q33 0 56.5 23.5T760-760v204q-10-2-20-3t-20-1q-10 0-20 .5t-20 2.5v-147L416-520 160-703v343h323q-2 10-2.5 20t-.5 20q0 10 1 20t3 20H160Zm58-480 198 142 204-142H218Zm-58 400v-400 400Z"/></svg>
                        </div>
                    </a>

                    <a href="https://github.com/fatihyenice" id="mailto_m_mail" target="_blank">
                        <div class="coor_style">
                            MY GITHUB</a> <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" width="25" style="float:right; margin-right: 4px;" alt="Icon de GITHUB"/>
                        </div>
                    </a>

                    <a href="https://www.linkedin.com/in/fatih-yenice-296b17290/" target="_blank" id="mailto_m_mail" target="_blank">
                        <div class="coor_style">
                        MY LINKED</a> <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" width="25" style="float:right; margin-right: 4px;" alt="Icon de LinkeDin"/>
                        </div> 
                    </a>

                </div>
        </div> 
    </section> 
       
    <footer>
        <div class="footer">  
            <div id="marginLeftRightAuto">
                <div class="paragraphe_text_footer" id="copy">FatihYenice ©</span>  
            </div> 
        </div>
    </footer>
  
   <script src="/app/js/global.js"></script>
</body>
</html>
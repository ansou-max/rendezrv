<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/espaces.css">
    <title>Espaces de connexion </title>
</head>
<body>
    <div id="header">
        <div class="container"> 
            <div class="navbar"> 
                <div class="logo"> 
                    <a href="index.php"><img src="img/logo.png"alt="Logo Sante Yallah"></a>
                </div>
                <div class="menu"> 
                    <ul>
                        <li><a href="#"> Accueil</a></li>
                        <li><a href="#">A propos</a></li>
                        <li><a href="#">Equipe</a></li>
                        <li><a href="#">Galerie</a></li>
                        <li><a href="#">Temoignages</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="accueil"> 

    <br>

    <h1><script>
        // Début code Js animé
        // The JavaScript Source!! http://javascript.internet.com
        function initArray() {
        this.length = initArray.arguments.length;
        for (var i = 0; i < this.length; i++) {
        this[i] = initArray.arguments[i];
        }
        }

        var ctext = "Hopital Sante Yallah";
        var x = 0;
        var color = new initArray(
        "#ffffff",
        
        "cyan",  
        "blue",
        "#e4e1e1",
        "",
        
        );

        {
        document.write('<div id="c">'+ctext+'</div>');
        }
        function chcolor(){     
        {
        document.all.c.style.color = color[x];
        }
        (x < color.length-1) ? x++ : x = 0;
        }
        setInterval("chcolor()",1000);
        // Fin code animé
        </script></h1>

        <div id="particles-js"></div>
        <script type="text/javascript" src="js/connexion-js/particles.js"></script>
        <script type="text/javascript" src="js/connexion-js/app.js"></script>

        <div id="boutons"> 
            <a href="/rv/interfacesecrétaire/interface html/inter.html" class="bouton-rv">Connexion-Assistant(e)</a> 
            <a href="connexion-medecin" class="bouton-rv">Connexion-Medecin</a>
        </div>

        <footer>
   
                <div class="end-footer">
                    
                    <h6 class="last-title">&copy 2019 Web Design & Web Development by Omar@Ngom</h6>
        
                    <img src="svgs/facebook.svg" alt="" class="end-fonts-facebook">
                    <img src="svgs/twitter.svg" alt="" class="end-fonts-twitter">
                    <img src="svgs/instagram.svg" alt="" class="end-fonts-instagram">
            
                </div>
            
        </footer>

    </div>

</body>
</html>
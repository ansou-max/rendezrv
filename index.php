<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Medical Dating Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="header">
        <div class="container"> 
            <div class="navbar"> 
                <div class="logo"> 
                    <a href="index.php"><img src="img/logo.png" alt="Logo Sante Yallah"></a>
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

        var ctext = "Bienvenue à Sante Yallah";
        var x = 0;
        var color = new initArray(
        "#08f708",
        "yellow",
        "red",  
        "blue",
        "white",
        "#dd0553",
        "green"
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
        
        <h3>Une plateforme médicale de prise de rendez-vous par Omar@Ngom</h3><br>

        <a href="espaces.php" class="bouton-rv" id="bouton">Accéder à votre espace administrateur</a>

        <div id="particles-js"></div>
        <script type="text/javascript" src="js/particles.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
        
        <div class="main">
            <img src="img/main.png" alt="" id="slider">
            <script>
                var images = ["img/main.png", "img/main0.png", "img/main001.png"];
                var i = 0;
                setInterval(function(){
                    document.getElementById('slider').src=images[i];
                    i++;
                    if (i==3) i=0;
                }, 6000);
            </script>

        </div><br>
        <div class="creatif">
            <br>
            <h2 class="pr_cr">Pratique & Créatif</h2>
            <h3>C'est pour cela vous l'adorez ;)</h3>
            <div class="font-svg"> 
    
                    <img src="svgs/responsive.png" alt="" class="responsive">
                
                    <img src="svgs/ui-ux.png" alt="" class="ui-ux">
                
                    <img src="svgs/creative.png" alt="" class="creative">
                
            </div>

            <div class="text-svg"> 
    
                    <li>Responsive</li>

                    <li>Création UI / UX</li>

                    <li>Design Creatif</li>
                
            </div>

            <div class="sub-text-svg"> 
    
                    <li>Sante Yallah s'adapte à tous <br> les appareils et systèmes.</li>

                    <li>Une interface simple, creative, <br>pratique et ergonome.</li>

                    <li>Un design bien pensé et sur <br>mesure pour votre bonheur</li>
                
            </div>
        </div>

        <div class="icones">
            <br>
            <h2 class="icodo">KING dans le domaine</h2>
            <h3>C'est la fameuse team ;)</h3>

            <div id="teamate-1">
                <img src="img/omar.jpg" alt="" class="omar-jpg">
                <h2 class="text-omar"> Omar Ngom</h2>
                <h2 class="fonction-omar"> Developpeur Full Stack</h2>
                
                <div class="follow">
                    <img src="svgs/brands/twitter_w.svg" alt="" class="twitter">
                    <a href=""><h2 class="text-follow"> Follow</h2></a>
                </div>
                
            </div>
            
            <div id="teamate-2">
                <img src="img/steve001.jpg" alt="" class="steve-jpg">
                <h2 class="text-steve"> Steve Jobs</h2>
                <h2 class="fonction-steve"> Ex CEO Apple</h2>
                
                <div class="follow">
                    <img src="svgs/brands/twitter_w.svg" alt="" class="twitter">
                    <a href=""><h2 class="text-follow"> Follow</h2></a>
                </div>
                
            </div>

            <div id="teamate-3">
                <img src="img/bills.jpg" alt="" class="bill-jpg">
                <h2 class="text-bill"> Bill Gates</h2>
                <h2 class="fonction-bill"> Ex CEO Microsoft</h2>
                
                <div class="follow">
                    <img src="svgs/brands/twitter_w.svg" alt="" class="twitter">
                    <a href=""><h2 class="text-follow"> Follow</h2></a>
                </div>
                
            </div>

            <div id="teamate-4">
                <img src="img/mark.jpg" alt="" class="mark-jpg">
                <h2 class="text-mark"> Mark Zuckerberg</h2>
                <h2 class="fonction-mark"> CEO Facebook</h2>
                
                <div class="follow">
                    <img src="svgs/brands/twitter_w.svg" alt="" class="twitter">
                    <a href=""><h2 class="text-follow"> Follow</h2></a>
                </div>
                
            </div>
            
            <div><br><br><br></div>
        </div>


        <div class="elegant">
            <br>
            <h2 class="authentique">Outils et Technologies</h2>
            <h3>Nous utilisons beaucoup ces technologies :)</h3>

            <div class="langages">
                <img src="img/lweb.jpg" alt="">
                <h2 id="h2subtitle">Langages Web</h2>
            </div>

            <div class="visual">
                <img src="img/vs.jpg" alt="">
                <h2 id="h2subtitle">Visual Studio</h2>
            </div>

            <div class="linux">
                <img src="img/ubuntu.jpg" alt="">
                <h2 id="h2subtitle">Linux@Ubuntu</h2>
            </div>

            <div class="github">
                <img src="img/gh.jpg" alt="">
                <h2 id="h2subtitle">Git / Github</h2>
            </div>

            <div><br><br></div>

        </div>
        
        <div><br><br></div>

        <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.1650206474355!2d-17.471312385500628!3d14.70325817849533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec173bf12119a35%3A0xdca5d1b8dbb71e94!2sSonatel%20Academy!5e0!3m2!1sfr!2ssn!4v1570019408127!5m2!1sfr!2ssn" width="1366" height="350" style="border: 0;" allowfullscreen="" title="Carte de localisation"></iframe>
        </div>
            
        <footer>
            <div>
                <h2>Suivez-nous dans les réseaux sociaux</h2>
                <h3>Vous pouvez nous contacter toujours via les réseaux sociaux :)</h3>
                <div>
                <br><br><br><br><br><br><br><br>
                </div>
                <div class="end-footer">
                    
                    <h6 class="last-title">&copy 2019 Web Design & Web Development by Omar@Ngom</h6>
        
                    <img src="svgs/facebook.svg" alt="" class="end-fonts-facebook">
                    <img src="svgs/twitter.svg" alt="" class="end-fonts-twitter">
                    <img src="svgs/instagram.svg" alt="" class="end-fonts-instagram">
            
                </div>
            </div>
        </footer>

    </div>

</body>
</html>
<!doctype html>
<html class="no-js" lang="fr">
<head>
        <meta charset="UTF-8">
        <title>Avenir(s) d'internet</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="aibbsf.css" media="all">
</head>

<body>

    <div role="main" class="line">
        <div id="titrebox">
            <header role="banner" class="boxes">
                <img id="titreevent" src="imgs/titreevent.svg" alt="titre événement"/>
                <h3 id="soustitre">Une série de conférences et d'ateliers <br/>autour de la vie privée numérique <br/>et de l'auto-hébergement.</h3>
            </header>
            <p id="here2" style="position: absolute;"></p>        
            <button type="button" class="button" onClick="displayit();">abonnez-vous</br>à la newsletter !</button>
        </div>
    </div>

    <div id="newsletter" class="boxes inscription">
        <form method="POST" action="index.php?id=44#here">
            <fieldset>
            <!-- Adresse mail -->
            <input class="simpleboite" type="text" name="email" maxlength="80" size="28" placeholder="[adresse e-mail]" required>

            <!-- Antispam -->
            <div style="display: none;">
                <label for="url">Laissez moi vide !</label>
                <input class="simpleboite" type="text" name="url" maxlength="80" size="30">
            </div>

            <!-- Submit -->
            <button class="simpleboite submit" type="submit" id="abonne" name="abonne" value="abonne">Je m'abonne</button>
            </fieldset>
        </form>
    </div>
    <p id="here"></p>        
    <?php
        include 'form/formHandlerNews.php';
    ?>


    <div role="main" class="line">
        <div class="marged">
            <div id="boxfiction" class="boxes">
                <p id="fontfiction">2035, le consortium Google Networks (GN) règne sans partage sur tous les échanges d’informations à l’échelle mondiale. Grâce aux implants cérébraux ‘Google imagine’, GN sait tout ce que vous faites, se rappelle ce que vous avez fait, anticipe ce que vous ferez.
Face à l’effondrement de leur souveraineté, les états occidentaux mettent le groupe sous pression : ils savent que les implants de GN, connectés directement à l'intellect de toute une population leur permettraient d'empêcher la contestation politique en étouffant tout pensée déviante. GN va-t-il céder au chantage étatique ?
Seuls quelques groupes de personnes refusent encore la connexion au réseau Google universel. Marginalisés hors des canaux dominants de communication ces rebelles de l'intimité se trouvent pourtant impuissants face aux évolutions politiques qui les inquiètent.</p>
                <p class="lightital">Triste récit anticipateur ? Futurologie manichéenne grotesque ? Les récits de science-fiction nous engagent à réfléchir sur nos modes de vie et à penser aux possibilités sociales, politiques et éthiques qui s'offrent à nous pour l'avenir.</p>
            </div>
        </div>


        <div class="marged" >
            <div class="boxes">
                <img id="date" src="imgs/10.svg" alt="10"/>
                <h2>jeudi &ndash; 16 h 45</br>décembre 2015</h2>
                <a href="https://www.youtube.com/watch?v=PCT9do8chMo" id="livestream" target="_blank">>LIVE STREAM</a>
                <h3>Conférence d'ouverture </br>à la médiathèque <a href="http://www.mediatheques.strasbourg.eu/medias/medias.aspx?INSTANCE=EXPLOITATION&PORTAL_ID=WBCT_WBCTDOC_28.xml&SYNCMENU=INF_MED_MALRAUX" target="_blank"><strong>Malraux</strong></a></h3>
                <h1>Big brother entre réalité</br> et science-fiction</h1>
                <p id="intervenants">intervenants :<br/>
                    <a href="http://www.laquadrature.net/fr/qui-sommes-nous" target="_blank"><strong>Jérémie Zimmermann</strong></a>, co-fondateur de la Quadrature du Net<br/>
                    <a href="http://www.leo-henry.com/" target="_blank"><strong>Léo Henry</strong></a>, écrivain et auteur de science-fiction</p>
                <p class="lightital">Depuis l'origine, internet est un réseau collaboratif, un espace fragmentaire support de liberté et de diversité. Mais son évolution commerciale récente banalise les atteintes à la vie privée. Parallèlement, la surveillance informatique des états poursuit son chemin dans un contexte sécuritaire propice. Ces dérives, invisibles et techniques, noyées dans des discours rassurants, sont parfois difficiles à saisir et à prendre au sérieux.
Cette conférence se veut une occasion d’aborder ce sujet par le biais de la science-fiction d’anticipation.</p>
                <p class="boldital">Jérémie Zimmerman abordera les menaces pour la vie privée numérique dans un parallèle avec un univers de science-fiction bien connu.<br/>
Léo Henry présentera ensuite deux nouvelles originales signées par le collectif d’auteurs francophones d’anticipation <a href="http://zanzibar.zone/" target="_blank"><span>Zanzibar</span></a>.</br>
Ces deux interventions seront suivies d’une discussion entre les intervenants et la salle.</p>
                <div class="dl2">
                    <a class="dl" href="ical/10decembre-avenirsdinternet.ics">[ajouter au calendrier]</a>
                </div>
            </div>
        </div>


        <div class="marged">
            <div id="retorquer" class="boxes">
                <p>On pourrait alors rétorquer : « Ces évolutions sont certes inquiétantes, mais que puis-je donc faire en pratique pour y remédier ? »</p>
                <p class="boldital">C’est simple : n’ayez plus peur de l’eau. Pour comprendre les enjeux et voir les choses différemment, prenez le temps d’une petite plongée sous la surface…</p>
            </div>
        </div>
        <div id="nocloud" class="boxes">
            <p>Quelles données faites vous circuler sur le réseau ? Comment circulent-elles ? Chez qui résident-elles ?</p>
            <div id="cloudbloc">
                <img id="cloudimg" src="imgs/thereisnocloud.svg" alt="There is no cloud FSFE"/>
                <div id="cloudtext">
                    <h4>Démystifier l'internet</h4>
                    <p class="boldital">« There is no cloud, just other people’s computers. »</p>
                    <p class="boldital">« Le « cloud » n’existe pas, il y a seulement les ordinateurs des autres. »</p>
                </div>
            </div>
            <p id="suite">Avez-vous réellement confiance dans les personnes (Google, Apple, Free, ... autre ) qui hébergent vos données ? Si non, pourquoi ne pas les héberger vous-même… ou chez vos amis ?</p>
            <p>Et nous, en fait, on aimerait vous aider à y voir plus clair ;-).</p>
        </div>


        <div class="marged" >
            <div class="boxes">
                <img id="schema" src="imgs/schemafinal.svg" alt="schéma utopie dystopie"/>
                <div id="google">
                    <p class="schematitre">La dystopie « Google Network Inc. »</p>
                    <p class="lightital">un réseau centralisé où la surveillance de masse renforce le pouvoir de quelques uns</p>
                </div>
                <div id="internet">
                    <p class="schematitre">L’utopie d’internet</p>
                    <p class="lightital">un réseau ouvert, neutre et décentralisé où la vie privée est garantie.</p>
                </div>
                <img id="schemabar" src="imgs/schemafinal-bar.svg" alt="barre schema"/>
                <div id="aetb">
                    <p class="lightital">selon les services que vous utilisez sur internet, vous vous trouvez quelque part entre A et B...</p>
                    <p class="lightital">Mais la majorité des occidentaux semble se trouver assez proche de A !</p>
                </div>
            </div>
        </div>


        <div class="marged">
            <div class="boxes">
                <h1>Ateliers d'initiation à </br>l'auto-hébergement</h1>
                <p class="boldital">Les dimanches de 14 h à 18 h au <a href="http://www.shadok.strasbourg.eu/"><strong>Shadok</strong></a></p>
                <p class="lightital">L'auto-hébergement c'est construire son propre coin d'internet pour communiquer avec le monde sans brader sa vie privée.</p>
                <p class="boldital marginbot">Cette série d’atelier vise à faire découvrir le fonctionnement d’internet et rendre accessible l’auto-hébergement grâce à <a href="https://labriqueinter.net" target="_blank"><span>La brique internet</span></a>. Il s’agit d’un petit ordinateur à installer chez soi pour se connecter au réseau de façon sécurisée et gérer ses propres services d’email, de réseau social, de cloud, de partage multimédia, etc.</p>

                <div id="atelier">
                    <h5>17 janvier</h5>
                    <h4>Atelier 1: Les bases du fonctionnement d'internet.</h4>
                    <p>Aborder des notions fondamentales d'internet à travers des exercices pratiques et des jeux de rôle adaptés à chacun. </p>
                    <h5>31 janvier</h5>
                    <h4>Atelier 2: Plongée au coeur d'un système d'exploitation.</h4>
                    <p>Explorer un ordinateur fonctionnant avec le système d'exploitation Debian et s’initier à la ligne de commande.</p>
                    <h5>14 février</h5>
                    <h4>Atelier 3: Introduction à Yunohost et la brique internet.</h4>
                    <p>Présenter la brique internet, son installation et à passer en revue les principales possibilités offertes par un serveur <a href="http://yunohost.org" target="_blank"><span>Yunohost</span></a>.</p>
                    <h5>28 février</h5>
                    <h4>Atelier 4: Atelier à géométrie variable</h4>
                    <p>Un atelier pour apprendre à résoudre un problème sur sa brique internet et revenir sur les sessions précédentes.</p>
                </div>


                <p class="boldital">Les quatre ateliers sont indépendants et destinés à un public débutant : ils chercheront à aborder de façon transversale diverses notions importantes en informatique pour permettre aux participant de mieux se repérer dans le fonctionnement d'un serveur personnel.</br>
L'inscription aux ateliers sera ouverte à partir du 10 décembre.</p>
                <p class="boldital">Pour inscrire cette formation dans la durée, l'ensemble des contenus des ateliers ainsi que diverses ressources pour approfondir seront également mis en ligne.</p>
                <div class="dl2">
                    <a class="dl" href="ical/ateliershackstub.zip">[ajouter au calendrier]</a>
                </div>
            </div>
            <p id="here2" style="position: absolute;"></p>        
            <button type="button" class="button" onClick="displayit2()">Inscrivez-vous</br>aux ateliers !</button>
        </div>

        <div id="formulaire" class="boxes inscription">
            <form method="POST" action="index.php?id=44#here2">
                <fieldset>
                    <!-- Nom -->
                    <input class="simpleboite" type="text" name="name" maxlength="50" size="30" placeholder="[nom]" required>

                    <!-- Adresse mail -->
                    <input class="simpleboite" type="text" name="email" maxlength="80" size="30" placeholder="[adresse e-mail]" required>

                    <!-- Antispam -->
                    <div style="display: none;">
                        <label for="url">Laissez moi vide !</label>
                        <input class="simpleboite" type="text" name="url" maxlength="80" size="30">
                    </div>

                    <!-- Commentaire -->
                    <textarea class="simpleboite" name="comments" maxlength="1000" cols="30" rows="4" placeholder="[commentaires éventuels]"></textarea>

                    <!-- checkbox -->
                    <div id="checkboxbox">
                        <p class="lightital">Les ateliers sont indépendants mais il est conseillé de s'inscrire aux quatre. Le nombre de places étant limité, une liste d'attente sera mise en place et votre inscription vous sera confirmée par mail.</p>
                        <input id="checkbox1" type="checkbox" name="checkbox1" value="Yes" checked>
                        <label for="checkbox1">Atelier 1 - 17 janvier</label></br>
                        <input id="checkbox2" type="checkbox" name="checkbox2" value="Yes" checked>
                        <label for="checkbox2">Atelier 2 - 31 janvier</label></br>
                        <input id="checkbox3" type="checkbox" name="checkbox3" value="Yes" checked>
                        <label for="checkbox3">Atelier 3 - 14 février</label></br>
                        <input id="checkbox4" type="checkbox" name="checkbox4" value="Yes" checked>
                        <label for="checkbox4">Atelier 4 - 28 février</label></br>
                        <p class="lightital">Décochez les ateliers non souhaités.</p>
                    </div>

                    <!-- Submit -->
                    <button class="simpleboite submit" type="submit" name="inscrire" value="inscrire">S'inscrire</button></br>
                </fieldset>
            </form>
        </div>
        <?php
            include 'form/formHandlerAteliers.php';
        ?>

        <div class="marged">
            <div class="boxes">
                <img id="date" src="imgs/4.svg" alt="4"/>
                <h2>vendredi &ndash; 19 h </br>mars 2016</h2>
                <h3>Conférence de clôture</h3>
                <h1>Défendre et concrétiser </br>un internet utopique</h1>
                <p class="lightital">Face aux promoteurs d'un avenir technologique toujours plus indiscret et hors de contrôle, il est primordial de  défendre des alternatives.</p>
                <p class="boldital">Cette conférence sera l'occasion de faire le point sur les évènements précédents et de présenter les initiatives, locales ou non, qui s'engagent pour une autre vision de l'internet.</p>
                <p class="boldital">Le FAI associatif Alsace Réseau Neutre viendra notamment présenter comment se construit aujourd'hui un internet associatif. Plus largement, nous aborderons les solutions pour garder le controle sur ses données numériques personnelles.</p>

                <div class="dl2">
                    <a class="dl" href="ical/4mars-avenirsdinternet.ics">[ajouter au calendrier]</a>
                </div>
            </div>
        </div>


        <footer class="marged">
            <div id="footer" class="boxes">
                <p>Ces événements sont organisés par <a href="https://hackstub.netlib.re/" target="_blank"><span>Hackstub</span></a>, hackerspace à Strasbourg, en partenariat avec le <a href="http://www.shadok.strasbourg.eu/" target="_blank"><span>Shadok</span></a> centre de culture numérique de la ville de Strasbourg et le FAI associatif <a href="http://www.arn-fai.net/" target="_blank"><span>Alsace Réseau Neutre</span></a>.</p>
                <div id="zonelogos">
                    <img id="logo-hksb" class="logos" src="imgs/logos/hksb.svg" alt="hackstub-logo"/>
                    <img id="logo-arn" class="logos" src="imgs/logos/arn.svg" alt="arn-logo"/>
                    <img id="logo-shadok" class="logos" src="imgs/logos/shadok.svg" alt="logo-shadok"/>
                    <img id="logo-strasbourg" class="logos" src="imgs/logos/strasbourg.svg" alt="strasbourg-logo"/>
                    <img id="logo-lappli" class="logos" src="imgs/logos/lappli.svg" alt="lappli-logo"/>
                </div>
                <div id="z"></div>
            </div>
        </footer>
    </div>

    <script type="text/javascript">
        function displayit() {
            document.getElementById("newsletter").style.display="block";
        }
        function displayit2() {
            document.getElementById("formulaire").style.display="block";
        }
    </script>
</body>
</html>

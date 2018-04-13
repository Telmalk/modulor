<?php
session_start();

function mt_header() {
    ?>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <title>Modul'Or</title>
        <script src="TemplateData/UnityProgress.js"></script>
        <script src="Build/UnityLoader.js"></script>
    </head>
    <?php
}

function m_main() {
 ?>
<body>
    <section class="section">
        <h2 class="title">Visualiser votre élément</h2>
        <div class="unityBox">
            <div id="gameContainer" style="width: 960px; height: 600px"></div>
            <div class="howItWorks">
                <div class="mouseAndText">
                    <div class="mouseImgSize">
                        <img src="assets/img/mouse_1.png" alt="" class="mouseImg">
                    </div>
                    <p class="mouseText">selection</p>
                </div>
                <div class="mouseAndText">
                    <div class="mouseImgSize">
                        <img src="assets/img/mouse_2.png" alt="" class="mouseImg">
                    </div>
                    <p class="mouseText">Couleur</p>
                </div>
                <div class="mouseAndText">
                    <div class="mouseImgSize">
                        <img src="assets/img/mouse_3.png" alt="" class="mouseImg">
                    </div>
                    <p class="mouseText">Rotation</p>
                </div>
                <div class="mouseAndText">
                    <div class="mouseImgSize2">
                        <img src="assets/img/mouse_4.png" alt="" class="mouseImg">
                    </div>
                    <p class="mouseText2">Déplacement</p>
                </div>
                <div class="mouseAndTextBottom">
                    <div>
                        <p class="price gold">Prix: <span></span>€</p>
                        <div class="priceBtnContainer">
                            <button class="priceBtn" type="submit" name="button">valider</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div></div>
    </section>
    <section class="sectionInput">
        <form method="post" action="./assets/include/command.php">
        <input type="text" hidden="" name="BOrne" class="inputHidden">
        <input type="text" hidden="" name="Banque" class="inputHidden">
        <input type="text" hidden="" name="BanqueEnseigne" class="inputHidden">
        <input type="text" hidden="" name="Berrobi" class="inputHidden">
        <input type="text" hidden="" name="ChaiseHaute" class="inputHidden">
        <input type="text" hidden="" name="ChaiseS" class="inputHidden">
        <input type="text" hidden="" name="Ipad" class="inputHidden">
        <input type="text" hidden="" name="Kakemono" class="inputHidden">
        <input type="text" hidden="" name="Kirro" class="inputHidden">
        <input type="text" hidden="" name="LeCroise" class="inputHidden">
        <input type="text" hidden="" name="Mur" class="inputHidden">
        <input type="text" hidden="" name="MurImage" class="inputHidden">
        <input type="text" hidden="" name="MurMosaique" class="inputHidden">
        <input type="text" hidden="" name="PorteDocu" class="inputHidden">
        <input type="text" hidden="" name="PorteDocuOri" class="inputHidden">
        <input type="text" hidden="" name="Tables" class="inputHidden">
        <input type="text" hidden="" name="TotemImage" class="inputHidden">
        <input type="text" hidden="" name="Victorio" class="inputHidden">
        <input type="text" hidden="" name="price" class="inputHidden">
            <div class="priceBtnContainer">
                <button class="priceBtn" type="submit" name="button">valider</button>
            </div>
        </form>
    </section>

<?php
}

function m_header($conn)
{
    if ($_SESSION["log"] == true) {
        $userName = "
        SELECT
            user_name
        FROM
          users
        WHERE
          id_user = :userId;
    ;";
        $stmt = $conn->prepare($userName);
        $stmt->bindValue(":userId", $_SESSION['user']['id']);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <title>Modul'Or</title>
    </head>
<body>
    <header class="header">
        <div class="headerLogo">
            <a href="./index.php">
                <img src="assets/img/Logo.png" alt="">
            </a>
        </div>
        <div class="headerTitle">
            <h1>Modul<span class="gold">or</span></h1>
        </div>
        <div class="burgerMenu <?php if($_SESSION["log"] == true) : ?>gold<?php endif; ?>">
            <div>
                <i class="fas fa-user-circle userImg"></i>
            </div>
            <div class="loginOverlay">
                <?php if($_SESSION["log"] == true) : ?>
                <div class="isConnected">
                    <p href="./assets/include/viewCommand.php" class="helloworld">Bonjour <span><?=$row["user_name"]?></span></p>
                    <a href="viewCommand.php"><p class="helloworld">Mes commandes</p></a>
                    <div class="helloworld">
                        <a href="./assets/include/logout.php"><button class="loginSubmitBtn" type="submit" name="button">déconnection</button></a>
                    </div>
                </div>
                <?php else : ?>
                <form action="./assets/include/doLogin.php" method="post">
                    <div class="loginContainer">
                        <input type="text" placeholder="Nom d'utilisateur" class="loginEmailInput" name="name">
                    </div>
                    <div class="loginContainer">
                        <input type="password" placeholder="Mot De Passe" class="loginPasswordInput" name="password">
                    </div>
                    <div class="loginContainer2">
                        <button type="submit" name="button" class="loginSubmitBtn">connexion</button>
                    </div>
                    <p class="subscribe">Pas encore inscrit ?</p>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </header>
    <?php

}

function mt_main()
{
    ?>
    <nav class="navMenu">
        <ul class="navList">
            <li class="navItem">Accueil</li>
            <li class="navItem">Biographie</li>
            <li class="navItem">Achat</li>
            <li class="navItem">contact</li>
        </ul>
        <div class="navDots">
            <ul class="navDotsList">
                <li class="navDotsItem dot-isActive"></li>
                <li class="navLineItem"></li>
                <li class="navDotsItem"></li>
                <li class="navLineItem"></li>
                <li class="navDotsItem"></li>
                <li class="navLineItem"></li>
                <li class="navDotsItem"></li>
            </ul>
        </div>
    </nav>

    <section class="section-1" id="section-1">
        <div class="videoContainer">
            <video class="video" src="" autoplay loop ></video>
            <a href="./page-Unity.php" class="discover">créer votre propre stand</a>
        </div>

        <div class="scrollBtn">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>
    <section class="section" id="section-2">
        <h2 class="title">Parlons de nous</h2>
        <div class="center">
            <p class="about">
                Nous sommes Modulor nous intervenons sur tout types de salons grands public, congrès, expositions et évènements. Grâce à notre configurateur de stand laisser libre cours à votre imagination en personnalisant votre stand en direct pour un réel aperçu de votre produit, c’est votre imagination, votre création, votre stand…
            </p>
        </div>
        <div class="btn">
            <a class="btn-link" href="page-create.html">nos créations</a>
        </div>
        <div class="decoration">
            <div class="decorationline"></div>
            <div class="decorationline"></div>
            <div class="decorationline"></div>
            <div class="decorationline"></div>
        </div>
    </section>
    <section class="section" id="section-3">
        <h2 class="title">Achetez des éléments à l'unité</h2>
        <div class="inline-flex">
            <div class="parts">
                <div class="partsImg-size">
                    <img src="assets/img/Grande_Chaise.png" alt="" class="partsImg">
                </div>
                <p class="partsText">accessoires</p>
            </div>
            <div class="parts">
                <div class="partsImg-size">
                    <img src="assets/img/Totem.png" alt="" class="partsImg">
                </div>
                <p class="partsText">totem</p>
            </div>
            <div class="parts">
                <div class="partsImg-size">
                    <img src="assets/img/Kirro.png" alt="" class="partsImg">
                </div>
                <p class="partsText">Oriflammes</p>
            </div>
        </div>
        <div class="btn">
            <a class="btn-link" href="">voir les éléments en 3D</a>
        </div>

        <div class="decoration diamonds">
            <div class="decorationDiamond"></div>
            <div class="decorationDiamond"></div>
            <div class="decorationDiamond"></div>
        </div>
    </section>

    <section class="section" id="section-4">
        <h2 class="title">Nous contacter</h2>
        <div class="inline-flex">
            <div class="contactText">
                <p>lorem ipsum Accedebant enim eius asperitati, ubi inminuta vel laesa amplitudo imperii dicebatur, et iracundae suspicionum quantitati proximorum cruentae blanditiae exaggerantium incidentia et dolere inpendio simulantium, si principis periclitetur vita.</p>
            </div>
            <div class="contactForm">
                <form action="">
                    <div>
                        <input class="input inputTop" type="text" name="name" placeholder="Name">
                        <input class="input inputTop" type="email" placeholder="E-mail">
                    </div>
                    <div class="">
                        <input class="input inputBottom" type="text" name="" placeholder="Message">
                    </div>
                    <div class="inputBtnContainer">
                        <button class="inputBtn" type="submit" name="button">envoyer</button>
                    </div>
                </form>
            </div>
        </div>
        <div></div>
    </section>
    <?php
}

function mt_footer()
{
    ?>

    <footer class="footerColor">
        <div class="footer">
            <div class="footerLogo">
                <div class="footerLogoSize">
                    <img class="footerLogoImg" src="assets/img/logoWhite.png">
                </div>
                <h4 class="footerLogoTitle">Modul <span class="gold">or</span></h4>
            </div>
            <div class="footerJoinUs">
                <h4 class="footerJoinTitle gold">rejoins-nous:</h4>
                <input class="footerInput" type="email" placeholder="e-mail">
                <div class="footerIcons">
                    <i class="fab fa-twitter footerIcon"></i>
                    <i class="fab fa-instagram footerIcon"></i>
                    <i class="fab fa-facebook-f footerIcon"></i>
                </div>
            </div>
            <div class="footerFindUs">
                <h4 class="footerFindTitle gold">nous trouver:</h4>
                <p class="footerFindText">69 rue padidé 75000, Paris</p>
                <p class="footerFindText">tel: 06 12 69 69 69</p>
                <p class="footerFindText">Mail: modulor@mail.com</p>
            </div>
            <div class="footerUnityImg">
                <div class="footerUnitySize">
                    <img src="assets/img/unity-logo-white.png" alt="" class="UnityImgFooter">
                </div>
            </div>
        </div>
    </footer>


    <script src="assets/js/main.js"></script>
    </body>
    </html>

    <?php

}

function m_footer() {
    ?>
    <script src="./assets/js/unity.js"></script>
    </body>
    </html>
<?php
}

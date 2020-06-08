<body>
    <!---------- Lancement de script permettant l'affichage de la flèche pour remonter ---------->
    <script src="app/public/js/arrowTop.js"></script>
    <!--++++++++ Header ++++++++-->
    <header>
        <div class="topBackground">
            <div class="topContainer">
                <div class="mainMenu">
                    <!-- Création du menu de gauche -->
                    <nav class="topMenuLeft">
                        <!-- Création du Menu Burger pour Mobile -->
                        <input type="checkbox" id="menuMobile" role="button">
                        <label for="menuMobile" class="menuMobile">
                            <!-- Création de l'image du menu burger en svg -->                           
                            <svg viewBox="0 0 100 80" width="40" height="40">
                                <g color="#79ad09">
                                <rect width="100" height="15" fill="currentColor"></rect>
                                <rect y="30" width="100" height="15" fill="currentColor"></rect>
                                <rect y="60" width="100" height="15" fill="currentColor"></rect>
                                </g>
                            </svg>
                        </label>
                        <ul id="topMenuActive">
                            <li><a class="nav-item active" href="index.php">Home</a></li>
                            <li><a class="nav-item" href="index.php?action=news">News</a></li>
                            <li><a class="nav-item" href="index.php?action=team">Team</a></li>
                            <li><a class="nav-item" href="index.php?action=about">About-Us</a></li>
                            <li><a class="nav-item" href="index.php?action=contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Intégration du logo -->
                <a href="index.php"><img src="app/public/images/panda-logo.png" alt="Logo Panda" title="Logo Panda"></a>
                <!-- Création du menu de droite -->
                <div class="login">
                    <nav class="topMenuRight">
                        <ul>
                            <li><a class="nav-item" href="index.php?action=login">Login</a></li>
                            <li><a class="nav-item" href="index.php?action=inscription">Inscription</a></li>
                            <li><a class="nav-item" href="#">Admin</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Création de la flèche pour remonter -->
        <div id='arrowTop'>
            <img src="app\public\images\arrow.png" alt="Arrow-Top">
        </div>
    </header>
    <!--++++++++ Header (END) ++++++++-->
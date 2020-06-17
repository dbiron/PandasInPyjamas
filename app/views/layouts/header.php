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
                            <li><a title="Page d'accueil" class="nav-item active" href="index.php">Home</a></li>
                            <li><a title="Page des News" class="nav-item" href="news">News</a></li>
                            <li><a title="Page de la Team" class="nav-item" href="team">Team</a></li>
                            <li><a title="A propos de nous" class="nav-item" href="about">About-Us</a></li>
                            <li><a title="Page de Contact" class="nav-item" href="contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Intégration du logo -->
                <a title="Page d'accueil" href="index.php"><img src="app/public/images/panda-logo.png" alt="Logo Panda" title="Logo Panda"></a>
                <!-- Création du menu de droite -->
                <div class="login">
                    <nav class="topMenuRight">
                        <ul>
                            <?php
                            if (isset($_SESSION['user'])) :
                            ?>
                            <li><a title="Déconnexion espace membre" class="nav-item" href="deconnexion">Déconnexion</a></li>
                            <li><a title="Page compte membre" class="nav-item" href="compte">Mon-Compte</a></li>
                            <?php
                            else :
                            ?>
                            <li><a title="Connexion espace membre" class="nav-item" href="login">Login</a></li>
                            <li><a title="Inscription espace membre" class="nav-item" href="inscription">Inscription</a></li>
                            <?php
                            endif
                            ?>
                            <?php
                            if (isset($_SESSION['admin'])) :
                            ?>
                            <li><a title="Panel Administration du site" class="nav-item" href="admin.php?action=panelAdmin">Panel-Admin</a></li>
                            <li><a title="Deconnexion Administration du site" class="nav-item" href="admin.php?action=logout">Admin-Logout</a></li>
                            <?php
                            else :
                            ?>
                            <li><a title="Connexion Administration du site" class="nav-item" href="admin.php?action=admin">Admin</a></li>
                            <?php
                            endif
                            ?>
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
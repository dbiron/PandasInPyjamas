<body>
    <!---------- Header ---------->
    <header>
        <div class="topBackground">
            <div class="topContainer">
                <div class="mainMenu">
                    <nav class="topMenu">
                        <!-- Création du Menu Burger pour Mobile -->
                        <input type="checkbox" id="menuMobile" role="button">
                        <label for="menuMobile" class="menuMobile">
                            <figure class="burger"><img src="app/public/images/menu.png" alt="Icone Burger" title="Icone Burger">
                            </figure>
                        </label>
                        <ul id="topMenuActive">
                            <li><a class="nav-item" href="index.php">Home</a></li>
                            <li><a class="nav-item" href="index.php?action=news">News</a></li>
                            <li><a class="nav-item" href="index.php?action=team">Team</a></li>
                            <li><a class="nav-item" href="index.php?action=about">About-Us</a></li>
                            <li><a class="nav-item" href="index.php?action=contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <a href="home.php"><img src="app/public/images/panda-logo.png" alt="Logo Panda" title="Logo Panda"></a>
                <div class="login">
                    <a href="login.php">Login</a>
                </div>
            </div>
        </div>
    </header>
    <!--++++++++ Header (END) ++++++++-->
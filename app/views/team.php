<?php
include 'layouts/head.php';
include 'layouts/header.php';
?>

<main class="content">
    <!---------- Banner Team ---------->
    <section>
        <div class="bannerTeam">
            <div class="bannerTeamFilter">
                <h1>TEAM<br><span>Apprenez à connaitre nos joueurs et visionnez leurs stats en temps réel</span></h1>
            </div>
        </div>    
    </section>
    <!---------- Section Team ---------->
    <section id="team">
        <!---------- 1er Membre de la team (RUSH) ---------->
        <article class="teamBloc">
            <div class="teamCard">
                <figure class="playerThumb">
                    <a href="#"><img src="app/public/images/rush.jpeg" alt="photo player Rush" title="photo player Rush"></a>
                </figure>
                <div class="playerContent">
                    <h2>Rush</h2>
                    <h3>Will Wierzba</h3>
                    <p>Titulaire</p>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Kills</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="rushTK"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Death</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="rushTD"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Planted Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="rushTPB"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Defused Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="rushTDB"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total MVP</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="rushMVP"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Won</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="rushTMW"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Played</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="rushTMP"></p>
                    </div>
                </div>
            </div>
        </article>
        <!---------- 2ème Membre de la team () ---------->
        <article class="teamBloc">
            <div class="teamCard">
                <figure class="playerThumb">
                    <a href="#"><img src="app/public/images/mouz.jpeg" alt="photo player mouz" title="photo player mouz"></a>
                </figure>
                <div class="playerContent">
                    <h2>mouz</h2>
                    <h3>Mikołaj Karolewski</h3>
                    <p>Titulaire</p>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Kills</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="mouzTK"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Death</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="mouzTD"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Planted Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="mouzTPB"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Defused Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="mouzTDB"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total MVP</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="mouzMVP"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Won</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="mouzTMW"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Played</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="mouzTMP"></p>
                    </div>
                </div>
            </div>
        </article>

        <!---------- 3ème Membre de la team () ---------->
        <!---------- 4ème Membre de la team () ---------->
        <!---------- 5ème Membre de la team () ---------->
        <!---------- 6ème Membre de la team () ---------->
    </section>
</main>
<script src="app/public/js/apiSteam.js"></script>
<?php
include 'layouts/footer.php';
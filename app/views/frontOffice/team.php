<!---------- Appel du Head et du Header ---------->
<?php
include 'app/views/layouts/head.php';
include 'app/views/layouts/header.php';
?>

<main class="content">
    <!---------- Banner Team ---------->
    <section class="banner">
        <img src="app/public/images/map-dust2.png" alt="Banniere dust2 about" title="Banniere dust2 about">
        <div class="bannerFilter">
            <h1>TEAM<br><span>Apprenez à connaitre nos joueurs et visionnez leurs stats en temps réel</span></h1>
        </div>
    </section>
    <!---------- Section Team ---------->
    <section id="team">
        <!---------- 1er Membre de la team (RUSH) ---------->
        <article class="teamBloc">
            <div class="teamCard">
                <figure class="playerThumb">
                    <img src="app/public/images/rush.jpeg" alt="photo player Rush" title="photo player Rush">
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
                        <p id="rush_total_kills"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Death</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="rush_total_deaths"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Planted Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="rush_total_planted_bombs"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Defused Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="rush_total_defused_bombs"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total MVP</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="rush_total_mvps"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Won</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="rush_total_matches_won"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Played</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="rush_total_matches_played"></p>
                    </div>
                </div>
            </div>
        </article>
        <!---------- 2ème Membre de la team (MOUZ) ---------->
        <article class="teamBloc">
            <div class="teamCard">
                <figure class="playerThumb">
                    <img src="app/public/images/mouz.jpeg" alt="photo player mouz" title="photo player mouz">
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
                        <p id="mouz_total_kills"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Death</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="mouz_total_deaths"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Planted Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="mouz_total_planted_bombs"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Defused Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="mouz_total_defused_bombs"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total MVP</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="mouz_total_mvps"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Won</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="mouz_total_matches_won"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Played</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="mouz_total_matches_played"></p>
                    </div>
                </div>
            </div>
        </article>
        <!---------- 3ème Membre de la team (DUPREEH) ---------->
        <article class="teamBloc">
            <div class="teamCard">
                <figure class="playerThumb">
                    <img src="app/public/images/dupreeh.jpeg" alt="photo player dupreeh" title="photo player dupreeh">
                </figure>
                <div class="playerContent">
                    <h2>dupreeh</h2>
                    <h3>Peter Rasmussen</h3>
                    <p>Titulaire</p>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Kills</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="dupreeh_total_kills"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Death</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="dupreeh_total_deaths"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Planted Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="dupreeh_total_planted_bombs"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Defused Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="dupreeh_total_defused_bombs"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total MVP</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="dupreeh_total_mvps"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Won</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="dupreeh_total_matches_won"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Played</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="dupreeh_total_matches_played"></p>
                    </div>
                </div>
            </div>
        </article>
        <!---------- 4ème Membre de la team (DEADFOX) ---------->
        <article class="teamBloc">
            <div class="teamCard">
                <figure class="playerThumb">
                    <img src="app/public/images/deadfox.jpeg" alt="photo player deadfox" title="photo player deadfox">
                </figure>
                <div class="playerContent">
                    <h2>deadfox</h2>
                    <h3>Bence Böröcz</h3>
                    <p>Titulaire</p>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Kills</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="deadfox_total_kills"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Death</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="deadfox_total_deaths"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Planted Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="deadfox_total_planted_bombs"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Defused Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="deadfox_total_defused_bombs"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total MVP</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="deadfox_total_mvps"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Won</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="deadfox_total_matches_won"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Played</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="deadfox_total_matches_played"></p>
                    </div>
                </div>
            </div>
        </article>
        <!---------- 5ème Membre de la team (SUMER) ---------->
        <article class="teamBloc">
            <div class="teamCard">
                <figure class="playerThumb">
                    <img src="app/public/images/summer.png" alt="photo player summer" title="photo player summer">
                </figure>
                <div class="playerContent">
                    <h2>Summer</h2>
                    <h3>YuLun Cai</h3>
                    <p>Titulaire</p>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Kills</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="summer_total_kills"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Death</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="summer_total_deaths"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Planted Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="summer_total_planted_bombs"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Defused Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="summer_total_defused_bombs"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total MVP</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="summer_total_mvps"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Won</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="summer_total_matches_won"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Played</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="summer_total_matches_played"></p>
                    </div>
                </div>
            </div>
        </article>
        <!---------- 6ème Membre de la team (FLUSHA) ---------->
        <article class="teamBloc">
            <div class="teamCard">
                <figure class="playerThumb">
                    <img src="app/public/images/flusha.jpeg" alt="photo player flusha" title="photo player flusha">
                </figure>
                <div class="playerContent">
                    <h2>flusha</h2>
                    <h3>Robin Rönnquist</h3>
                    <p>Remplaçant</p>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Kills</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="flusha_total_kills"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Death</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="flusha_total_deaths"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Planted Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="flusha_total_planted_bombs"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Defused Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="flusha_total_defused_bombs"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total MVP</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="flusha_total_mvps"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Won</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="flusha_total_matches_won"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Played</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="flusha_total_matches_played"></p>
                    </div>
                </div>
            </div>
        </article>
    </section>
</main>

<!---------- Appel du Script pour l'api gérant les stats des joueurs ---------->
<script src="app/public/js/apiSteam.js"></script>

<!---------- Appel du Footer ---------->
<?php
include 'app/views/layouts/footer.php';
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
        <!---------- 2ème Membre de la team (MOUZ) ---------->
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
        <!---------- 3ème Membre de la team (DUPREEH) ---------->
        <article class="teamBloc">
            <div class="teamCard">
                <figure class="playerThumb">
                    <a href="#"><img src="app/public/images/dupreeh.jpeg" alt="photo player dupreeh" title="photo player dupreeh"></a>
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
                        <p id="dupreehTK"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Death</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="dupreehTD"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Planted Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="dupreehTPB"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Defused Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="dupreehTDB"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total MVP</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="dupreehMVP"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Won</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="dupreehTMW"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Played</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="dupreehTMP"></p>
                    </div>
                </div>
            </div>
        </article>
        <!---------- 4ème Membre de la team (DEADFOX) ---------->
        <article class="teamBloc">
            <div class="teamCard">
                <figure class="playerThumb">
                    <a href="#"><img src="app/public/images/deadfox.jpeg" alt="photo player deadfox" title="photo player deadfox"></a>
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
                        <p id="deadfoxTK"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Death</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="deadfoxTD"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Planted Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="deadfoxTPB"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Defused Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="deadfoxTDB"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total MVP</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="deadfoxMVP"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Won</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="deadfoxTMW"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Played</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="deadfoxTMP"></p>
                    </div>
                </div>
            </div>
        </article>
        <!---------- 5ème Membre de la team (CAJUNB) ---------->
        <article class="teamBloc">
            <div class="teamCard">
                <figure class="playerThumb">
                    <a href="#"><img src="app/public/images/cajunb.jpeg" alt="photo player cajunb" title="photo player cajunb"></a>
                </figure>
                <div class="playerContent">
                    <h2>cajunb</h2>
                    <h3>René Borg</h3>
                    <p>Titulaire</p>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Kills</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="cajunbTK"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Death</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="cajunbTD"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Planted Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="cajunbTPB"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Defused Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="cajunbTDB"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total MVP</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="cajunbMVP"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Won</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="cajunbTMW"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Played</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="cajunbTMP"></p>
                    </div>
                </div>
            </div>
        </article>
        <!---------- 6ème Membre de la team (FLUSHA) ---------->
        <article class="teamBloc">
            <div class="teamCard">
                <figure class="playerThumb">
                    <a href="#"><img src="app/public/images/flusha.jpeg" alt="photo player flusha" title="photo player flusha"></a>
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
                        <p id="flushaTK"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Death</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="flushaTD"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Planted Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="flushaTPB"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Defused Bombs</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="flushaTDB"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total MVP</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="flushaMVP"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Won</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="flushaTMW"></p>
                    </div>
                </div>
                <div class="playerStats">
                    <div class="playerStatsName">
                        <h3>Total Matches Played</h3>
                    </div>
                    <div class="playerStatsNumber">
                        <p id="flushaTMP"></p>
                    </div>
                </div>
            </div>
        </article>
    </section>
</main>
<script src="app/public/js/apiSteam.js"></script>
<?php
include 'layouts/footer.php';
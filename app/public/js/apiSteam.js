fetch("http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=730&key=477F61C7E69CBEA6CB680DC7E036CA31&steamid=76561198023592320").then(function(response){
    return response.json()
}).then(function (json){

    let rushTK = document.getElementById('rushTK');
    rushTK.innerText = json.playerstats.stats[0].value;

    let rushTD = document.getElementById('rushTD');
    rushTD.innerText = json.playerstats.stats[1].value;

    let rushTPB = document.getElementById('rushTPB');
    rushTPB.innerText = json.playerstats.stats[3].value;

    let rushTDB = document.getElementById('rushTDB');
    rushTDB.innerText = json.playerstats.stats[4].value;

    let rushMVP = document.getElementById('rushMVP');
    rushMVP.innerText = json.playerstats.stats[102].value;

    let rushTMW = document.getElementById('rushTMW');
    rushTMW.innerText = json.playerstats.stats[123].value;

    let rushTMP = document.getElementById('rushTMP');
    rushTMP.innerText = json.playerstats.stats[124].value;

});

fetch("http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=730&key=477F61C7E69CBEA6CB680DC7E036CA31&steamid=76561197998730533").then(function(response){
    return response.json()
}).then(function (json){

    let mouzTK = document.getElementById('mouzTK');
    mouzTK.innerText = json.playerstats.stats[0].value;

    let mouzTD = document.getElementById('mouzTD');
    mouzTD.innerText = json.playerstats.stats[1].value;

    let mouzTPB = document.getElementById('mouzTPB');
    mouzTPB.innerText = json.playerstats.stats[3].value;

    let mouzTDB = document.getElementById('mouzTDB');
    mouzTDB.innerText = json.playerstats.stats[4].value;

    let mouzMVP = document.getElementById('mouzMVP');
    mouzMVP.innerText = json.playerstats.stats[102].value;

    let mouzTMW = document.getElementById('mouzTMW');
    mouzTMW.innerText = json.playerstats.stats[123].value;

    let mouzTMP = document.getElementById('mouzTMP');
    mouzTMP.innerText = json.playerstats.stats[124].value;

});
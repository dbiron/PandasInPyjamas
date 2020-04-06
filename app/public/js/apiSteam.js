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
    mouzMVP.innerText = json.playerstats.stats[100].value;

    let mouzTMW = document.getElementById('mouzTMW');
    mouzTMW.innerText = json.playerstats.stats[118].value;

    let mouzTMP = document.getElementById('mouzTMP');
    mouzTMP.innerText = json.playerstats.stats[119].value;

});

fetch("http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=730&key=477F61C7E69CBEA6CB680DC7E036CA31&steamid=76561198004854956").then(function(response){
    return response.json()
}).then(function (json){

    let dupreehTK = document.getElementById('dupreehTK');
    dupreehTK.innerText = json.playerstats.stats[0].value;

    let dupreehTD = document.getElementById('dupreehTD');
    dupreehTD.innerText = json.playerstats.stats[1].value;

    let dupreehTPB = document.getElementById('dupreehTPB');
    dupreehTPB.innerText = json.playerstats.stats[3].value;

    let dupreehTDB = document.getElementById('dupreehTDB');
    dupreehTDB.innerText = json.playerstats.stats[4].value;

    let dupreehMVP = document.getElementById('dupreehMVP');
    dupreehMVP.innerText = json.playerstats.stats[103].value;

    let dupreehTMW = document.getElementById('dupreehTMW');
    dupreehTMW.innerText = json.playerstats.stats[124].value;

    let dupreehTMP = document.getElementById('dupreehTMP');
    dupreehTMP.innerText = json.playerstats.stats[125].value;

});

fetch("http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=730&key=477F61C7E69CBEA6CB680DC7E036CA31&steamid=76561197989604320").then(function(response){
    return response.json()
}).then(function (json){

    let deadfoxTK = document.getElementById('deadfoxTK');
    deadfoxTK.innerText = json.playerstats.stats[0].value;

    let deadfoxTD = document.getElementById('deadfoxTD');
    deadfoxTD.innerText = json.playerstats.stats[1].value;

    let deadfoxTPB = document.getElementById('deadfoxTPB');
    deadfoxTPB.innerText = json.playerstats.stats[3].value;

    let deadfoxTDB = document.getElementById('deadfoxTDB');
    deadfoxTDB.innerText = json.playerstats.stats[4].value;

    let deadfoxMVP = document.getElementById('deadfoxMVP');
    deadfoxMVP.innerText = json.playerstats.stats[102].value;

    let deadfoxTMW = document.getElementById('deadfoxTMW');
    deadfoxTMW.innerText = json.playerstats.stats[127].value;

    let deadfoxTMP = document.getElementById('deadfoxTMP');
    deadfoxTMP.innerText = json.playerstats.stats[128].value;

});

fetch("http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=730&key=477F61C7E69CBEA6CB680DC7E036CA31&steamid=76561197978328043").then(function(response){
    return response.json()
}).then(function (json){

    let cajunbTK = document.getElementById('cajunbTK');
    cajunbTK.innerText = json.playerstats.stats[0].value;

    let cajunbTD = document.getElementById('cajunbTD');
    cajunbTD.innerText = json.playerstats.stats[1].value;

    let cajunbTPB = document.getElementById('cajunbTPB');
    cajunbTPB.innerText = json.playerstats.stats[3].value;

    let cajunbTDB = document.getElementById('cajunbTDB');
    cajunbTDB.innerText = json.playerstats.stats[4].value;

    let cajunbMVP = document.getElementById('cajunbMVP');
    cajunbMVP.innerText = json.playerstats.stats[101].value;

    let cajunbTMW = document.getElementById('cajunbTMW');
    cajunbTMW.innerText = json.playerstats.stats[118].value;

    let cajunbTMP = document.getElementById('cajunbTMP');
    cajunbTMP.innerText = json.playerstats.stats[119].value;

});

fetch("http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=730&key=477F61C7E69CBEA6CB680DC7E036CA31&steamid=76561197991348083").then(function(response){
    return response.json()
}).then(function (json){

    let flushaTK = document.getElementById('flushaTK');
    flushaTK.innerText = json.playerstats.stats[0].value;

    let flushaTD = document.getElementById('flushaTD');
    flushaTD.innerText = json.playerstats.stats[1].value;

    let flushaTPB = document.getElementById('flushaTPB');
    flushaTPB.innerText = json.playerstats.stats[3].value;

    let flushaTDB = document.getElementById('flushaTDB');
    flushaTDB.innerText = json.playerstats.stats[4].value;

    let flushaMVP = document.getElementById('flushaMVP');
    flushaMVP.innerText = json.playerstats.stats[103].value;

    let flushaTMW = document.getElementById('flushaTMW');
    flushaTMW.innerText = json.playerstats.stats[120].value;

    let flushaTMP = document.getElementById('flushaTMP');
    flushaTMP.innerText = json.playerstats.stats[121].value;

});
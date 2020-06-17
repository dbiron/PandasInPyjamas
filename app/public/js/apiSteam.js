[
    { 
        name: "rush", 
        id: "76561198023592320"
    },
    { 
        name: "mouz", 
        id: "76561197998730533"
    },
    { 
        name: "dupreeh", 
        id: "76561198004854956"
    },
    { 
        name: "deadfox", 
        id: "76561197989604320"
    },
    { 
        name: "cajunb", 
        id: "76561197978328043"
    },
    { 
        name: "flusha", 
        id: "76561197991348083"
    }
]
    
    .forEach(function (player) {

    fetch(`https://cors-anywhere.herokuapp.com/https://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=730&key=B03A5F126F2C7EE03B27B6038B1CBC9E&steamid=${player.id}`).then(function(response){
        return response.json()
    }).then(function (json){

        let props = ["total_kills", "total_deaths", "total_planted_bombs", "total_defused_bombs", "total_mvps", "total_matches_won", "total_matches_played"];

        json.playerstats.stats.forEach(function(data) {
            
            if(props.includes(data.name)) {
                let selection = document.getElementById(`${player.name}_${data.name}`);
                
                selection.innerText = `${data.value}`;
            }
        });
    });
});
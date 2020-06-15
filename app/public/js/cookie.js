// Fonction permettant d'afficher la barre de cookie avec un "localstorage"
(function() {
    // On cherche si un cookie existe en localstore afin d'afficher la div ou non avec la validation cookie
	if (!localStorage.getItem('cookie')) {
        // Création de la div permettant l'affichage du texte et la validation
		document.body.innerHTML += '\
		<div class="cookie">\
            <p>Notre site utilise des cookies.</p>\
            <p>En poursuivant votre navigation sur notre site, vous en acceptez l’utilisation.</p>\
            <a href="#">Je comprends</a>\
		</div>\
        ';
        // Au clic sur le lien on fait disparaitre la div
        // Et on place un cookie dans le localstorage 
		document.querySelector('.cookie a').onclick = function(e) {
			e.preventDefault();
			document.querySelector('.cookie').style.display = 'none';
			localStorage.setItem('cookie', true);
		};
	}
})();
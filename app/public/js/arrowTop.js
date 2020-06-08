$(document).ready(function() {

    // On verifie le click pour lancer l'animation de remonté en 'slow'
    $('#arrowTop').click( function() {
        $('html,body').animate({scrollTop: 0}, 'slow');
    });
        
    $(window).scroll(function() {
    // Si on est à moins de 400px du haut l'arrow est en fadeOut
        if ( $(window).scrollTop() < 400 )
            $('#arrowTop').fadeOut();
    // Si on est à plus de 400px du haut l'arrow est en fadeIn
        else
            $('#arrowTop').fadeIn();
    });
});
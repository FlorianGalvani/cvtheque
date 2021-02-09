function doAjaxRequest() {
    (function($) {
              $.ajax({
                url: ajaxurl,
                type: "POST",
                data: {
                  'action': 'load_comments',
                  'post': post_id
                },
                error:function(response) {
                    console.log(response);
                }
              }).done(function(response) {
                $('.comments').html(response); // Afficher le HTML
                $('.comments-load-button').hide(); // Cacher le bouton
              });
          });
}
$(document).ready(function () {
    $('#form_1').submit(function (e) {
        e.preventDefault();
        var candidate_info = {
            nom: $('#nom').val(),
            prenom: $('#prenom').val(),
            naissance: $('#naissance').val(),
            adresse: $('#adresse').val(),
            telephone: $('#telephone').val(),
            permis: $('#permis').val()
        }
        doAjaxRequest();
    });
});



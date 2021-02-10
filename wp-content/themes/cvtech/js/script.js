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
        $.ajax({
          url: ajaxurl['ajax_url'],
          type: "POST",
          data: {
            'action': 'candidate_info',
            'candidate_info': candidate_info
          },
          dataType: 'json',
          success: function (response) {
            console.log(response)
            if (response['success'] == true) {
              
            } else {
              
            }

          },
          error: function (response) {
          }
        })
    });
});



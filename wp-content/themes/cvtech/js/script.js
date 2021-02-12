function check_form(success, errors) {
  
  // if (success == true) {
  //   $('.form_candidat_div_1').fadeOut();
  //   $('.form_candidat_div_2').fadeIn();
  // } else {
  //   $('#error_form_1').html('Des erreurs ont été detectées ')
  // }
}
function next_form(params) {
    
  $('#form_candidat_loading').css('display', 'none')
}

$(document).ready(function () {
  $('#form_1').submit(function (e) {
    e.preventDefault();
    var candidate_info = {
      nom: $('#nom').val(),
      prenom: $('#prenom').val(),
      naissance: $('#naissance').val(),
      adresse: $('#adresse').val(),
      email: $('#email').val(),
      telephone: $('#telephone').val(),
      permis: $('#permis').val()
    }
    $.ajax({
      url: ajaxurl['ajax_url'],
      type: "POST",
      data: {
        'action': 'candidate_info',
        'info': candidate_info
      },
      dataType: 'json',
      beforeSend: function () {
        $('.form_div').css('display', 'none');
        $('#form_candidat_loading').css('display', 'block');
      },
      success: function (response) {
        $('#form_candidat_loading').css('display', 'none')
        ajax_errors_check(response['success'],response['errors']);
      },
      error: function (response) {
      }
    })
  });
});





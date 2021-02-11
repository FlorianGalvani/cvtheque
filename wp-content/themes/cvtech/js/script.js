function ajax_errors_check(success, errors) {
  if (success == true) {
    console.log('success true !')
    $('.form_candidat_div_1').fadeOut();
    $('.form_candidat_div_2').fadeIn();
  } else {
    $('#error_form_1').html('Des erreurs ont été detectées ')
  }
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

      },
      success: function (response) {
        console.log(response)
        ajax_errors_check(response['success'],response['errors']);
      },
      error: function (response) {
        console.log(response)
      }
    })
  });
});





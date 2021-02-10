function ajax_errors_check(success, errors) {
  if (success == true) {
    $('#form_candidat_div_1').css('display','none');
    $('#form_candidat_div_2').css('display','block');
  } else {
    for (const [key, value] of Object.entries(errors)) {
      console.log(key, value);

    }
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
      success: function (response) {
        ajax_errors_check(response['success'],response['errors']);
      }
    })
  });
});





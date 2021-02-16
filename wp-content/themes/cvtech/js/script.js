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
      metier: $('#metier').val(),
      ville: $('#ville').val(),
      naissance: $('#naissance').val(),
      address: $('#adresse').val(),
      email: $('#email').val(),
      telephone: $('#phone').val(),
      //permis: $('#permis').val()
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
        $('#form_candidat_loading').css('display', 'none');
        ajax_errors_check(response['success'],response['errors']);
      },
      error: function (response) {
      }
    })
  });
});


// Tableau Cv recruteur
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();

// hover btn voir espace recruteur


$('#see').hover(function() {
  $( '#eye' ).css('display','inline');
  $("#see").css('display','none');
  $("#eye").on('mouseout', function(){
    $("#eye").css('display','none');
    $("#see").css('display','inline');
  });
})


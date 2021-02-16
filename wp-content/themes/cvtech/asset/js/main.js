$(document).ready(function () {


    // BTN FORMULAIRE NEXT
    $('#submitted-form_1').on('click', function (e) {
        e.preventDefault();

        $('#form_1').css('display', 'none');
        $('#list-experience').css('display', 'block');
        $('.prog2').css('backgroundColor', 'lightblue');
    })
    $('#next-exp').on('click', function (e) {
        e.preventDefault();

        $('#list-experience').css('display', 'none');
        $('#list-formation').css('display', 'block');
        $('.prog3').css('backgroundColor', 'lightblue');
    })
    $('#next-dip').on('click', function (e) {
        e.preventDefault();

        $('#list-formation').css('display', 'none');
        $('#comp-langue').css('display', 'flex');
        $('.prog4').css('backgroundColor', 'lightblue');
    })

    // BTN FORMULAIRE PREV
    $('#prev-exp').on('click', function (e) {
        e.preventDefault();

        $('#list-experience').css('display', 'none');
        $('#form_1').css('display', 'flex');
        $('.prog2').css('backgroundColor', 'pink');
    })
    $('#prev-dip').on('click', function (e) {
        e.preventDefault();

        $('#list-formation').css('display', 'none');
        $('#list-experience').css('display', 'block');
        $('.prog3').css('backgroundColor', 'pink');
    })
    $('#prev-cl').on('click', function (e) {
        e.preventDefault();

        $('#list-formation').css('display', 'none');
        $('#list-experience').css('display', 'block');
        $('.prog3').css('backgroundColor', 'pink');
    })

// COMPETENCES ******************************************************************************
    $('#submitted-form_4-comp').on('click', function (e) {
        e.preventDefault();
        addComp();
    })
// LANGUES ******************************************************************************
    $('#submitted-form_4-langue').on('click', function (e) {
        e.preventDefault();
        addLangue();
    })

// EXPERIENCES ******************************************************************************


    $('#btn-exp').on('click', function (e) {
        e.preventDefault();

        $('#list-experience').css('display', 'none');
        $('#form_2').css('display', 'flex');

        $('#submitted-form_2').on('click', function (e) {
            e.preventDefault();
            addExp();

            $('#list-experience').css('display', 'block');
            $('#form_2').css('display', 'none');
        })


    })

    // FORMATIONS ******************************************************************************


    $('#btn-dip').on('click', function (e) {
        e.preventDefault();

        $('#list-formation').css('display', 'none');
        $('#form_3').css('display', 'flex');


        $('#submitted-form_3').on('click', function (e) {
            e.preventDefault();
            addDip();

            $('#list-formation').css('display', 'block');
            $('#form_3').css('display', 'none');
        })

    })


});


/*****************************
 *  FONCTIONS AJOUT
 ******************************/
var idC = 1;
var idL = 1;
var idExp = 1;
var idDip = 1;

function addDip() {
    var dipInputRole = document.getElementById('diplome').value;
    var dipInputEnt = document.getElementById('etablissement').value;
    var dipInputVille = document.getElementById('ville-dip').value;
    var dipInputDesc = document.getElementById('desc-dip').value;
    var dipInputDate1 = document.getElementById('date-begin-dip').value;
    var dipInputDate2 = document.getElementById('date-end-dip').value;

    var myIframe = $('#myIframeCv').contents().find('#iframe-list-dip');


    if(dipInputRole !== '' && dipInputEnt !== '') {
        $('#list-dip').append('<li id="li-dip-' + idDip + '"><div class="container-list"><div class="list-preview"><span>' + dipInputRole + '</span><p>' + dipInputEnt + '</p></div><div class="list-button"><button><i class="fas fa-pen"></i></button><button onclick="deleteDip('+idDip+')"><i class="fas fa-trash"></i></button></div></div></li>');
        myIframe.append('<li id="li-dip-' + idDip + '"><div class="container-list-dip"><div class="left-list"><div class="date-list"><p id="cv-date-begin-dip-' + idDip + '">' + dipInputDate1 + '</p><p id="cv-date-end-dip-' + idDip + '">' + dipInputDate2 + '</p></div><div class="ville-list"><p id="cv-ville-dip-' + idDip + '">' + dipInputVille + '</p></div></div><div class="content-list"><div class="title-list"><p id="cv-diplome-' + idDip + '">' + dipInputRole + '</p><p id="cv-etablissement-' + idDip + '">' + dipInputEnt + '</p></div><div class="desc-list"><p id="cv-desc-dip-' + idDip + '">' + dipInputDesc + '</p></div></div></div></li>');

        $('#diplome').val('');
        $('#etablissement').val('');
        $('#ville-dip').val('');
        $('#desc-dip').val('');
        $('#date-begin-dip').val('');
        $('#date-end-dip').val('');
        idDip++;
    }
}

function addExp() {
    var expInputRole = document.getElementById('title-exp').value;
    var expInputEnt = document.getElementById('subtitle-exp').value;
    var expInputVille = document.getElementById('ville-exp').value;
    var expInputDesc = document.getElementById('desc-exp').value;
    var expInputDate1 = document.getElementById('date-begin-exp').value;
    var expInputDate2 = document.getElementById('date-end-exp').value;

    var myIframe = $('#myIframeCv').contents().find('#iframe-list-exp');


    if (expInputRole !== '' && expInputEnt !== '') {
        $('#list-exp').append('<li id="li-exp-' + idExp + '"><div class="container-list"><div class="list-preview"><span>' + expInputRole + '</span><p>' + expInputEnt + '</p></div><div class="list-button"><button><i class="fas fa-pen"></i></button><button onclick="deleteExp('+idExp+')"><i class="fas fa-trash"></i></button></div></div></li>');
        myIframe.append('<li id="li-exp-' + idExp + '"><div class="container-list-exp"><div class="left-list"><div class="date-list"><p id="cv-date-begin-dip-' + idExp + '">' + expInputDate1 + '</p><p id="cv-date-end-dip-' + idExp + '">' + expInputDate2 + '</p></div><div class="ville-list"><p id="cv-ville-dip-' + idExp + '">' + expInputVille + '</p></div></div><div class="content-list"><div class="title-list"><p id="cv-diplome-' + idExp + '">' + expInputRole + '</p><p id="cv-etablissement-' + idExp + '">' + expInputEnt + '</p></div><div class="desc-list"><p id="cv-desc-dip-' + idExp + '">' + expInputDesc + '</p></div></div></div></li>');

        $('#title-exp').val('');
        $('#subtitle-exp').val('');
        $('#ville-exp').val('');
        $('#desc-exp').val('');
        $('#date-begin-exp').val('');
        $('#date-end-exp').val('');
        idExp++;
    }
}

function addComp() {
    var input = document.getElementById('competence').value;

    var myIframe = $('#myIframeCv').contents().find('#iframe-list-comp');

    if (input !== '') {

        var item = $('#list-comp li p');
        var tab = [];
        for (var i = 0; i < item.length; i++) {
            tab.push($(item[i]).html());

        }
        if ($.inArray(input, tab) !== -1) {
            $('#competence').val('');
            alert('deja fait');

        } else {
            $('#list-comp').prepend('<li id="li-comp-' + idC + '" class="item-comp"><p>' + input + '</p><button onclick="deleteComp('+idC+')">Supprimer</button></li>');
            myIframe.prepend('<li id="li-comp-' + idC + '" class="item-comp"><p>' + input + '</p></li>')
            $('#competence').val('');
            idC++;

        }
    } else {
        //alert('ajoutez');
        // AJOUTER LA CLASS 'NON' au boutton ADD et faire l'animation keyframes test
    }
}

function addLangue() {
    var input = document.getElementById('langue').value;

    var myIframe = $('#myIframeCv').contents().find('#iframe-list-langue');

    if (input !== '') {

        var item = $('#list-langue li p');
        var tab = [];
        for (var i = 0; i < item.length; i++) {
            tab.push($(item[i]).html());
        }

        if ($.inArray(input, tab) !== -1) {
            $('#langue').val('');
            alert('deja fait');

        } else {
            $('#list-langue').prepend('<li id="li-langue-' + idL + '" class="item-langue"><p>' + input + '</p><button onclick="deleteLangue('+idL+')">Supprimer</button></li>');
            myIframe.prepend('<li id="li-langue-' + idL + '" class="item-langue"><p>' + input + '</p></li>');
            $('#langue').val('');
            idL++;

        }
    } else {
        //alert('ajoutez');
        // AJOUTER LA CLASS 'NON' au boutton ADD et faire l'animation keyframes test
    }
}


// FONCTION DELETE ===========================================
function deleteComp(num) {

    $( "#li-comp-" + num ).remove();
    $('#myIframeCv').contents().find('#li-comp-' + num).remove();

}

function deleteLangue(num) {

    $('#li-langue-' + num).remove();
    $('#myIframeCv').contents().find('#li-langue-' + num).remove();

}

function deleteExp(num) {
    console.log('exp')
    $('#li-exp-' + num).remove();
    $('#myIframeCv').contents().find('#li-exp-' + num).remove();
}

function deleteDip(num) {
    console.log('dip')
    $('#li-dip-' + num).remove();
    $('#myIframeCv').contents().find('#li-dip-' + num).remove();
}

/*****************************
 *  FONCTIONS CHANGEMENT DIRECT AVEC IFRAME
 ******************************/
function swicthTxt(data, datacv) {
    var input,
        element = document.getElementById(data);
    if (element != null) {
        input = element.value;
    } else {
        input = null;
    }
    document.getElementById(data).innerHTML = input;
    var myIframe = document.getElementById('myIframeCv');

    if (input === '') {
        myIframe.contentWindow.document.getElementById('cv-' + data).innerHTML = datacv;
    } else {
        myIframe.contentWindow.document.getElementById('cv-' + data).innerHTML = input;
    }

}

// Js pour drag drop photo

var j = 0;
var z = 0; // indexes du FormData
var formDat = new FormData(); // création de notre objet FormData
$("#inputImg").on("change", function (e) {
  var files = e.target.files;
  //on boucle sur le nombre de fichiers du FL
  for (var i = 0; i < files.length; i++) {
    // A chaque fichier...
    formDat.append(z++, files[i]); // on rentre dans le FomData son index (la même valeur que l'ID donnée à la preview correspondante et le nom du fichier
    var reader = new FileReader();
    //on ajoute à la suite chaque nouvelle image renvoyée par readAsDataUrl
    reader.onload = function (event) {
      $("#tt").append(
        '<img id="_' +
          j +
          '" class="prev_img" src="' +
          event.target.result +
          '" style="width:150px;height:100px;margin-left:3px;position:relative;z-index:2;"/>'
      );
      j++;
    };
    //on lit chaque nouvelle image de la boucle
    reader.readAsDataURL(e.target.files[i]);

    $(document).on("click", ".prev_img", function () {
      // en cas de click sur une image preview :
      var delId = $(this).prop("id").substr(1); //on récupère l'id sans le _
      formDat.delete(delId); // on la détruit dans le formdata
      $(this).remove(); //on la détruit dans l'affichage des images preview
    });
    console.log(formDat);
  }
});

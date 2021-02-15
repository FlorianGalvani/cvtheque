$(document).ready(function () {

    // BTN FORMULAIRE
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

    // CREATION SUR LE CV :
    myIframe.append('<li id="li-exp-' + idDip + '"><div class="container-list-dip"><p id="cv-diplome-' + idDip + '">' + dipInputRole + '</p><p id="cv-etablissement-' + idDip + '">' + dipInputEnt + '</p><p id="cv-ville-dip-' + idDip + '">' + dipInputVille + '</p><p id="cv-date-begin-dip-' + idDip + '">' + dipInputDate1 + '</p><p id="cv-date-end-dip-' + idDip + '">' + dipInputDate2 + '</p><p id="cv-desc-dip-' + idDip + '">' + dipInputDesc + '</p></div></li>');

    $('#list-dip').append('<li id="li-dip-' + idDip + '"><div class="container-list-dip"><span>' + dipInputRole + '</span><p>' + dipInputEnt + '</p></div></li>');
// mettre un idDip dans p-id-iframe


    $('#diplome').val('');
    $('#etablissement').val('');
    $('#ville-dip').val('');
    $('#desc-dip').val('');
    $('#date-begin-dip').val('');
    $('#date-end-dip').val('');
    idDip++;
}

function addExp() {
    var expInputRole = document.getElementById('title-exp').value;
    var expInputEnt = document.getElementById('subtitle-exp').value;
    var expInputVille = document.getElementById('ville-exp').value;
    var expInputDesc = document.getElementById('desc-exp').value;
    var expInputDate1 = document.getElementById('date-begin-exp').value;
    var expInputDate2 = document.getElementById('date-end-exp').value;

    var myIframe = $('#myIframeCv').contents().find('#iframe-list-exp');


    // AJOUT INDEX
    $('#list-exp').append('<li id="li-exp-' + idExp + '"><div class="container-list-exp"><span>' + expInputRole + '</span><p>' + expInputEnt + '</p></div></li>');
    // AJOUT DANS L'IFRAME
    myIframe.append('<li id="li-exp-' + idExp + '"><div class="container-list-exp"><p id="cv-title-exp-' + idExp + '">' + expInputRole + '</p><p id="cv-subtitle-exp-' + idExp + '">' + expInputEnt + '</p><p id="cv-ville-exp-' + idExp + '">' + expInputVille + '</p><p id="cv-date-begin-exp-' + idExp + '">' + expInputDate1 + '</p><p id="cv-date-end-exp-' + idExp + '">' + expInputDate2 + '</p><p id="cv-desc-exp-' + idExp + '">' + expInputDesc + '</p></div></li>');


    // RESET DU FORMULAIRE


    $('#title-exp').val('');
    $('#subtitle-exp').val('');
    $('#ville-exp').val('');
    $('#desc-exp').val('');
    $('#date-begin-exp').val('');
    $('#date-end-exp').val('');
    idExp++;


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

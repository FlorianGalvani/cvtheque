function doAjaxRequest() {
    jQuery.ajax({
        url: '../../wp-admin/admin-ajax.php',
        data: {
            'action': 'do_ajax',
            'fn': 'get_latest_posts',
            'count': 10
        },
        dataType: 'JSON',
        success: function (data) {
            // notre gestion de l'appel sera fait ici. Nous y ajouterons le code plus tard
        },
        error: function (errorThrown) {
            alert('error');
            console.log(errorThrown);
        }

    });
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

}



<?php
$errors = array();
$success = false;

// ICI DU PHP

// INFOS PERSO
$prenom = cleanXss($_POST['prenom']);
$nom = cleanXss($_POST['nom']);
$metier = cleanXss($_POST['metier']);
$email = cleanXss($_POST['email']);
$address = cleanXss($_POST['address']);
$phone = cleanXss($_POST['phone']);
$ville = cleanXss($_POST['ville']);
$naissance = cleanXss($_POST['date']);
$description = cleanXss($_POST['description']);
$link = cleanXss($_POST['link']);


// EXPERIENCES
$poste = cleanXss($_POST['title-exp']);
$ent = cleanXss($_POST['subtitle-exp']);
$ville_exp = cleanXss($_POST['ville-exp']);
$date_debut_exp = cleanXss($_POST['date-begin-exp']);
$date_fin_exp = cleanXss($_POST['date-end-exp']);

// FORMATIONS
$diplome = cleanXss($_POST['diplome']);
$etab = cleanXss($_POST['etablissement']);
$ville_dip = cleanXss($_POST['ville-dip']);
$date_debut_dip = cleanXss($_POST['date-begin-dip']);
$date_fin_dip = cleanXss($_POST['date-end-dip']);
$desc_dip = cleanXss($_POST['desc-dip']);


// COMPETENCES
$competence = cleanXss($_POST['competence']);

// LANGUES
$langue = cleanXss($_POST['langue']);


    echo 'cc';
    global $wpdb;
    $wpdb->insert('cv_etudes' ,array(
        'titre' => $diplome,
        'sous-titre' => $etab,
        'description' => $desc_dip,
        'date_debut' => $date_debut_dip,
        'date_fin' => $date_fin_dip,
    ));
    debug($wpdb);

    
// SI PAS VIDE => INSERTION BBD INFOS PERSOS

//INSERTION BBD FORMATIONS

//INSERTION BBD EXPERIENCES

//INSERTION BBD COMP

//INSERTION BBD LANGUE




$data = array(
    'errors' => $errors,
    'success' => $success
);

showJson($data);
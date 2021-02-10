<?php
/*
Template Name: Candidat
*/
get_header(); ?>

<div class="form_1_div">
    <form class="form_1" id="form_1">
        <div class="form_1_input">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom">
            <span class="errors" id="error_nom"></span>
        </div>
        <!-- <div class="form_1_input">
            <label for="photo"></label>
            <input type="file" name="photo" id="photo">
        </div> -->
        <div class="form_1_input">
            <label for="prenom">Prenom :</label>
            <input type="text" name="prenom" id="prenom">
            <span class="errors" id="error_prenom"></span>
        </div>
        <div class="form_1_input">
            <label for="naissance">Naissance :</label>
            <input type="text" name="naissance" id="naissance">
            <span class="errors" id="error_naissance"></span>
        </div>
        <div class="form_1_input">
            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" id="adresse">
            <span class="errors" id="error_adresse"></span>
        </div>
        <div class="form_1_input">
            <label for="telephone">Telephone :</label>
            <input type="tel" name="telephone" id="telephone" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}">
            <span class="errors" id="error_telephone"></span>
        </div>
        <div class="form_1_input">
            <label for="permis">Permis :</label>
            <select name="permis" id="permis">
                <option value="">Choix</option>
                <option value="permis_B">Permis B</option>
            </select>
            <span class="errors" id="error_permis"></span>
            <div class="form_1_input">
                <input type="submit" id="submit_form_1">
            </div>
    </form>

</div>
<!-- <div class="form_2">
<form action="" method="post">
    <label for=""></label>
    <input type="text" name="">
    <span class="errors" id="error_"></span>

    <input type="submit">
</form>
</div> -->

<?php get_footer();

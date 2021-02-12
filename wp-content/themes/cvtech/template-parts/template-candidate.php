<?php
/*
Template Name: Candidat
*/
get_header(); ?>
<div class="form_candidate_box">
    <div class="form_candidat_loading">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/asset/img/load.gif" alt="">
    </div>
    <div class="form_div form_candidat_div_1">
        <form class="form_1" id="form_1">
            <div class="form_1_input">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom">
            </div>
            <!-- <div class="form_1_input">
            <label for="photo"></label>
            <input type="file" name="photo" id="photo">
            </div> -->
            <div class="form_1_input">
                <label for="prenom">Prenom :</label>
                <input type="text" name="prenom" id="prenom">
            </div>
            <div class="form_1_input">
                <label for="naissance">Naissance :</label>
                <input type="text" name="naissance" id="naissance">
            </div>
            <div class="form_1_input">
                <label for="adresse">Adresse :</label>
                <input type="text" name="adresse" id="adresse">
            </div>
            <div class="form_1_input">
                <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form_1_input">
                <label for="telephone">Telephone :</label>
                <input type="tel" name="telephone" id="telephone" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}">
            
            </div>
            <div class="form_1_input">
                <label for="permis">Permis :</label>
                <select name="permis" id="permis">
                    <option value="">Choix</option>
                    <option value="permis_B">Permis B</option>
                </select>
            </div>
            <div class="form_1_input">
                <input type="submit" id="submit_form_1">
                <span class="errors" id="error_form_1"></span>
            </div>
        </form>
    </div>
    <div class="form_div form_candidat_div_2">
        <form class="form_2" id="form_2">
            <div class="form_input">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="">
                <span class="errors" id="error_"></span>
            </div>
            <div class="form_input">
                <input type="submit" id="submit_form_2">
                <span class="errors" id="error_form_2"></span>
            </div>
        </form>
    </div>


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

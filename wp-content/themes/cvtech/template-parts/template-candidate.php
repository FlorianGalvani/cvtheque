<?php
/*
Template Name: Candidat
*/
get_header(); ?>

<img src="<?php echo get_template_directory_uri() . '/asset/img/recruteur-img.png'; ?>" alt="" class="recruit">




<div id="cvmaker1" class="container-cvmaker">

    <div class="progress-bar">
        <div class="progress prog1"></div>
        <div class="progress prog2"></div>
        <div class="progress prog3"></div>
        <div class="progress prog4"></div>
        <div class="progress prog5"></div>
    </div>

    <div class="page-cv">
        <div class="form-cv">
            <!-- <form id="svg_f1" enctype="multipart/form-data">
            <div id="cont2">
              <div
                id="dash2"
                
              >
                <input
                  type="file"
                  id="inputImg"
                  name="svg_file[]"
                  id="svg_file"

                  multiple
                />
                <div id="tt"></div>
              </div>
            </div>
          </form> -->
            <form method="post" id="form_1">

                <div id="f-coordonnee" class="formulaire">

                    <div class="form-group-little">
                        <div class="little-part">
                            <label for="prenom">Prénom</label>
                            <input id="prenom" name="prenom" type="text" onkeyup="swicthTxt('prenom', 'Prénom')"
                                   placeholder="ex: Wati" value="">
                        </div>

                        <div class="little-part">
                            <label for="nom">Nom</label>
                            <input id="nom" name="nom" type="text" onkeyup="swicthTxt('nom', 'Nom')"
                                   placeholder="ex: Bogoss" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="metier">Métier</label>
                        <input id="metier" name="metier" type="text" onkeyup="swicthTxt('metier', 'Métier')"
                               placeholder="ex: Chanteur" value="">
                    </div>

                    <div class="form-group-little">
                        <div class="little-part">
                            <label for="ville">Ville</label>
                            <input id="ville" name="ville" type="text" onkeyup="swicthTxt('ville', 'Ville')"
                                   placeholder="ex: Paris" value="">
                        </div>

                        <div class="little-part">
                            <label for="date">Date de naissance</label>
                            <input id="date" name="date" type="text" onkeyup="swicthTxt('date', 'Date de naissance')"
                                   value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address">Adresse</label>
                        <input id="address" name="address" type="text" onkeyup="swicthTxt('address', 'Adresse')"
                               placeholder="ex: 36 rue de la Swaggitude" value="">
                    </div>

                    <div class="form-group-little">
                        <div class="little-part">
                            <label for="phone">Téléphone</label>
                            <input id="phone" name="phone" type="tel" pattern="06 06 06 06 06"
                                   onkeyup="swicthTxt('phone', 'Téléphone')" placeholder="ex: 06 01 02 03 04" value="">
                        </div>

                        <div class="little-part">
                            <label for="email">E-mail</label>
                            <input id="email" name="email" type="email" onkeyup="swicthTxt('email', 'E-mail')"
                                   placeholder="ex: wati@bogoss.com" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" onkeyup="swicthTxt('description', 'Description')"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="link">Lien</label>
                        <input id="link" name="link" type="text" onkeyup="swicthTxt('link', '')"
                               placeholder="ex: linkedin.com/watibogoss" value="">
                    </div>

                    <div class="form-group-little">
                        <input type="submit" id="submitted-form_1">
                    </div>

                </div>


            </form>



            <div id="list-experience">
                <ul id="list-exp">
                    <li>
                        <div class="container-list">

                            <div class="list-preview">
                                <span>Votre poste</span>
                                <p>L'entreprise</p>
                            </div>

                            <div class="list-button">
                                <button><i class="fas fa-pen"></i></button>
                                <button><i class="fas fa-trash"></i></button>
                            </div>

                        </div>
                    </li>
                </ul>
                <div id="btn-exp" class="add-list">
                    <span>Ajouter une nouvelle expérience</span>
                </div>

                <div class="next-prev">
                    <button class="prev-btn" id="prev-exp"><i class="fas fa-arrow-circle-left"></i></button>
                    <button class="next-btn" id="next-exp"><i class="fas fa-arrow-circle-right"></i></button>
                </div>


            </div>

            <form method="post" id="form_2">

                <div class="form-group-little">
                    <div class="little-part">
                        <label for="title-exp">Poste/Titre</label>
                        <input type="text" id="title-exp" name="title-exp"
                               placeholder="ex: Développeur Web">
                    </div>

                    <div class="little-part">
                        <label for="subtitle-exp">Entreprise</label>
                        <input type="text" id="subtitle-exp" name="subtitle-exp"
                               placeholder="ex: Nom de l'entreprise">
                    </div>
                </div>

                <div class="form-group">
                    <label for="ville-exp">Lieu</label>
                    <input type="text" id="ville-exp" name="ville-exp"
                           placeholder="ex: Paris">
                </div>

                <div class="form-group-little">
                    <div class="little-part">
                        <label for="date-begin-exp">Début</label>
                        <input type="text" id="date-begin-exp" name="date-begin-exp"
                               placeholder="ex: Développeur Web">
                    </div>

                    <div class="little-part">
                        <label for="date-end-exp">Fin</label>
                        <input type="text" id="date-end-exp" name="date-end-exp"
                               placeholder="ex: Développeur Web">
                    </div>
                </div>

                <div class="form-group">
                    <label for="desc-exp">Description</label>
                    <textarea name="desc-exp" id="desc-exp" cols="30" rows="10" ></textarea>
                </div>

                <div class="form-group-little">
                    <input type="submit" id="submitted-form_2">
                    <!--                    <button id="submitted-form_2">Ajout</button>-->
                </div>

            </form>



            <div id="list-formation">
                <ul id="list-dip">
                    <li>
                        <div class="container-list">

                            <div class="list-preview">
                                <span>Diplôme</span>
                                <p>Ecole</p>
                            </div>

                            <div class="list-button">
                                <button><i class="fas fa-pen"></i></button>
                                <button><i class="fas fa-trash"></i></button>
                            </div>

                        </div>
                    </li>
                </ul>
                <div id="btn-dip" class="add-list">
                        <span>Ajouter une nouvelle formation</span>
                </div>


                <div class="next-prev">
                    <button class="prev-btn" id="prev-dip"><i class="fas fa-arrow-circle-left"></i></button>
                    <button class="next-btn" id="next-dip"><i class="fas fa-arrow-circle-right"></i></button>
                </div>

            </div>

            <form method="post" id="form_3">

                <div class="form-group-little">
                    <div class="little-part">
                        <label for="diplome">Diplôme</label>
                        <input type="text" id="diplome" name="diplome"
                               placeholder="ex: Bac ES">
                    </div>

                    <div class="little-part">
                        <label for="etablissement">Etablissement</label>
                        <input type="text" id="etablissement" name="etablissement"

                               placeholder="ex: Lycée Maitre GIMS">
                    </div>
                </div>

                <div class="form-group">
                    <label for="ville-dip">Lieu</label>
                    <input type="text" id="ville-dip" name="ville-dip"
                           placeholder="ex: Paris">
                </div>

                <div class="form-group-little">
                    <div class="little-part">
                        <label for="date-begin-dip">Début</label>
                        <input type="text" id="date-begin-dip" name="date-begin-dip"
                               placeholder="ex: Développeur Web">
                    </div>

                    <div class="little-part">
                        <label for="date-end-dip">Fin</label>
                        <input type="text" id="date-end-dip" name="date-end-dip"
                               placeholder="ex: Développeur Web">
                    </div>
                </div>

                <div class="form-group">
                    <label for="desc-dip">Description</label>
                    <textarea name="" id="desc-dip" cols="30" rows="10" ></textarea>
                </div>

                <div class="form-group-little">
                    <input type="submit" id="submitted-form_3">
                </div>

            </form>



            <div id="comp-langue">
                <form method="post" id="form_4-comp">

                    <div class="form-group">
                        <label for="competence">Compétences</label>
                        <input type="text" id="competence" name="competence" placeholder="ex: Esprit d'équipe">
                    </div>

                    <div class="form-group-little">
                        <input type="submit" id="submitted-form_4-comp" name="submitted-form_4-comp" value="Ajouter">
                    </div>

                    <div class="container-bubble">
                        <ul id="list-comp"></ul>
                    </div>

                </form>

                <form method="post" id="form_4-langue">


                    <div class="form-group">
                        <label for="langue">Langues</label>
                        <input type="text" id="langue" name="langue" placeholder="ex: Anglais">
                    </div>

                    <div class="form-group-little">
                        <input type="submit" id="submitted-form_4-langue" name="submitted-form_4-langue" value="Ajouter">
                    </div>

                    <div class="container-bubble">
                        <ul id="list-langue"></ul>
                    </div>

                </form>

                <div class="next-prev">
                    <button class="prev-btn" id="prev-cl"><i class="fas fa-arrow-circle-left"></i></button>
                    <button class="next-btn" id="form_finish" type="submit" formaction="<?php echo get_template_directory_uri() . '/js/ajax_candidate.php'; ?>"><i class="fas fa-check-circle"></i></button>
                </div>
            </div>



   <!-- <div class="form_candidate_box">
        <div class="form_candidat_loading" id="form_candidat_loading">
            <img src="<?php //echo get_stylesheet_directory_uri(); ?>/asset/img/load.gif" alt="">
        </div>
        <div class="form_div form_candidat_div_1">
            <form class="form_1" id="form_1">
                <div class="form_1_input">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom">
                </div>
                <div class="form_1_input">
            <label for="photo"></label>
            <input type="file" name="photo" id="photo">
            </div>
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
        </div> -->


        </div>

<!--FAIRE UNE FONCTION POUR CHOISIR LA TEMPLATE DU BON CV DANS LA SOURCE IFRAME-->
        <div class="template-cv">
            <iframe id="myIframeCv"
                    src="<?php echo get_template_directory_uri() . '/inc/cv-template/cv-first/index.html'; ?>"></iframe>
        </div>
    </div>

</div>


<?php get_footer();


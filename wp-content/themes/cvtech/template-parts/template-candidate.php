<?php
/*
Template Name: Candidat
*/
get_header(); ?>



<div id="cvmaker1" class="container-cvmaker">

    <div class="progress-bar">
        <div class="progress prog1">1</div>
        <div class="progress prog2">2</div>
        <div class="progress prog3">3</div>
        <div class="progress prog4">4</div>
        <div class="progress prog5">5</div>
        <div class="progress prog6">Terminer</div>
    </div>

    <div class="page-cv">
        <div class="form-cv">
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
                            <label for="natio">Nationalité</label>
                            <input id="natio" name="natio" type="text" onkeyup="swicthTxt('natio', 'Nationalité')"
                                   placeholder="ex: Française" value="">
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
                        <input id="link" name="link" type="text" onkeyup="swicthTxt('link', 'Lien')"
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
                                <span>Ce que la personne faisait</span>
                                <p>L'entreprise</p>
                            </div>


                            <button>delete</button>
                            <button>modif</button>
                            <button>Deplacer</button>

                        </div>
                    </li>
                </ul>
                <div class="add-list">
                    <button id="btn-exp">+</button>
                    <p>Add</p>
                </div>

                <button id="next-exp">Suivant</button>
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

                                <span>diplome</span>
                                <p>L'ecole</p>
                            </div>


                            <button>delete</button>
                            <button>modif</button>
                            <button>Deplacer</button>

                        </div>
                    </li>
                </ul>
                <div class="add-list">
                    <button id="btn-dip">+</button>
                    <p>Add</p>
                </div>

                <button id="next-dip">Suivant</button>
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
                <form method="post" id="form_4-comp" action="">

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
            </div>



        </div>

<!--FAIRE UNE FONCTION POUR CHOISIR LA TEMPLATE DU BON CV DANS LA SOURCE IFRAME-->
        <div class="template-cv">
            <iframe id="myIframeCv" src="cv1.html" width="400" height="550"></iframe>
        </div>
    </div>

</div>


<?php get_footer();
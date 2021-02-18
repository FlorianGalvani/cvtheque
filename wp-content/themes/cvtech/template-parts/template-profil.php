<?php
/*
Template Name: Profil
*/
$user = wp_get_current_user();
if ($user->ID == 0) {
    header('location:login');
}
get_header(); ?>
<img src="<?php echo get_template_directory_uri() . '/asset/img/recruteur-img.png'; ?>" alt="" class="recruit">



<section id="recruteur">
    <h1>Mon espace personnel</h1>
    <!--for demo wrap-->
    <h1>cv mis en ligne</h1>
    <div class="table">
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Objectif</th>
                        <th>Expérience</th>
                        <th>Formation</th>
                        <th>Compétence</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pierre Dupont</td>
                        <td>Extrêmement motivé pour développer constamment mes compétences et évoluer professionnellement. Je suis confiant vis-à-vis de ma capacité à proposer des idées intéressantes pour des campagnes publicitaires inoubliables.</td>
                        <td>Assistant marketing et communications

                            Communications de Condorcet

                            Maintenir et organiser de nombreux dossiers de bureau - Tenir constamment à jour les listes de contacts et les listes de diffusion de l'entreprise - Surveiller la couverture de presse</td>
                        <td>Expert Marketing INSEEC</td>
                        <td>Gestion d'équipe, Communication, Autonome</td>
                        <td>
                            <div class="see-more">
                                <a href="" class="see">voir</i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Hannelore Martinez</td>
                        <td>Après 2 ans d'études à l'institut Supérieur des Arts appliqués à Paris et plus de 6 ans d'expérience dans le domaine du retail luxe, je souhaiterais aujourd'hui rejoindre une nouvelle équipe en Asie au sein de laquelle je saurais être force d'éxécution et atteindre les objectifs fixés</td>
                        <td>Assistant Communication

                            Gourmet, Paris

                            Création d'un portfolio de 200 clients: Développer un site internet jeune, moderne et facile d'utilisation. Travailler en étroite collaboration avec le Web-Developpeur & le Web designer
                        </td>
                        <td>Master en Business International Antipolis, France, SKEMA BUSINESS SCHOOL</td>
                        <td>Pack Office, Internet, Zoho CRM, Espagnol</td>
                        <td>
                            <div class="see-more">
                                <a href="" class="see">voir</i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Mireille Mercier</td>
                        <td>Pharmacienne de formation, j'évolue tout d'abord dans le milieu militaire (incluant sur des théatres d'opération extérieurs) avant d'entrer dans l'industrie parmaceutique. Ma recherche est de reprendre la gestion d'une pharmacie en région lyonnaise, au sein d'un groupement de pharmacies.</td>
                        <td>Pharmacienne

                        Pharmacie de l'orée du Bois, Lyon

                        Au sein de cette petite pharmacie, je suis en charge des missions suivantes: gestion administrative, préparation, analyse, exercice pharmaceutique, pharmacovigilance.
                        </td>
                        <td>DU Micro-biologie appliquée, Université Lille 2</td>
                        <td>Pharmacologie, Micro-biologie, G-Stock Pharma</td>
                        <td>
                            <div class="see-more">
                                <a href="" class="see">voir</i></a>
                            </div>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="see-more">
                                <a href="" class="see">voir</i></a>
                            </div>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</section>


<?php
get_footer(); ?>
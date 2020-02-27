<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/images/Bayrol_Favicon.png" type="image/x-icon" />
    <title>Bayrol VIP</title>
    <!-- build:css css/styles.min.css -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- endbuild -->
</head>

<body>

<div class="page-container">
    <header class="page-header">
        <div class="header-content">
            <a href="https://www.bayrol.fr/" class="logo-link">
                <img src="assets/images/logos/logo-white.svg" alt="Bayrol" class="logo-visual"/>
            </a>
        </div>
    </header>

    <section class="full-width-block banner-block">
        <picture>
            <source media="(max-width: 480px)" srcset="assets/images/backgrounds/Bayrol_Visuel-VIP_480px.jpg">
            <source media="(max-width: 960px)" srcset="assets/images/backgrounds/Bayrol_Visuel-VIP_960px.jpg">
            <img src="assets/images/backgrounds/Bayrol_Visuel-VIP_1280.jpg" alt="" class="top-banner">
        </picture>

        <picture>
            <source media="(max-width: 480px)" srcset="assets/images/backgrounds/Bayrol_Visuel-CarteVIP_480px.png">
            <source media="(max-width: 960px)" srcset="assets/images/backgrounds/Bayrol_Visuel-CarteVIP_960px.png">
            <img src="assets/images/backgrounds/Bayrol_Visuel-CarteVIP_1280.png" alt="" class="vip-card">
        </picture>

    </section>

    <section class="full-width-block textual-block">
        <article class="welcome-wording">
            <h1 class="page-title">
                Le programme VIP BAYROL
            </h1>
            <p class="common-text">
                <strong>Le programme VIP, un programme qui vous offre des chèques de réduction chaque mois.</strong>
            </p>
            <h2 class="info-title">Gagnez des € grâce à la carte VIP</h2>
            <p class="common-text">
                Chaque mois, cumulez des points qui seront transformés en <span class="text-highlight">chèques de réduction</span>.
            </p>
            <h2 class="info-title">Des produits « boosters » pour bénéficier d'un bonus de points</h2>
            <p class="common-text">
                En achetant les produits <span class="text-highlight">« boosters » BAYROL</span>, vous gagnez plus de points et augmentez plus rapidement le montant de votre cagnotte.
                <br />
                Pour découvrir les offres du programme, <a href="#" target="_blank">téléchargez le dépliant de l’opération BAYROL VIP au format PDF</a>.
            </p>
        </article>
        <article class="downloadable-content">
            <ul class="dl-list">
                <li class="dl-list-item">
                    <a href="#" class="dl-link" target="_blank">
                        <img src="assets/images/pictos/picto-dl.svg" alt="Download" class="dl-picto"/>
                        <span class="doc-name">Les revendeurs participants</span>
                        <span class="doc-type">PDF</span>
                    </a>
                </li>
                <li class="dl-list-item">
                    <a href="assets/pdf/liste-produits-bayrol-vip-2020.pdf" class="dl-link" target="_blank">
                        <img src="assets/images/pictos/picto-dl.svg" alt="Download" class="dl-picto"/>
                        <span class="doc-name">Les produits concernés</span>
                        <span class="doc-type">PDF</span>
                    </a>
                </li>
                <li class="dl-list-item">
                    <a href="assets/pdf/REGLEMENT-BAYROL-VIP-2020.pdf" class="dl-link" target="_blank">
                        <img src="assets/images/pictos/picto-dl.svg" alt="Download" class="dl-picto"/>
                        <span class="doc-name">Le règlement</span>
                        <span class="doc-type">PDF</span>
                    </a>
                </li>
            </ul>
        </article>
    </section>

    <section class="full-width-block vip-form-block vip-form-online">
        <form method="post" id="vip-form" class="vip-form">
            <h2 class="vip-form-title">
                Saisissez et envoyez vos preuves d'achats en ligne
            </h2>
            <article class="half-width-block vip-form-informations">
                <h3 class="vip-form-article-title">
                    Vos informations
                </h3>
                <div class="full-width-block vip-form-field">
                    <select name="retailer" id="retailer" required>
                        <option value="0">*Choisissez votre revendeur</option>
                        <option value="1">Revendeur 1</option>
                        <option value="2">Revendeur 2</option>
                        <option value="3">Revendeur 3</option>
                    </select>
                </div>
                <div class="full-width-block vip-form-field">
                    <input type="text" name="card-number" id="card-number" placeholder="*N° de votre carte VIP" required/>
                </div>
                <div class="full-width-block vip-form-field">
                    <input type="text" name="lastname" id="lastname" placeholder="*Nom" required/>
                </div>
                <div class="full-width-block vip-form-field">
                    <input type="text" name="firstname" id="firstname" placeholder="*Prénom" required/>
                </div>
                <div class="full-width-block vip-form-field">
                    <input type="email" name="email" id="email" placeholder="*Email" required/>
                </div>
                <div class="full-width-block vip-form-field">
                    <input type="tel" name="phone" id="phone" placeholder="Téléphone" required/>
                </div>
            </article>
            <article class="half-width-block vip-form-buy-proof">
                <h3 class="vip-form-article-title">
                    Vos preuves d'achats
                </h3>
                <div class="full-width-block vip-form-field vip-form-input-file-field">
                    <label for="proof1">Preuve d'achat 1</label>
                    <input type="file" name="proof1" id="proof1" placeholder="Ajouter une pièce jointe"/>
                </div>
                <div class="full-width-block vip-form-field vip-form-input-file-field">
                    <label for="proof2">Preuve d'achat 2</label>
                    <input type="file" name="proof2" id="proof2" placeholder="Ajouter une pièce jointe" />
                </div>
                <div class="full-width-block vip-form-field vip-form-input-file-field">
                    <label for="proof3">Preuve d'achat 3</label>
                    <input type="file" name="proof3" id="proof3" placeholder="Ajouter une pièce jointe" />
                </div>
                <div class="full-width-block vip-form-field vip-form-cgv">
                    <input type="checkbox" name="cgv" id="cgv" />
                    <label for="cgv">
                        * J'accèpte le règlement ...
                    </label>
                </div>
                <div class="full-width-block vip-form-field vip-form-nl">
                    <p class="field-label">
                        * Souhaitez vous recevoir la newsletter Bayrol ?
                    </p>
                    <input type="radio" name="nl-subscribe" id="nl-subscribe-yes" value="nl-subscribe-yes" />
                    <label for="nl-subscribe-yes">Oui</label>
                    <input type="radio" name="nl-subscribe" id="nl-subscribe-no" value="nl-subscribe-no" />
                    <label for="nl-subscribe-no">Non</label>
                    <p class="mandatory-info">
                        Les champs marqués d'un astérisque sont obligatoires
                    </p>
                </div>
                <div class="full-width-block vip-form-field">
                    <input type="submit" value="Envoyer mes preuves d'achat" />
                </div>
            </article>
        </form>
    </section>

    <section class="full-width-block vip-form-block vip-form-postal">
        <h2 class="vip-form-title">
            Envoi de vos preuves par voie postale :
        </h2>
        <ol class="prostal-process-list">
            <li>
                1. Imprimer le formulaire de participation <a href="assets/pdf/FORMULAIRE-PARTICIPATION-BAYROL-VIP-2020.pdf" target="_blank"">disponible ici</a> ou en renseignant vos
                coordonnées complètes sur papier libre (nom, prénom, adresse, code postal et ville, téléphone et
                adresse e-mail)
            </li>
            <li>
                2. Indiquer votre numéro de carte personnel (indiqué sur la carte VIP remise par le piscinier) sur le
                formulaire de participation ou sur papier libre
            </li>
            <li>
                3. Joindre votre (vos) facture(s) d’achat(s) : la(les) facture(s) doit(vent) être comprise(s) entre le
                01/03/2020 et le 30/11/2020
            </li>
        </ol>
        <p class="postal-process">
            Et envoyer le tout sous pli suffisamment affranchi au plus tard le 15/12/2020 à l’adresse suivante :
            <br />
            <strong>ANSWER COMPAGNIE – Opération BAYROL VIP 2020 - 41 rue Laure Diebold 69009 LYON</strong>
        </p>
    </section>

    <footer class="full-width-block page-footer">
        <button class="dashboard-add-btn">Ajouter à l'écran d'accueil</button>
        <nav class="footer-nav">
            <ul>
                <li>
                    <a href="https://www.bayrol.fr/" class="footer-nav-link">
                        BAYROL.fr
                    </a>
                </li>
                <li>
                    <a href="https://www.bayrol.fr/informations-legales/" class="footer-nav-link">
                        Modification de mes données personnelles
                    </a>
                </li>
                <li>
                    <a href="https://www.bayrol.fr/informations-legales/" class="footer-nav-link">
                        Informations légales
                    </a>
                </li>
                <li>
                    <a href="https://www.bayrol.fr/informations-legales/datenschutzerklaerung/#c1984" class="footer-nav-link">
                        Politique de confidentialité
                    </a>
                </li>
            </ul>
        </nav>

        <span class="hotline">
            HOTLINE <a href="tel:0102030405">01 02 03 04 05</a>
        </span>

        <span class="copyright">
            &copy; 2020 BAYROL
        </span>
    </footer>
</div>

<!-- build:js js/main.min.js -->
<script src="js/main.js"></script>
<script src="js/custom.js"></script>
<!-- endbuild -->
</body>

</html>

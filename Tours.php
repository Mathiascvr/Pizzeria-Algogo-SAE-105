<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Ville.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="entete">
            <div class="horaire">
                <p>
                    Lun-Ven:11h-14h / 19h30-22h30 <br>
                    Samedi:11h-14h30 / 19h30-23h30 <br>
                    Dimanche:11h-14h / 19h30-22h <br>
                    
                </p>
            </div>
            <div class="logopizza">
                <a href="accueil.php"><img src="/image_sae/logo_pizza.png" alt="logo pizza"></a>
                <h1>PIZZERIA AL'GOGO TOURS</h1>
            </div>
            <div class="tel">
                <img src="/image_sae/icone_tel.png" alt="icone_tel" >
                <p class="num">0247875631</p>
            </div>
        </div>
        <div>
            <video class="video" src="/image_sae/pizza.mp4" loop muted autoplay ></video>
        </div>
    </header>
    <main>
        <nav>
            <ul class="menu">
                <li><a href="#equipe">Notre équipe</a></li>
                <li><a href="#specialite">Nos spécialités</a></li>
                <li><a href="#contacter">Nous contacter</a></li>
            </ul>
        </nav>
        <div class="personnel">
            <h2 id="equipe">Notre équipe</h2>
            <div>
                <div class="equipe1">
                    <div>
                        <img class="effectif" src="/image_sae/dirigeant.png" alt="photo_dirigeant">
                        <h3>Dirigeant</h3>
                        <p>Mathias Couvreur</p>
                    </div>
                    <div>
                        <img class="effectif" src="/image_sae/cuisinier.jpg" alt="photo cuisinier">
                        <h3>Cuisinier</h3>
                        <p>Donovan lassale</p>
                    </div>
                </div>
                <div class="equipe1">
                    <div>
                        <img class="effectif" src="/image_sae/cuisinier.jpg" alt="photo_cuisinier">
                        <h3>Cuisinier</h3>
                        <p>Paul Bergot</p>
                    </div>
                    <div>
                        <img class="effectif" src="/image_sae/serveur.jpg" alt="photo_serveur">
                        <h3>Serveur</h3>
                        <p>Alexandre Terry</p>
                    </div>
                </div>
                <div class="equipe1">
                    <div>
                        <img class="effectif" src="/image_sae/serveur.jpg" alt="photo_serveur">
                        <h3>Serveur</h3>
                        <p>Patrick Toby</p>
                    </div>
                    <div>
                        <img class="effectif" src="/image_sae/serveur.jpg" alt="photo_serveuse">
                        <h3>Serveur</h3>
                        <p>Garance Pero</p>
                    </div>    
                </div>
                <div class="equipe1">
                    <div>
                        <img class="effectif" src="/image_sae/gerant.jpg "alt="photo_gérant">
                        <h3>Gérant</h3>
                        <p>Frederic Gero</p>
                    </div>
                    <div>
                        <img class="effectif" src="/image_sae/caissier.webp "alt="photo_caissier">
                        <h3>Caissier</h3>
                        <p>Adrien Moulin</p>
                    </div>    
                </div>
            </div>
        </div>
        <div class="spe">
            <h2 id="specialite">Nos spécialités</h2>
            <p>Toutes nos pizzas sont faites maisons avec le savoir faire de la famille Couvreur</p>
            <div class="pizza">
                <div class="table1">
                    <h3>Nos Pizzas</h3>
                    <table>
                        <tr>
                            <td>La tourangelle</td>
                            <td>Jambon/chèvre/Andouillette</td>
                            <td>11.99€</td>
                        </tr>
                        <tr>
                            <td>La 5 fromages</td>
                            <td>Chèvre/Mozarellla/cheddar/bleu/raclette</td>
                            <td>11.99€</td>
                        </tr>
                        <tr>
                            <td>L'orientale</td>
                            <td>Mergez/fromages/piments</td>
                            <td>11.99€</td>
                        </tr>
                        <tr>
                            <td>La Margherita</td>
                            <td>Assortiments de fromages/sauce tomates</td>
                            <td>11.99€</td>
                        </tr>
                    </table>
                </div>    
                <div class="table2">
                    <h3>Nos autres spécialités</h3>
                    <table>
                        <tr>
                            <td>Pizza veggie</td>
                            <td>Assortiments de légumes</td>
                            <td>12.99€</td>
                        </tr>
                        <tr>
                            <td>Flamenkuche</td>
                            <td>lardon/fromages/oignon</td>
                            <td>14.99€</td>
                        </tr>
                        <tr>
                            <td>Burger tourangeaux</td>
                            <td>Steack/cheddar/salade/andouillettes</td>
                            <td>14.99€</td>
                        </tr>
                        <tr>
                            <td>Panini </td>
                            <td>Fromage/Viande hachée/Tomates</td>
                            <td>9.99€</td>
                        </tr>
                    </table>
                </div>    
            </div>
            <div class="formule">    
                <div id="formule">
                    <h3>Formule enfant</h3>
                    <p>Pizza small</p>
                    <p>Boisson(sauf alcool)</p>
                    <p>1 boule de glace</p>
                    <p>9.99€</p>
                </div>
                <div id="formule">
                    <h3>Formule spécialités</h3>
                    <p>Spécialité au choix</p>
                    <p>Boisson au choix</p>
                    <p>Dessert au choix</p>
                    <p>14.99€</p>
                </div>
                <div id="formule">
                    <h3>Formule Pizza</h3>
                    <p>Pizza au choix</p>
                    <p>Boisson au choix</p>
                    <p>Dessert au choix</p>
                    <p>14.99€</p>
                </div>
            </div>    
            


        </div>
        <div class="fondgris">
            <h2 id="contacter">Nous contacter</h2>
            <div class="contacter">
                    <div class="cadre"></div>    
                    <img src="/image_sae/localisation.png" alt="localisation_resto">
                <div class="contact">    
                    <div>
                        <h3>Nous contacter</h3>
                        <br>
                        <h4>Adresses</h4>
                        <p>4 Place du Grand marché 37000 Tours</p>
                        <h4>Suivez Nous</h4>
                        <a  href=""><img class="reseau" src="/image_sae/facebook.png" alt=""></a>
                        <a  href=""><img class="reseau" src="/image_sae/instagram.png" alt=""></a>
                        <a  href=""><img class="reseau" src="/image_sae/twitter.png" alt=""></a>
                        <a  href=""><img class="reseau" src="/image_sae/google.png" alt=""></a>
                    </div>    
                </div>   
            </div>
        </div>  
        <footer>
            <a href="">Plan du site</a>
            <a href="">Mentions légales</a>
        </footer>
    </main>
</body>
</html>
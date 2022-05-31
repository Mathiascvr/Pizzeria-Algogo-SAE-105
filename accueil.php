<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="styleaccueil.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzerias AL'GOGO Accueil</title>
</head>

<body>
    <header>
        <div class='entete'>
            <a href="accueil.php"><img src="/image_sae/logo_pizza.png" alt="logo pizza"></a>
            <H1>Restaurant Al'Gogo</H1>
        </div>
        <div class='imagetexte'>
            <img src="/image_sae/pizza3.jpeg" alt="pizza apétissanste" class='pizzabonne'>
            <p class='texte_image'>un texte aleatoire</p>
        </div>

        <!-- menu nav-->
        <nav>
            <ul>
                <li><a href="#quinous">Qui sommes-nous</a></li>
                <li><a href="#resto">Nos Restaurants</a></li>
                <li><a href="#rejoindre">Nous Rejoindre</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!--Qui sommes nous-->
        <div class="qui">
            <h2 id='quinous'>Qui sommes nous?</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <hr>
        
        <div class="resto">
            <h2 id='resto'>Nos restaurants</h2>
            <div>
               <!--Tours-->
                <div class="tours">
                    <img src="/image_sae/Tours.jpg" alt="Tours">
                    <h3><a href="Tours.php">Tours</a></h3>
                    <p>4 Place du Grand marché 37000</p>
                </div>
                <hr>
                <!--Nantes-->
                <div class="nantes">
                    <img src="/image_sae/Nantes.jpg" alt="Nantes">
                    <h3><a href="Nantes.php">Nantes</a></h3>
                    <p>23 rue Villebois Mareuil 44000</p>
                </div>
                <hr>
                <!--Calais-->
                <div class="calais">
                    <img src="/image_sae/Calais.jpeg" alt="Calais">
                    <h3><a href="Calais.php">Calais</a></h3>
                    <p>10 avenue Georges Guynemer 62100</p>
                </div>
            <hr>
                <!--Toulon-->
                <div class="toulon">
                    <img src="/image_sae/toulon.jpg
                    " alt="toulon">
                    <h3><a href="Toulon.php">Toulon</a></h3>
                    <p>12 rue Louis Ferrand 83000</p>
                </div>
            </div>
<hr>
        </div>
        <!--Nous Rejoindre-->
        <div class="rejoindre">
            <h2 id='rejoindre'>Nous Rejoindre</h2>
            <div class="engfr">
                <!--Nos Engagements-->
                <div class="engagements">
                    <img src="/image_sae/engagement.jpg" alt="engagements" class="engagements">
                    <div>
                        <h3>Nos Engagements</h3>
                        <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
                        <input type="button" value="En savoir plus" class="button">
                    </div>
                </div>
                <!--La franchise-->
                <div class="franchise">
                    <div>
                        <h3>Créer une franchise</h3>
                        <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
                        <button>
                            En savoir plus
                        </button>
                    </div>
                    <img src="/image_sae/franchise.jpg" alt="franchise">
                </div>
            </div>
        </div>
        <br>
<hr>
        <!--Formulaire-->
        <div class="form">
            <div>
                <table>
                    <tr>
                        <td>
                            Your Name :
                        </td>

                        <td>
                            <input type="text" placeholder="Votre prénom" />
                        </td>
                        <td>
                            <input type="text" placeholder="Votre nom" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Your mail :
                        </td>

                        <td>
                            <input type="text" placeholder="Votre mail" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Phones :
                        </td>
                        <td>
                            <input type="telephone" placeholder="Votre Téléphone">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Sujet du message :
                        </td>
                        <td>
                            <select name="sujet" id="">
                                <optgroup label="Sujet">
                                    <option value="Menu">Menu</option>
                                    <option value="Prix">Prix</option>
                                    <option value="Produit">Produit</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </optgroup>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Message :
                        </td>
                        <td>
                            <input type="text" placeholder="Votre message pour nous">
                        </td>
                    </tr>

                    <tr>
                        <td>

                        </td>
                    </tr>
                </table>
            </div>
            <input type="submit" value="Envoyer le formulaire" class="envoi"/>
        </div>
    </main>
    <hr>
    <footer>
        <a href="plandusite.html">Plan du site</a>  <span>sgk</span>    
        <a href="mention.html">Mentions Légales</a>
    </footer>
</body>

</html>
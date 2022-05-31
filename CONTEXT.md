# Pizzeria-Algogo-SAE-105

Projet réalisé du 13/12/2021 au 21/01/2022 (Fin du premier semestre de la formation  MMI1 S1)

Le but était de créer un site pour un pizzeria (Pizzeria Algogo) avec bien sûr des contraintes :


Le restaurateur compte s'implanter dans 4 villes de taille moyenne en ouvrant dans chaque ville 1 pizzeria.

Le site web a pour but de présenter les 4 restaurants.

La liste de ces villes n'étant pas encore finalisée, ce sera donc à vous de choisir 4 villes pour tester le site web. 


---------------------------------------------------------

1) Le site web sera constitué :

d'une page d'accueil index.php
et de 4 autres pages, une par ville, nommées pizzeria-nomDeLaVille.php
(par exemple pizzeria-blois.php si la ville est Blois)
d'une page verification.php
---------------------------------------------------------

2) Vous devez créer les pages selon le wireframe indiqué.

---------------------------------------------------------

3) Les données pour les 4 pizzerias seront contenues dans un tableau associatif multidimensionnel $pizzerias stocké dans un fichier donnees.php
    Vous pouvez vous inspirer de la structure données dans une section du cours ci-dessous.
    Modifiez la structure et les données comme vous voulez afin que le tableau contienne bien toutes les données dont vous avez besoin pour les 4 villes, à savoir que
    pour chaque pizzeria de chaque ville, le tableau devra contenir :

 l'adresse, le code postal, le téléphone,
4 ou 8 employés (2 villes avec 4 employés et 2 villes avec 8 employés) avec pour chacun, un nom, un prénom, un métier et l'url vers sa photo)
les horaires d'ouverture du lundi au dimanche
4 choix de pizza avec leur composition et leur prix TTC
4 choix d'une autre spécialité de votre choix (panini, burger...) avec leur composition et leur prix TTC
3 formules avec pour chacune un nom accrocheur, une composition, un prix TTC

Attention : mettre des données variées pour chaque ville !

---------------------------------------------------------

4) Dans le fichier verification.php, vous devez vérifier que les données des pizzerias contenues dans $pizzerias sont valides.
   Vous devez :

écrire une fonction verifier_employes qui vérifie si une ville contient bien 4 ou 8 employés.
écrire une fonction verifier_adresse qui vérifie si l'adresse de la ville est bien définie et non vide
(on peut s'aider de la fonction isset : https://www.php.net/manual/fr/function.isset.php)
écrire une fonction verifier_horaire qui vérifie si les horaires de la ville sont bien définis du lundi au dimanche
écrire une fonction verifier_pizzas qui vérifie qu'une ville offre bien 4 choix de pizza
écrire une fonction verifier_formules qui vérifie qu'une ville offre bien 3 formules et que chaque formules a bien un prix

-> toujours dans verification.php, vous devez maintenant appeler ces fonctions sur les 5 villes et indiquer si les vérifications se sont bien passées ou non.
    Tester vos résultats dans le navigateur

---------------------------------------------------------

5) Utilisez le moteur de balises Twig pour afficher les données dans les pages du site web.
Vous devez aussi utiliser Twig comme moteur de template pour créer un template parent (et des templates enfants bien sûr).
(pas de panique, nous ferons ensemble un TP sur Twig pour vous le présenter) 

---------------------------------------------------------

6) Trouver un hébergeur  afin d'héberger votre site web.
    Votre site web devra être opérationnel et accessible depuis Internet.

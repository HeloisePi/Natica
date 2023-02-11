Groupe 2 
-----------------

Projet MMI 2022

## Fonctionnalités

=> ici la liste des features implémentées et valides :
- dashboard 100 % fonctionnel et accessible que pour les admin et modérateurs
- les modérateurs n'ont accès qu'aux likes et commentaires
- ajout d'image possible pour un article (cependant bug non résolu lors de l'encryptage, il faut changer manuellement le nom de l'image dans la BDD pour qu'il soit le même que l'image que l'on a importé, sinon l'image ne s'affichera pas)
- affichage des articles les plus récents dans la page "articles"
- RGPD et mentions légales
- affichage de chaque article avec sa thématique
- fil d'arianne fonctionnel
- ajout d'article fonctionnel depuis la nav bar
- mot de passe de 8 caractères minimum lors de l'inscription
- api google implémentée mais ne s'actualise pas en fonction de l'article
- login et inscription fonctionnent. Renvoie un message d'erreur si l'on essaye de se créer un compte avec une adresse mail déjà présente.
- message d'erreur et de connexion réussie lors de la connexion
- Bouton se déconnecter marche

=> ici la liste des features non implémentées :
- pop up pour l'acceptation des cookies
- mise en ligne du site sur le serveur de l'IUT
- json mis en place pour accessibilité du site, période de l'événement mais qui ne marchent que pour le premier article
- likes non fonctionnels

## Panel Admin

Accessible depuis : barre de navigation --> Dashboard

## Panel front

http://localhost:8888/index.php
Pour écrire un article : Accessible depuis : dashboard --> écrire un article ou barre de navigation --> écrire un article 

**Identifiant localhost**

> super-admin :
> email : ADMIN@2  
> pass : ADMIN
> mdp : ADMIN  

> membre :
> email : MEMBRE@	  
> pass : MEMBRE
> mdp : MEMBRE  

> modérateur :
> email : MODO@	  
> pass : MODO
> mdp : MODO

Vous pouvez vous créer un compte avec vos propres identifiants. Depuis le compte administrateur vous pouvez ensuite éditer le compte créer et lui donner le statut que vous souhaitez 

**Identifiant url iut (si différent de localhost)**

> super-admin :
> email : ??  
> pass : ??
> mdp : ???  

> membre :
> email : ??  
> pass : ??
> mdp : ???  

### Structure et règles de la Base de données

La base de données fournie :
=> la votre épurée et mise à jour

### Pour les utilisteurs/super-admin

> vous pouvez changer le statut d'un membre dans edit member

### Pour les utilisteurs/membres

> Ne pas oublier de se connecter une fois le compte créé

### Pour les articles

> Tout est fonctionnel. Pour voir l'image il faut changer son nom dans la base de donnée pour lui donner le même que celle que l'on a upload

### Pour les commentaires

> Tout marche. Le modérateur et administrateur peuvent en supprimer

### Pour les likes

> Ne marchent pas

### Pour les autres éléments petinents à nous préciser






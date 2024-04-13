# MyShoes app


MyShoes est une application pour exposer vos plus belles chaussures. 
Visitez l'application pour admirer les expositions du monde entier!
Ou 
Devenez membre, créez votre propre placard et partagez des expositions! 

## Prérequis
- L'interpréteur Php
- Le gestionnaire de paquetage Composer
- L'utilitaire symfony CLI
- Un navigateur web

## Lancer l'application

Pour ouvrir l'application, utilisez un terminal pour lancer le serveur depuis le dossier "myshoes" via la commande: `symfony server:start`

Ensuite, entrez le lien "localhost:8000/MyShoes" dans votre navigateur pour ouvrir la page de Bienvenue de l'application.
Vous pouvez maintenant naviguer en ayant un des rôles suivants:
- Anonyme
- User (connectez vous avec l'email:asma@localhost et le mdp:asma)
- Admin (connectez vous avec l'email:sarra@localhost et le mdp: sarra) ; les admins ont également accès à une interface Easyadmin via le lien "localhost:8000/admin"

NB: Après avoir entré les informations d'authentification dans la page de connexion, appuyer sur le bouton "Confirmer" avec la souris pour confirmer (la touche entrée du clavier ne fonctionne pas)

## Architecture de l'application
L'application a plusieurs entités:
1) Membre
chaque Membre a un seul Placard qui contient plusieurs Chaussures, et a aussi plusieurs Expositions.
Attributs:
Nom
placard
expositions

2) [objet] Chaussure
chaque Chaussure appartient forcement à un Placard, et un seul. Un Placard peut contenir plusieurs Chaussures. Une Chaussure peut appartenir à plusieurs expositions.
Attributs:
titre 
categorie (Bottes, baskets, sandales, tongues)
marque: (adidas, nike, puma, carmela, chantal, geox)
couleur
placard
expositions

3) [Inventaire] Placard
Un Placard appartient forcement à un Membre, et un seul. Un Placard peut contenir plusieurs Chaussures.
Attributs:
NomPlacard
RefPlacard
chaussures
membre

4) [Galeries] Expositions
Une Exposition peut contenir plusieurs Chaussures. Une Chaussure peut appartenir a plusieures Expositions.
Attributs:
Titre  (exples: elegante en hiver / fitness / rock&roll / confort)
Publiee 
membre
chaussures

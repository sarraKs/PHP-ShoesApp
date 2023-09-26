MyShoes

L'application myshoes a plusieurs entités:
1) membre
chaque membre a un seul Placard qui contient plusieurs chaussures, et a aussi plusieurs Expositions

Nom
prenom
Placard
Expositions


2) [objet] chaussure
chaque chaussure appartient forcement à un placard

categorie: Bottes, baskets, sandales, tongues
marque: adidas, nike, puma, carmela, chantal, geox
couleur
placard

3) [Inventaire] Placard
Chaque Placard appartient forcement à un membre

NomPlacard
RefPlacard
chaussures
membre
-> association 1-1 avec membre
-> association 1-N avec chaussure

4) [Galeries] Expositions
une exposition peut contenir plusieurs chaussures. une chaussure peut appartenir a plusieures expositions

Titre  (exples: elegante en hiver / fitness / rock&roll / confort )
chaussures
-> association N-N avec chaussure


5) [marque page]

6) [commentaire]
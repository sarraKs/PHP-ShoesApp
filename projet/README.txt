MyShoes

L'application myshoes a plusieurs entités:
1) Membre
chaque Membre a un seul Placard qui contient plusieurs Chaussures, et a aussi plusieurs Expositions.
attributs:
Nom
placard
expositions


2) [objet] Chaussure
chaque Chaussure appartient forcement à un Placard, et un seul. Un Placard peut contenir plusieurs Chaussures.
attributs:
categorie (Bottes, baskets, sandales, tongues)
marque: (adidas, nike, puma, carmela, chantal, geox)
couleur
placard


3) [Inventaire] Placard
Un Placard appartient forcement à un Membre, et un seul. Un Placard peut contenir plusieurs Chaussures.
attributs:
NomPlacard
RefPlacard
chaussures
membre


4) [Galeries] Expositions
Une Exposition peut contenir plusieurs Chaussures. Une Chaussure peut appartenir a plusieures Expositions
attributs:
Titre  (exples: elegante en hiver / fitness / rock&roll / confort)
chaussures


5) [marque page]

6) [commentaire]
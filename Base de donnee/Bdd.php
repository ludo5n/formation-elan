exercice1:
1)Nombre de gaulois par lieu (trié par nombre de gaulois décroissant)
SELECT lieu.NOM_LIEU,COUNT(villageois.ID_LIEU) AS nb_habitants 
FROM villageois, lieu
WHERE villageois.ID_LIEU = lieu.ID_LIEU
GROUP BY lieu.NOM_LIEU
ORDER BY nb_habitants DESC ;

2)Nom des gaulois + spécialité + village
SELECT villageois.NOM, specialite.NOM_SPECIALITE, lieu.NOM_LIEU 
FROM villageois, specialite, lieu
WHERE villageois.ID_SPECIALITE = specialite.ID_SPECIALITE
AND villageois.ID_LIEU = lieu.ID_LIEU
ORDER BY villageois.NOM ASC ;

3)Nom  des  spécialités  avec  nombre  de  gaulois  par  spécialité  (trié  par  nombre  de  gaulois décroissant)
SELECT s.NOM_SPECIALITE, COUNT(v.ID_VILLAGEOIS) AS nb_gaulois
FROM villageois v, specialite s
WHERE v.ID_SPECIALITE = s.ID_SPECIALITE
GROUP BY s.NOM_SPECIALITE
ORDER BY nb_gaulois DESC ;

4)Nom des batailles + lieu de la plus récente à la plus ancienne (dates au format jj/mm/aaaa)
SELECT b.NOM_BATAILLE,DATE_FORMAT(b.DATE_BATAILLE ,"%d/%m/%Y"),l.NOM_LIEU
FROM bataille b,lieu l 
WHERE b.ID_lieu=l.ID_LIEU
ORDER BY DATE_BATAILLE DESC;

 5)Nom des potions + coût de réalisation de la potion (trié par coût décroissant)
 <?php
 SELECT p.NOM_POTION,NOM_INGREDIENT,i.COUT_INGREDIENT,c.QTE
 FROM potion p ,ingredient i,compose c
 WHERE c.ID_INGREDIENT=i.ID_INGREDIENT
 ORDER BY COUT_INGREDIENT DESC;

 coorection:
 SELECT potion.NOM_POTION, SUM(compose.QTE * ingredient.COUT_INGREDIENT) AS cout
 FROM ingredient, compose, potionWHERE compose.ID_POTION = potion.ID_POTION
 AND compose.ID_INGREDIENT = ingredient.ID_INGREDIENT
 GROUP BY potion.NOM_POTION
 ORDER BY cout DESC ;
 
 6)Nom des ingrédients + coût + quantité de chaque ingrédient qui composent la potion 'Potion V'
 SELECT potion.NOM_POTION, ingredient.NOM_INGREDIENT, ingredient.COUT_INGREDIENT, compose.QTE 
FROM potion, ingredient, compose 
WHERE ingredient.ID_INGREDIENT = compose.ID_INGREDIENT 
AND potion.ID_POTION = compose.ID_POTION 
AND potion.NOM_POTION = 'Potion V' 

 7)Nom du ou des villageois qui ont pris le plus de casques dans la bataille 'Babaorum'
 SELECT villageois.NOM, SUM(prise_casque.QTE) AS nb_casques
FROM villageois, bataille, prise_casque 
WHERE prise_casque.ID_VILLAGEOIS = villageois.ID_VILLAGEOIS 
AND prise_casque.ID_BATAILLE = bataille.ID_BATAILLE
AND bataille.NOM_BATAILLE = 'Babaorum'
GROUP BY villageois.NOM
ORDER BY nb_casques DESC
LIMIT 1 ;

autre methode sans utilisé le LIMIT:
CREATE VIEW scores_casques_bataille ASSELECT villageois.NOM, bataille.NOM_BATAILLE, SUM(prise_casque.QTE) AS nb_casques
FROM villageois, bataille, prise_casque 
WHERE prise_casque.ID_VILLAGEOIS = villageois.ID_VILLAGEOIS
AND prise_casque.ID_BATAILLE = bataille.ID_BATAILLE
GROUP BY villageois.NOM, bataille.NOM_BATAILLE
ORDER BY villageois.NOM ASC, bataille.NOM_BATAILLE ASC ;

SELECT villageois.NOM, bataille.NOM_BATAILLE, SUM(prise_casque.QTE) AS nb_casques
FROM villageois, bataille, prise_casque
 WHERE prise_casque.ID_VILLAGEOIS = villageois.ID_VILLAGEOISAND prise_casque.ID_BATAILLE = bataille.ID_BATAILLEGROUP BY villageois.NOM, bataille.NOM_BATAILLE
 HAVING nb_casques = (SELECT MAX(scores_casques_bataille.nb_casques)
  FROM scores_casques_bataille WHERE scores_casques_bataille.NOM_BATAILLE = 'Babaorum') ;

 8)Nom des villageois et la quantité de potion bue (en les classant du plus grand buveur au plus petit)
 SELECT villageois.nom, potion.NOM_POTION, SUM(boit.DOSE) AS nb_doses
 FROM villageois, potion, boit
 WHERE boit.ID_VILLAGEOIS = villageois.ID_VILLAGEOISAND boit.ID_POTION = potion.ID_POTION
 GROUP BY villageois.nom, potion.NOM_POTION
 ORDER BY nb_doses DESC ;

 sans distingué les potion on a : 
 SELECT villageois.nom, SUM(boit.DOSE) AS nb_doses
 FROM villageois, boit
 WHERE boit.ID_VILLAGEOIS = villageois.ID_VILLAGEOIS
 GROUP BY villageois.nom
 ORDER BY nb_doses DESC ;

 9)Nom de la bataille où le nombre de casques pris a été le plus important
SELECT bataille.nom_bataille,COUNT(prise_casque.qte)AS quantite 
FROM bataille,prise_casque 
WHERE bataille.id_bataille = prise_casque.id_bataille 
GROUP BY bataille.nom_bataille 
ORDER BY quantite DESC; 

correction
SELECT nom_bataille, SUM(qte) ASnb_casques
FROM bataille b, prise_casque pc
WHERE b.id_bataille = pc.id_bataille
GROUP BY nom_bataille
ORDERBY nb_casques DESC
LIMIT 1; // limit est pour determiné un resultat parmis les information demandé

 10)Combien existe-t-il de casques de chaque type et quel est leur coût total ? (classés par nombre décroissant)
 SELECT casque.id_type_casque,count(type_casque.id_type_casque),sum(casque.cout_casque)AS cout 
FROM casque,type_casque 
WHERE casque.id_type_casque = type_casque.id_type_casque 
GROUP BY type_casque.id_type_casque 
ORDER BY cout desc; 

 11)Noms des potions dont un des ingrédients est la cerise
 SELECTnom_potion
 FROM potion p, compose c, ingredient i
 WHERE p.id_potion = c.id_potion 
 AND i.id_ingredient = c.id_ingredient 
 AND LOWER(nom_ingredient) = 'cerise' 

 12)Nom du / des village(s) possédant le plus d habitants

 SELECT nom_lieu, COUNT(l.id_lieu) AS nb 
 FROM villageois v, lieu l 
 WHERE v.id_lieu = l.id_lieu 
 GROUP BY nom_lieu
 HAVING COUNT(l.id_lieu) >= ALL(SELECT COUNT(l.id_lieu) AS nb // having est comme un where dans une sous requete
 FROM villageois v, lieu l
  WHERE v.id_lieu = l.id_lieu 
   GROUP BY nom_lieu);

 13)Noms des villageois qui n ont jamais bu de potion
 SELECT nom
 FROM villageois v
 WHEREv.id_villageois NOT IN(SELECT b.id_villageois FROM boit b); //not in ne fait pas parti,plus optimisé que not exist
 14)Noms des villages qui contiennent la particule 'um'
 SELECTnom_lieuFROMlieuWHEREnom_lieu LIKE'%um%';
 15)Nom du / des villageois qui n'ont pas le droit de boire la potion 'Rajeunissement II'
 
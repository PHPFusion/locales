<?php
$locale['BLS_000'] = "Liste noire"; //406
//Blacklist message
$locale['BLS_010'] = "E-mail ou adresse IP invalide.";
$locale['BLS_011'] = "Ajout des utilisateurs à la liste noire.";
$locale['BLS_012'] = "Liste noire d’utilisateur modifiée.";
$locale['BLS_013'] = "Utilisateur supprimé de la liste noire"; //401
$locale['BLS_014'] = "Êtes-vous sûr de vouloir supprimer cette entrée ?";
$locale['BLS_015'] = "La liste noire est actuellement vide."; //465
$locale['BLS_016'] = "L'adresse e-mail de la liste noire n'est pas valide."; //405

$locale['BLS_020'] = "Liste noire de l'utilisateur"; //420
$locale['BLS_021'] = "Modifier un utilisateur de la liste noire"; //421
$locale['BLS_022'] = "Ajouter un utilisateur dans la liste noire";
$locale['BLS_023'] = "Affichage actuel de %d entrées sur %d de la liste noire.";

$locale['BLS_030'] = "Informations de la liste noire"; //461
$locale['BLS_031'] = "Admin"; //467
$locale['BLS_032'] = "Date ";  //468
$locale['BLS_033'] = "Options"; //462
$locale['BLS_034'] = "Adresse IP de la liste noire : [STRONG]ou[/STRONG]"; //441
$locale['BLS_035'] = "Liste noire des adresses e-mail"; //442
$locale['BLS_036'] = "Raison de la liste noire"; //443
$locale['BLS_037'] = "Liste noire d'utilisateur";  //444
$locale['BLS_038'] = "Mise à jour";
$locale['BLS_039'] = "Sélectionner tout";

$locale['BLS_MS'] = "La saisie d'une adresse IP empêchera un utilisateur dont l'adresse IP correspond à l'entrée de visiter ce site.
Vous pouvez entrer une IP pleine, par exemple <em>123.45.67.89.</em>, ou une IP partielle, e. . 
123.45.67</em> ou <em>123.45</em>.
Veuillez noter que les adresses IPv6 sont converties dans leur formulaire de longueur complète sur ce site,
e.g. <em>ABCD:1234:5:6:7:8:9:FF</em> sera affiché comme <em> ABCD:1234:0005:0006:0007:0008:0009:00FF</em>.
Les adresses IP mixtes (celles qui contiennent à la fois IPv6 et IPv4) ne seront pas vérifiées pour une correspondance partielle.
<br /><br />
Entrer une adresse e-mail empêchera les membres de s'inscrire à cette adresse.
Vous pouvez entrer une adresse e-mail complète. . <em>foo@bar.com</em>, ou un domaine de messagerie, par exemple <em>bar.com</em>.<br /><br />

% - correspond à n'importe quelle chaîne.<br /><br />

%. .%.%@domain.tld bannit toute adresse contenant au moins 3 points.<br />
 %+%@domain.tld interdit toute adresse qui contient au moins un signe plus.<br />
%@domain.tld bannit toute adresse de domain.tld<br />
%.domain.tld bannit tous les sous-domaines de domaine .tld<br />
%payday% interdit toute adresse qui contient le mot \"payday\" qui était très souvent sur les sites.<br />
domain.tld est un alias de %@domain.tld pour le rendre compatible avec les règles définies dans v7.<br />"; //440

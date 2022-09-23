<?php
$locale['setup_0000'] = "PHPFusion Install";
$locale['setup_0002'] = "Bienvenue dans l'installation de PHPFusion";
$locale['setup_0003'] = "Le guide de l'installateur vous guidera à travers les étapes nécessaires pour installer PHPFusion CMS sur votre serveur. Si vous avez besoin d’aide, veuillez consulter notre <a class='strong' href='https://phpfusion.com/infusions/wiki/documentation.php?page_id=216' target='_blank'>Documentation d’installation en ligne</a>.";
$locale['setup_0005'] = " J'ai lu et accepté les <a href='https://phpfusion.com/licensing/?agpl' target='_blank'>Conditions d'utilisation de PHPFusion</a>";
$locale['setup_0006'] = "PHPFusion 9 requiert au moins PHP 7.0. Voir la page <a href='https://phpfusion.com/infusions/wiki/documentation.php?page_id=215'>exigences système</a> pour plus d'informations.";
$locale['setup_0007'] = "Les systèmes avec OPCache installé doivent avoir <a href=\"http://php.net/manual/en/opcache.configuration.php#ini.opcache.save-comments\">opcache.save_comments</a> activé.";
$locale['setup_5000'] = "Pour utiliser PHPFusion, vous devez vérifier et accepter les termes de PHPFusion.";
$locale['setup_0010'] = "Version actuelle - ";
$locale['setup_0011'] = "fr";
$locale['setup_0012'] = "utf-8";
$locale['setup_0012a'] = "ltr";
$locale['setup_0020'] = "Mise à jour de PHPFusion";
$locale['setup_0022'] = "Bienvenue dans le service de mise à jour de PHPFusion";
$locale['setup_0023'] = "Le service de mise à niveau vous guidera à travers les étapes requises pour mettre à niveau le CMS PHPFusion sur votre serveur. Veuillez suivre ces étapes et vérifier chaque information requise.";
$locale['setup_0050'] = "Serveur Web";
$locale['setup_0051'] = "Version PHP";
$locale['setup_0052'] = "Extension PHP";
$locale['setup_0053'] = "Support d'OPCache";
$locale['setup_0054'] = "Support de base de données PDO";
$locale['setup_0055'] = "Limite de mémoire de PHP";
$locale['setup_0056'] = "Exigences pour la vérification des fichiers";
$locale['setup_0101'] = "Introduction";
$locale['setup_0102'] = "System Requirements";
$locale['setup_0103'] = "Paramètres de la base de données";
$locale['setup_0104'] = "Configuration de la base de données";
$locale['setup_0105'] = "Configurer le système de base";
$locale['setup_0106'] = "Détails de l'administrateur principal";
$locale['setup_0107'] = "Paramètres finaux";
$locale['setup_0109'] = "La version minimale d'Apache nécessaire pour exécuter PHPFusion sans mod_rewrite est 2.4.";
$locale['setup_0110'] = "En raison des paramètres pour les jetons du serveur dans httpd.confg, il est impossible de déterminer la version d'Apache sans mod_rewrite, une version minimum de 2.4 est nécessaire.";
$locale['setup_0112'] = "La fonction phpinfo() a été désactivée pour des raisons de sécurité. Pour consulter les informations phpinfo() de votre serveur, modifiez vos paramètres PHP ou contactez l'administrateur de votre serveur.";
$locale['setup_0113'] = "Votre installation de PHP est trop ancienne. PHPFusion requiert au moins un minimum de 7.0. fournit une protection intégrée par injection SQL pour les bases de données mysql. Il est recommandé de mettre à jour.";
$locale['setup_0114'] = "PHPFusion nécessite d'activer l'extension PHP dans la liste suivante";
$locale['setup_0115'] = "Activer";
$locale['setup_0115a'] = "Non activé";
$locale['setup_0116'] = "Le cache PHP OPCache peut améliorer considérablement les performances de votre site. Il est <strong>fortement recommandé</strong> d'avoir <a href='http://php.net/manual/opcache.installation.php' target='_blank'>OPCache</a> installé sur votre serveur.";
$locale['setup_0118'] = "Votre serveur web ne semble pas prendre en charge PDO (PHP Data Objects). Demandez à votre hébergeur s'ils prennent en charge l'extension PDO native.";
$locale['setup_0119a'] = "Pensez à augmenter votre limite de mémoire PHP à %memory_minimum_limit pour éviter des erreurs dans le processus d'installation.";
$locale['setup_0119b'] = "Augmentez la limite de mémoire en modifiant le paramètre memory_limit dans le fichier [CFG_FILE_PATH] puis redémarrez votre serveur web (ou contactez votre administrateur système ou votre hébergeur pour obtenir de l'aide).";
$locale['setup_0119c'] = "Contactez votre administrateur système ou votre hébergeur pour une assistance pour l'augmentation de votre limite de mémoire PHP.";
// Buttons
$locale['setup_0120'] = "Terminer la configuration";
$locale['setup_0121'] = "Accepter & continuer";
$locale['setup_0122'] = "Essayez encore";
$locale['setup_0124'] = "Aller aux options de récupération";
$locale['setup_0125'] = "Désinstallation en cours. Veuillez patienter...";
$locale['setup_0130'] = "Paramètres Xdebug";
$locale['setup_0131'] = "xdebug.max_nesting_level est réglé à";
$locale['setup_0132'] = "Définissez {%code%} dans votre configuration PHP car certaines pages de votre site PHP Fusion ne fonctionneront pas lorsque ce paramètre sera trop faible.";
$locale['setup_0134'] = "Tous les fichiers requis ont répondu aux exigences en écriture du fichier.";
$locale['setup_0135'] = "Pour que la configuration puisse continuer, les fichiers et dossiers suivants doivent être accessibles en écriture. Veuillez modifier les fichiers à 755 ou 777 pour continuer";
$locale['setup_0136'] = "Non accessible en écriture (erreur)";
$locale['setup_0137'] = "Accessible en écriture (Passe)";
$locale['setup_0138'] = "Connexion à la base de données établie";
$locale['setup_0139'] = "Sélection de colonne de la base de données établie";
$locale['setup_0140'] = "La base de données est disponible et prête à être installée";
$locale['setup_0141'] = "Permissions de la base de données et accès vérifiés";
$locale['setup_0142'] = "fichier config.php créé";
$locale['setup_0143'] = "Le préfixe de table spécifié est déjà utilisé et est en cours d'exécution. L'installateur procédera à la mise à jour des différences si nécessaire";
$locale['setup_0144'] = "Diagnostics de la base de données terminés";
// Step 1
$locale['setup_1000'] = "Sélectionnez votre langue";
$locale['setup_1001'] = "Télécharger plus de langue locales depuis <a href='https://phpfusion.com/translations/' target='_blank'><strong>le site de support officiel PHP Fusion</strong></a>";
$locale['setup_1002'] = "Bienvenue en mode de récupération PHP Fusion 9.";
$locale['setup_1003'] = "Nous avons détecté qu'un système existant est installé. Veuillez choisir l'un des éléments suivants pour continuer.";
$locale['setup_1004'] = "Nettoyer l'installation";
$locale['setup_1005'] = "Vous pouvez désinstaller et nettoyer votre base de données et recommencer une installation propre.";
$locale['setup_1006'] = "VEUILLEZ ENREGISTRER VOTRE CONFIG.PHP. IL SERA SUPPRIMER DU SYSTÈME DURANT LA DÉSINSTALLATION.";
$locale['setup_1007'] = "Désinstaller et recommencer";
$locale['setup_1008'] = "Installateur de système de base";
$locale['setup_1009'] = "Changer les configurations du système de base.";
$locale['setup_1010'] = "Aller à l'installateur système";
$locale['setup_1011'] = "Modifier les détails du compte principal";
$locale['setup_1012'] = "Changez les détails du système Super Administrator sans devoir récupérer le mot de passe ou transférer la propriété du compte SA à une autre personne.";
$locale['setup_1013'] = "Changer les détails du Super Admin";
$locale['setup_1014'] = "Reconstruire le fichier .htaccess";
$locale['setup_1015'] = "Ignorer le fichier actuel et le remplacer par une version standard du fichier .htaccess";
$locale['setup_1017'] = "Annuler et quitter ce programme d'installation";
$locale['setup_1018'] = "Vous pouvez quitter cet installateur dès maintenant en cliquant sur le bouton ci-dessous. Cela va renommer votre fichier config_temp.php à nouveau en config.php.";
$locale['setup_1019'] = "Quitter le programme d'installation";
$locale['setup_1020'] = "Fichier .htaccess créé/mis à jour";
// Step 2
$locale['setup_1090'] = "Fichiers";
$locale['setup_1091'] = "Statut";
$locale['setup_1092'] = "Configuration de la base de données et pilote";
$locale['setup_1106'] = "Diagnostiques de la structure du serveur et des fichiers";
// Step 3 - Access criteria
$locale['setup_1200'] = "Paramètres de la base de données et chemins du serveur";
$locale['setup_1201'] = "Veuillez entrer les paramètres d'accès à votre base de données MySQL.";
$locale['setup_1202'] = "Nom d'hôte de la base de données :";
$locale['setup_1202a'] = "Port de la base de données :";
$locale['setup_1202b'] = "Laisser vide si vous n'utilisez pas un autre port";
$locale['setup_1203'] = "Nom d'utilisateur de la base de données :";
$locale['setup_1204'] = "Mot de passe de la base de données :";
$locale['setup_1205'] = "Nom de la base de données :";
$locale['setup_1206'] = "Préfixe de la table :";
$locale['setup_1207'] = "Préfixe du cookie :";
$locale['setup_1208'] = "Pilote de base de données";
// Step 4 - Database Setup
$locale['setup_1210'] = "Erreur d'installation de PHP Fusion. Veuillez redémarrer l'installateur.";
$locale['setup_1211'] = "L'installation de PHP Fusion est terminée. Veuillez passer à l'étape suivante.";
$locale['setup_1212'] = "Configurations du Site et du Super Administrateur";
$locale['setup_1213'] = "Détails de l'information du site";
$locale['setup_1214'] = "Nom du site";
$locale['setup_1215'] = "Site Web propulsé par PHPFusion";
$locale['setup_1216'] = "PHPFusion est un système de gestion de contenu open source léger (CMS) écrit en PHP.";
$locale['setup_1217'] = "Votre compte est mis à jour. Veuillez utiliser les nouveaux identifiants à partir de maintenant.";
$locale['setup_1220'] = "Le nom de la base de données que vous voulez exécuter PHPFusion";
$locale['setup_1221'] = "Votre identifiant MYSQL";
$locale['setup_1222'] = "...et votre mot de passe MYSQL";
$locale['setup_1223'] = "Rendre cela unique pour sécuriser votre base de données";
$locale['setup_1224'] = "Préfixe d'identification des cookies du navigateur";
$locale['setup_1225'] = "e.g. localhost";
$locale['setup_1307'] = "Assurez-vous que le fichier config.php est accessible en écriture.";
$locale['setup_1310'] = "Impossible de se connecter à la base de données MySQL.";
$locale['setup_1311'] = "La base de données MySQL spécifiée n'existe pas.";
$locale['setup_1313'] = "Le préfixe de table spécifié est déjà utilisé et est en cours d'exécution. Aucune table ne sera installée. Veuillez recommencer ou passer à l'étape suivante.";
$locale['setup_1315'] = "Assurez-vous que votre utilisateur MySQL a la permission de lire, d'écrire et de supprimer la base de données sélectionnée.";
$locale['setup_1317'] = "Veuillez vous assurer que vous avez rempli tous les champs de connexion MySQL.";
// Step 6 - Super Admin login
$locale['setup_1500'] = "Compte principal Super Admin";
$locale['setup_1501'] = "Configurez les détails de votre compte Super Administrateur.";
$locale['setup_1504'] = "Nom d'utilisateur :";
$locale['setup_1505'] = "Mot de passe de connexion :";
$locale['setup_1506'] = "Répéter le mot de passe de connexion :";
$locale['setup_1507'] = "Mot de passe admin :";
$locale['setup_1508'] = "Répéter le mot de passe admin :";
$locale['setup_1509'] = "Adresse E-mail :";
$locale['setup_1510'] = "Adresse e-mail du site Web:";
$locale['setup_1511'] = "Sélectionnez la région du site web :";
$locale['setup_1512'] = "Installation de la langue du site :";
$locale['setup_1513'] = "Nom du propriétaire du site";
// Progress Reports
$locale['setup_1600'] = "Installation ";
$locale['setup_1601'] = "Mise à jour de la structure de la table sur ";
$locale['setup_1602'] = "Ajout d'une nouvelle colonne sur ";
$locale['setup_1603'] = "Remplissage des données ";
// Step 6 - User details validation
$locale['setup_5010'] = "Le nom d'utilisateur contient des caractères invalides.";
$locale['setup_5011'] = "Le champ Nom d'utilisateur ne peut pas être laissé vide.";
$locale['setup_5012'] = "Vos deux mots de passe de connexion ne correspondent pas.";
$locale['setup_5013'] = "Mot de passe de connexion invalide, veuillez utiliser uniquement des caractères alphanumériques.<br />Le mot de passe doit comporter au moins 8 caractères.";
$locale['setup_5015'] = "Vos deux mots de passe admin ne correspondent pas.";
$locale['setup_5016'] = "Votre mot de passe d'utilisateur et votre mot de passe admin doivent être différents.";
$locale['setup_5017'] = "Mot de passe administrateur invalide, veuillez utiliser uniquement des caractères alphanumériques.<br />Le mot de passe doit comporter au moins 8 caractères.";
$locale['setup_5020'] = "L'adresse e-mail ne peut pas être laissée vide.";
// Step 6 - Admin Panels
$locale['setup_3000'] = "Administrateurs";
$locale['setup_3002'] = "Articles";
$locale['setup_3003'] = "Bannières";
$locale['setup_3004'] = "Codes BB";
$locale['setup_3005'] = "Liste noire";
$locale['setup_3006'] = "Commentaires";
$locale['setup_3007'] = "Pages personnalisées";
$locale['setup_3008'] = "Sauvegarde de la base de données";
$locale['setup_3010'] = "Téléchargements";
$locale['setup_3011'] = "FAQs";
$locale['setup_3012'] = "Forums";
$locale['setup_3013'] = "Images";
$locale['setup_3014'] = "Infusions";
$locale['setup_3015'] = "Panneaux d'infusion";
$locale['setup_3016'] = "Membres";
$locale['setup_3018'] = "News";
$locale['setup_3019'] = "Panneaux";
$locale['setup_3020'] = "Galerie d'albums";
$locale['setup_3021'] = "Server Info";
$locale['setup_3022'] = "Votes";
$locale['setup_3023'] = "Lien du site";
$locale['setup_3024'] = "Émoticône";
$locale['setup_3026'] = "Mettre à jour";
$locale['setup_3027'] = "Groupes utilisateurs";
$locale['setup_3029'] = "Liens Internet";
$locale['setup_3030'] = "Principal";
$locale['setup_3031'] = "Heure et Date";
$locale['setup_3033'] = "Inscription";
$locale['setup_3035'] = "Autre";
$locale['setup_3036'] = "Message privé";
$locale['setup_3037'] = "Champs utilisateur";
$locale['setup_3038'] = "Rangs du forum";
$locale['setup_3041'] = "Gestion d'utilisateur";
$locale['setup_3044'] = "Sécurité";
$locale['setup_3047'] = "Réinitialisation du mot de passe admin";
$locale['setup_3048'] = "Journal des erreurs";
$locale['setup_3049'] = "Journal de l'utilisateur";
$locale['setup_3050'] = "robots.txt";
$locale['setup_3051'] = "Paramètres de langue";
$locale['setup_3052'] = "Liens permanents";
$locale['setup_3055'] = "Blog";
$locale['setup_3056'] = "Gestionnaire de thème";
$locale['setup_3057'] = "Outil de migration";
$locale['setup_3058'] = "Paramètres de thème";
$locale['setup_3059'] = "Gestionnaire de fichiers Fusion";
// Multilanguage table rights
$locale['setup_3200'] = "Articles";
$locale['setup_3201'] = "Pages personnalisées";
$locale['setup_3202'] = "Téléchargements";
$locale['setup_3203'] = "FAQs";
$locale['setup_3204'] = "Forums";
$locale['setup_3205'] = "News";
$locale['setup_3206'] = "Galerie";
$locale['setup_3207'] = "Votes";
$locale['setup_3208'] = "Modèles d'e-mail";
$locale['setup_3209'] = "Liens Internet";
$locale['setup_3210'] = "Liens du site";
$locale['setup_3211'] = "Panneaux";
$locale['setup_3212'] = "Rangs du forum";
$locale['setup_3213'] = "Blog";
// Step 6 - Navigation Links
$locale['setup_3300'] = "Accueil";
$locale['setup_3302'] = "Téléchargements";
$locale['setup_3303'] = "FAQ";
$locale['setup_3304'] = "Forum de discussion";
$locale['setup_3305'] = "Contact";
$locale['setup_3307'] = "Liens Internet";
$locale['setup_3308'] = "Galerie";
$locale['setup_3309'] = "Recherche";
$locale['setup_3310'] = "Soumettre un lien";
$locale['setup_3311'] = "Soumettre une News";
$locale['setup_3312'] = "Soumettre un autre article";
$locale['setup_3313'] = "Soumettre une photo";
$locale['setup_3314'] = "Soumettre un téléchargement";
$locale['setup_3315'] = "Contributions";
$locale['setup_3316'] = "Boîte de discussion";
$locale['setup_3317'] = "Soumettre un blog";
$locale['setup_3318'] = "Panneau d'archives du blog";
$locale['setup_3319'] = "Dernières discussions";
$locale['setup_3320'] = "Discussions participatives";
$locale['setup_3321'] = "Sujets suivis";
$locale['setup_3322'] = "Fils de discussion sans réponse";
$locale['setup_3323'] = "Questions en suspens";
$locale['setup_3324'] = "Commencer un nouveau sujet";
$locale['setup_3325'] = "Derniers articles";
$locale['setup_3326'] = "Derniers Téléchargements";
$locale['setup_3327'] = "Soumettre une FAQ";
// Stage 6 - Panels
$locale['setup_3400'] = "Navigation";
$locale['setup_3401'] = "Utilisateurs en ligne";
$locale['setup_3402'] = "Sujets du forum";
$locale['setup_3404'] = "Message de bienvenue";
$locale['setup_3405'] = "Liste des sujets du forum";
$locale['setup_3406'] = "Informations sur l'utilisateur";
$locale['setup_3407'] = "Sondage des membres";
$locale['setup_3408'] = "Flux RSS";
// Stage 6 - News Categories
$locale['setup_3500'] = "Bugs";
$locale['setup_3501'] = "Téléchargements";
$locale['setup_3502'] = "Jeux";
$locale['setup_3503'] = "Graphiques";
$locale['setup_3504'] = "Matériel";
$locale['setup_3505'] = "Journal";
$locale['setup_3506'] = "Membres";
$locale['setup_3507'] = "Modérateurs";
$locale['setup_3508'] = "Films";
$locale['setup_3509'] = "Réseau";
$locale['setup_3510'] = "News";
$locale['setup_3511'] = "PHPFusion";
$locale['setup_3512'] = "Sécurité";
$locale['setup_3513'] = "Logiciels";
$locale['setup_3514'] = "Thèmes";
$locale['setup_3515'] = "Windows";
// Stage 6 - Sample Forum Ranks
$locale['setup_3600'] = "Super Admin";
$locale['setup_3601'] = "Admin";
$locale['setup_3602'] = "Modérateur";
$locale['setup_3603'] = "Débutant";
$locale['setup_3604'] = "Membre Junior";
$locale['setup_3605'] = "Membre";
$locale['setup_3606'] = "Membre senior";
$locale['setup_3607'] = "Membre vétéran";
$locale['setup_3608'] = "Fusionner";
// Stage 6 - Sample Smileys
$locale['setup_3620'] = "Sourire";
$locale['setup_3621'] = "Clin d'oeil";
$locale['setup_3622'] = "Triste";
$locale['setup_3623'] = "Sourciller";
$locale['setup_3624'] = "Choc";
$locale['setup_3625'] = "Pfft";
$locale['setup_3626'] = "Cool";
$locale['setup_3627'] = "Grimace";
$locale['setup_3628'] = "Fâché";
$locale['setup_3629'] = "J'aime";
// Stage 6 - User Field Categories
$locale['setup_3640'] = "Profil";
$locale['setup_3641'] = "Information Contact";
$locale['setup_3642'] = "Informations diverses";
$locale['setup_3643'] = "Options";
$locale['setup_3644'] = "Statistiques";
$locale['setup_3645'] = "Confidentialité";
// Stage 6 - Forum Tags
$locale['setup_3660'] = "Information du site";
$locale['setup_3661'] = "Discussions concernant la gestion de ce site web";

// Stage 6 - User Fields
require_once __DIR__."/user_fields/user_birthdate.php";
require_once __DIR__."/user_fields/user_icq.php";
require_once __DIR__."/user_fields/user_location.php";
require_once __DIR__."/user_fields/user_sig.php";
require_once __DIR__."/user_fields/user_skype.php";
require_once __DIR__."/user_fields/user_theme.php";
require_once __DIR__."/user_fields/user_web.php";
require_once __DIR__."/user_fields/user_timezone.php";
require_once __DIR__."/user_fields/user_blacklist.php";

// Welcome message
$locale['setup_3650'] = "Bienvenue sur votre site";
// Final message
$locale['setup_1700'] = "L'installation est terminée";
$locale['setup_1701'] = "PHP Fusion 9 est maintenant prêt à être utilisé. Cliquez sur Terminer pour réécrire votre fichier config_temp.php dans config.php<br/>";
$locale['setup_1702'] = "<strong>Remarque : Après avoir entré votre site vous devriez supprimer le fichier /install.php et chmod votre config.php à 0644 pour des raisons de sécurité.</strong>";
$locale['setup_1703'] = "Merci d'avoir choisi PHPFusion.";
// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['setup_3800'] = "Modèles d'e-mail";
$locale['setup_3801'] = "Notification sur le nouveau MP";
$locale['setup_3802'] = "Vous avez un nouveau message privé de [USER] en attente sur [SITENAME]";
$locale['setup_3803'] = "Bonjour [RECEIVER],<br/>Vous avez reçu un nouveau message privé intitulé [SUBJECT] de [USER] sur [SITENAME]. Vous pouvez lire votre message privé sur [SITEURL]messages.php<br/>Message : [MESSAGE]<br/>Vous pouvez désactiver la notification par courriel dans le panneau des options de la page Message privé si vous ne souhaitez plus être informé des nouveaux messages.<br/>Cordialement,<br/>[SENDER].";
$locale['setup_3804'] = "Notification des nouveaux messages du forum";
$locale['setup_3805'] = "Notification de réponse au fil de discussion - [SUBJECT]";
$locale['setup_3806'] = "Bonjour [RECEIVER],<br/>Une réponse a été postée dans le sujet du forum \\'[SUBJECT]\\' que vous suivez sur [SITENAME]. Vous pouvez utiliser le lien suivant pour voir la réponse :<br/>[THREAD_URL]<br/>Si vous ne souhaitez plus regarder ce fil de discussion, vous pouvez cliquer sur le lien \\'Arrêter de suivre ce sujet\\' situé en haut du fil.<br/>Cordialement,<br/>[SENDER].";
$locale['setup_3807'] = "Formulaire de contact";
$locale['setup_3808'] = "[SUBJECT]";
$locale['setup_3809'] = "[MESSAGE]";
// Official Supported System List
$locale['articles']['title'] = "Articles";
$locale['articles']['description'] = "Un système de documentation standard.";
$locale['blog']['title'] = "Blog";
$locale['blog']['description'] = "Un système de blogs standard.";
$locale['downloads']['title'] = "Téléchargements";
$locale['downloads']['description'] = "Un système de téléchargement standard.";
$locale['faqs']['title'] = "FAQs";
$locale['faqs']['description'] = "Un système FAQ de la base de connaissances.";
$locale['forums']['title'] = "Forum";
$locale['forums']['description'] = "Un système de forum.";
$locale['news']['title'] = "News";
$locale['news']['description'] = "Un système de publication de nouvelles.";
$locale['photos']['title'] = "Galerie";
$locale['photos']['description'] = "Un système de publication de la galerie de photos.";
$locale['polls']['title'] = "Votes";
$locale['polls']['description'] = "Un système de sondage et de vote des utilisateurs.";
$locale['weblinks']['title'] = "Liens Internet";
$locale['weblinks']['description'] = "Un système de répertoires Web.";
$locale['install'] = "Installer le coeur";

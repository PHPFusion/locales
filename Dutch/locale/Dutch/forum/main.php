<?php
// Forum Index
$forumgg = ($settings['siteusername']); $forumgg = str_replace (" Gebruikers Groep", "", $forumgg);
$locale['400'] = $forumgg." Forum"; // add to title
$locale['401'] = $forumgg." Gebruikers Forum. Kies hieronder een passende categorie."; // opentable
$locale['402'] = "Onderwerpen";
$locale['403'] = "Berichten";
$locale['404'] = "Laatste bericht";
$locale['405'] = "Geen berichten";
$locale['406'] = "door ";
$locale['407'] = "Er zijn nog geen forums aangemaakt.";
$locale['408'] = "Er zijn nog geen forumcategorieën aangemaakt.";
$locale['409'] = "Forum met nieuwe berichten sinds laatste bezoek.";
$locale['410'] = "Forum zonder nieuwe berichten sinds laatste bezoek.";
$locale['411'] = "Gemodereerd door: ";
// View Forum
$locale['450'] = "Forum bekijken";
$locale['451'] = "Onderwerp";
$locale['452'] = "Auteur";
$locale['453'] = "X bekeken";
$locale['454'] = "Antw.";
$locale['455'] = "Pagina: ";
$locale['456'] = "Er zijn nog geen onderwerpen gestart";
// View Forum Moderator options
$locale['460'] = "Alles aanvinken";
$locale['461'] = "Alle vinkjes verwijderen";
$locale['462'] = "Onderwerpen verwijderen";
$locale['463'] = "Geselecteerde onderwerpen verwijderen?";
// Forum Guide/Privelages
$locale['470'] = "Onderwerp met nieuwe berichten sinds laatste bezoek";
$locale['471'] = "20 berichten of meer";
$locale['472'] = "Onderwerp zonder nieuwe berichten sinds laatste bezoek.";
$locale['473'] = "Gesloten onderwerp.";
$locale['474'] = "Sticky onderwerp.";
// View Thread Poll
$locale['480'] = "Totaal aantal stemmen";
$locale['481'] = "Stemmen";
// View Thread
$locale['500'] = "Onderwerp bekijken";
$locale['501'] = "Auteur";
$locale['502'] = "Berichten:";
$locale['503'] = "Locatie:";
$locale['504'] = "Datum van aanmelding:";
$locale['505'] = "Geplaatst op ";
$locale['506'] = " voegde bij,";
$locale['506a'] = " afbeelding: (Klik het plaatje voor vergroting!)";
$locale['506b'] = " afbeeldingen:(Klik het plaatje voor vergroting!)";
$locale['506c'] = " bestand:";
$locale['506d'] = " bestanden:";
$locale['506e'] = "Afbeelding";
$locale['506f'] = "op";
$locale['507'] = " voegde het volgende bestand bij:";
$locale['507a'] = " Downloads";
$locale['507b'] = "<br /><a href='/register.php' title='Registreer om deze bijlage te zien'>Registreer</a> en/of <a href='/login.php' title='Log in om deze bijlage te zien.'>log in</a> voor toegang tot deze bijlage.";
$locale['508'] = "Gewijzigd door ";
$locale['508a'] = "Reden";
$locale['508b'] = "Klik hier om de reden te zien.";
$locale['509'] = " op ";
$locale['510'] = "U heeft geen rechten om dit onderwerp te bekijken.";
$locale['511'] = "Terug naar Forum Index";
$locale['512'] = "Snelantwoord";
$locale['513'] = "Smileys in dit bericht uitschakelen";
$locale['513a'] = "Mijn handtekening in dit bericht tonen";
$locale['513b'] = "Waarschuw me als er een antwoord is geplaatst";
$locale['514'] = "Antwoord plaatsen";
$locale['514a'] = "Antwoord bekijken";
$locale['515'] = "Volg dit onderwerp niet langer";
$locale['516'] = "Volg dit onderwerp";
$locale['517'] = "Berichten verwijderen";
$locale['517a'] = "Verplaats berichten";
$locale['518'] = "Geselecteerde berichten verwijderen?";
$locale['518a'] = "Geselecteerde berichten verplaatsen?";
$locale['519'] = "Onderwerp afdrukken";
$locale['519a'] = "Bericht afdrukken";
// Moderator Options
$locale['520'] = "Moderator Opties:";
$locale['521'] = "Onderwerp verwijderen";
$locale['522'] = "Onderwerp sluiten";
$locale['523'] = "Onderwerp heropenen";
$locale['524'] = "Onderwerp sticky maken";
$locale['525'] = "Onderwerp niet-sticky maken";
$locale['526'] = "Onderwerp verplaatsen";
$locale['527'] = "Onderwerp vernieuwen";
$locale['528'] = "Gaan";
$locale['530'] = "Filter";
$locale['531'] = "Tijd";
$locale['531a'] = "Alle Tijden";
$locale['531b'] = "Vandaag";
$locale['531c'] = "Deze Week";
$locale['531d'] = "Deze Maand";
$locale['532'] = "Toon";
$locale['532a'] = "Alle";
$locale['532b'] = "Discussies";
$locale['532c'] = "Bijlage";
$locale['532d'] = "Enqu&ecirc;tes";
$locale['533'] = "Gesorteerd op";
$locale['533a'] = "Datum - laaste update";
$locale['533b'] = "Datum - gestarte post";
$locale['533c'] = "Antwoorden";
$locale['533d'] = "Titel";
$locale['534'] = "Volgorde";
$locale['534a'] = "Oplopend";
$locale['534b'] = "Aflopend";
// Jump to Forum
$locale['540'] = "Spring naar forum:";
$locale['541'] = "Top";
$locale['542'] = "Naar top";
// Search Forum
$locale['550'] = "Zoeken";
// Image Alt attributes
$locale['560'] = "Nieuwe berichten";
$locale['561'] = "Geen nieuwe berichten";
$locale['562'] = "Actief onderwerp";
$locale['563'] = "Sticky onderwerp";
$locale['564'] = "Gesloten onderwerp";
$locale['565'] = "Antwoord plaatsen";
$locale['566'] = "Nieuw onderwerp";
$locale['567'] = "Avatar van gebruiker";
$locale['568'] = "Wijzigen";
$locale['569'] = "Citeren. Gebruik liever beantwoorden! Zie onderaan alle post!";
$locale['570'] = "schreef";
$locale['571'] = "IP";
$locale['572'] = "Priv&eacute; Bericht sturen";
$locale['573'] = "Berichten";
$locale['574'] = "Geen onderwerpen gevonden.";
$locale['575'] = "Geen posten gevonden.";
// Move Posts
$locale['600'] = "Verplaats post";
$locale['601'] = "Selecteer nieuw forum";
$locale['602'] = "Volgende";
$locale['603'] = "Selecteer nieuw onderwerp";
$locale['604'] = "Verplaats post";
$locale['605'] = "U probeert de eerste post in dit onderwerp te verplaatsen!<br />De eerste post <strong>kan niet verplaatst worden</strong> en is verwijderd van de lijst omdat dit onderwerp nog post bevat.";
$locale['606'] = "U probeert de eerste post in dit onderwerp te verplaatsen!<br />De eerste post <strong>zal verplaatst worden</strong> en het onderwerp wordt verwijderd.";
$locale['607'] = "Geen post om te verplaatsen.";
$locale['608'] = "Geen onderwerpen in dit forum.";
$locale['609'] = "Terug naar het onderwerp.";
$locale['610'] = "Geen onderwerpen om de post naartoe te verplaatsen.";
// Viewforum icons
$locale['611'] = "Actueel Onderwerp";
$locale['612'] = "Bestanden bijgevoegd";
$locale['613'] = "Afbeelding bijgevoegd";
$locale['614'] = "Enqu&ecirc;te";
// Move Posts Errors
$locale['error-MP000'] = "Post verplaatsen - fout";
$locale['error-MP001'] = "Nieuw onderwerp bestaat niet.";
$locale['error-MP002'] = "De post die je gemarkeerd hebt om te verplaatsen bestaat niet meer of iemand anders heeft het al verplaatst.";
$locale['error-MP003'] = "Geen post om te verplaatsen.";

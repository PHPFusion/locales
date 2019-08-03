<?php
$locale['email_create_subject'] = "Account aangemaakt op [SITENAME]";
$locale['email_create_message'] = "Hallo [USER_NAME],<br/>

Uw account op [SITENAME] is aangemaakt.<br/>
U kunt nu inloggen met de volgende details:<br/>

Gebruikersnaam: [USER_NAME]<br/>
Wachtwoord: [PASSWORD]<br/>
Met vriendelijke groet,<br/>
[SITEUSERNAME]";

$locale['email_activate_subject'] = "Account geactiveerd op [SITENAME]";
$locale['email_activate_message'] = "Hallo [USER_NAME],<br/>
Uw account op [SITENAME] is geactiveerd.<br/>

U kunt nu inloggen met uw gekozen gebruikersnaam en wachtwoord.<br/>
Met vriendelijke groet,<br/>
[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "Account reactivatie vereist op [SITENAME]";
$locale['email_deactivate_message'] = "Hallo [USER_NAME],<br/> het is al [DEACTIVATION_PERIOD] dag(en) geleden sinds je laatstse login op [SITENAME]. 
Je account is gemarkeerd als inactief, maar al je gegevens zijn nog in aanwezig.<br/> 
Om je account weer te activeren, klik simpelweg op de volgende link: [REACTIVATION_LINK]<br/>
 Met vriendelijke groet,<br/> [SITEUSERNAME]";

$locale['email_ban_subject'] = "Je account op [SITENAME] is verbannen";
$locale['email_ban_message'] = "Hallo [USER_NAME], <br/> Uw account op [SITENAME] is verbannen door [ADMIN_USERNAME] vanwege de volgende reden: <br/> [REASON] <br/> Als u meer informatie wilt over dit verbod, kunt u neem dan contact op met de sitebeheerder via [SITENAME]. <br/> Met vriendelijke groeten, <br/> [SITEUSERNAME]";

$locale['email_secban_subject'] = "Uw account op [SITENAME] is verbannen";
$locale['email_secban_message'] = "Hallo [USER_NAME],<br/>
Uw account op [SITENAME] is verbannen door [ADMIN_USERNAME] vanwege sommige acties door u of verband houdende met u worden beschouwd als een veiligheidsrisico op de site.<br/>

Als u meer informatie wilt over dit beveiligingsverbod, neem dan contact op met de sitebeheerder op [SITENAME].<br/>
Met vriendelijke groet,<br/>
[SITEUSERNAME]";

$locale['email_suspend_subject'] = "Uw account op [SITENAME] is geschorst";
$locale['email_suspend_message'] = "Hallo [USER_NAME], <br/> Uw account op [SITENAME] is opgeschort door [ADMIN_USERNAME] tot [DATE] (sitetijd) vanwege de volgende reden: <br/> [REASON] <br/> Neem voor meer informatie over deze opschorting contact op met de sitebeheerder via [SITENAME]. <br/> Met vriendelijke groeten, <br/> [SITEUSERNAME]

";

$locale['email_resend_subject'] = "Opnieuw verzonden activeringslink - [SITENAME]";
$locale['email_resend_message'] = "Hallo [USER_NAME], <br/> U ontvangt deze e-mail omdat u de e-mail op onze site niet heeft geactiveerd - [SITENAME]. <br/> Als u binnen één dag geen e-mail activeert, wordt uw registratieverzoek geannuleerd. <br/> U heeft zich geregistreerd met de volgende informatie: <br/> Gebruikersnaam: [USER_NAME] <br/> U kunt uw account activeren via de volgende link: <br/> [ACTIVATION_LINK] <br/> Met vriendelijke groet, <br /> [SITENAME]";

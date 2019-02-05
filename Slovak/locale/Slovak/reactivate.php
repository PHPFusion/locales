<?php
// Error messages
$locale['500'] = "Došlo k chybe";
$locale['501'] = "Reaktivačný link už nie je platný.<br><br>
Kontaktujte hlavného administrátora cez <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> ak chcete požiadať o ručnú reaktiváciu.";
$locale['502'] = "Reaktivačný link je chybný!<br><br>
Kontaktujte hlavného administrátora cez <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> ak chcete požiadať o ručnú reaktiváciu.";
$locale['503'] = "Reaktivačný link nemohol reaktivovať váš účet.<br>
Možno, že váš účet už bol re-aktivovaný a v tom prípade by ste mali byť schopný <a href='".$settings['siteurl']."login.php'>prihlásiť sa tu</a>.<br><br>
Ak sa nemôžete prihlásiť, kontaktujte hlavného administrátora cez <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> ak chcete požiadať o ručnú reaktiváciu.";
// Send confirmation mail
$locale['504'] = "Účet reaktivovaný pre ".$settings['sitename'];
$locale['505'] = "Ahoj [USER_NAME],\n
Váš účet pre ".$settings['sitename']." bol reaktivovaný. Dúfame, že nás budete navštevovať častejšie.\n\n
s pozdravom,\n\n
".$settings['siteusername'];
$locale['506'] = "Reaktivovaný užívateľ.";

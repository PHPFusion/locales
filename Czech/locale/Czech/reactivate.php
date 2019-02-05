<?php
// Error messages
$locale['500'] = "Vyskytla se chyba";
$locale['501'] = "Odkaz na opětovné aktivaci, na který jste klikli, již není platný.<br/><br/>
Kontaktujte správce webu na adrese [<a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> pokud chcete požádat o ruční opětovné aktivaci.";
$locale['502'] = "Odkaz na opětovné aktivaci, na který jste klikli, je neplatný!<br/><br/>
Kontaktujte správce webu na adrese [<a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> Pokud chcete požádat o ruční opětovné aktivaci.";
$locale['503'] = "Reaktivační odkaz, který jste sledovali, nemohl znovu aktivovat váš účet.<br/>
Snad váš účet již byl aktivován a v takovém případě byste měl být schopen <a href='".$settings['siteurl']."login.php'>přihlaste se zde</a>.<br/><br/>
Pokud se nemůžete přihlásit, obraťte se na správce webu na adrese [<a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> Pokud chcete požádat o ruční opětovné aktivaci.";
// Send confirmation mail
$locale['504'] = "Účet byl znovu aktivován na ".$settings['sitename'];
$locale['505'] = "Ahoj [USER_NAME],
<br>Váš účet na ".$settings['sitename']." Byla znovu aktivována. Doufáme, že vás na stránkách častěji vidíme.<br/><br/>
S pozdravem,<br/>
".$settings['siteusername'];
$locale['506'] = "Reaktivováno uživatelem.";

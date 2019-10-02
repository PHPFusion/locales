<?php
$locale['email_create_subject'] = "Cuenta Creada en [SITENAME]";
$locale['email_create_message'] = "Hola [USER_NAME],

Tu cuenta en [SITENAME] ha sido creada.
Ahora ya puedes iniciar sesión con los siguientes datos:

Nombre de Usuario: [USER_NAME]

Contraseña: [PASSWORD]

Regards,
[SITEUSERNAME]";

$locale['email_activate_subject'] = "Cuenta Activada en [SITENAME]";
$locale['email_activate_message'] = "Hola [USER_NAME],
Tu cuenta en [SITENAME] ha sido activada.

Ahora ya puedes iniciar sesión usando el nombre de usuario y la contraseña que elegiste.

Saludos,
[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "Reactivación de Cuenta en[SITENAME]";
$locale['email_deactivate_message'] = "Hola [USER_NAME],
Han pasado [DEACTIVATION_PERIOD] días desde la última vez que accediste a [SITENAME]. Tu usuario ha sido marcado como inactivo, pero todos los datos de tu cuenta y tus contenidos permanecen intactos.


Si deseas reactivar tu cuenta, pulsa el siguiente enlace: [REACTIVATION_LINK]

Saludos,
[SITEUSERNAME]";

$locale['email_ban_subject'] = "Su cuenta en [SITENAME] ha sido prohibida";
$locale['email_ban_message'] = "Hola [USER_NAME],
Tu cuenta en [SITENAME] ha sido expulsada por [ADMIN_USERNAME] El motivo es el siguiente:

[REASON].
Si deseas más información sobre esta expulsión, contacta con el administrador del sitio en [SITENAME].
 Saludos,
[SITEUSERNAME]";

$locale['email_secban_subject'] = "Su cuenta en [SITENAME] ha sido prohibida";
$locale['email_secban_message'] = "Hola [USER_NAME],
Tu cuenta en [SITENAME] ha sido expulsada por [ADMIN_USERNAME] debido a que algunas acciones atribuidas a tí o relacionadas con tu cuenta han sido consideradas como una amenaza de seguridad para el sitio.

Si deseas más información sobre esta expulsión de seguridad, contacta con el administrador del sitio en [SITENAME].
 Saludos,
[SITEUSERNAME]";

$locale['email_suspend_subject'] = "Suspensión de Cuenta en[SITENAME]";
$locale['email_suspend_message'] = "Hola [USER_NAME],

Tu cuenta en [SITENAME] ha sido suspendida por [ADMIN_USERNAME] hasta [DATE] (fecha/hora del sitio) por lo siguiente:

[REASON].
Si deseas más información sobre esta suspensión, contacta con el administrador del sitio en [SITENAME].
 Saludos,
[SITEUSERNAME]";

$locale['email_resend_subject'] = "Re-sent activation link - [SITENAME]";
$locale['email_resend_message'] = "Hello [USER_NAME],<br/>\r\n
You received this email because you did not activate the email on our site - [SITENAME].<br/>\r\nIf you do not activate an email within one day, your registration request will be canceled.<br/>\r\n
You have registered with the following information:<br/>\r\nUsername: [USER_NAME]<br/>\r\n
You can activate account with the following link:<br/>\r\n[ACTIVATION_LINK]<br/>\r\nRegards,<br/>\r\n[SITENAME]";

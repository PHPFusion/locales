<?php
$locale['email_create_subject'] = "Conta criada em [SITENAME]";
$locale['email_create_message'] = "Olá [USER_NAME],<br/>

A sua conta em [SITENAME] foi criada.<br/>
Agora você pode entrar usando os seguintes detalhes:<br/>

Nome de Utilizador: [USER_NAME]<br/>
Palavra-passe: [PASSWORD]<br/>
Atenciosamente,<br/>
[SITEUSERNAME]";

$locale['email_activate_subject'] = "Conta activada em [SITENAME]";
$locale['email_activate_message'] = "Olá [USER_NAME],<br/>
A sua conta em [SITENAME] foi activada.<br/>

Agora você pode entrar usando seu nome de utilizador e palavra-passe.<br/>
Atenciosamente,<br/>
[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "Reactivação da conta necessária em [SITENAME]";
$locale['email_deactivate_message'] = "Olá [USER_NAME],<br/>
Passaram [DEACTIVATION_PERIOD] dia(s) desde a última vez que você entrou em [SITENAME]. O seu utilizador foi marcado como inactivo, mas todos os detalhes e conteúdo da sua conta permanecem intactos.<br/>

Para reactivar a sua conta basta clicar no seguinte link: [REACTIVATION_LINK]<br/>
Atenciosamente,<br/>
[SITEUSERNAME]";

$locale['email_ban_subject'] = "A sua conta em [SITENAME] foi banida";
$locale['email_ban_message'] = "Olá [USER_NAME],<br/>
A sua conta em [SITENAME] foi banida por [ADMIN_USERNAME] pelo seguinte motivo:<br/>

[REASON]<br/>
Se você quiser mais informações sobre este ban, por favor, entre em contato com o administrador do site em [SITENAME].<br/>
Atenciosamente,<br/>
[SITEUSERNAME]";

$locale['email_secban_subject'] = "A sua conta em [SITENAME] foi banida";
$locale['email_secban_message'] = "Olá [USER_NAME],<br/>
A sua conta em [SITENAME] foi banida por [ADMIN_USERNAME] por causa de algumas acções relacionadas com a sua conta que foram consideradas uma ameaça de segurança ao site.<br/>

Se você quiser mais informações sobre este ban por segurança, por favor, contacte o administrador do site em [SITENAME].<br/>
Atenciosamente,<br/>
[SITEUSERNAME]";

$locale['email_suspend_subject'] = "A sua conta em [SITENAME] foi suspensa";
$locale['email_suspend_message'] = "Olá [USER_NAME],<br/>

A sua conta em [SITENAME] foi suspensa por [ADMIN_USERNAME] até [DATE] (hora do site) pelo seguinte motivo:<br/>

[REASON]<br/>
Se quiser mais informações sobre esta suspensão, por favor, entre em contacto com o administrador do site em [SITENAME].<br/>
Atenciosamente,<br/>
[SITEUSERNAME]";

$locale['email_resend_subject'] = "Link de activação reenviado - [SITENAME]";
$locale['email_resend_message'] = "Olá [USER_NAME],<br/>

Você recebeu este e-mail porque não activou o e-mail em nosso site - [SITENAME].<br/>
Se você não activar o e-mail dentro de um dia, seu pedido de registo será cancelado.<br/>

Registou-se com as seguintes informações:<br/>
Nome de Utilizador: [USER_NAME]<br/>

Você pode activar a conta através do seguinte link:<br/>
[ACTIVATION_LINK]<br/>
Atenciosamente,<br/>
[SITENAME]";

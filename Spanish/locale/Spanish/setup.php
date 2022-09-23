<?php
$locale['setup_0000'] = "Instalación de PHPFusion";
$locale['setup_0002'] = "Bienvenido a la instalación de PHPFusion 9.00";
$locale['setup_0003'] = "La guía de instalación le guiará por los pasos necesarios para instalar CMS de PHPFusion en su servidor. Si necesita más asistencia, por favor cheque nuestra <a class='strong' target='_blank' href='https://phpfusion.com/infusions/wiki/documentation.php?page_id=208'>Documentación de instalación en línea</a>.";
$locale['setup_0005'] = " He leído y acepto los <a href='https://phpfusion.com/licensing/?agpl' target='_blank'>términos y condiciones de uso</a> de PHPFusion";
$locale['setup_0006'] = "PHPFusion 9 requiere al menos PHP 7.0. Ver los <a href=\"https://phpfusion.com/infusions/wiki/documentation.php?page_id=215\">requisitos del sistema</a> página para más información.";
$locale['setup_0007'] = "Los sistemas con OPcache instalado deben tener <a href=\"http://php.net/manual/en/opcache.configuration.php#ini.opcache.save-comments\">opcache.save_comments</a> habilitado.";
$locale['setup_5000'] = "Para utilizar PHPFusion, es necesario comprobar y aceptar los términos de PHPFusion.";
$locale['setup_0010'] = "Versión actual de la construcción - ";
$locale['setup_0011'] = "es";
$locale['setup_0012'] = "utf-8";
$locale['setup_0012a'] = "ltr";
$locale['setup_0020'] = "Actualización de PHPFusion";
$locale['setup_0022'] = "Bienvenido al servicio de actualización de PHPFusion";
$locale['setup_0023'] = "El servicio de actualización le guiará por los pasos necesarios para actualizar el CMS de PHPFusion en el servidor. Por favor seguir estos pasos y verificar cada información requerida.";
$locale['setup_0050'] = "Servidor Web";
$locale['setup_0051'] = "PHP Versión";
$locale['setup_0052'] = "PHP Extensión";
$locale['setup_0053'] = "Soporte OPCache";
$locale['setup_0054'] = "Soporte de base de datos PDO";
$locale['setup_0055'] = "Límite de memoria PHP";
$locale['setup_0056'] = "Requisitos de verificación de archivos";
$locale['setup_0101'] = "Introducción";
$locale['setup_0102'] = "System Requirements";
$locale['setup_0103'] = "Configuración base de datos";
$locale['setup_0104'] = "Configuración / instalación Base de datos";
$locale['setup_0105'] = "Configurar el sistema base";
$locale['setup_0106'] = "Datos de administrador primario";
$locale['setup_0107'] = "Configuración Final";
$locale['setup_0109'] = "La versión mínima de Apache necesaria para ejecutar PHPFusion sin mod_rewrite habilitado es 2.2.16.";
$locale['setup_0110'] = "Debido a la configuración de Servertokens en httpd.conf, es imposible determinar la versión de Apache sin mod_rewrite, se necesita una versión mma de 2.2.16.";
$locale['setup_0112'] = "La función phpinfo () ha sido deshabilitada por razones de seguridad. Para ver la información de phpinfo () de su servidor, cambie su configuración de PHP o contacte a su administrador de servidor.";
$locale['setup_0113'] = "Tu instalación de PHP es demasiado antigua. PHPFusion requiere al menos un mínimo de 5.5.21. Las versiones de PHP superiores a 5.6.5 o 5.5.21 proporcionan protección de inyección SQL incorporada para las bases de datos de MySQL. Se recomienda actualizar.";
$locale['setup_0114'] = "PHPFusion requiere que habilites la extensión de PHP en la siguiente lista";
$locale['setup_0115'] = "Habilitado";
$locale['setup_0115a'] = "No habilitado";
$locale['setup_0116'] = "El almacenamiento en caché de PHP OPcode puede mejorar considerablemente el rendimiento de tu sitio. Es <strong>muy recomendable</strong> tener instalado <a href='http://php.net/manual/opcache.instalación.php' target='blank'>OPcache</a> en su servidor.";
$locale['setup_0118'] = "Su servidor web no parece ser compatible con PDO (objetos de datos PHP). Pregúntele a su proveedor de hosting si es compatible con la extensión PDO nativa.";
$locale['setup_0119a'] = "Considere aumentar su límite de memoria PHP a %memory_minimum_limit para ayudar a prevenir errores en el proceso de instalación.";
$locale['setup_0119b'] = "Aumente el límite de memoria editando el parámetro memory_limit en el archivo [CFG_FILE_PATH] y luego reinicie su servidor web (o póngase en contacto con el administrador de su sistema o proveedor de alojamiento para obtener ayuda).";
$locale['setup_0119c'] = "Póngase en contacto con el administrador del sistema o proveedor de alojamiento para obtener ayuda con el aumento de su límite de memoria PHP.";
// Buttons
$locale['setup_0120'] = "Configuración Finalizar";
$locale['setup_0121'] = "Siguiente";
$locale['setup_0122'] = "Inténtalo de nuevo";
$locale['setup_0124'] = "Vaya a Opciones de recuperación";
$locale['setup_0125'] = "Desinstalación en progreso. Por favor espera...";
$locale['setup_0130'] = "Configuración de Xdebug";
$locale['setup_0131'] = "xdebug.max_nesting_level está ajustado a";
$locale['setup_0132'] = "Conjunto {%code%} en su configuración PHP ya que algunas páginas en su sitio Drupal no funcionarán cuando esta configuración sea demasiado baja.";
$locale['setup_0134'] = "Todos los archivos necesarios pasaron los requisitos de escritura del archivo.";
$locale['setup_0135'] = "Para que la configuración continúe, los siguientes archivos y carpetas deben poder escribirse. Por favor, modifique los archivos a 755 o 777 para continuar";
$locale['setup_0136'] = "No se puede escribir (Fallido)";
$locale['setup_0137'] = "Se puede escribir (Pasar)";
$locale['setup_0138'] = "Conexión de base de datos establecida";
$locale['setup_0139'] = "Selección de columna de base de datos establecida";
$locale['setup_0140'] = "La base de datos está disponible y lista para la instalación";
$locale['setup_0141'] = "Permisos de la base de datos y acceso verificado";
$locale['setup_0142'] = "archivo config.php creado";
$locale['setup_0143'] = "El prefijo de tabla especificado ya está en uso y se está ejecutando. El instalador procederá a actualizar las diferencias según sea necesario";
$locale['setup_0144'] = "Diagnósticos de la base de datos completados";
// Step 1
$locale['setup_1000'] = "Por favor, seleccione la configuración regional requerida (idioma):";
$locale['setup_1001'] = "Descargar más locales de <a target='_blank' href='https://phpfusion.com/downloads.php#langpacks'><strong>PHPFusion Official Support Site</strong></a>";
$locale['setup_1002'] = "Bienvenido a PHPFusion 9.00 Modo Recuperación.";
$locale['setup_1003'] = "Hemos detectado que existe un sistema existente instalado. <br/> Favor, elija cualquiera de las siguientes acciones para proceder.";
$locale['setup_1004'] = "Instalación limpia";
$locale['setup_1005'] = "Puede desinstalar y limpiar su base de datos y empezar una instalación limpia de nuevo.";
$locale['setup_1006'] = "RESPALDO POR FAVOR config.php. SER&#193; eliminado del sistema durante la desinstalación.";
$locale['setup_1007'] = "Desinstalar y volver a empezar";
$locale['setup_1008'] = "Core instalador del sistema";
$locale['setup_1009'] = "Cambie las configuraciones básicas del sistema.";
$locale['setup_1010'] = "Ir al instalador del sistema";
$locale['setup_1011'] = "Cambiar datos de cuenta principal";
$locale['setup_1012'] = "Cambiar datos de Super administrador sin necesidad de recuperar la propiedad de cuenta de SA contraseña o transferencia a otra persona.";
$locale['setup_1013'] = "Cambiar Super administrador detalles";
$locale['setup_1014'] = "Reconstruye .htaccess";
$locale['setup_1015'] = "Deseche archivo actual y reemplazarlo con una versión estándar del archivo .htaccess";
$locale['setup_1017'] = "Cancelar y salir de este instalador";
$locale['setup_1018'] = "Puede salir de este instalador en este momento haciendo clic en el botón de abajo. Esto cambiará el nombre de su archivo config_temp.php volver a config.php.";
$locale['setup_1019'] = "Salir del instalador";
$locale['setup_1020'] = ".htaccess archivo creado / actualizado";
// Step 2
$locale['setup_1090'] = "Archivos";
$locale['setup_1091'] = "Estado";
$locale['setup_1092'] = "Configuraciones de base de datos y controlador";
$locale['setup_1106'] = "Estructura del archivo de diagnóstico";
// Step 3 - Access criteria
$locale['setup_1200'] = "Propiedades de la base y rutas del Servidor";
$locale['setup_1201'] = "Por favor, introduzca la configuración de acceso a la base de datos MySQL.";
$locale['setup_1202'] = "Base de datos Nombre de Servidor MySQL:";
$locale['setup_1202a'] = "Database Port:";
$locale['setup_1202b'] = "Leave empty if you do not use another port";
$locale['setup_1203'] = "Base de datos Nombre de usuario:";
$locale['setup_1204'] = "Base de datos Contraseña :";
$locale['setup_1205'] = "Base de datos Nombre:";
$locale['setup_1206'] = "Tabla Prefix:";
$locale['setup_1207'] = "Cookie Prefix:";
$locale['setup_1208'] = "Controlador de base de datos";
// Step 4 - Database Setup
$locale['setup_1210'] = "Errores de instalación de PHPFusion. Reinicie el instalador.";
$locale['setup_1211'] = "Se ha completado la nueva instalación de PHPFusion. Vaya al siguiente paso.";
$locale['setup_1212'] = "Configuración del sitio y del superadministrador";
$locale['setup_1213'] = "Detalles de la información del sitio";
$locale['setup_1214'] = "Nombre del sitio";
$locale['setup_1215'] = "Sitio web de PHPFusion Powered";
$locale['setup_1216'] = "PHPFusion es un sistema de gestión de contenido de código abierto (CMS) ligero escrito en PHP.";
$locale['setup_1217'] = "Su cuenta está actualizada. Utilice las nuevas credenciales de ahora en adelante.";
$locale['setup_1220'] = "El nombre de la base de datos que desea ejecutar PHPFusion";
$locale['setup_1221'] = "Tu nombre de usuario de MYSQL";
$locale['setup_1222'] = "... y tu contraseña MYSQL";
$locale['setup_1223'] = "Hacer esto muy único para proteger su base de datos";
$locale['setup_1224'] = "Prefijo del identificador de cookies del navegador";
$locale['setup_1225'] = "e.g. localhost";
$locale['setup_1307'] = "Asegúrese de que config.php es escribible.";
$locale['setup_1310'] = "No se puede conectar con la base de datos MySQL.";
$locale['setup_1311'] = "La base de datos MySQL especificada no existe.";
$locale['setup_1313'] = "El prefijo de tabla especificado ya está en uso y se está ejecutando No se instalarán tablas. Inicie de nuevo o continúe con el siguiente paso.";
$locale['setup_1315'] = "Por favor asegúrese de que su usuario de MySQL tenga permisos de lectura, escritura y borrado para la base de datos seleccionada.";
$locale['setup_1317'] = "Por favor asegúrese de haber completado todos los campos de conexión de MySQL.";
// Step 6 - Super Admin login
$locale['setup_1500'] = "Cuenta de administrador principal primaria";
$locale['setup_1501'] = "Configure los detalles de su cuenta de superadministrador.";
$locale['setup_1504'] = "Nombre de usuario:";
$locale['setup_1505'] = "Contraseña de inicio de sesión:";
$locale['setup_1506'] = "Repetir contraseña de inicio de sesión:";
$locale['setup_1507'] = "Contraseña de administrador:";
$locale['setup_1508'] = "Repetir contraseña de administrador:";
$locale['setup_1509'] = "Dirección de correo electrónico:";
$locale['setup_1510'] = "Dirección de correo electrónico del sitio web:";
$locale['setup_1511'] = "Seleccionar la región del sitio web:";
$locale['setup_1512'] = "Instalaciones del lenguaje del sitio:";
$locale['setup_1513'] = "Nombre del propietario del sitio";
// Progress Reports
$locale['setup_1600'] = "Instalación";
$locale['setup_1601'] = "Actualización de la estructura de la tabla en";
$locale['setup_1602'] = "Agregar nueva columna en";
$locale['setup_1603'] = "Rellenar datos";
// Step 6 - User details validation
$locale['setup_5010'] = "El nombre de usuario contiene caracteres no válidos.";
$locale['setup_5011'] = "El campo del nombre de usuario no puede estar vacío.";
$locale['setup_5012'] = "Las dos contraseñas de usuario no coinciden.";
$locale['setup_5013'] = "La contraseña de usuario no es válida. Usa sólo caracteres alfanuméricos.<br />La contraseña de usuario debe tener, como mínimo, 8 caracteres de longitud.";
$locale['setup_5015'] = "Las dos contraseñas de administrador no coinciden.";
$locale['setup_5016'] = "La contraseña de usuario y la de administrador deben ser diferentes.";
$locale['setup_5017'] = "La contraseña de administrador no es válida. Usa sólo caracteres alfanuméricos.<br />La contraseña de administrador debe tener, como mínimo, 8 caracteres de longitud.";
$locale['setup_5020'] = "El campo del email no puede estar vacío.";
// Step 6 - Admin Panels
$locale['setup_3000'] = "Administradores";
$locale['setup_3002'] = "Artículos";
$locale['setup_3003'] = "Anuncios";
$locale['setup_3004'] = "Códigos BB";
$locale['setup_3005'] = "Expulsiones";
$locale['setup_3006'] = "Comentarios";
$locale['setup_3007'] = "Páginas a Medida";
$locale['setup_3008'] = "Copia de Seguridad BD";
$locale['setup_3010'] = "Descargas";
$locale['setup_3011'] = "Preguntas Frecuentes";
$locale['setup_3012'] = "Foros";
$locale['setup_3013'] = "Imágenes";
$locale['setup_3014'] = "Infusiones";
$locale['setup_3015'] = "Paneles de Infusiones";
$locale['setup_3016'] = "Miembros";
$locale['setup_3018'] = "Noticias";
$locale['setup_3019'] = "Paneles";
$locale['setup_3020'] = "álbumes de Fotos";
$locale['setup_3021'] = "Server Info";
$locale['setup_3022'] = "Encuestas";
$locale['setup_3023'] = "Enlaces del Sitio";
$locale['setup_3024'] = "Smileys";
$locale['setup_3026'] = "Actualización";
$locale['setup_3027'] = "Grupos de Usuarios";
$locale['setup_3029'] = "Enlaces Web";
$locale['setup_3030'] = "Principal";
$locale['setup_3031'] = "Fecha y Hora";
$locale['setup_3033'] = "Registro";
$locale['setup_3035'] = "Varios";
$locale['setup_3036'] = "Mensajes Privados";
$locale['setup_3037'] = "Campos de Usuario";
$locale['setup_3038'] = "Rangos del Foro";
$locale['setup_3041'] = "Gestión de Usuarios";
$locale['setup_3044'] = "Seguridad";
$locale['setup_3047'] = "Reinicio de la Contraseña de Administrador";
$locale['setup_3048'] = "Registro de Errores";
$locale['setup_3049'] = "Registro de Usuarios";
$locale['setup_3050'] = "robots.txt";
$locale['setup_3051'] = "Configuración de idioma";
$locale['setup_3052'] = "Enlaces permanentes";
$locale['setup_3055'] = "Blog";
$locale['setup_3056'] = "Personalizaciones Theme";
$locale['setup_3057'] = "Herramienta de migración";
$locale['setup_3058'] = "Ajustes de Theme";
$locale['setup_3059'] = "Fusion File Manager";
// Multilanguage table rights
$locale['setup_3200'] = "Artículos";
$locale['setup_3201'] = "Páginas a Medida";
$locale['setup_3202'] = "Descargas";
$locale['setup_3203'] = "Preguntas Frecuentes";
$locale['setup_3204'] = "Foros";
$locale['setup_3205'] = "Noticias";
$locale['setup_3206'] = "Galería de fotos";
$locale['setup_3207'] = "Encuestas";
$locale['setup_3208'] = "Plantillas de correo electrónico";
$locale['setup_3209'] = "Enlaces Web";
$locale['setup_3210'] = "Enlaces de Sitio";
$locale['setup_3211'] = "Paneles";
$locale['setup_3212'] = "Rangos del Foro";
$locale['setup_3213'] = "Blog";
// Step 6 - Navigation Links
$locale['setup_3300'] = "Inicio";
$locale['setup_3302'] = "Descargas";
$locale['setup_3303'] = "FAQ";
$locale['setup_3304'] = "Foro de Discusión";
$locale['setup_3305'] = "Contact";
$locale['setup_3307'] = "Enlaces Web";
$locale['setup_3308'] = "Galería de fotos";
$locale['setup_3309'] = "Buscar";
$locale['setup_3310'] = "Enviar Enlace";
$locale['setup_3311'] = "Enviar Noticias";
$locale['setup_3312'] = "Enviar Articulo";
$locale['setup_3313'] = "Enviar Foto";
$locale['setup_3314'] = "Enviar Descarga";
$locale['setup_3315'] = "Las presentaciones";
$locale['setup_3316'] = "Mini Charla";
$locale['setup_3317'] = "Enviar Blog";
$locale['setup_3318'] = "Blog Panel Archivo";
$locale['setup_3319'] = "Últimos Temas";
$locale['setup_3320'] = "Participaron de las discusiones";
$locale['setup_3321'] = "Mis Suscripciones";
$locale['setup_3322'] = "Temas sin respuestas";
$locale['setup_3323'] = "Preguntas sin resolver";
$locale['setup_3324'] = "Comenzar un nuevo Tema";
$locale['setup_3325'] = "Últimos Artículos";
$locale['setup_3326'] = "Últimas Descargas";
$locale['setup_3327'] = "Enviar FAQ";
// Stage 6 - Panels
$locale['setup_3400'] = "Navegación";
$locale['setup_3401'] = "Usuarios Conectados";
$locale['setup_3402'] = "Temas del Foro";
$locale['setup_3404'] = "Mensaje de Bienvenida";
$locale['setup_3405'] = "Lista de Temas del Foro";
$locale['setup_3406'] = "Información de Usuarios";
$locale['setup_3407'] = "Encuestas de Miembros";
$locale['setup_3408'] = "RSS";
// Stage 6 - News Categories
$locale['setup_3500'] = "Errores";
$locale['setup_3501'] = "Descargas";
$locale['setup_3502'] = "Juegos";
$locale['setup_3503'] = "Gráficos";
$locale['setup_3504'] = "Hardware";
$locale['setup_3505'] = "Diario";
$locale['setup_3506'] = "Miembros";
$locale['setup_3507'] = "Modificaciones";
$locale['setup_3508'] = "Películas";
$locale['setup_3509'] = "Red";
$locale['setup_3510'] = "Noticias";
$locale['setup_3511'] = "PHPFusion";
$locale['setup_3512'] = "Seguridad";
$locale['setup_3513'] = "Software";
$locale['setup_3514'] = "Temas";
$locale['setup_3515'] = "Windows";
// Stage 6 - Sample Forum Ranks
$locale['setup_3600'] = "Super Administrador";
$locale['setup_3601'] = "Administrador";
$locale['setup_3602'] = "Moderador";
$locale['setup_3603'] = "Nuevo";
$locale['setup_3604'] = "Miembro Júnior";
$locale['setup_3605'] = "Miembro";
$locale['setup_3606'] = "Miembro Mayor";
$locale['setup_3607'] = "Miembro Veterano";
$locale['setup_3608'] = "Fusionero";
// Stage 6 - Sample Smileys
$locale['setup_3620'] = "Sonreír";
$locale['setup_3621'] = "Guiño";
$locale['setup_3622'] = "Triste";
$locale['setup_3623'] = "Entrecejo";
$locale['setup_3624'] = "Conmoción";
$locale['setup_3625'] = "Burla";
$locale['setup_3626'] = "Guay";
$locale['setup_3627'] = "Mueca";
$locale['setup_3628'] = "Enojado";
$locale['setup_3629'] = "Gusta";
// Stage 6 - User Field Categories
$locale['setup_3640'] = "Perfil";
$locale['setup_3641'] = "Información de Contacto";
$locale['setup_3642'] = "Otra Información";
$locale['setup_3643'] = "Opciones";
$locale['setup_3644'] = "Estadísticas";
$locale['setup_3645'] = "Privacidad";
// Stage 6 - Forum Tags
$locale['setup_3660'] = "Información del sitio";
$locale['setup_3661'] = "Discusiones sobre la gestión de este sitio web";

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
$locale['setup_3650'] = "Bienvenido a su sitio";
// Final message
$locale['setup_1700'] = "Configuración ha terminado";
$locale['setup_1701'] = "PHPFusion 9.00 ahora está listo para su uso. Haga clic en Finalizar para volver a escribir su archivo config_temp.php a config.php <br/>";
$locale['setup_1702'] = "<strong>Nota: Después de introducir su sitio debe eliminar toda la carpeta / install y chmod los permisos del archivo su config.php nuevo a 0644 por razones de seguridad.</strong>";
$locale['setup_1703'] = "Gracias por elegir PHPFusion.";
// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['setup_3800'] = "Plantillas de correo electrónico";
$locale['setup_3801'] = "Notificación sobre nuevo MP";
$locale['setup_3802'] = "Usted tiene un nuevo mensaje privado desde [USER] que espera en [SITENAME]";
$locale['setup_3803'] = "Hola [RECEIVER],
Usted ha recibido un nuevo mensaje privado titulado [SUBJECT] desde [USER] en [SITENAME]. Usted puede leer su mensaje privado en [SITEURL]messages.php

Mensaje: [MESSAGE]

Usted puede desactivar la notificación de correo electrónico a través del panel de opciones de la página de mensaje privado si ya no desea ser notificado de nuevos mensajes

Saludos,
[SENDER].";
$locale['setup_3804'] = "Notificación de nuevos mensajes en el foro";
$locale['setup_3805'] = "Tema Responder Notificación - [SUBJECT]";
$locale['setup_3806'] = "Hola [RECEIVER],

Una respuesta ha sido publicado en el hilo del foro \\'[SUBJECT]\\' que está realizando el seguimiento en [SITENAME]. Usted puede utilizar el siguiente enlace para ver la respuesta:

[THREAD_URL]

Si usted ya no desea ver este hilo puede hacer clic en la \\'Detener el seguimiento de este Tema\\' enlace situado en la parte superior del Tema

Saludos,
[SENDER].";
$locale['setup_3807'] = "Formulario de contacto";
$locale['setup_3808'] = "[SUBJECT]";
$locale['setup_3809'] = "[MESSAGE]";
// Official Supported System List
$locale['articles']['title'] = "Artículos";
$locale['articles']['description'] = "Sistema de documentos estándar.";
$locale['blog']['title'] = "Blog";
$locale['blog']['description'] = "Sistema de de blogs estándar.";
$locale['downloads']['title'] = "Descargas";
$locale['downloads']['description'] = "Sistema Descargas estándar.";
$locale['faqs']['title'] = "Preguntas Frecuentes";
$locale['faqs']['description'] = "Sistema de Conocimiento FAQ.";
$locale['forums']['title'] = "Foro";
$locale['forums']['description'] = "Sistema de foros.";
$locale['news']['title'] = "Noticias";
$locale['news']['description'] = "Sistema de publicación de noticias.";
$locale['photos']['title'] = "Galería de fotos";
$locale['photos']['description'] = "Sistema de Publicación de Galería de fotos.";
$locale['polls']['title'] = "Encuestas";
$locale['polls']['description'] = "Sistema de Votación Encuestas para usuarios.";
$locale['weblinks']['title'] = "Enlaces Web";
$locale['weblinks']['description'] = "Sistema de directorio Web.";
$locale['install'] = "Instalar Core";

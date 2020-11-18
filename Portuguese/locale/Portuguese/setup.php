<?php
$locale['setup_0000'] = "Instalação do PHP-Fusion";
$locale['setup_0002'] = "Bemvindo à Instalação do PHP-Fusion";
$locale['setup_0003'] = "O guia de instalação irá guiá-lo pelos passos necessários para instalar o PHP-Fusion CMS no seu servidor. Caso precise de mais ajuda, por favor, verifique a nossa <a class='strong' href='https://php-fusion.co.uk/infusions/wiki/documentation.php?page=216' target='_blank'>Documentação de Instalação Online</a>.";
$locale['setup_0005'] = " Eu li e aceito os <a href='https://www.php-fusion.co.uk/licensing/licensing.php' target='_blank'>Termos e Condições de Uso</a> do PHP-Fusion";
$locale['setup_0006'] = "PHP-Fusion 9 requer pelo menos PHP 5.6.39. Veja os <a href='https://www.php-fusion.co.uk/infusions/wiki/documentation.php?page=215'>requesitos de sistema</a> para mais informações.";
$locale['setup_0007'] = "Sistemas com OPCache instalado devem ter <a href=\"http://php.net/manual/en/opcache.configuration.php#ini.opcache.save-comments\">opcache.save_comments</a> activados.";
$locale['setup_5000'] = "Para utilizar o PHP-Fusion é necessário verificar e concordar com os termos do PHP-Fusion.";
$locale['setup_0010'] = "Versão actual da compilação - ";
$locale['setup_0011'] = "pt";
$locale['setup_0012'] = "utf-8";
$locale['setup_0012a'] = "ltr";
$locale['setup_0020'] = "Actualização do PHP-Fusion";
$locale['setup_0022'] = "Bemvindo ao serviço de actualização do PHP-Fusion";
$locale['setup_0023'] = "O serviço de actualização irá guiá-lo pelos passos necessários para actualizar o PHP-Fusion CMS no seu servidor. Por favor, siga estes passos e verifique cada informação necessária.";
$locale['setup_0050'] = "Servidor web";
$locale['setup_0051'] = "Versão do PHP";
$locale['setup_0052'] = "Extensão do PHP";
$locale['setup_0053'] = "Suporte OPCache";
$locale['setup_0054'] = "Suporte à Base de Dados PDO";
$locale['setup_0055'] = "Limite de Memória PHP";
$locale['setup_0056'] = "Requisitos de Verificação de Ficheiros";
$locale['setup_0101'] = "Introdução";
$locale['setup_0102'] = "Diagnósticos de Ficheiros e Pastas";
$locale['setup_0103'] = "Configurações da Base de Dados";
$locale['setup_0104'] = "Configuração / Base de Dados";
$locale['setup_0105'] = "Configurar Sistema Central";
$locale['setup_0106'] = "Detalhes do Admin Principal";
$locale['setup_0107'] = "Configurações Finais";
$locale['setup_0109'] = "A versão mínima do Apache necessária para executar o PHP-Fusion sem mod_rewrite activado é 2.2.16.";
$locale['setup_0110'] = "Devido às configurações de tokens de servidor no httpd.confg, é impossível determinar a versão do Apache sem mod_rewrite, uma versão mínima de 2.2.16 é necessária.";
$locale['setup_0112'] = "A função phpinfo() foi desactivada por razões de segurança. Para ver as informações do seu servidor phpinfo(), altere suas configurações de PHP ou entre em contacto com o administrador do servidor.";
$locale['setup_0113'] = "A sua instalação do PHP é muito antiga. O PHP-Fusion requer pelo menos no mínimo o PHP 5.6.39. Versões do PHP maiores que 5.6.39 fornecem proteção de injeção SQL embutida para bases de dados mysql. Recomenda-se actualizar.";
$locale['setup_0114'] = "PHP-Fusion requer que você active as extensões PHP da seguinte lista";
$locale['setup_0115'] = "Activado";
$locale['setup_0115a'] = "Desactivado";
$locale['setup_0116'] = "O cache PHP OPCache pode melhorar consideravelmente o desempenho do seu site. É <strong>altamente recomendável</strong> ter <a href='http://php.net/manual/opcache.installation.php' target='_blank'>OPCache</a> instalado em seu servidor.";
$locale['setup_0118'] = "O seu servidor web não parece suportar PDO (PHP Data Objects). Pergunte ao seu provedor de hosting se eles suportam a extensão PDO nativa.";
$locale['setup_0119a'] = "Considere aumentar o limite de memória PHP para %memory_minimum_limit para ajudar a prevenir erros no processo de instalação.";
$locale['setup_0119b'] = "Aumente o limite de memória editando o parâmetro memory_limit no ficheiro ".get_cfg_var('cfg_file_path')." e reinicie o seu servidor web (ou entre em contacto com o administrador do sistema ou com a empresa de alojamento para obter ajuda).";
$locale['setup_0119c'] = "Contacte o administrador do sistema ou provedor de alojamento para obter ajuda sobre como aumentar o seu limite de memória PHP.";
// Buttons
$locale['setup_0120'] = "Finalizar configuração";
$locale['setup_0121'] = "Guardar e continuar";
$locale['setup_0122'] = "Tentar novamente";
$locale['setup_0124'] = "Ir para Opções de Recuperação";
$locale['setup_0125'] = "Desinstalação em curso. Por favor, aguarde...";
$locale['setup_0130'] = "Configurações do Xdebug";
$locale['setup_0131'] = "xdebug.max_nesting_level está definido para";
$locale['setup_0132'] = "Defina {%code%} em sua configuração PHP visto algumas páginas no seu site PHP-Fusion não funcionarão enquanto essa configuração estiver muito baixa.";
$locale['setup_0134'] = "Todos os ficheiros necessários passaram os requisitos de escrita do ficheiro.";
$locale['setup_0135'] = "Para que a configuração continue, os seguintes ficheiros e pastas devem ser graváveis. Por favor, chmod os ficheiros para 755 ou 777 para continuar";
$locale['setup_0136'] = "Não gravável (Falhou)";
$locale['setup_0137'] = "Gravável (Passou)";
$locale['setup_0138'] = "Ligação à Base de Dados estabelecida";
$locale['setup_0139'] = "Selecção da Coluna da Base de Dados Estabelecida";
$locale['setup_0140'] = "A Base de Dados está disponível e pronto para ser instalada";
$locale['setup_0141'] = "Permissões e Acesso à Base de Dados verificadas";
$locale['setup_0142'] = "ficheiro config.php criado";
$locale['setup_0143'] = "O Prefixo de tabela especificado já está a ser usado. O Instalador irá prosseguir e actualizar as diferenças conforme necessário";
$locale['setup_0144'] = "Diagnósticos da Base de Dados Terminados";
// Step 1
$locale['setup_1000'] = "Por favor escolha o seu Idioma";
$locale['setup_1001'] = "Descarregue mais idiomas no <a href='https://www.php-fusion.co.uk/php_fusion_9_downloads.php' target='_blank'><strong>Site de Suporte Oficial do PHP-Fusion</strong></a>";
$locale['setup_1002'] = "Bemvindo ao Modo de Recuperação do PHP-Fusion 9.";
$locale['setup_1003'] = "Nós detectamos que existe uma versão já instalada. Por favor escolha uma das seguintes opções para continuar.";
$locale['setup_1004'] = "Instalação Limpa";
$locale['setup_1005'] = "Você pode desinstalar e limpar a sua base de dados e iniciar uma nova instalação.";
$locale['setup_1006'] = "POR FAVOR FAÇA UMA CÓPIA DE SEGURANÇA DO FICHEIRO CONFIG.PHP. ELE SERÁ APAGADO DO SISTEMA DURANTE A DESINSTALAÇÃO.";
$locale['setup_1007'] = "Desinstalar e Iniciar Novamente";
$locale['setup_1008'] = "Instalador do Sistema Central";
$locale['setup_1009'] = "Alterar configurações do sistema central.";
$locale['setup_1010'] = "Ir para o Instalador do Sistema";
$locale['setup_1011'] = "Alterar Detalhes da Conta Primária";
$locale['setup_1012'] = "Alterar detalhes do Super Administrador de Sistema sem a necessidade de recuperar palavras-passe ou transferir a posse da conta de SA para outra pessoa.";
$locale['setup_1013'] = "Alterar Detalhes do Super Admin";
$locale['setup_1014'] = "Reconstruir .htaccess";
$locale['setup_1015'] = "Descartar o ficheiro actual e substituir por uma versão padrão do arquivo .htaccess";
$locale['setup_1017'] = "Cancelar e Sair deste Instalador";
$locale['setup_1018'] = "Você pode sair deste instalador agora clicando no botão abaixo. Isto irá renomear o seu ficheiro config_temp.php de volta para config.php.";
$locale['setup_1019'] = "Sair do Instalador";
$locale['setup_1020'] = "ficheiro .htaccess criado/actualizado";
// Step 2
$locale['setup_1090'] = "Ficheiros";
$locale['setup_1091'] = "Estado";
$locale['setup_1092'] = "Configurações e Driver da Base de Dados";
$locale['setup_1106'] = "Diagnósticos dos Requesitos de Estrutura do Servidor e de Ficheiros";
// Step 3 - Access criteria
$locale['setup_1200'] = "Defenições e Caminhos da Base de Dados";
$locale['setup_1201'] = "Por favor introduza os seus dados de acesso à Base de Dados MySQL.";
$locale['setup_1202'] = "Hostname da Base de Dados:";
$locale['setup_1202a'] = "Porta da Base de Dados:";
$locale['setup_1202b'] = "Deixar em branco se não usar uma porta diferente da por defeito";
$locale['setup_1203'] = "Nome de Utilizador da Base de Dados:";
$locale['setup_1204'] = "Palavra-passe da Base de Dados:";
$locale['setup_1205'] = "Nome da Base de Dados:";
$locale['setup_1206'] = "Prefixo da Tabela:";
$locale['setup_1207'] = "Prefixo do Cookie:";
$locale['setup_1208'] = "Driver da Base de Dados";
// Step 4 - Database Setup
$locale['setup_1210'] = "Erros na Instalação do PHP-Fusion. Por favor reinicie o instalador.";
$locale['setup_1211'] = "A nova instalação do PHP-Fusion terminou. Por favor prossiga para o próximo passo.";
$locale['setup_1212'] = "Configurações do Site e do Super Administrador";
$locale['setup_1213'] = "Detalhes de Informação do Site";
$locale['setup_1214'] = "Nome do Site";
$locale['setup_1215'] = "PHP-Fusion Powered Website";
$locale['setup_1216'] = "O PHP-Fusion é um Sistema de Administração de Conteúdos (CMS) open source escrito em PHP.";
$locale['setup_1217'] = "A sua conta foi actualizada. Por favor use os novos detalhes a partir de agora.";
$locale['setup_1220'] = "O nome da base de dados onde quer correr o PHP-Fusion";
$locale['setup_1221'] = "O seu nome de utilizador MySQL";
$locale['setup_1222'] = "...e a sua palavra-passe do MySQL";
$locale['setup_1223'] = "Torne isto muito único para proteger a sua base de dados";
$locale['setup_1224'] = "Prefixo de Identificação do Browser Cookie";
$locale['setup_1225'] = "p.e. localhost";
$locale['setup_1307'] = "Por favor certifique-se que o config.php tem permissão de escrita.";
$locale['setup_1310'] = "Não foi possível ligar à base de dados MySQL.";
$locale['setup_1311'] = "A base de dados MySQL especificada não existe.";
$locale['setup_1313'] = "O prefixo da tabela especificado já está em uso e está em execução. Nenhuma tabela será instalada. Por favor, inicie novamente ou prossiga para o próximo passo.";
$locale['setup_1315'] = "Por favor, certifique-se de que seu utilizador MySQL tem permissões de leitura, escrita e de exclusão para a base de dados seleccionada.";
$locale['setup_1317'] = "Por favor confirme que preencheu todos os campos da ligação MySQL.";
// Step 6 - Super Admin login
$locale['setup_1500'] = "Conta de Super Admin Primária";
$locale['setup_1501'] = "Configure os seus detalhes da conta de Super Administrador.";
$locale['setup_1504'] = "Nome de Utilizador:";
$locale['setup_1505'] = "Palavra-passe de Ínicio de Sessão:";
$locale['setup_1506'] = "Repita a Palavra Passe de início de sessão:";
$locale['setup_1507'] = "Palavra-passe de Admin:";
$locale['setup_1508'] = "Repita a palavra-passe de Admin:";
$locale['setup_1509'] = "Endereço de E-mail:";
$locale['setup_1510'] = "Endereço de E-mail do Site:";
$locale['setup_1511'] = "Seleccione a região do site:";
$locale['setup_1512'] = "Instalações de Idioma do Site:";
$locale['setup_1513'] = "Nome do Proprietário do Site";
// Progress Reports
$locale['setup_1600'] = "A instalar... ";
$locale['setup_1601'] = "A actualizar a estrutura da tabela em ";
$locale['setup_1602'] = "A adicionar nova coluna em ";
$locale['setup_1603'] = "A preencher dados ";
// Step 6 - User details validation
$locale['setup_5010'] = "O nome de utilizador contém caractéres inválidos.";
$locale['setup_5011'] = "O nome de utilizador não pode ser deixado em branco.";
$locale['setup_5012'] = "As suas duas palavras-passe de login não coincidem.";
$locale['setup_5013'] = "Palavra-passe de login inválida, por favor use apenas caractéres alfanuméricos.<br />A Palavra-passe de ter um mínimo de 8 caractéres.";
$locale['setup_5015'] = "As suas duas palavras-passe de admin não coincidem.";
$locale['setup_5016'] = "A sua palavra passe de utilizador e de administrador têm que ser diferentes.";
$locale['setup_5017'] = "Palavra-pass de administrador inválida, por favor use apenas caractéres alfanuméricos.<br />A palavra-passe deve ter no mínimo 8 caractéres.";
$locale['setup_5020'] = "O campo de e-mail não pode ser deixado em branco.";
// Step 6 - Admin Panels
$locale['setup_3000'] = "Administradores";
$locale['setup_3002'] = "Artigos";
$locale['setup_3003'] = "Banners";
$locale['setup_3004'] = "BB Codes";
$locale['setup_3005'] = "Lista Negra";
$locale['setup_3006'] = "Comentários";
$locale['setup_3007'] = "Páginas Personalizadas";
$locale['setup_3008'] = "Backup da Base de Dados";
$locale['setup_3010'] = "Downloads";
$locale['setup_3011'] = "FAQs";
$locale['setup_3012'] = "Fórums";
$locale['setup_3013'] = "Imagens";
$locale['setup_3014'] = "Infusões";
$locale['setup_3015'] = "Paineis de Infusão";
$locale['setup_3016'] = "Membros";
$locale['setup_3018'] = "Notícias";
$locale['setup_3019'] = "Paineis";
$locale['setup_3020'] = "Albuns da Galeria";
$locale['setup_3021'] = "Info PHP";
$locale['setup_3022'] = "Votações";
$locale['setup_3023'] = "Links do Site";
$locale['setup_3024'] = "Smileys";
$locale['setup_3026'] = "Actualizar";
$locale['setup_3027'] = "Grupos de Utilizadores";
$locale['setup_3029'] = "Links da Web";
$locale['setup_3030'] = "Geral";
$locale['setup_3031'] = "Hora e Data";
$locale['setup_3033'] = "Registo";
$locale['setup_3035'] = "Diversos";
$locale['setup_3036'] = "Mensagem Privada";
$locale['setup_3037'] = "Campos de Utilizador";
$locale['setup_3038'] = "Ranks do Fórum";
$locale['setup_3041'] = "Gestão de Utilizadores";
$locale['setup_3044'] = "Segurança";
$locale['setup_3047'] = "Redefenir Palavra-passe do Administrador";
$locale['setup_3048'] = "Relatório de Erros";
$locale['setup_3049'] = "Relatório de Utilizadores";
$locale['setup_3050'] = "robots.txt";
$locale['setup_3051'] = "Defenições de Idioma";
$locale['setup_3052'] = "Links Permanentes";
$locale['setup_3055'] = "Blog";
$locale['setup_3056'] = "Gestor de Temas";
$locale['setup_3057'] = "Ferramenta de Migração";
$locale['setup_3058'] = "Defenições de Temas";
$locale['setup_3059'] = "Gestor de Ficheiros Fusion";
// Multilanguage table rights
$locale['setup_3200'] = "Artigos";
$locale['setup_3201'] = "Páginas Personalizadas";
$locale['setup_3202'] = "Downloads";
$locale['setup_3203'] = "FAQs";
$locale['setup_3204'] = "Fórums";
$locale['setup_3205'] = "Notícias";
$locale['setup_3206'] = "Galeria";
$locale['setup_3207'] = "Votações";
$locale['setup_3208'] = "Modelos de E-Mail";
$locale['setup_3209'] = "Links da Web";
$locale['setup_3210'] = "Links do Site";
$locale['setup_3211'] = "Paineis";
$locale['setup_3212'] = "Ranks do Fórum";
$locale['setup_3213'] = "Blog";
// Step 6 - Navigation Links
$locale['setup_3300'] = "Início";
$locale['setup_3302'] = "Downloads";
$locale['setup_3303'] = "FAQ";
$locale['setup_3304'] = "Fórum de Discussão";
$locale['setup_3305'] = "Contacto";
$locale['setup_3307'] = "Links da Web";
$locale['setup_3308'] = "Galeria";
$locale['setup_3309'] = "Pesquisa";
$locale['setup_3310'] = "Submeter Link";
$locale['setup_3311'] = "Submeter Notícias";
$locale['setup_3312'] = "Submeter Artigo";
$locale['setup_3313'] = "Submeter Foto";
$locale['setup_3314'] = "Submeter Download";
$locale['setup_3315'] = "Submissões";
$locale['setup_3316'] = "Shoutbox";
$locale['setup_3317'] = "Submeter Blog";
$locale['setup_3318'] = "Painel do Arquivo do Blog";
$locale['setup_3319'] = "Últimas Discussões";
$locale['setup_3320'] = "Discussões em que participou";
$locale['setup_3321'] = "Tópicos Seguidos";
$locale['setup_3322'] = "Tópicos sem resposta";
$locale['setup_3323'] = "Perguntas sem resposta";
$locale['setup_3324'] = "Iniciar Novo Tópico";
$locale['setup_3325'] = "Últimos Artigos";
$locale['setup_3326'] = "Últimos Downloads";
$locale['setup_3327'] = "Submeter FAQ";
// Stage 6 - Panels
$locale['setup_3400'] = "Navegação";
$locale['setup_3401'] = "Utilizadores Online";
$locale['setup_3402'] = "Tópicos do Fórum";
$locale['setup_3404'] = "Mensagem de boas-vindas";
$locale['setup_3405'] = "Lista de Tópicos do Fórum";
$locale['setup_3406'] = "Informação do Utilizador";
$locale['setup_3407'] = "Votações de Membros";
$locale['setup_3408'] = "RSS";
// Stage 6 - News Categories
$locale['setup_3500'] = "Erros";
$locale['setup_3501'] = "Downloads";
$locale['setup_3502'] = "Jogos";
$locale['setup_3503'] = "Gráficos";
$locale['setup_3504'] = "Hardware";
$locale['setup_3505'] = "Diário";
$locale['setup_3506'] = "Membros";
$locale['setup_3507'] = "Mods";
$locale['setup_3508'] = "Filmes";
$locale['setup_3509'] = "Rede";
$locale['setup_3510'] = "Notícias";
$locale['setup_3511'] = "PHP-Fusion";
$locale['setup_3512'] = "Segurança";
$locale['setup_3513'] = "Software";
$locale['setup_3514'] = "Temas";
$locale['setup_3515'] = "Janelas";
// Stage 6 - Sample Forum Ranks
$locale['setup_3600'] = "Super Admin";
$locale['setup_3601'] = "Admin";
$locale['setup_3602'] = "Moderador";
$locale['setup_3603'] = "Novato";
$locale['setup_3604'] = "Membro Júnior";
$locale['setup_3605'] = "Membro";
$locale['setup_3606'] = "Membro Senior";
$locale['setup_3607'] = "Membro Veterano";
$locale['setup_3608'] = "Fusionista";
// Stage 6 - Sample Smileys
$locale['setup_3620'] = "Sorriso";
$locale['setup_3621'] = "Piscadela";
$locale['setup_3622'] = "Triste";
$locale['setup_3623'] = "Olhar sério";
$locale['setup_3624'] = "Choque";
$locale['setup_3625'] = "Pfft";
$locale['setup_3626'] = "Fixe";
$locale['setup_3627'] = "Sorriso Largo";
$locale['setup_3628'] = "Irritado";
$locale['setup_3629'] = "Gostar";
// Stage 6 - User Field Categories
$locale['setup_3640'] = "Perfil";
$locale['setup_3641'] = "Informações de Contacto";
$locale['setup_3642'] = "Informações Diversas";
$locale['setup_3643'] = "Opções";
$locale['setup_3644'] = "Estatísticas";
$locale['setup_3645'] = "Privacidade";
// Stage 6 - Forum Tags
$locale['setup_3660'] = "Informação do Site";
$locale['setup_3661'] = "Discussões sobre a administração deste site";

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
$locale['setup_3650'] = "Bem vindo ao seu Site";
// Final message
$locale['setup_1700'] = "A configuração está concluída";
$locale['setup_1701'] = "PHP-Fusion 9 já está pronto para ser usado. Clique em Concluir para reescrever o seu ficheiro config_temp.php para config.php<br/>";
$locale['setup_1702'] = "<strong>Nota: Após entrar no seu site, você deve apagar o ficheiro /install.php e chmod o ficheiro config.php de volta a 0644 por razões de segurança</strong>";
$locale['setup_1703'] = "Obrigado por escolher o PHP-Fusion.";
// Default time settings
// http://php.net/manual/en/function.strftime.php
$locale['setup_3700'] = "%d.%m.%y";
$locale['setup_3701'] = "%B %d %Y %H:%M:%S";
$locale['setup_3702'] = "%d-%m-%Y %H:%M";
$locale['setup_3703'] = "%B %d %Y";
$locale['setup_3704'] = "%B %d %Y %H:%M:%S";
// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['setup_3800'] = "Modelos de E-Mail";
$locale['setup_3801'] = "Notificação de nova MP";
$locale['setup_3802'] = "Você tem uma nova mensagem privada de [USER] por ler em [SITENAME]";
$locale['setup_3803'] = "Olá [RECEIVER],<br/>
Você recebeu uma nova mensagem privada [SUBJECT] de [USER] em [SITENAME]. Você pode ler a sua mensagem privada em [SITEURL]messages.php<br/>
Mensagem: [MESSAGE]<br/>
Você pode desactivar a notificação de e-mail através do painel de opções da página de Mensagem Privada, se não quiser mais ser notificado de novas mensagens.<br/>
Atenciosamente,<br/>
[SENDER].";
$locale['setup_3804'] = "Notificação de novos posts no fórum";
$locale['setup_3805'] = "Notificação de Resposta a Tópico - [SUBJECT]";
$locale['setup_3806'] = "Olá [RECEIVER],,<br/>
Alguém respondeu ao tópico do fórum \"[SUBJECT]\" que você está a seguir em [SITENAME]. Você pode usar o seguinte link para ver a resposta:<br/>
[THREAD_URL]<br/>
Se você não deseja mais acompanhar este tópico, você pode clicar no link \"Parar de acompanhar este tópico\" localizado no topo do tópico.<br/>
Atenciosamente,<br/>
[SENDER].";
$locale['setup_3807'] = "Formulário de Contacto";
$locale['setup_3808'] = "[SUBJECT]";
$locale['setup_3809'] = "[MESSAGE]";
// Official Supported System List
$locale['articles']['title'] = "Artigos";
$locale['articles']['description'] = "Um Sistema de Documentação Padrão.";
$locale['blog']['title'] = "Blog";
$locale['blog']['description'] = "Um Sistema Padrão de Blog.";
$locale['downloads']['title'] = "Downloads";
$locale['downloads']['description'] = "Um Sistema de Downloads Padrão.";
$locale['faqs']['title'] = "FAQs";
$locale['faqs']['description'] = "Um Sistema FAQ da Base de Conhecimento.";
$locale['forums']['title'] = "Fórum";
$locale['forums']['description'] = "Um Sistema de Fórum.";
$locale['news']['title'] = "Notícias";
$locale['news']['description'] = "Um Sistema de Publicação de Notícias.";
$locale['photos']['title'] = "Galeria";
$locale['photos']['description'] = "Um Sistema de Publicação da Galeria de Fotos.";
$locale['polls']['title'] = "Votações";
$locale['polls']['description'] = "Sistema de Votação de Usuários.";
$locale['weblinks']['title'] = "Links da Web";
$locale['weblinks']['description'] = "Um Sistema de Directório Web.";
$locale['install'] = "Instalar Núcleo";

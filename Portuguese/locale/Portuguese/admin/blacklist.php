<?php
$locale['BLS_000'] = "Lista Negra"; //406
//Blacklist message
$locale['BLS_010'] = "E-mail ou endereço IP inválido.";
$locale['BLS_011'] = "Adiciona um usuário à lista negra.";
$locale['BLS_012'] = "Utilizador modificado na Lista Negra.";
$locale['BLS_013'] = "Utilizador removido da Lista Negra"; //401
$locale['BLS_014'] = "Tem a certeza de que pretende eliminar esta entrada?";
$locale['BLS_015'] = "A lista negra está vazia."; //465
$locale['BLS_016'] = "O endereço de e-mail da lista negra não é um e-mail válido."; //405

$locale['BLS_020'] = "Colocar Utilizador na Lista Negra"; //420
$locale['BLS_021'] = "Editar utilizador na lista negra"; //421
$locale['BLS_022'] = "Adicionar utilizador à lista negra";
$locale['BLS_023'] = "Exibindo %d de %d entradas totais da lista negra.";

$locale['BLS_030'] = "Informações da lista negra"; //461
$locale['BLS_031'] = "Admin"; //467
$locale['BLS_032'] = "Data";  //468
$locale['BLS_033'] = "Opções"; //462
$locale['BLS_034'] = "Endereço IP da lista negra: [STRONG]ou[/STRONG]"; //441
$locale['BLS_035'] = "Adicionar endereço de e-mail à Lista Negra"; //442
$locale['BLS_036'] = "Motivo"; //443
$locale['BLS_037'] = "Colocar Utilizador na Lista Negra";  //444
$locale['BLS_038'] = "Actualizar";
$locale['BLS_039'] = "Seleccionar Tudo";

$locale['BLS_MS'] = "Introduzir um endereço IP irá impedir um utilizador cujo endereço IP coincida com o da entrada de visitar o site.
Pode introduzir um endereço de IP completo p.e. <em>123.45.67.89.</em>, ou um IP parcial p.e. <em>123.45.67</em> ou <em>123.45</em>.
Tome nota: Endereços IPv6 são convertidos para o seu formato completo,
p.e. <em>ABCD:1234:5:6:7:8:9:FF</em> irá ser mostrado como <em>ABCD:1234:0005:0006:0007:0008:0009:00FF</em>.
Endereços IP Mistos (aqueles que contenham uma parte IPv6 e IPv6) não irão ser verificados para resultados parciais.
<br /><br />
Introduzir um endereço de e-mail irá prevenir membros de se registarem usando esse endereço.
Pode introduzir um endereço de e-mail completo p.e. <em>foo@bar.com</em>, ou apenas um domínio, p.e. <em>bar.com</em>.<br /><br />

% - substitui qualquer conjunto de caractéres.<br /><br />

%.%.%.%@domain.tld bane qualquer endereço que contenha 3 pontos<br />
%+%@domain.tld bane qualquer endereço que contenha o símbolo de mais (+).<br />
%@domain.tld bane todos os endereços de domain.tld<br />
%.domain.tld bane todos os sub-dominios de domain.tld<br />
%payday% bane todos os endereços que contenham a palavra payday.<br />
domain.tld é um atalho de %@domain.tld de modo a torná-lo compatível com as regras introduzidas na versão 7<br />"; //440

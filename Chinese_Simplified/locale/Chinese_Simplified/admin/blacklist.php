<?php
$locale['BLS_000'] = "Blacklist"; //406
//Blacklist message
$locale['BLS_010'] = "无效的电子邮件或 IP 地址。";
$locale['BLS_011'] = "将用户添加到黑名单。";
$locale['BLS_012'] = "用户修改的黑名单。";
$locale['BLS_013'] = "用户已从黑名单中删除"; //401
$locale['BLS_014'] = "确实要删除此项吗？";
$locale['BLS_015'] = "黑名单没有任何记录。"; //465
$locale['BLS_016'] = "黑名单电子邮件地址无效。"; //405

$locale['BLS_020'] = "黑名单用户"; //420
$locale['BLS_021'] = "编辑黑名单"; //421
$locale['BLS_022'] = "添加黑名单用户";
$locale['BLS_023'] = "目前显示 %d %d 黑名单条目总数。";

$locale['BLS_030'] = "黑名单信息"; //461
$locale['BLS_031'] = "Admin"; //467
$locale['BLS_032'] = "Date";  //468
$locale['BLS_033'] = "Options"; //462
$locale['BLS_034'] = "黑名单IP地址: [STRONG]或[/STRONG]"; //441
$locale['BLS_035'] = "黑名单电子邮件地址"; //442
$locale['BLS_036'] = "添加黑名单的原因"; //443
$locale['BLS_037'] = "黑名单用户";  //444
$locale['BLS_038'] = "更新";
$locale['BLS_039'] = "全部选择";

$locale['BLS_MS'] = "Entering an IP address will prevent a user whose IP address matches the entry from visiting this site.
You can enter a full IP, e.g. <em>123.45.67.89.</em>, or a partial IP, e.g. <em>123.45.67</em> or <em>123.45</em>.
Please note: IPv6 addresses are converted to their full length form on this site,
e.g. <em>ABCD:1234:5:6:7:8:9:FF</em> will be shown as <em>ABCD:1234:0005:0006:0007:0008:0009:00FF</em>.
Mixed IP addresses (those contain both IPv6 and IPv4 part) will not be checked for partial match.
<br /><br />
Entering an email address will prevent members from registering using that address.
You can enter a full email address, e.g. <em>foo@bar.com</em>, or an email domain, e.g. <em>bar.com</em>.<br /><br />

% - matches any string.<br /><br />

%.%.%.%@domain.tld bans any address that contains at least 3 dots.<br />
%+%@domain.tld bans any address that contains at least one plus sign.<br />
%@domain.tld bans any address from domain.tld<br />
%.domain.tld bans all sub-domains of domain.tld<br />
%payday% bans any address that contains the word \"payday\" which was very often on sites.<br />
domain.tld is an alias of %@domain.tld to make it compatible with rules defined in v7.<br />"; //440

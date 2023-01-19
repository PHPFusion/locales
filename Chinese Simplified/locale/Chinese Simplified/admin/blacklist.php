<?php
$locale['BLS_000'] = "黑名单";
//Blacklist message
$locale['BLS_010'] = "无效的电子邮件或 IP 地址。";
$locale['BLS_011'] = "将用户添加到黑名单。";
$locale['BLS_012'] = "用户修改的黑名单。";
$locale['BLS_013'] = "用户已从黑名单中删除";
$locale['BLS_014'] = "确实要删除此项吗？";
$locale['BLS_015'] = "黑名单没有任何记录。";
$locale['BLS_016'] = "黑名单电子邮件地址无效。";

$locale['BLS_020'] = "黑名单用户";
$locale['BLS_021'] = "编辑黑名单";
$locale['BLS_022'] = "添加黑名单用户";
$locale['BLS_023'] = "目前显示 %d %d 黑名单条目总数。";

$locale['BLS_030'] = "黑名单信息";
$locale['BLS_031'] = "管理";
$locale['BLS_032'] = "日期";
$locale['BLS_033'] = "设置";
$locale['BLS_034'] = "黑名单IP地址: [STRONG]或[/STRONG]";
$locale['BLS_035'] = "黑名单电子邮件地址";
$locale['BLS_036'] = "添加黑名单的原因";
$locale['BLS_037'] = "黑名单用户";
$locale['BLS_038'] = "更新";
$locale['BLS_039'] = "全部选择";

$locale['BLS_MS'] = "输入IP地址将防止其IP地址匹配条目的用户访问此网站。
您可以输入完整的 IP，如 <em>23.45.67.89。</em>或者部分IP，e。 。 
23.45.67</em> 或 <em>123.45</em>。
请注意：IPv6地址被转换为本站点上的完整长度表单。
例如： <em>ABCD:1234:5:6:7:8:9:FF</em> 将显示为<em> ABCD:1234:0005:0006:00007:00008:00009:00FF</em>
混合IP地址(包含IPv6和IPv4部分)不会被检查为部分匹配。
<br /><br />
输入电子邮件地址将阻止成员使用该地址注册。
您可以输入完整的电子邮件地址，e。 。 <em>foo@bar.com</em>，或电子邮件域，例如 <em>bar.com</em>。<br /><br />

% - 匹配任何字符串<br /><br />

%.%.%.%@domain.tld禁止含有至少 3 点的任何地址。<br />
 %+%@domain.tld禁止任何含有至少一个加号的地址。<br />
%@domain.tld 禁止任何地址来自域名。tld<br />
%.domain.tld禁止所有子域名。 老<br />
%payday% 禁止任何含有“付费日”字样的地址，这种地址常常出现在网站上。<br />
domain.tld是一个别名为 %@domain.tld 来使它与v7中定义的规则兼容。<br />";

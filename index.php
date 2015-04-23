<?php
require_once('lib/template.class.php');
define('TEMPLATE_PATH','template');

$template = new template(TEMPLATE_PATH."/view/tes.tpl.html");

$template->assign('title','Judul');
$template->assign('content','Terserah Sayah we isina mah');

echo $template->show();
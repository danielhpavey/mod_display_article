<?php

include('helper.php');

$articleid = $params->get('articleid');
$length = $params->get('length');


$articleclass= new getArticle($articleid, $length);
$articlecontent = $articleclass->getContent();

require JModuleHelper::getLayoutPath('mod_display_article', $params->get('layout', 'default'));

?>

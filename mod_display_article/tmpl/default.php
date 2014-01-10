<?php
defined( '_JEXEC' ) or die;

echo '<div class = "moduletable' . $params->get('modclasssuffix') . '">';
echo strip_tags($articlecontent, '<p><a><ul><li>');
echo '</div>';


<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('zh-TW', array (
));

$catalogueZh = new MessageCatalogue('zh', array (
));
$catalogue->addFallbackCatalogue($catalogueZh);

return $catalogue;

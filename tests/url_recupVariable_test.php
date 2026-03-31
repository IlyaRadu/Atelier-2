<?php
chdir(__DIR__ . '/../src');
require __DIR__ . '/../src/Url.php';

// simuler les données d'entrée
$_GET['table'] = 'livre';
$_GET['champs'] = '{"id":"00001"}';

// créer l'objet
$url = Url::getInstance();

// test 1 : paramètre string
assert($url->recupVariable('table') === 'livre');

// test 2 : JSON → array
$champs = $url->recupVariable('champs', 'json');
assert(is_array($champs));
assert($champs['id'] === '00001');

echo "OK\n";

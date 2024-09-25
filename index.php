<?php

//création d'un instance de mon objet
$date = new DateTime();

//voir dans mon objet
var_dump($date);

//voir le timezone de mon objet
var_dump($date->getTimezone());

//modifier ma date et ajouter une autre
$date->modify('+1 day');
//revoir dans mon objet
var_dump($date);

//modifier la date et le format
$formatDate = $date->modify('+1 day')->format('d/m/Y');
echo '<pre>';
var_dump($formatDate);
echo '<pre>';
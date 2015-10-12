<?php

use Com\Iesebre\Dam2\paufores\Persons\Person;

require_once __DIR__ . '/vendor/autoload.php';

$person = new Person();

$person->type = "PEPITA";
$person->setGivenName("PEPITA PALOTES");

$person->render();

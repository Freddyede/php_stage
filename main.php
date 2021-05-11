<?php

require_once __DIR__.'/CLASSES/STATIC/staticClass.php';

$x = new staticClass('Franck');
var_dump($x::returnName());
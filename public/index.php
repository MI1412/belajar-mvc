<?php
// bootstrapping
require_once "../app/init.php";
$app = new App('imron');
echo $app->getNama();

<?php
$routeTemplate = '<?php declare(strict_types=1);
use AramHamo\Mvc\Controllers\\'.ucfirst($pageName).';

$routes["'.$path.'"] = new '.ucfirst($pageName).';';

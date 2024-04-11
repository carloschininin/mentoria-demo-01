<?php

declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

use Area\Shapes\Circle;
use Area\Shapes\Rectangle;
use Area\Shapes\Square;

echo Circle::area(4)."\n";
echo Rectangle::area(3, 6)."\n";
echo Square::area(4)."\n";
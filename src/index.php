<?php

declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

use Area\Shapes\Circle;
use Area\Shapes\Rectangle;
use Area\Shapes\Square;

echo Circle::area(5)."\n";
echo Rectangle::area(4, 6)."\n";
echo Square::area(6)."\n";
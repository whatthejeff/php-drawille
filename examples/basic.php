<?php

/*
 * This file is part of php-drawille
 *
 * (c) Jeff Welch <whatthejeff@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Drawille\Canvas;

$s = new Canvas();

for($x = 0; $x <= 1800; $x++) {
    $s->set($x/10, sin($x * M_PI / 180) * 10);
}

echo $s->frame(), "\n";
$s->clear();

for($x = 0; $x <= 1800; $x += 10) {
    $s->set($x/10, 10 + sin($x * M_PI / 180) * 10);
    $s->set($x/10, 10 + cos($x * M_PI / 180) * 10);
}

echo $s->frame(), "\n";
$s->clear();

for($x = 0; $x <= 3600; $x += 20) {
    $s->set($x/20, 4 + sin($x * M_PI / 180) * 4);
}

echo $s->frame(), "\n";
$s->clear();

for($x = 0; $x <= 360; $x += 4) {
    $s->set($x/4, 30 + sin($x * M_PI / 180) * 30);
}

for($x = 0; $x <= 30; $x++) {
    for($y = 0; $y <= 30; $y++) {
        $s->set($x, $y);
        $s->toggle($x+30, $y+30);
        $s->toggle($x+60, $y);
    }
}

echo $s->frame(), "\n";
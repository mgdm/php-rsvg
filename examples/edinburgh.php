<?php

$data = file_get_contents("edinburgh.svg");
$r = new Rsvg($data);
$s = new CairoImageSurface(CairoFormat::ARGB32, 1000, 1000);
$c = new CairoContext($s);
$r->render($c);
$s->writeToPng("edinburgh.png");

<?php

use Timber\Timber;

$context = Timber::context();

Timber::render('templates/front-page.twig', $context);

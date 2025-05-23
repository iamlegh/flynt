<?php

namespace Flynt\Utils;

class OptionsDeferred
{
    public static function addGlobal($name, $fields)
    {
        add_action('init', function () use ($name, $fields) {
            Options::addGlobal($name, $fields);
        });
    }

    public static function addTranslatable($name, $fields)
    {
        add_action('init', function () use ($name, $fields) {
            Options::addTranslatable($name, $fields);
        });
    }
}

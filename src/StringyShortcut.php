<?php

namespace CodexSoft\Shortcut\Stringy;

use Stringy\Stringy;

class StringyShortcut
{

    public static function register(): void
    {
        // do nothing but inits class loading with functions
    }

}

/**
 * Just a shortcut for stringy
 * usage:
 * use function CodexSoft\Shortcut\Stringy\str
 * (string) str('hello')->toUpperCase()
 *
 * Generally, package voku/stringy allows to use this:
 * use function Stringy\create as str;
 *
 * so, this package is not very useful for this moment
 *
 * @param $str
 * @param string $encoding
 *
 * @return Stringy
 */
function str($str, string $encoding = 'utf-8'): Stringy
{
    return new Stringy($str, $encoding);
}

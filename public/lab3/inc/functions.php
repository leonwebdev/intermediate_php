<?php

/**
 * Escape string for output to HTML
 *
 * @param string $str
 * @return string
 */
function esc(string $str): string
{
    return htmlentities($str, ENT_NOQUOTES, "UTF-8");
}
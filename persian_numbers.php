<?php
/**
 * Persian number convertor
 * This function will convert English numbers to Persian (Arabic) numbers
 * Usage: Persian_number(text to convert its number);
 * Return: String
 */
function persian_number($text)
{
    $english = array('0','1','2','3','4','5','6','7','8','9');
    $persian = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');

    $text = str_replace($english, $persian, $text);
    return $text;
}

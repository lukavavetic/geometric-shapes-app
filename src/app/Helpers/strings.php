<?php

if ( ! function_exists('cleanup'))
{
    /**
     * Cleanup string from extra empty spaces and html tags
     *
     * @param  string  $string
     * @return string
     */
    function cleanup($string)
    {
        return cleanupEmptySpaces(html_entity_decode(strip_tags($string)));
    }
}

if ( ! function_exists('cleanupEmptySpaces'))
{
    /**
     * Cleanup empty spaces and tags
     *
     * @param  string  $string
     * @return string
     */
    function cleanupEmptySpaces($string)
    {
        return trim(preg_replace('/\s+/S', ' ', $string));
    }
}
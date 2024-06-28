<?php

if (!function_exists('limitText')) {
    function limitText($text, $limit = 100, $end = '...')
    {
        // Remove all HTML tags from the text
        $strippedText = strip_tags($text);
        
        // Check if the length of the text is greater than the limit
        if (strlen($strippedText) > $limit) {
            // Cut the text to the limit and add "..." at the end
            return substr($strippedText, 0, $limit) . $end;
        }
        
        // Return the text if it's within the limit
        return $strippedText;
    }
}

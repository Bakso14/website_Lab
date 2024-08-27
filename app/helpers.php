<?php

use Illuminate\Support\Str;

if (!function_exists('getShortDescription')) {
    function getShortDescription($content, $limit = 50) {
        // Menghapus tag HTML
        $cleanContent = strip_tags($content);

        // Membatasi jumlah kata
        $words = explode(' ', $cleanContent);
        if (count($words) > $limit) {
            $shortContent = implode(' ', array_slice($words, 0, $limit)) . '...';
        } else {
            $shortContent = $cleanContent;
        }

        return $shortContent;
    }
}

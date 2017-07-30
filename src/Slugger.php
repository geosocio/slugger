<?php

namespace GeoSocio\Slugger;

/**
 * Slug Utility.
 */
class Slugger
{

    /**
     * Generates a slug from a string.
     *
     * @param string $text
     *
     * @return string
     */
    public function slug(string $text) : string
    {
        $slug = trim($text);
        $slug = mb_strtolower($slug);
        $slug = str_replace(' ', '-', $slug);
        $slug = str_replace(['.', '(', ')'], '', $slug);
        $slug = preg_replace('/-{2,}/u', '-', $slug);
        $slug = trim($slug, '-');

        return $slug;
    }
}

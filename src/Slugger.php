<?php

namespace GeoSocio\Slugger;

/**
 * Slug Utility.
 */
class Slugger implements SluggerInterface
{

    /**
     * {@inheritdoc}
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

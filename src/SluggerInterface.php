<?php

namespace GeoSocio\Slugger;

/**
 * Slug Utility.
 */
interface SluggerInterface
{

    /**
     * Generates a slug from a string.
     *
     * @param string $text
     *
     * @return string
     */
    public function slug(string $text) : string;
}

# Slugger [![Build Status](https://travis-ci.org/geosocio/slugger.svg?branch=develop)](https://travis-ci.org/geosocio/slugger) [![Coverage Status](https://coveralls.io/repos/github/geosocio/slugger/badge.svg)](https://coveralls.io/github/geosocio/slugger)
Create URL Slugs From UTF-8 Strings

## Rules
1. Trim Whitespace
2. Lowercase (if possible)
3. Replace (space) with `-` (dash)
4. Remove `.`, `(`, and `)`
5. Remove any duplicate `-` (dashes)
6. Trim any `-` (dashes) from the beginning or end

## Example
```php
$slugger = new \GeoSocio\Slugger\Slugger();
echo $slugger->slug('St. Petersburg');
// st-petersburg
```
See more examples in `tests/SluggerTest.php`

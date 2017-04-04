<?php
/**
 * Created by PhpStorm.
 * User: JahnHane
 * Date: 04.04.2017
 * Time: 20:10
 */

namespace App\Framework\Basic;


class Url {

    public function __construct() {

    }
    public static function fromString(string url):Url {
        $urlParts = parse_url(url);

        return new Url();
    }
}
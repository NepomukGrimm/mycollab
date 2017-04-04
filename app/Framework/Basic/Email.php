<?php
/**
 * Created by PhpStorm.
 * User: JahnHane
 * Date: 04.04.2017
 * Time: 20:13
 */

namespace App\Framework\Basic;


class Email {
    public function __construct() {

    }

    public static function fromString(string $email) : Email {

        return new Email();
    }
}
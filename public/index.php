<?php
/**
 * Created by PhpStorm.
 * User: JahnHane
 * Date: 04.04.2017
 * Time: 19:46
 */

use App\HttpApp;

require_once __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

$app = new HttpApp();
$app->run();

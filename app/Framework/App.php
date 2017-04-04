<?php
/**
 * Created by PhpStorm.
 * User: JahnHane
 * Date: 04.04.2017
 * Time: 19:48
 */

namespace App\Framework;


abstract class App {

    protected function _boot()
    {
        error_log(__FUNCTION__);
    }

    public function run()
    {
        $this->_boot();
        $this->_run();
    }

    protected function _run()
    {
        error_log(__FUNCTION__);
    }


}
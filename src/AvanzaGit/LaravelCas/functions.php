<?php

/***********************************
 * Author: Zach
 * Date: 4/11/16
 * Licence: MIT
 ***********************************/

if (!function_exists('cas')) {
    /**
     * Initiate CAS hook.
     *
     * @return \AvanzaGit\LaravelCas\CasManager
     */
    function cas()
    {
        return app('cas');
    }
}

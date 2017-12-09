<?php
/**
 * Created by PhpStorm.
 * User: fakhar
 * Date: 09/12/2017
 * Time: 12:59 PM
 */

if (! function_exists('clients')) {

    function clients()
    {
        return \App\Client::all();
    }
}

<?php

namespace App\DP\Strategy;

class DBSaver implements Saver
{
    public function save($input)
    {
        var_dump(__METHOD__ . " Saving $input to DB table");
    }
}

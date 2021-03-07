<?php

namespace App\DP\Strategy;

class LocalFileSaver implements Saver
{
    public function save($input)
    {
        var_dump(__METHOD__ . " Saving $input to local filesystem");
    }
}

<?php

namespace App\DP\Strategy;

class AmazonS3Saver implements Saver
{
    public function save($input)
    {
        var_dump(__METHOD__ . " Saving $input to amazon s3 (cloud) storage");
    }
}

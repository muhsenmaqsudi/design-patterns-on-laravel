<?php

namespace App\Http\Controllers\DP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StrategyController extends Controller
{
    public function index()
    {
        $user_submitted_data = "foo";
        $user_submitted_where_to_save_to = 'local';

        $savers = [
            'db' => \App\DP\Strategy\DBSaver::class,
            'local' => \App\DP\Strategy\LocalFileSaver::class,
            's3' => \App\DP\Strategy\AmazonS3Saver::class
        ];

        $saver_object = new $savers[$user_submitted_where_to_save_to];

        function save($data, \App\DP\Strategy\Saver $saver)
        {
            return $saver->save($data);
        }

        save($user_submitted_data, $saver_object);
    }
}

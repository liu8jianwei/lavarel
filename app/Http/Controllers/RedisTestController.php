<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


/**
 * redisTest
 */
class RedisTestController extends Controller
{

	public function index()
	{
		echo 23;
		exit;
		$redis = new Redis();
		$redis->connect('182.92.218.34');
	}
}

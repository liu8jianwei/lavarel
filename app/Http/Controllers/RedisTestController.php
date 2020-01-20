<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


/**
 * redisTest
 */
class RedisTestController extends Controller {
	
	public function index(){
		$redis = new Redis();
		$redis->connect('182.92.218.34');
	}

}
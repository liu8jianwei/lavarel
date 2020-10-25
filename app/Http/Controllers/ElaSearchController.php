<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Elasticsearch\ClientBuilder;

/**
 * elasticSearch 
 */
class ElaSearchController extends Controller
{

	public function index()
	{
		$hosts = [
			'http://182.92.218.34:9200/'
		];

		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$params = [
			'index' => 'first',
			'type' => 'text',
			'id' => '12',
			'body' => ['testField' => 'abc']
		];

		$response = $client->index($params);
		print_r($response);
	}
}

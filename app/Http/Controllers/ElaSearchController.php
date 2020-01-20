<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Elasticsearch\ClientBuilder;

/**
 * elasticSearch 
 */
class ElaSearchController extends Controller {
	
	public function index(){
		$hosts = [
			'localhost:8006'
		];
		echo 34;
		$client = ClientBuilder::create()->setHosts($hosts)->build();
		$params = [
			'index' => 'my_index',
			'type' => 'my_type',
			'id' => 'my_id',
			'body' => ['testField' => 'abc']
		];
		
		$response = $client->index($params);
		print_r($response);
	}

}
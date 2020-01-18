<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Elasticsearch\ClientBuilder;

/**
 * elasticSearch 
 */
class ElaSearchController extends Controller {
	
	public function index(){
		$client = ClientBuilder::create()->build();
		return 123;
	}

}
<?php

class Base_Controller extends Controller {

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

	public function __construct()
	{
		//Assets
		// Jquery
	    Asset::add('jquery', 'js/jquery-1.9.0.min.js');
	    Asset::add('jquery-ui', 'css/jquery-ui-1.10.0.custom.min.css');
	    // Twitter Bootstrap
	    Asset::add('bootstrap-js', 'js/bootstrap.min.js');
	    Asset::add('bootstrap-css', 'css/bootstrap.min.css');
	    Asset::add('bootstrap-css-responsive', 'css/bootstrap-responsive.min.css', 'bootstrap-css');
	    // Rating Plugin
	    Asset::add('jquery-rating-js', 'js/jquery.rating.pack.js');
	    Asset::add('jquer-rating-css', 'css/jquery.rating.css');
	    // Image Place Holder
	    Asset::add('holder', 'js/holder.js');
	    // Generic CSS
	    Asset::add('style', 'css/style.css');	    
	    parent::__construct();
	}

}
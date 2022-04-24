<?php
	use \Core\Route;
	
	return [
		new Route('/page/:id/', 'page', 'show'),
		new Route('/test/:n1/:n2/:n3/', 'test', 'act'),
		new Route('/user/:first/:n/', 'user', 'first'),
	];
	

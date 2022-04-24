<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class PageController extends Controller
	{
		public function act($params)
		{
			var_dump($params); // ['var1' => 'eee', 'var2' => 'bbb']
		}
	}
?>
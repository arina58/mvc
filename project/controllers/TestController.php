<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class TestController extends Controller
	{
        public function act($params)
		{
            $s = $params['n1'] * $params['n2'] * $params['n3'];
            echo $s;
		}
	}
?>
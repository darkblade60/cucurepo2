<?php




class Index_Controller extends Controller{
	
    public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$var1 = 6;
		$var2 = 3;
		
		$math = new Math_Model();
		
		$content_view = new View();
		$content_view->Assign("title", "Add");
		$content_view->Assign("body", $var1 . " Add " . $var2 . " is " . $math->Add($var1, $var2));
		$content_view->Render("index".DS."index");
		
		$content_view = new View();
		$content_view->Assign("title", "Subtract");
		$content_view->Assign("body", $var1 . " Subtract " . $var2 . " is " . $math->Sub($var1, $var2));
		$content_view->Render("index".DS."index");
		
		
	}

}
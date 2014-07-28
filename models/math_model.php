<?

class Math_Model extends Model {

    function __construct() {
		parent::__construct();
		var_dump("v2");
    }
	
    public function Add($var1, $var2) {
		return $var1 + $var2;
    }
	
    public function Sub($var1, $var2) {
		return $var1 - $var2;
    }

}
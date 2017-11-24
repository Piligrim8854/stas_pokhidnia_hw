namespace includes;

class StepByStepPlugin {
	
	private static $instance = null;
	private function __construct() {
	}

	public static function getinstance() {
		if ( null == self::$inspance ) {
			self::instance = new self;
		}
		return self::$instance;
	}

}
StepByStepPlugin::getInstance();

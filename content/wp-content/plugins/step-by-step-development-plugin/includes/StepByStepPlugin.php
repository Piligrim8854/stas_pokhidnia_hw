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

	static public function activation() {
		// debug.log
		error_log('plugin '.STEPBYSTEP_PLUGIN_NAME.' activation');
	}

	static public function deactivation() {
		// debug.log
		error_log('plugin '.STEPBYSTEP_PLUGIN_NAME.' deactivation');
	}

}
StepByStepPlugin::getInstance();

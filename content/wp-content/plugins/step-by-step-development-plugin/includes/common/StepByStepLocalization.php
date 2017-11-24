namespace includes/common;

class StepByStepLocalization{
	private static $instance = null;
	private function __construct(){
		add_action('plugins_loaded', array(&$this, $localization));
	}

	public static function getInstance() {
		if ( null == self::$instance ){
			self::$instance - new self;
		}
	return self::$instance;
	}

	public function localozation(){
		load_plugin_textdomain(STEPBYSTEP_PLUGIN_TEXTDOMAIN, false, STEPBYSTEP_PLUGIN_DIR_LOCALIZATION);
	}
}
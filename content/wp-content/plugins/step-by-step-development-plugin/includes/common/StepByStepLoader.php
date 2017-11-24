namespace includes\common;

use includes\examplStepByStepExampleAction;
use includes\examplStepByStepExampleFilter;


class StepByStepLoader
{
    private static $instance = null;

    private function __construct() {
        if ( is_admin() ){
            $this->admin();
        } else {
            $this->site();
        }
        $this->all();
}

public static function getInstance(){
    if ( null == self::$instance ){
        self::$instance = new self;
    }
    return self::$instance;
}

public function admin(){
    
}

public function site(){
    
}

public function all(){
    StepByStepLocalization::getInstance();
    //$stepByStepExampleAction = StepByStepExampleAction::newInstance();
    /*$stepByStepExampleFilter = StepByStepExampleFilter::newInstance();
    $stepByStepExampleFilter->callMyFilter("Roman");
    $stepByStepExampleFilter->callMyFilterAdditionalParameter("Roman", "Softgroup", "Poltava");
    $stepByStepExampleAction = StepByStepExampleAction::newInstance();
    $stepByStepExampleAction = callMyAction();
    $stepByStepExampleAction = callMyActionAdditionalParameter('test1', 'test2', 'test3' ); */
    }
}
namespace includes\example;
class StepByStepExampleFilter
{
    public function __construct() {
        //Прикрепляем функцию к фильтру
        add_filter('my_filter', array(&$this, 'myFiterFunction'));

    }
    
    public static function newInstance(){
        $instance = new self;
        return $instance;
    }

/**
 * Функция которую вызовет фильтр
 * @param $str
 * @return string
 */
    
    public function myFiterFunction( $str ){
        $str = "Hello {$str}";
        return $str;
    }

/**
 * @param $name
 */
 
    public function callMyFilter( $name ){
        $name = apply_filters('my_filter', $name);
        //Выводим результат в debug.log
        error_log($name);
    }